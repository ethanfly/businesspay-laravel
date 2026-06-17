<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\ProductApplication;
use Entpay\Mse\Client\Model\ProductApplicationParam;

/**
 * 产品申请（Product Application）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\ProductApplication
 *
 * @method mixed create(array|\Entpay\Mse\Client\Model\ProductApplicationParam $param) 创建产品申请
 * @method mixed createLink(string $requestNo) 获取产品申请链接
 * @method mixed retrieve(string $requestNo) 查询产品申请
 * @method mixed retrieveByOutRequestNo(string $outRequestNo) 按平台请求单号查询产品申请
 */
class ProductApplicationProxy extends AbstractApiProxy
{
    protected $sdkClass = ProductApplication::class;

    protected $paramMap = [
        'create' => ProductApplicationParam::class,
    ];
}
