<?php

namespace Ethanfly\BusinessPay;

use Entpay\Mse\Client\ApiException;
use Entpay\Mse\Client\Config\EntpayConfig;
use Entpay\Mse\Client\Config\EnvironmentConstant;
use Entpay\Mse\Client\Config\RequestOptions;
use Entpay\Mse\Client\Model\ModelInterface;
use Ethanfly\BusinessPay\Api\BankProxy;
use Ethanfly\BusinessPay\Api\BatchProfitAllocationCorrectProxy;
use Ethanfly\BusinessPay\Api\BillProxy;
use Ethanfly\BusinessPay\Api\DepositAllocationProxy;
use Ethanfly\BusinessPay\Api\DepositProxy;
use Ethanfly\BusinessPay\Api\EmployeeProxy;
use Ethanfly\BusinessPay\Api\FileUploadProxy;
use Ethanfly\BusinessPay\Api\MseFundProxy;
use Ethanfly\BusinessPay\Api\MseFundsAccountApplicationProxy;
use Ethanfly\BusinessPay\Api\PaymentProxy;
use Ethanfly\BusinessPay\Api\PredepositAcctProxy;
use Ethanfly\BusinessPay\Api\PrepaidCardInfoProxy;
use Ethanfly\BusinessPay\Api\PrepaidCardRechargeProxy;
use Ethanfly\BusinessPay\Api\PrepaidCardRechargeTransferProxy;
use Ethanfly\BusinessPay\Api\PrepaidCardWithdrawTransferProxy;
use Ethanfly\BusinessPay\Api\PrepaidSupplementProxy;
use Ethanfly\BusinessPay\Api\PrepaidTradeAllocationProxy;
use Ethanfly\BusinessPay\Api\PrepaidTransferProxy;
use Ethanfly\BusinessPay\Api\ProductApplicationProxy;
use Ethanfly\BusinessPay\Api\ProfitAllocationCorrectProxy;
use Ethanfly\BusinessPay\Api\ProfitAllocationProxy;
use Ethanfly\BusinessPay\Api\ProfitAllocationReturnProxy;
use Ethanfly\BusinessPay\Api\RedirectProxy;
use Ethanfly\BusinessPay\Api\RefundProxy;
use Ethanfly\BusinessPay\Api\WithdrawProxy;
use Ethanfly\BusinessPay\Exceptions\BusinessPayException;
use InvalidArgumentException;

