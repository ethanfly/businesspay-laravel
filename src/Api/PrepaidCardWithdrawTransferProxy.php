<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\PrepaidCardWithdrawTransfer;
use Entpay\Mse\Client\Model\WithdrawTransferParam;

/**
 * 预付卡提现转账（Prepaid Card Withdraw Transfer）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\PrepaidCardWithdrawTransfer
 *
 * @method mixed createWithdrawTransfer(array|\Entpay\Mse\Client\Model\WithdrawTransferParam $param) 创建提现转账
 * @method mixed retrieve(string $withdrawTransferId) 查询提现转账
 * @method mixed retrieveByOutWithdrawId(string $entId, string $outWithdrawTransferId) 按平台单号查询
 */
class PrepaidCardWithdrawTransferProxy extends AbstractApiProxy
{
    protected $sdkClass = PrepaidCardWithdrawTransfer::class;

    protected $paramMap = [
        'createWithdrawTransfer' => WithdrawTransferParam::class,
    ];
}
