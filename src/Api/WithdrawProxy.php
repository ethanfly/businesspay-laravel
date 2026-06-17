<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\Withdraw;
use Entpay\Mse\Client\Model\RetrieveBalanceGetParam;
use Entpay\Mse\Client\Model\WithdrawParam;

class WithdrawProxy extends AbstractApiProxy
{
    protected $sdkClass = Withdraw::class;

    protected $paramMap = [
        'create' => WithdrawParam::class,
        'retrieveBalance' => RetrieveBalanceGetParam::class,
    ];

    /**
     * Create a withdrawal.
     *
     * @param  array|\Entpay\Mse\Client\Model\WithdrawParam  $param
     * @return \Entpay\Mse\Client\Api\Withdraw
     */
    public function create($param)
    {
        return $this->call('create', $param, WithdrawParam::class);
    }

    /**
     * Retrieve a withdrawal by ID.
     *
     * @param  string  $withdrawId
     * @return \Entpay\Mse\Client\Api\Withdraw
     */
    public function retrieve($withdrawId)
    {
        return $this->callWithoutParam('retrieve', [$withdrawId]);
    }

    /**
     * Retrieve withdraw balance.
     *
     * @param  array|\Entpay\Mse\Client\Model\RetrieveBalanceGetParam|null  $param
     * @return \Entpay\Mse\Client\Api\Withdraw
     */
    public function retrieveBalance($param = null)
    {
        return $this->call('retrieveBalance', $param, RetrieveBalanceGetParam::class);
    }

    /**
     * Retrieve a withdrawal by out withdraw ID.
     *
     * @param  string  $outWithdrawId
     * @return \Entpay\Mse\Client\Api\Withdraw
     */
    public function retrieveByOutWithdrawId($outWithdrawId)
    {
        return $this->callWithoutParam('retrieveByOutWithdrawId', [$outWithdrawId]);
    }
}
