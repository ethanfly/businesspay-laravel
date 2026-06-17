<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\ProfitAllocation;
use Entpay\Mse\Client\Model\ProfitAllocationFinishParam;
use Entpay\Mse\Client\Model\ProfitAllocationParam;
use Entpay\Mse\Client\Model\ProfitAllocationReceiverApplicationParam;
use Entpay\Mse\Client\Model\RetrieveAccountGetParam;
use Entpay\Mse\Client\Model\RetrieveSupportedAllocationPaymentListGetParam;

class ProfitAllocationProxy extends AbstractApiProxy
{
    protected $sdkClass = ProfitAllocation::class;

    protected $paramMap = [
        'create' => ProfitAllocationParam::class,
        'finish' => ProfitAllocationFinishParam::class,
        'createAccountSimpleApplication' => ProfitAllocationReceiverApplicationParam::class,
        'retrieveAccount' => RetrieveAccountGetParam::class,
        'retrieveSupportedAllocationPaymentList' => RetrieveSupportedAllocationPaymentListGetParam::class,
    ];

    /**
     * Create a profit allocation.
     *
     * @param  array|\Entpay\Mse\Client\Model\ProfitAllocationParam  $param
     * @return \Entpay\Mse\Client\Api\ProfitAllocation
     */
    public function create($param)
    {
        return $this->call('create', $param, ProfitAllocationParam::class);
    }

    /**
     * Finish a profit allocation.
     *
     * @param  array|\Entpay\Mse\Client\Model\ProfitAllocationFinishParam  $param
     * @return \Entpay\Mse\Client\Api\ProfitAllocation
     */
    public function finish($param)
    {
        return $this->call('finish', $param, ProfitAllocationFinishParam::class);
    }

    /**
     * Retrieve a profit allocation by ID.
     *
     * @param  string  $allocationId
     * @return \Entpay\Mse\Client\Api\ProfitAllocation
     */
    public function retrieve($allocationId)
    {
        return $this->callWithoutParam('retrieve', [$allocationId]);
    }

    /**
     * Retrieve a profit allocation by out allocation ID.
     *
     * @param  string  $outAllocationId
     * @return \Entpay\Mse\Client\Api\ProfitAllocation
     */
    public function retrieveByOutAllocationId($outAllocationId)
    {
        return $this->callWithoutParam('retrieveByOutAllocationId', [$outAllocationId]);
    }

    /**
     * Create a receiver account application link.
     *
     * @param  string  $applicationId
     * @return mixed
     */
    public function createAccountApplicationLink($applicationId)
    {
        return $this->callWithoutParam('createAccountApplicationLink', [$applicationId]);
    }

    /**
     * Create a simple receiver account application.
     *
     * @param  array|\Entpay\Mse\Client\Model\ProfitAllocationReceiverApplicationParam  $param
     * @return mixed
     */
    public function createAccountSimpleApplication($param)
    {
        return $this->call('createAccountSimpleApplication', $param, ProfitAllocationReceiverApplicationParam::class);
    }

    /**
     * Query receiver account.
     *
     * @param  array|\Entpay\Mse\Client\Model\RetrieveAccountGetParam|null  $param
     * @return mixed
     */
    public function retrieveAccount($param = null)
    {
        return $this->call('retrieveAccount', $param, RetrieveAccountGetParam::class);
    }

    /**
     * Query receiver account application.
     *
     * @param  string  $applicationId
     * @return mixed
     */
    public function retrieveAccountApplication($applicationId)
    {
        return $this->callWithoutParam('retrieveAccountApplication', [$applicationId]);
    }

    /**
     * Query receiver account application by out application ID.
     *
     * @param  string  $outApplicationId
     * @return mixed
     */
    public function retrieveAccountApplicationByOutApplicationId($outApplicationId)
    {
        return $this->callWithoutParam('retrieveAccountApplicationByOutApplicationId', [$outApplicationId]);
    }

    /**
     * Query profit allocation balance.
     *
     * @param  string  $paymentId
     * @return mixed
     */
    public function retrieveBalance($paymentId)
    {
        return $this->callWithoutParam('retrieveBalance', [$paymentId]);
    }

    /**
     * Query supported allocation payment list.
     *
     * @param  array|\Entpay\Mse\Client\Model\RetrieveSupportedAllocationPaymentListGetParam|null  $param
     * @return mixed
     */
    public function retrieveSupportedAllocationPaymentList($param = null)
    {
        return $this->call('retrieveSupportedAllocationPaymentList', $param, RetrieveSupportedAllocationPaymentListGetParam::class);
    }
}
