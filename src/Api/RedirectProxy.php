<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\Redirect;
use Entpay\Mse\Client\Model\RechargeRedirectParam;
use Entpay\Mse\Client\Model\RedirectParam;

/**
 * 跳转支付/充值跳转（Redirect）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\Redirect
 *
 * @method mixed create(array|\Entpay\Mse\Client\Model\RedirectParam $param) 创建跳转支付
 * @method mixed createRechargeRedirect(array|\Entpay\Mse\Client\Model\RechargeRedirectParam $param) 创建充值跳转
 */
class RedirectProxy extends AbstractApiProxy
{
    protected $sdkClass = Redirect::class;

    protected $paramMap = [
        'create' => RedirectParam::class,
        'createRechargeRedirect' => RechargeRedirectParam::class,
    ];
}
