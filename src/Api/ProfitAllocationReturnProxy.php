<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\ProfitAllocationReturn;
use Entpay\Mse\Client\Model\ProfitAllocationReturnParam;

/**
 * 分账回退（Profit Allocation Return）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\ProfitAllocationReturn
 *
 * @method mixed create(array|\Entpay\Mse\Client\Model\ProfitAllocationReturnParam $param) 发起分账回退
 * @method mixed retrieve(string $allocationDetailReturnId) 查询分账回退
 * @method mixed retrieveByOutAllocationDetailReturnId(string $outAllocationDetailReturnId) 按平台单号查询
 */
class ProfitAllocationReturnProxy extends AbstractApiProxy
{
    protected $sdkClass = ProfitAllocationReturn::class;

    protected $paramMap = [
        'create' => ProfitAllocationReturnParam::class,
    ];
}
