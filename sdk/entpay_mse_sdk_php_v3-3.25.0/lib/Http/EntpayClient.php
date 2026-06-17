<?php

namespace Entpay\Mse\Client\Http;

use Entpay\Mse\Client\ApiException;
use Entpay\Mse\Client\Config\EntpayConfig;
use Entpay\Mse\Client\Config\EnvironmentConstant;
use Entpay\Mse\Client\Model\FileDownloadResponse;
use Entpay\Mse\Client\ObjectSerializer;
use Entpay\Mse\Client\Utils\AssertUtil;
use Entpay\Mse\Client\Utils\DecryptFormat;
use Entpay\Mse\Client\Utils\EncryptFormat;
use Entpay\Mse\Client\Utils\EntpayCrypto;
use Entpay\Mse\Client\Utils\EntpaySign;
use Entpay\Mse\Client\Utils\Sm4;
use Entpay\Mse\Client\Utils\StringUtil;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Stream;

class EntpayClient
{
    private $userAgent;

    /**
     * @var EntpayClient
     */
    private static $defaultClient;

    /**
     * @return EntpayClient
     */
    public static function getDefaultClient()
    {
        if (!isset(self::$defaultClient)) {
            self::$defaultClient = new EntpayClient();
        }

        return self::$defaultClient;
    }

    /**
     * EntpayClient constructor.
     * @param EntpayConfig|$config
     */
    public function __construct()
    {
        $this->userAgent = sprintf(
            'entpay-php-sdk-3.25.0.%s.%s-%s-%s',
            phpversion(),
            php_uname('s'),
            php_uname('r'),
            php_uname('m')
        );
    }

    public function doRequest($method, $path, $param = null, $class = null, $request_options = null, $file = null, $custom_headers = null)
    {
        $url = '';
        if (EnvironmentConstant::CUSTOM == EntpayConfig::getEnv()) {
            if (empty(EntpayConfig::getBaseUrl())) {
                throw new ApiException('请求地址未设置，请检查初始化配置', -1);
            }
            $url = EntpayConfig::getBaseUrl();
        } else {
            $url = EntpayConfig::getEnv();
        }
        $url .= $path;
        $client  = new Client(['timeout' => EntpayConfig::getTimeout()]);
        $options = [];
        $headers = ['User-Agent' => $this->userAgent];
        $body    = '';
        if (('POST' == $method || 'PUT' == $method || 'PATCH' == $method) && !isset($file)) {
            $headers['Content-Type'] = 'application/json';
        }
        if ($param) {
            $encrypt = EncryptFormat::newInstance();
            $body    = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($param, $encrypt));
            $headers = array_merge($headers, $encrypt->toEncryptHeader($request_options));
            if (isset($file)) {
                $options['multipart'] = [
                    [
                        'name'     => 'meta',
                        'contents' => $body,
                        'headers'  => ['Content-Type'  => 'application/json; charset=UTF-8'],
                    ], [
                        'name'     => 'file',
                        'contents' => fopen($file, 'r'),
                    ],
                ];
            } else {
                $options['body'] = $body;
            }
        }
        $nonce     = StringUtil::randString(32);
        $timestamp = time();
        $sign      = EntpaySign::sign(EntpayConfig::getRealPrivateKey($request_options), $method, $path, $body, $nonce, $timestamp);
        $auth      = EntpaySign::getAuthorizationValue(
            EntpayConfig::getRealPlatformId($request_options),
            EntpayConfig::getSvrPlatformId(),
            EntpayConfig::getRealPrivateCertSerialNo($request_options),
            $nonce,
            $timestamp,
            base64_encode($sign)
        );
        $headers['Authorization'] = $auth;
        if (null != $request_options && $request_options->isEntCertAuth()) {
            $enterpriseAuthorization = EntpaySign::getEnterpriseAuthorizationValue(
                $request_options->getEntId(),
                $request_options->getEnterpriseSerialNumber(),
                $request_options->getEntPrivateKey(),
                $sign
            );
            $headers['Enterprise-Authorization'] = $enterpriseAuthorization;
        }
        if ($custom_headers) {
            $headers = array_merge($headers, $custom_headers);
        }
        $options['headers'] = $headers;

