<?php

namespace Ethanfly\BusinessPay\Tests;

use Ethanfly\BusinessPay\BusinessPayManager;
use ReflectionClass;

/**
 * 商业化回归测试：以官方 SDK（OpenAPI spec 生成）的业务方法为权威基线，
 * 断言包对 SDK 全部 API 类实现了 1:1 的资源代理覆盖，参数模型可从数组规范化构造，
 * 且账户/管理器/Facade 入口完整。任何新增 SDK API 类而未补 proxy，本测试即失败。
 */
class ApiCoverageTest extends TestCase
{
    /**
     * 账户方法名 => [Proxy 类, SDK API 类]。
     */
    private $proxyMap = [
        'payment' => [\Ethanfly\BusinessPay\Api\PaymentProxy::class, \Entpay\Mse\Client\Api\Payment::class],
        'refund' => [\Ethanfly\BusinessPay\Api\RefundProxy::class, \Entpay\Mse\Client\Api\Refund::class],
        'withdraw' => [\Ethanfly\BusinessPay\Api\WithdrawProxy::class, \Entpay\Mse\Client\Api\Withdraw::class],
        'deposit' => [\Ethanfly\BusinessPay\Api\DepositProxy::class, \Entpay\Mse\Client\Api\Deposit::class],
        'bill' => [\Ethanfly\BusinessPay\Api\BillProxy::class, \Entpay\Mse\Client\Api\BillDownload::class],
        'employee' => [\Ethanfly\BusinessPay\Api\EmployeeProxy::class, \Entpay\Mse\Client\Api\Employee::class],
        'bank' => [\Ethanfly\BusinessPay\Api\BankProxy::class, \Entpay\Mse\Client\Api\Bank::class],
        'profitAllocation' => [\Ethanfly\BusinessPay\Api\ProfitAllocationProxy::class, \Entpay\Mse\Client\Api\ProfitAllocation::class],
        'profitAllocationCorrect' => [\Ethanfly\BusinessPay\Api\ProfitAllocationCorrectProxy::class, \Entpay\Mse\Client\Api\ProfitAllocationCorrect::class],
        'profitAllocationReturn' => [\Ethanfly\BusinessPay\Api\ProfitAllocationReturnProxy::class, \Entpay\Mse\Client\Api\ProfitAllocationReturn::class],
        'batchProfitAllocationCorrect' => [\Ethanfly\BusinessPay\Api\BatchProfitAllocationCorrectProxy::class, \Entpay\Mse\Client\Api\BatchProfitAllocationCorrect::class],
        'depositAllocation' => [\Ethanfly\BusinessPay\Api\DepositAllocationProxy::class, \Entpay\Mse\Client\Api\DepositAllocation::class],
        'mseFund' => [\Ethanfly\BusinessPay\Api\MseFundProxy::class, \Entpay\Mse\Client\Api\MseFund::class],
        'mseFundsAccountApplication' => [\Ethanfly\BusinessPay\Api\MseFundsAccountApplicationProxy::class, \Entpay\Mse\Client\Api\MseFundsAccountApplication::class],
        'fileUpload' => [\Ethanfly\BusinessPay\Api\FileUploadProxy::class, \Entpay\Mse\Client\Api\FileUpload::class],
        'redirect' => [\Ethanfly\BusinessPay\Api\RedirectProxy::class, \Entpay\Mse\Client\Api\Redirect::class],
        'productApplication' => [\Ethanfly\BusinessPay\Api\ProductApplicationProxy::class, \Entpay\Mse\Client\Api\ProductApplication::class],
        'prepaidCardRecharge' => [\Ethanfly\BusinessPay\Api\PrepaidCardRechargeProxy::class, \Entpay\Mse\Client\Api\PrepaidCardRecharge::class],
        'prepaidCardRechargeTransfer' => [\Ethanfly\BusinessPay\Api\PrepaidCardRechargeTransferProxy::class, \Entpay\Mse\Client\Api\PrepaidCardRechargeTransfer::class],
        'prepaidCardWithdrawTransfer' => [\Ethanfly\BusinessPay\Api\PrepaidCardWithdrawTransferProxy::class, \Entpay\Mse\Client\Api\PrepaidCardWithdrawTransfer::class],
        'prepaidCardInfo' => [\Ethanfly\BusinessPay\Api\PrepaidCardInfoProxy::class, \Entpay\Mse\Client\Api\PrepaidCardInfo::class],
        'prepaidSupplement' => [\Ethanfly\BusinessPay\Api\PrepaidSupplementProxy::class, \Entpay\Mse\Client\Api\PrepaidSupplement::class],
        'prepaidTransfer' => [\Ethanfly\BusinessPay\Api\PrepaidTransferProxy::class, \Entpay\Mse\Client\Api\PrepaidTransfer::class],
        'prepaidTradeAllocation' => [\Ethanfly\BusinessPay\Api\PrepaidTradeAllocationProxy::class, \Entpay\Mse\Client\Api\PrepaidTradeAllocation::class],
        'predepositAcct' => [\Ethanfly\BusinessPay\Api\PredepositAcctProxy::class, \Entpay\Mse\Client\Api\PredepositAcct::class],
    ];

