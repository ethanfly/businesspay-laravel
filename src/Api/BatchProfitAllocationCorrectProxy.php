<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\BatchProfitAllocationCorrect;
use Entpay\Mse\Client\Model\BatchAllocationCollectApplyParam;

/**
 * 批量分账纠错（Batch Profit Allocation Correct）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\BatchProfitAllocationCorrect
 *
 * @method mixed create(array|\Entpay\Mse\Client\Model\BatchAllocationCollectApplyParam $param) 批量发起分账纠错
 * @method mixed retrieve(string $allocationCorrectId) 查询批量纠错
 * @method mixed retrieveByOutAllocationCorrectId(string $outAllocationCorrectId) 按平台单号查询
 * @method mixed retrieveByOutProfitAllocationCorrectId(string $outAllocationCorrectId) 按平台分账纠错单号查询
 */
class BatchProfitAllocationCorrectProxy extends AbstractApiProxy
{
    protected $sdkClass = BatchProfitAllocationCorrect::class;

    protected $paramMap = [
        'create' => BatchAllocationCollectApplyParam::class,
    ];
}
