<?php

namespace Entpay\Mse\Client\Utils;

class DecryptFormat
{
    private $key;

    private $iv;

    public function __construct($key, $iv)
    {
        $this->key = $key;
        $this->iv  = $iv;
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
}