    public function test_account_exposes_all_proxies()
    {
        $account = $this->app->make(BusinessPayManager::class)->account();

        foreach ($this->proxyMap as $method => [$proxyClass, $sdkClass]) {
            $this->assertInstanceOf($proxyClass, $account->$method(), "Account#{$method}() should return {$proxyClass}");
        }
    }

    public function test_manager_exposes_all_proxies()
    {
        $manager = $this->app->make(BusinessPayManager::class);

        foreach ($this->proxyMap as $method => [$proxyClass, $sdkClass]) {
            $this->assertInstanceOf($proxyClass, $manager->$method(), "Manager#{$method}() should return {$proxyClass}");
        }
    }

    public function test_proxies_target_real_sdk_classes()
    {
        $account = $this->app->make(BusinessPayManager::class)->account();

        foreach ($this->proxyMap as $method => [$proxyClass, $sdkClass]) {
            $proxy = $account->$method();
            $r = new ReflectionClass($proxy);

            $sdkProp = $r->getProperty('sdkClass');
            $sdkProp->setAccessible(true);
            $actualSdk = $sdkProp->getValue($proxy);

            $this->assertSame($sdkClass, $actualSdk, "{$proxyClass} sdkClass mismatch");
            $this->assertTrue(class_exists($sdkClass), "SDK class must exist: {$sdkClass}");
        }
    }

    public function test_param_classes_are_instantiable_from_arrays()
    {
        $account = $this->app->make(BusinessPayManager::class)->account();

        foreach ($this->proxyMap as $method => [$proxyClass, $sdkClass]) {
            $proxy = $account->$method();
            $r = new ReflectionClass($proxy);

            $paramMapProp = $r->getProperty('paramMap');
            $paramMapProp->setAccessible(true);
            $paramMap = $paramMapProp->getValue($proxy);

            foreach ($paramMap as $alias => $paramClass) {
                $this->assertTrue(class_exists($paramClass), "Param class must exist: {$paramClass}");

                // 数组参数应能规范化为 SDK 模型实例（商业化调用主路径）
                $model = $account->normalizeParam(['sample' => 'value'], $paramClass);
                $this->assertInstanceOf(
                    $paramClass,
                    $model,
                    "{$paramClass} must be constructible from an array (used by {$proxyClass}::{$alias})"
                );
            }
        }
    }

    public function test_every_sdk_api_class_is_covered_by_a_proxy()
    {
        $sdkDir = __DIR__.'/../sdk/entpay_mse_sdk_php_v3-3.25.0/lib/Api';

        $this->assertDirectoryExists($sdkDir, 'Bundled SDK Api directory must exist');

        $sdkFiles = glob($sdkDir.'/*.php');
        $this->assertNotEmpty($sdkFiles, 'SDK Api directory must contain API classes');

        $sdkClasses = array_map(function ($file) {
            return 'Entpay\\Mse\\Client\\Api\\'.basename($file, '.php');
        }, $sdkFiles);

        $covered = array_map(function ($entry) {
            return $entry[1];
        }, $this->proxyMap);

        $missing = array_diff($sdkClasses, $covered);
        $extra = array_diff($covered, $sdkClasses);

        $this->assertSame(
            [],
            array_values($missing),
            'Every bundled SDK API class must be covered by a proxy. Missing: '.implode(', ', $missing)
        );
        $this->assertSame(
            [],
            array_values($extra),
            'Every proxy must target a real SDK API class. Stale: '.implode(', ', $extra)
        );
    }

