<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\ProfitAllocationCorrect;
use Entpay\Mse\Client\Model\ProfitAllocationCorrectParam;

/**
 * 分账纠错（Profit Allocation Correct）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\ProfitAllocationCorrect
 *
 * @method mixed create(array|\Entpay\Mse\Client\Model\ProfitAllocationCorrectParam $param) 发起分账纠错
 * @method mixed retrieve(string $allocationDetailCorrectId) 查询分账纠错
 * @method mixed retrieveByOutAllocationDetailCorrectId(string $outAllocationDetailCorrectId) 按平台单号查询
 */
class ProfitAllocationCorrectProxy extends AbstractApiProxy
{
    protected $sdkClass = ProfitAllocationCorrect::class;

    protected $paramMap = [
        'create' => ProfitAllocationCorrectParam::class,
    ];
}
