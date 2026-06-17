<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\MseFund;
use Entpay\Mse\Client\Model\RetrieveMseFundBalanceGetParam;

/**
 * 微企付资金账户余额（MSE Fund）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\MseFund
 *
 * @method mixed retrieveMseFundBalance(array|\Entpay\Mse\Client\Model\RetrieveMseFundBalanceGetParam|null $param = null) 查询微企付资金账户余额
 */
class MseFundProxy extends AbstractApiProxy
{
    protected $sdkClass = MseFund::class;

    protected $paramMap = [
        'retrieveMseFundBalance' => RetrieveMseFundBalanceGetParam::class,
    ];
}
