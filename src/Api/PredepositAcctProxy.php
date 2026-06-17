<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\PredepositAcct;
use Entpay\Mse\Client\Model\PredepositAcctRechargeMpParam;
use Entpay\Mse\Client\Model\RetrievePredepositAcctParam;

/**
 * 预存款账户（Predeposit Account）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\PredepositAcct
 *
 * @method mixed createMpRecharge(array|\Entpay\Mse\Client\Model\PredepositAcctRechargeMpParam $param) 小程序预存款充值
 * @method mixed retrievePredepositAcct(array|\Entpay\Mse\Client\Model\RetrievePredepositAcctParam $param) 查询预存款账户
 */
class PredepositAcctProxy extends AbstractApiProxy
{
    protected $sdkClass = PredepositAcct::class;

    protected $paramMap = [
        'createMpRecharge' => PredepositAcctRechargeMpParam::class,
        'retrievePredepositAcct' => RetrievePredepositAcctParam::class,
    ];
}