        if ('GET' == $method && isset($file)) {
            $isFileDownload    = true;
            $options['stream'] = true;
        }

        try {
            $res = $client->request($method, $url, $options);
        } catch (BadResponseException $e) {
            $contents     = $e->getResponse()->getBody()->getContents();
            $apiException = ObjectSerializer::deserialize($contents, ApiException::class, null);

            throw new ApiException($contents, $e->getCode(), $apiException->getError(), $apiException->getUri(), $apiException->getUriPattern(), $apiException->getTraceId());
        }
        $fileStream = null;
        if (isset($isFileDownload)) {
            $fileStream = $res->getBody()->getContents();
            $respBody   = '';
        } else {
            $respBody = $res->getBody()->getContents();
        }
        $respAuth    = $res->getHeader('TBEP-Authorization');
        $encryptAuth = $res->getHeader('TBEP-Encrypt');
        if (empty($respAuth)) {
            throw new ApiException('签名Header不全，请检查接口返回信息body=%s', $respBody);
        }
        $this->checkRspAuth($respAuth[0], $respBody, EntpayConfig::getRealTbepPublicKey($request_options));
        $decryptFormat = null;
        if (!empty($encryptAuth)) {
            $decryptFormat = $this->checkEncryptAuth($encryptAuth[0], $request_options);
            if (isset($isFileDownload)) {
                $sm4          = new Sm4($decryptFormat->getKey());
                $plainContent = $sm4->deDataCbc($res->getBody()->getContents(), $decryptFormat->getIv());
                $stream       = fopen('php://memory', 'r+');
                fwrite($stream, $plainContent);
                rewind($stream);

                return new FileDownloadResponse(new Stream($stream), $this->getDispositionFileName($res));
            }
        }
        if (isset($isFileDownload)) {
            return new FileDownloadResponse($fileStream, $this->getDispositionFileName($res));
        }

        return isset($class) && !empty($respBody) ? ObjectSerializer::deserialize($respBody, $class, $decryptFormat) : $respBody;
    }

    private function getDispositionFileName($res)
    {
        $headerValues = $res->getHeader('Content-Disposition');
        AssertUtil::assertIsset($headerValues, '文件下载返回头无Content-Disposition，请确认API返回是否正确');

        return preg_replace('/^.*filename="([^"]+)".*$/i', '$1', $headerValues[0], 1);
    }

    public function checkRspAuth($auth, $body, $publicKey)
    {
        $sps     = preg_split('/,\s*/', $auth);
        $signMap = [];
        foreach ($sps as $val) {
            $exp = explode('=', $val, 2);
            if (2 == count($exp)) {
                $signMap[$exp[0]] = trim($exp[1], '"');
            }
        }
        if (!$body) {
            $body = '';
        }
        $nonce     = AssertUtil::assertKeyIsset('nonce', $signMap, '返回头不含nonce，验签失败');
        $timestamp = AssertUtil::assertKeyIsset('timestamp', $signMap, '返回头不含timestamp，验签失败');
        $signature = AssertUtil::assertKeyIsset('signature', $signMap, '返回头不含signature，验签失败');
        $check     = EntpaySign::validateSignature(
            $publicKey,
            $body,
            $nonce,
            $timestamp,
            $signature
        );
        if (!$check) {
            throw new ApiException('返回验签失败，请检查商企付公钥配置是否正确', -2);
        }
    }

    public function checkEncryptAuth($encryptAuth, $request_options)
    {
        $sps     = preg_split('/,\s*/', $encryptAuth);
        $signMap = [];
        foreach ($sps as $val) {
            $exp = explode('=', $val, 2);
            if (2 == count($exp)) {
                $signMap[$exp[0]] = trim($exp[1], '"');
            }
        }

        $privateKey = array_key_exists('ent_id', $signMap) ? $request_options->getEntPrivateKey() : EntpayConfig::getRealPrivateKey($request_options);
        $sm4key     = EntpayCrypto::rsaDecryptOAEP($signMap['enc_key'], $privateKey);

        return new DecryptFormat($sm4key, base64_decode($signMap['iv']));
    }
}
