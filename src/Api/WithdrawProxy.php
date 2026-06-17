<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\Withdraw;
use Entpay\Mse\Client\Model\WithdrawParam;

class WithdrawProxy extends AbstractApiProxy
{
    protected $sdkClass = Withdraw::class;

    protected $paramMap = [
        'create' => WithdrawParam::class,
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
