<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\MseFundsAccountApplication;
use Entpay\Mse\Client\Model\MseFundsAccountApplicationParam;

/**
 * 微企付资金账户开户申请（MSE Funds Account Application）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\MseFundsAccountApplication
 *
 * @method mixed create(array|\Entpay\Mse\Client\Model\MseFundsAccountApplicationParam $param) 创建开户申请
 * @method mixed createLink(string $requestNo) 获取开户申请链接
 * @method mixed retrieve(string $requestNo) 查询开户申请
 * @method mixed retrieveByOutRequestNo(string $outRequestNo) 按平台请求单号查询开户申请
 */
class MseFundsAccountApplicationProxy extends AbstractApiProxy
{
    protected $sdkClass = MseFundsAccountApplication::class;

    protected $paramMap = [
        'create' => MseFundsAccountApplicationParam::class,
    ];
}
