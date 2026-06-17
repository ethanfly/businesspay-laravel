<?php

namespace Entpay\Mse\Client\Utils;

class StringUtil
{
    /**
     * 生成随机字符串.
     *
     * @param int    $length       字符串长度
     * @param string $specialChars 是否有特殊字符
     * @return string
     */
    public static function randString($length, $specialChars = false)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        if ($specialChars) {
            $chars .= '!@#$%^&*()';
        }

        $result = '';
        $max    = strlen($chars) - 1;
        for ($i = 0; $i < $length; ++$i) {
            $result .= $chars[rand(0, $max)];
        }

        return $result;
    }

    /**
     * 数组url编码
     *
     * @param $arr array
     * @return array
     */
    public static function encodeArray($arr)
    {
        $num = count($arr);
        $tmp = [];
        for ($i = 0; $i < $num; ++$i) {
            $tmp[$i] = urlencode($arr[$i]);
        }

        return $tmp;
    }
}
