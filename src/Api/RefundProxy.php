<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\Refund;
use Entpay\Mse\Client\Model\RefundParam;

class RefundProxy extends AbstractApiProxy
{
    protected $sdkClass = Refund::class;

    protected $paramMap = [
        'create' => RefundParam::class,
    ];

    /**
     * Create a refund.
     *
     * @param  array|\Entpay\Mse\Client\Model\RefundParam  $param
     * @return \Entpay\Mse\Client\Api\Refund
     */
    public function create($param)
    {
        return $this->call('create', $param, RefundParam::class);
    }

    /**
     * Retrieve a refund by ID.
     *
     * @param  string  $refundId
     * @return \Entpay\Mse\Client\Api\Refund
     */
    public function retrieve($refundId)
    {
        return $this->callWithoutParam('retrieve', [$refundId]);
    }

    /**
     * Retrieve a refund by out refund ID.
     *
     * @param  string  $outRefundId
     * @return \Entpay\Mse\Client\Api\Refund
     */
    public function retrieveByOutRefundId($outRefundId)
    {
        return $this->callWithoutParam('retrieveByOutRefundId', [$outRefundId]);
    }
}
