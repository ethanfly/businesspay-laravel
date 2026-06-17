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
 * @method static \Ethanfly\BusinessPay\Api\ProfitAllocationCorrectProxy profitAllocationCorrect()
 * @method static \Ethanfly\BusinessPay\Api\ProfitAllocationReturnProxy profitAllocationReturn()
 * @method static \Ethanfly\BusinessPay\Api\BatchProfitAllocationCorrectProxy batchProfitAllocationCorrect()
 * @method static \Ethanfly\BusinessPay\Api\DepositAllocationProxy depositAllocation()
 * @method static \Ethanfly\BusinessPay\Api\MseFundProxy mseFund()
 * @method static \Ethanfly\BusinessPay\Api\MseFundsAccountApplicationProxy mseFundsAccountApplication()
 * @method static \Ethanfly\BusinessPay\Api\FileUploadProxy fileUpload()
 * @method static \Ethanfly\BusinessPay\Api\RedirectProxy redirect()
 * @method static \Ethanfly\BusinessPay\Api\ProductApplicationProxy productApplication()
 * @method static \Ethanfly\BusinessPay\Api\PrepaidCardRechargeProxy prepaidCardRecharge()
 * @method static \Ethanfly\BusinessPay\Api\PrepaidCardRechargeTransferProxy prepaidCardRechargeTransfer()
 * @method static \Ethanfly\BusinessPay\Api\PrepaidCardWithdrawTransferProxy prepaidCardWithdrawTransfer()
 * @method static \Ethanfly\BusinessPay\Api\PrepaidCardInfoProxy prepaidCardInfo()
 * @method static \Ethanfly\BusinessPay\Api\PrepaidSupplementProxy prepaidSupplement()
 * @method static \Ethanfly\BusinessPay\Api\PrepaidTransferProxy prepaidTransfer()
 * @method static \Ethanfly\BusinessPay\Api\PrepaidTradeAllocationProxy prepaidTradeAllocation()
 * @method static \Ethanfly\BusinessPay\Api\PredepositAcctProxy predepositAcct()
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
