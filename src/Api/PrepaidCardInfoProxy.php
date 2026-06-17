<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\PrepaidCardInfo;
use Entpay\Mse\Client\Model\PrepaidCardRegisterParam;

/**
 * 预付卡信息（Prepaid Card Info）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\PrepaidCardInfo
 *
 * @method mixed register(array|\Entpay\Mse\Client\Model\PrepaidCardRegisterParam $param) 注册预付卡
 * @method mixed retrieve(string $entId, string $outPrepaidCardId) 查询预付卡
 */
class PrepaidCardInfoProxy extends AbstractApiProxy
{
    protected $sdkClass = PrepaidCardInfo::class;

    protected $paramMap = [
        'register' => PrepaidCardRegisterParam::class,
    ];
}
