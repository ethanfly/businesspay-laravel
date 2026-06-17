<?php

namespace Entpay\Mse\Client\Utils;

use Entpay\Mse\Client\Config\EntpayConfig;

class EncryptFormat
{
    private $encrypt;

    private $key;

    private $iv;

    public static function newInstance()
    {
        return new EncryptFormat();
    }

    public function isEncrypt()
    {
        return $this->encrypt;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return mixed
     */
    public function getIv()
    {
        return $this->iv;
    }

    public function randomKeyIv()
    {
        if (!$this->encrypt) {
            $this->key     = StringUtil::randString(16);
            $this->iv      = StringUtil::randString(16);
            $this->encrypt = true;
        }
    }

    public function toEncryptHeader($request_options)
    {
        if ($this->encrypt) {
            return ['TBEP-Encrypt' => 'enc_key="' .
                EntpayCrypto::rsaEncryptOAEP($this->key, EntpayConfig::getRealTbepPublicKey($request_options))
                . '",iv="' . base64_encode($this->iv)
                . '",tbep_serial_number="' . EntpayConfig::getRealTbepSerialNumber($request_options)
                . '",algorithm="RSA_OAEP_with_SM4_128_CBC"',
            ];
        }

        return [];
    }
}
