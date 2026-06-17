<?php

namespace Entpay\Mse\Client\Utils;

class EntpaySign
{
    public static function sign($merchPrivateKey, $method, $path, $body, $nonce, $timestamp)
    {
        $message = $method . "\n" . $path . "\n" . $timestamp . "\n" . $nonce . "\n" . $body . "\n";

        openssl_sign($message, $rawSign, $merchPrivateKey, 'sha256WithRSAEncryption');

        return $rawSign;
    }

    public static function getAuthorizationValue(
        $platformId,
        $svrPlatformId,
        $privateCertSerialNo,
        $nonce,
        $timestamp,
        $sign
    )
    {
        $authorization = sprintf(
            'platform_id="%s",nonce="%s",timestamp="%d",' .
            'platform_serial_number="%s",signature="%s",signature_algorithm="SHA256withRSA"',
            $platformId,
            $nonce,
            $timestamp,
            $privateCertSerialNo,
            $sign
        );
        if ($svrPlatformId) {
            $authorization = sprintf('svr_platform_id="%s",', $svrPlatformId) . $authorization;
        }

        return $authorization;
    }

    public static function getEnterpriseAuthorizationValue($entId, $enterpriseSerialNumber, $merchPrivateKey, $signature)
    {
        openssl_sign($signature, $rawSign, $merchPrivateKey, 'sha256WithRSAEncryption');
        $authorizaiton = sprintf(
            'ent_id="%s",enterprise_serial_number="%s",signature="%s",signature_algorithm="SHA256withRSA"',
            $entId,
            $enterpriseSerialNumber,
            base64_encode($rawSign)
        );

        return $authorizaiton;
    }

    public static function validateSignature($publicKey, $body, $nonce, $timestamp, $signature)
    {
        $source = $timestamp . "\n" . $nonce . "\n" . $body . "\n";

        return openssl_verify($source, base64_decode($signature), $publicKey, OPENSSL_ALGO_SHA256);
    }
}
