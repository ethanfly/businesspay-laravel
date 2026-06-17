<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\Bank;
use Entpay\Mse\Client\Model\RetrieveStatusGetParam;
use Entpay\Mse\Client\Model\SupportBanksGetParam;

class BankProxy extends AbstractApiProxy
{
    protected $sdkClass = Bank::class;

    protected $paramMap = [
        'retrieveStatus' => RetrieveStatusGetParam::class,
        'supportBanks' => SupportBanksGetParam::class,
    ];

    /**
     * Query bank status.
     *
     * @param  array|\Entpay\Mse\Client\Model\RetrieveStatusGetParam|null  $param
     * @return mixed
     */
    public function retrieveStatus($param = null)
    {
        return $this->call('retrieveStatus', $param, RetrieveStatusGetParam::class);
    }

    /**
     * Query supported banks.
     *
     * @param  array|\Entpay\Mse\Client\Model\SupportBanksGetParam|null  $param
     * @return mixed
     */
    public function supportBanks($param = null)
    {
        return $this->call('supportBanks', $param, SupportBanksGetParam::class);
    }
}
