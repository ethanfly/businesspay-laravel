<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\PrepaidCardRechargeTransfer;
use Entpay\Mse\Client\Model\RechargeTransferParam;

/**
 * 预付卡充值转账（Prepaid Card Recharge Transfer）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\PrepaidCardRechargeTransfer
 *
 * @method mixed createRechargeTransfer(array|\Entpay\Mse\Client\Model\RechargeTransferParam $param) 创建充值转账
 * @method mixed retrieve(string $rechargeTransferId) 查询充值转账
 * @method mixed retrieveByOutRechargeId(string $entId, string $outRechargeTransferId) 按平台单号查询
 */
class PrepaidCardRechargeTransferProxy extends AbstractApiProxy
{
    protected $sdkClass = PrepaidCardRechargeTransfer::class;

    protected $paramMap = [
        'createRechargeTransfer' => RechargeTransferParam::class,
    ];
}
