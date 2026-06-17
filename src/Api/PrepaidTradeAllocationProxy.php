<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\PrepaidTradeAllocation;
use Entpay\Mse\Client\Model\PrepaidTradeAllocationParam;

/**
 * 预付卡交易分账（Prepaid Trade Allocation）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\PrepaidTradeAllocation
 *
 * @method mixed create(array|\Entpay\Mse\Client\Model\PrepaidTradeAllocationParam $param) 创建交易分账
 * @method mixed retrieve(string $allocationId) 查询交易分账
 * @method mixed retrieveByOutAllocationId(string $entId, string $outAllocationId) 按平台单号查询
 */
class PrepaidTradeAllocationProxy extends AbstractApiProxy
{
    protected $sdkClass = PrepaidTradeAllocation::class;

    protected $paramMap = [
        'create' => PrepaidTradeAllocationParam::class,
    ];
}
