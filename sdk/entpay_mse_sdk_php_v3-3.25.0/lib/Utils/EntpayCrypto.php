<?php

namespace Entpay\Mse\Client\Utils;

class EntpayCrypto
{
    public static function rsaEncryptOAEP($param, $public_key)
    {
        $encrypted = '';
        $str       = strval($param);
        if (openssl_public_encrypt($str, $encrypted, $public_key, OPENSSL_PKCS1_OAEP_PADDING)) {
            //base64编码
            $sign = base64_encode($encrypted);
        } else {
            throw new \Exception('encrypt failed');
        }

        return $sign;
    }

    public static function rsaDecryptOAEP($str, $private_key)
    {
        //base64解码
        $str       = base64_decode($str);
        $decrypted = '';
        if (openssl_private_decrypt($str, $decrypted, $private_key, OPENSSL_PKCS1_OAEP_PADDING)) {
            return $decrypted;
        }

        throw new \Exception('encrypt failed');
    }
}
