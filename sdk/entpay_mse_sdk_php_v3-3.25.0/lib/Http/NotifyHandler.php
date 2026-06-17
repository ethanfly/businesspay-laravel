<?php

namespace Entpay\Mse\Client\Http;

use Entpay\Mse\Client\ObjectSerializer;
use Entpay\Mse\Client\Utils\JsonUtil;

class NotifyHandler
{
    public static function handlerWebhook($body, $authorization, $class, $publicKey)
    {
        $sortedBody = JsonUtil::sortJson($body);

        // 判断是否存在换行符
        $lastChar = substr($body, -1);
        $bool     =  "\n" === $lastChar;
        if ($bool) {
            $sortedBody = $sortedBody . "\n";
        }

        EntpayClient::getDefaultClient()->checkRspAuth($authorization, $sortedBody, $publicKey);

        return ObjectSerializer::deserialize($sortedBody, $class, null);
    }
}
