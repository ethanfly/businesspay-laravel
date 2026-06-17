<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\BillDownload;
use Entpay\Mse\Client\Model\BillDownloadParam;
use Entpay\Mse\Client\Model\PrepaidCardAllocationBillDownloadParam;
use Entpay\Mse\Client\Model\ProfitAllocationReceiverBillDownloadParam;
use Entpay\Mse\Client\Model\ProfitBillDownloadParam;
use Entpay\Mse\Client\Model\TransBillDownloadParam;

class BillProxy extends AbstractApiProxy
{
    protected $sdkClass = BillDownload::class;

    protected $paramMap = [
        'create' => BillDownloadParam::class,
        'createProfitAllocation' => ProfitBillDownloadParam::class,
        'createProfitAllocationReceiver' => ProfitAllocationReceiverBillDownloadParam::class,
        'createTradeAllocation' => PrepaidCardAllocationBillDownloadParam::class,
        'createTrans' => TransBillDownloadParam::class,
    ];

    /**
     * Apply for bill download.
     *
     * @param  array|\Entpay\Mse\Client\Model\BillDownloadParam  $param
     * @return \Entpay\Mse\Client\Api\BillDownload
     */
    public function create($param)
    {
        return $this->call('create', $param, BillDownloadParam::class);
    }

    /**
     * Apply for profit allocation bill.
     *
     * @param  array|\Entpay\Mse\Client\Model\ProfitBillDownloadParam  $param
     * @return \Entpay\Mse\Client\Api\BillDownload
     */
    public function createProfitAllocation($param)
    {
        return $this->call('createProfitAllocation', $param, ProfitBillDownloadParam::class);
    }

    /**
     * Apply for profit allocation receiver bill.
     *
     * @param  array|\Entpay\Mse\Client\Model\ProfitAllocationReceiverBillDownloadParam  $param
     * @return \Entpay\Mse\Client\Api\BillDownload
     */
    public function createProfitAllocationReceiver($param)
    {
        return $this->call('createProfitAllocationReceiver', $param, ProfitAllocationReceiverBillDownloadParam::class);
    }

    /**
     * Apply for prepaid card trade allocation bill.
     *
     * @param  array|\Entpay\Mse\Client\Model\PrepaidCardAllocationBillDownloadParam  $param
     * @return \Entpay\Mse\Client\Api\BillDownload
     */
    public function createTradeAllocation($param)
    {
        return $this->call('createTradeAllocation', $param, PrepaidCardAllocationBillDownloadParam::class);
    }

    /**
     * Apply for transaction bill.
     *
     * @param  array|\Entpay\Mse\Client\Model\TransBillDownloadParam  $param
     * @return \Entpay\Mse\Client\Api\BillDownload
     */
    public function createTrans($param)
    {
        return $this->call('createTrans', $param, TransBillDownloadParam::class);
    }
}
