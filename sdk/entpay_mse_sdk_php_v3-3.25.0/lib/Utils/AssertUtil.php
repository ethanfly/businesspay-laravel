<?php

namespace Entpay\Mse\Client\Utils;

use Entpay\Mse\Client\ApiException;

class AssertUtil
{
    /**
     * 校验参数是否isset，如果没有初始化，则抛出异常，否则返回原始参数.
     * @param $var mixed 被校验参数
     * @param $msg string 校验失败提醒
     * @return mixed 校验成功返回被校验参数
     * @throws ApiException 校验失败抛出异常
     */
    public static function assertIsset($var, $msg)
    {
        if (!isset($var)) {
            throw new ApiException($msg, -1);
        }

        return $var;
    }

    /**
     * 校验参数是否isset，如果没有初始化，则抛出异常，否则返回原始参数.
     * @param $arr array 被校验参数数组
     * @param $key mixed 被校验参数key
     * @param $msg string 校验失败提醒
     * @return mixed 校验成功返回被校验参数
     * @throws ApiException 校验失败抛出异常
     */
    public static function assertKeyIsset($key, $arr, $msg)
    {
        if (array_key_exists($key, $arr) && isset($arr[$key])) {
            return $arr[$key];
        }

        throw new ApiException($msg, -1);
    }
}