class BusinessPayAccount
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $config;

    /**
     * @var RequestOptions|null
     */
    protected $requestOptions;

    public function __construct($name, array $config)
    {
        $this->name = $name;
        $this->config = $config;
    }

    /**
     * Get the account name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get a raw config value for this account.
     *
     * @param  string  $key
     * @param  mixed|null  $default
     * @return mixed
     */
    public function getConfigValue($key, $default = null)
    {
        return $this->config[$key] ?? $default;
    }

    /**
     * Configure the global EntpayConfig for this account.
     *
     * Because the SDK relies on static global configuration for the base URL and
     * fallback credentials, this must be called before each SDK request when
     * multiple accounts are used in the same PHP process.
     *
     * @return $this
     */
    public function configure()
    {
        $env = $this->config['env'] ?? 'sandbox';

        if ($env === 'custom') {
            EntpayConfig::setEnv(EnvironmentConstant::CUSTOM);
            EntpayConfig::setBaseUrl($this->config['base_url'] ?? '');
        } else {
            EntpayConfig::setEnv($env === 'production' ? EnvironmentConstant::PRO : EnvironmentConstant::SANDBOX);
        }

        $timeout = $this->config['timeout'] ?? 20;
        (new EntpayConfig())->setTimeout($timeout);

        $this->setGlobalCredentials();

        return $this;
    }

    /**
     * Build the per-request RequestOptions object for this account.
     *
     * @return RequestOptions
     */
    public function getRequestOptions()
    {
        if ($this->requestOptions) {
            return $this->requestOptions;
        }

        $this->requestOptions = RequestOptions::getInstance();

        $this->requestOptions->initMultiPlatform(
            $this->config['platform_id'],
            $this->normalizeKey($this->config['platform_private_key']),
            $this->config['platform_private_cert_serial_no'],
            $this->config['tbep_serial_number'],
            $this->normalizeKey($this->config['tbep_public_key'])
        );

        if (! empty($this->config['ent_id'])) {
            $this->requestOptions->initOpenBank(
                $this->config['ent_id'],
                $this->config['enterprise_serial_number'],
                $this->normalizeKey($this->config['ent_private_key'])
            );
            $this->requestOptions->setIsEntCertAuth(true);
        }

        if (! empty($this->config['svr_platform_id'])) {
            $this->requestOptions->initSvrMode($this->config['svr_platform_id']);
        }

        return $this->requestOptions;
    }

    /**
     * @return PaymentProxy
     */
    public function payment()
    {
        return new PaymentProxy($this);
    }

    /**
     * @return RefundProxy
     */
    public function refund()
    {
        return new RefundProxy($this);
    }

    /**
     * @return WithdrawProxy
     */
    public function withdraw()
    {
        return new WithdrawProxy($this);
    }

    /**
     * @return DepositProxy
     */
    public function deposit()
    {
        return new DepositProxy($this);
    }

    /**
     * @return BillProxy
     */
    public function bill()
    {
        return new BillProxy($this);
    }

    /**
     * @return EmployeeProxy
     */
    public function employee()
    {
        return new EmployeeProxy($this);
    }

    /**
     * @return BankProxy
     */
    public function bank()
    {
        return new BankProxy($this);
    }

    /**
     * @return ProfitAllocationProxy
     */
    public function profitAllocation()
    {
        return new ProfitAllocationProxy($this);
    }

    /**
     * @return ProfitAllocationCorrectProxy
     */
    public function profitAllocationCorrect()
    {
        return new ProfitAllocationCorrectProxy($this);
    }

    /**
     * @return ProfitAllocationReturnProxy
     */
    public function profitAllocationReturn()
    {
        return new ProfitAllocationReturnProxy($this);
    }

    /**
     * @return BatchProfitAllocationCorrectProxy
     */
    public function batchProfitAllocationCorrect()
    {
        return new BatchProfitAllocationCorrectProxy($this);
    }

    /**
     * @return DepositAllocationProxy
     */
    public function depositAllocation()
    {
        return new DepositAllocationProxy($this);
    }

    /**
     * @return MseFundProxy
     */
    public function mseFund()
    {
        return new MseFundProxy($this);
    }

    /**
     * @return MseFundsAccountApplicationProxy
     */
    public function mseFundsAccountApplication()
    {
        return new MseFundsAccountApplicationProxy($this);
    }

    /**
     * @return FileUploadProxy
     */
    public function fileUpload()
    {
        return new FileUploadProxy($this);
    }

    /**
     * @return RedirectProxy
     */
    public function redirect()
    {
        return new RedirectProxy($this);
    }

    /**
     * @return ProductApplicationProxy
     */
    public function productApplication()
    {
        return new ProductApplicationProxy($this);
    }

    /**
     * @return PrepaidCardRechargeProxy
     */
    public function prepaidCardRecharge()
    {
        return new PrepaidCardRechargeProxy($this);
    }

    /**
     * @return PrepaidCardRechargeTransferProxy
     */
    public function prepaidCardRechargeTransfer()
    {
        return new PrepaidCardRechargeTransferProxy($this);
    }

    /**
     * @return PrepaidCardWithdrawTransferProxy
     */
    public function prepaidCardWithdrawTransfer()
    {
        return new PrepaidCardWithdrawTransferProxy($this);
    }

    /**
     * @return PrepaidCardInfoProxy
     */
    public function prepaidCardInfo()
    {
        return new PrepaidCardInfoProxy($this);
    }

    /**
     * @return PrepaidSupplementProxy
     */
    public function prepaidSupplement()
    {
        return new PrepaidSupplementProxy($this);
    }

    /**
     * @return PrepaidTransferProxy
     */
    public function prepaidTransfer()
    {
        return new PrepaidTransferProxy($this);
    }

    /**
     * @return PrepaidTradeAllocationProxy
     */
    public function prepaidTradeAllocation()
    {
        return new PrepaidTradeAllocationProxy($this);
    }

    /**
     * @return PredepositAcctProxy
     */
    public function predepositAcct()
    {
        return new PredepositAcctProxy($this);
    }

    /**
     * Normalize a key value. If it points to a file, read the file contents.
     *
     * @param  string|null  $key
     * @return string|null
     */
    public function normalizeKey($key)
    {
        if (empty($key)) {
            return null;
        }

        if (strpos($key, 'file://') === 0) {
            $path = substr($key, 7);

            return $this->readKeyFile($path);
        }

        if (is_file($key)) {
            return $this->readKeyFile($key);
        }

        return $key;
    }

    /**
     * @param  string  $path
     * @return string
     */
    protected function readKeyFile($path)
    {
        if (! is_file($path) || ! is_readable($path)) {
            throw new InvalidArgumentException("BusinessPay key file is not readable: {$path}");
        }

        $contents = file_get_contents($path);

        if ($contents === false) {
            throw new InvalidArgumentException("Failed to read BusinessPay key file: {$path}");
        }

        return $contents;
    }

    /**
     * Set fallback global credentials for this account.
     *
     * @return void
     */
    protected function setGlobalCredentials()
    {
        EntpayConfig::setNormalMode(
            $this->config['platform_id'],
            $this->normalizeKey($this->config['platform_private_key']),
            $this->config['platform_private_cert_serial_no'],
            $this->config['tbep_serial_number'],
            $this->normalizeKey($this->config['tbep_public_key'])
        );

        if (! empty($this->config['svr_platform_id'])) {
            EntpayConfig::setSvrMode(
                $this->config['svr_platform_id'],
                $this->normalizeKey($this->config['svr_private_key'] ?? $this->config['platform_private_key']),
                $this->config['svr_private_cert_serial_no'] ?? $this->config['platform_private_cert_serial_no'],
                $this->config['svr_tbep_serial_number'] ?? $this->config['tbep_serial_number'],
                $this->normalizeKey($this->config['svr_tbep_public_key'] ?? $this->config['tbep_public_key'])
            );
        }
    }

    /**
     * Normalize a parameter value into an SDK model instance if an array is given.
     *
     * @param  mixed  $param
     * @param  string  $class
     * @param  string|null  $method
     * @return mixed
     */
    public function normalizeParam($param, $class, $method = '__construct')
    {
        if ($param instanceof ModelInterface || $param === null) {
            return $param;
        }

        if (is_array($param)) {
            return new $class($param);
        }

        throw new InvalidArgumentException("Parameter for {$class}::{$method} must be an array or SDK model instance.");
    }

    /**
     * Wrap an SDK API call and convert ApiException into BusinessPayException.
     *
     *
     * @return mixed
     */
    public function callSdk(callable $callback)
    {
        $this->configure();

        try {
            return $callback($this->getRequestOptions());
        } catch (ApiException $e) {
            throw BusinessPayException::fromApiException($e);
        }
    }
}
