<?php

namespace Entpay\Mse\Client\Utils;

class JsonUtil
{
    public static function sortJson($body)
    {
        // 1. 将jsonString转为关联数组
        $decoded = json_decode($body, true);

        // 2. 对数组排序
        self::sortRecursive($decoded);

        return json_encode($decoded, JSON_UNESCAPED_UNICODE);
    }

    public static function sortRecursive(&$array)
    {
        // 1. 排序数组
        ksort($array);
        // 2. 循环数组
        foreach ($array as &$value) {
            // 3. 如果value为数组，对value进行递归排序处理
            if (is_array($value)) {
                self::sortRecursive($value);
            }
        }
    }
}
