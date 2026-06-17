<?php

namespace Ethanfly\BusinessPay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Ethanfly\BusinessPay\BusinessPayAccount account(string $name = null)
 * @method static \Ethanfly\BusinessPay\BusinessPayManager using(string $name)
 * @method static \Ethanfly\BusinessPay\BusinessPayAccount getAccount(string $name = null)
 * @method static \Ethanfly\BusinessPay\Api\PaymentProxy payment()
 * @method static \Ethanfly\BusinessPay\Api\RefundProxy refund()
 * @method static \Ethanfly\BusinessPay\Api\WithdrawProxy withdraw()
 * @method static \Ethanfly\BusinessPay\Api\DepositProxy deposit()
 * @method static \Ethanfly\BusinessPay\Api\BillProxy bill()
 * @method static \Ethanfly\BusinessPay\Api\EmployeeProxy employee()
 * @method static \Ethanfly\BusinessPay\Api\BankProxy bank()
 * @method static \Ethanfly\BusinessPay\Api\ProfitAllocationProxy profitAllocation()
 *
 * @see \Ethanfly\BusinessPay\BusinessPayManager
 */
class BusinessPay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'businesspay';
    }
}
