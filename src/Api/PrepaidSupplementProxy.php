<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\PrepaidSupplement;
use Entpay\Mse\Client\Model\PrepaidSupplementParam;

/**
 * 预付卡补充信息（Prepaid Supplement）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\PrepaidSupplement
 *
 * @method mixed create(array|\Entpay\Mse\Client\Model\PrepaidSupplementParam $param) 创建补充信息
 * @method mixed retrieve(string $supplementId) 查询补充信息
 * @method mixed retrieveByOutSupplementId(string $entId, string $outSupplementId) 按平台单号查询
 */
class PrepaidSupplementProxy extends AbstractApiProxy
{
    protected $sdkClass = PrepaidSupplement::class;

    protected $paramMap = [
        'create' => PrepaidSupplementParam::class,
    ];
}
