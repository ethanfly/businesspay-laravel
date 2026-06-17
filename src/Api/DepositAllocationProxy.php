<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\DepositAllocation;
use Entpay\Mse\Client\Model\DepositAllocationFinishParam;
use Entpay\Mse\Client\Model\DepositAllocationParam;

/**
 * 充值分账（Deposit Allocation）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\DepositAllocation
 *
 * @method mixed create(array|\Entpay\Mse\Client\Model\DepositAllocationParam $param) 发起充值分账
 * @method mixed finish(array|\Entpay\Mse\Client\Model\DepositAllocationFinishParam $param) 完成充值分账
 * @method mixed retrieve(string $allocationId) 查询充值分账
 * @method mixed retrieveBalance(string $depositId) 查询充值分账余额
 * @method mixed retrieveByOutAllocationId(string $outAllocationId) 按平台分账单号查询
 */
class DepositAllocationProxy extends AbstractApiProxy
{
    protected $sdkClass = DepositAllocation::class;

    protected $paramMap = [
        'create' => DepositAllocationParam::class,
        'finish' => DepositAllocationFinishParam::class,
    ];
}