    public function test_proxy_methods_forward_to_sdk_business_methods()
    {
        $account = $this->app->make(BusinessPayManager::class)->account();

        // 抽样核心商业化主流程：每个 proxy 的关键业务方法在 SDK 类中真实存在，
        // 确保 __call / 显式方法透传链路可达。
        $samples = [
            'payment' => ['createPay', 'createMpPay', 'createH5Pay', 'createPCPay', 'createQrCodePay', 'createWecomPay', 'createWecomPayReg', 'createPayAllocate', 'retrieve', 'retrieveByOutPaymentId', 'retrieveFee', 'close', 'retrieveIdByBankAttach'],
            'refund' => ['create', 'retrieve', 'retrieveByOutRefundId', 'abnormalToAvail'],
            'withdraw' => ['create', 'retrieve', 'retrieveByOutWithdrawId', 'retrieveBalance'],
            'deposit' => ['retrieve', 'retrieveList'],
            'bill' => ['create', 'createProfitAllocation', 'createProfitAllocationReceiver', 'createTradeAllocation', 'createTrans'],
            'employee' => ['create', 'delete', 'retrieveApplicationList'],
            'bank' => ['retrieveStatus', 'supportBanks'],
            'profitAllocation' => ['create', 'finish', 'retrieve', 'retrieveByOutAllocationId', 'createAccountApplicationLink', 'createAccountSimpleApplication', 'retrieveAccount', 'retrieveAccountApplication', 'retrieveAccountApplicationByOutApplicationId', 'retrieveBalance', 'retrieveSupportedAllocationPaymentList'],
            'profitAllocationCorrect' => ['create', 'retrieve', 'retrieveByOutAllocationDetailCorrectId'],
            'profitAllocationReturn' => ['create', 'retrieve', 'retrieveByOutAllocationDetailReturnId'],
            'batchProfitAllocationCorrect' => ['create', 'retrieve', 'retrieveByOutAllocationCorrectId', 'retrieveByOutProfitAllocationCorrectId'],
            'depositAllocation' => ['create', 'finish', 'retrieve', 'retrieveBalance', 'retrieveByOutAllocationId'],
            'mseFund' => ['retrieveMseFundBalance'],
            'mseFundsAccountApplication' => ['create', 'createLink', 'retrieve', 'retrieveByOutRequestNo'],
            'fileUpload' => ['create', 'depositCreate'],
            'redirect' => ['create', 'createRechargeRedirect'],
            'productApplication' => ['create', 'createLink', 'retrieve', 'retrieveByOutRequestNo'],
            'prepaidCardRecharge' => ['close', 'createMpRecharge', 'retrieve', 'retrieveByOutRechargeId'],
            'prepaidCardRechargeTransfer' => ['createRechargeTransfer', 'retrieve', 'retrieveByOutRechargeId'],
            'prepaidCardWithdrawTransfer' => ['createWithdrawTransfer', 'retrieve', 'retrieveByOutWithdrawId'],
            'prepaidCardInfo' => ['register', 'retrieve'],
            'prepaidSupplement' => ['create', 'retrieve', 'retrieveByOutSupplementId'],
            'prepaidTransfer' => ['create', 'retrieve', 'retrieveByOutTransferId'],
            'prepaidTradeAllocation' => ['create', 'retrieve', 'retrieveByOutAllocationId'],
            'predepositAcct' => ['createMpRecharge', 'retrievePredepositAcct'],
        ];

        foreach ($samples as $method => $sdkMethods) {
            $proxy = $account->$method();
            $r = new ReflectionClass($proxy);
            $sdkProp = $r->getProperty('sdkClass');
            $sdkProp->setAccessible(true);
            $sdkClass = $sdkProp->getValue($proxy);

            foreach ($sdkMethods as $sdkMethod) {
                $this->assertTrue(
                    method_exists($sdkClass, $sdkMethod),
                    "{$sdkClass}::{$sdkMethod} must exist (reachable via {$method} proxy)"
                );
            }
        }
    }
}
