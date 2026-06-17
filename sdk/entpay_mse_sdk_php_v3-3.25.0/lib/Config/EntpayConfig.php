<?php

namespace Entpay\Mse\Client\Config;

use Entpay\Mse\Client\ApiException;

class EntpayConfig
{
    /**
     * API 基础地址
     */
    private static $env;

    /**
     * API基础地址 env=CUSTOM时生效.
     */
    private static $baseUrl;

    /**
     * 商企付公钥序列号(平台).
     */
    private static $tbepSerialNumber;

    /**
     * 商企付公钥(平台).
     */
    private static $tbepPublicKey;

    /**
     * 平台帐号.
     */
    private static $platformId;

    /**
     * 平台私钥.
     */
    private static $platformPrivateKey;

    /**
     * 平台私钥证书序列号.
     */
    private static $platformPrivateCertSerialNo;

    /**
     * 商企付公钥序列号(平台).
     */
    private static $svrTbepSerialNumber;

    /**
     * 商企付公钥(平台).
     */
    private static $svrTbepPublicKey;

    /**
     * 服务商模式下的的服务商平台帐号.
     */
    private static $svrPlatformId;

    /**
     * 服务商模式下的的服务商平台私钥.
     */
    private static $svrPrivateKey;

    /**
     * 服务商模式下的的服务商私钥证书序列号.
     */
    private static $svrPrivateCertSerialNo;

    private static $timeout = 20;

    /**
     * @return mixed
     */
    public static function getEnv()
    {
        return self::$env;
    }

    /**
     * @param mixed $env
     */
    public static function setEnv($env)
    {
        self::$env = $env;
    }

    /**
     * @return mixed
     */
    public static function getBaseUrl()
    {
        return self::$baseUrl;
    }

    /**
     * @param mixed $baseUrl
     */
    public static function setBaseUrl($baseUrl)
    {
        self::$baseUrl = $baseUrl;
    }

    /**
     * @return mixed
     */
    public static function getTbepSerialNumber()
    {
        return self::$tbepSerialNumber;
    }

    /**
     * @return mixed
     */
    public static function getSvrPlatformId()
    {
        return self::$svrPlatformId;
    }

    /**
     * @return int
     */
    public static function getTimeout()
    {
        return self::$timeout;
    }

    /**
     * @param int $timeout
     */
    public function setTimeout($timeout)
    {
        self::$timeout = $timeout;
    }

    public static function getRealPlatformId($request_options)
    {
        if (null != $request_options && !$request_options->isEntCertAuth()) {
            if (empty($request_options->getPlatformId()) && empty($request_options->getSvrPlatformId())) {
                throw new ApiException('平台ID设置错误', -1);
            }

            return !empty($request_options->getPlatformId()) ? $request_options->getPlatformId() : $request_options->getSvrPlatformId();
        }

        return !empty(self::$svrPlatformId) ? self::$svrPlatformId : self::$platformId;
    }

    public static function getRealPrivateKey($request_options)
    {
        if (null != $request_options && !empty($request_options->getPlatformPrivateKey())) {
            return $request_options->getPlatformPrivateKey();
        }

        return !empty(self::$svrPrivateKey) ? self::$svrPrivateKey : self::$platformPrivateKey;
    }

    public static function getRealPrivateCertSerialNo($request_options)
    {
        if (null != $request_options && !empty($request_options->getPlatformPrivateCertSerialNo())) {
            return $request_options->getPlatformPrivateCertSerialNo();
        }

        return !empty(self::$svrPrivateCertSerialNo) ? self::$svrPrivateCertSerialNo : self::$platformPrivateCertSerialNo;
    }

    public static function getRealTbepSerialNumber($request_options)
    {
        if (null != $request_options && !empty($request_options->getTbepSerialNumber())) {
            return $request_options->getTbepSerialNumber();
        }

        return !empty(self::$svrTbepSerialNumber) ? self::$svrTbepSerialNumber : self::$tbepSerialNumber;
    }

    public static function getRealTbepPublicKey($request_options)
    {
        if (null != $request_options && !empty($request_options->getTbepPublicKey())) {
            return $request_options->getTbepPublicKey();
        }

        return !empty(self::$svrTbepPublicKey) ? self::$svrTbepPublicKey : self::$tbepPublicKey;
    }

    public static function setNormalMode(
        $platformId,
        $platformPrivateKey,
        $platformPrivateCertSerialNo,
        $tbepSerialNumber,
        $tbepPublicKey
    )
    {
        if (empty($platformId) || empty($platformPrivateKey) || empty($platformPrivateCertSerialNo)
            || empty($tbepSerialNumber) || empty($tbepPublicKey)) {
            throw new ApiException('普通模式参数缺失', -1);
        }
        if (strpos($tbepPublicKey, 'BEGIN RSA PUBLIC KEY')) {
            self::$tbepPublicKey = self::convertPKCS1toPKCS8($tbepPublicKey);
        } else {
            self::$tbepPublicKey = $tbepPublicKey;
        }
        self::$platformId                  = $platformId;
        self::$platformPrivateKey          = $platformPrivateKey;
        self::$platformPrivateCertSerialNo = $platformPrivateCertSerialNo;
        self::$tbepSerialNumber            = $tbepSerialNumber;
    }

    public static function setSvrMode(
        $svrPlatformId,
        $svrPrivateKey,
        $svrPrivateCertSerialNo,
        $svrTbepSerialNumber,
        $svrTbepPublicKey
    )
    {
        if (empty($svrPlatformId) || empty($svrPrivateKey) || empty($svrPrivateCertSerialNo)
            || empty($svrTbepSerialNumber) || empty($svrTbepPublicKey)) {
            throw new ApiException('普通模式参数缺失', -1);
        }
        if (strpos($svrTbepPublicKey, 'BEGIN RSA PUBLIC KEY')) {
            self::$svrTbepPublicKey = self::convertPKCS1toPKCS8($svrTbepPublicKey);
        } else {
            self::$svrTbepPublicKey = $svrTbepPublicKey;
        }
        self::$svrPlatformId          = $svrPlatformId;
        self::$svrPrivateKey          = $svrPrivateKey;
        self::$svrPrivateCertSerialNo = $svrPrivateCertSerialNo;
        self::$svrTbepSerialNumber    = $svrTbepSerialNumber;
    }

    private static function convertPKCS1toPKCS8($pkcs1)
    {
        $start_key = $pkcs1;
        $start_key = str_replace('-----BEGIN RSA PUBLIC KEY-----', '', $start_key);
        $start_key = trim(str_replace('-----END RSA PUBLIC KEY-----', '', $start_key));
        $key       = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8A' . str_replace("\n", '', $start_key);

        return "-----BEGIN PUBLIC KEY-----\n" . wordwrap($key, 64, "\n", true) . "\n-----END PUBLIC KEY-----";
    }
}
