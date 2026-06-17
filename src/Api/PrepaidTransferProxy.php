<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\PrepaidTransfer;
use Entpay\Mse\Client\Model\PrepaidTransferParam;

/**
 * 预付卡转账（Prepaid Transfer）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\PrepaidTransfer
 *
 * @method mixed create(array|\Entpay\Mse\Client\Model\PrepaidTransferParam $param) 创建转账
 * @method mixed retrieve(string $transferId) 查询转账
 * @method mixed retrieveByOutTransferId(string $entId, string $outTransferId) 按平台单号查询
 */
class PrepaidTransferProxy extends AbstractApiProxy
{
    protected $sdkClass = PrepaidTransfer::class;

    protected $paramMap = [
        'create' => PrepaidTransferParam::class,
    ];
}
