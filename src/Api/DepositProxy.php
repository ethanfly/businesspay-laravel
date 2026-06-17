<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\Deposit;

class DepositProxy extends AbstractApiProxy
{
    protected $sdkClass = Deposit::class;

    protected $paramMap = [
        'retrieveList' => \Entpay\Mse\Client\Model\RetrieveListGetParam::class,
    ];

    /**
     * Retrieve a deposit by ID.
     *
     * @param  string  $depositId
     * @return \Entpay\Mse\Client\Api\Deposit
     */
    public function retrieve($depositId)
    {
        return $this->callWithoutParam('retrieve', [$depositId]);
    }

    /**
     * Retrieve a list of deposits.
     *
     * @param  array|\Entpay\Mse\Client\Model\RetrieveListGetParam|null  $param
     * @return mixed
     */
    public function retrieveList($param = null)
    {
        return $this->call('retrieveList', $param, \Entpay\Mse\Client\Model\RetrieveListGetParam::class);
    }
}
