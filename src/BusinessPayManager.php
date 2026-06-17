<?php

namespace Ethanfly\BusinessPay;

use Ethanfly\BusinessPay\Api\BankProxy;
use Ethanfly\BusinessPay\Api\BillProxy;
use Ethanfly\BusinessPay\Api\DepositProxy;
use Ethanfly\BusinessPay\Api\EmployeeProxy;
use Ethanfly\BusinessPay\Api\PaymentProxy;
use Ethanfly\BusinessPay\Api\ProfitAllocationProxy;
use Ethanfly\BusinessPay\Api\RefundProxy;
use Ethanfly\BusinessPay\Api\WithdrawProxy;
use Ethanfly\BusinessPay\Contracts\ConfigRepository;
use InvalidArgumentException;

class BusinessPayManager
{
    /**
     * @var ConfigRepository
     */
    protected $config;

    /**
     * @var BusinessPayAccount[]
     */
    protected $accounts = [];

    /**
     * @var string|null
     */
    protected $currentAccount;

    public function __construct(ConfigRepository $config)
    {
        $this->config = $config;
    }

    /**
     * Get or create an account by name.
     *
     * @param  string|null  $name
     * @return BusinessPayAccount
     */
    public function account($name = null)
    {
        $resolved = $this->resolveAccountName($name);

        if (! isset($this->accounts[$resolved])) {
            $config = $this->config->get('accounts.'.$resolved);

            if (! is_array($config)) {
                throw new InvalidArgumentException("BusinessPay account [{$resolved}] is not defined.");
            }

            $this->accounts[$resolved] = new BusinessPayAccount($resolved, $config);
        }

        if ($name === null) {
            $this->currentAccount = $resolved;
        }

        return $this->accounts[$resolved];
    }

    /**
     * Alias for account().
     *
     * @param  string|null  $name
     * @return BusinessPayAccount
     */
    public function getAccount($name = null)
    {
        return $this->account($name);
    }

    /**
     * Switch to the given account for fluent chaining.
     *
     * @param  string  $name
     * @return $this
     */
    public function using($name)
    {
        $this->account($name);
        $this->currentAccount = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultAccountName()
    {
        return $this->config->get('default', 'default');
    }

    /**
     * @param  string|null  $name
     * @return string
     */
    protected function resolveAccountName($name)
    {
        return $name ?: $this->currentAccount ?: $this->getDefaultAccountName();
    }

    public function payment(): PaymentProxy
    {
        return $this->account()->payment();
    }

    public function refund(): RefundProxy
    {
        return $this->account()->refund();
    }

    public function withdraw(): WithdrawProxy
    {
        return $this->account()->withdraw();
    }

    public function deposit(): DepositProxy
    {
        return $this->account()->deposit();
    }

    public function bill(): BillProxy
    {
        return $this->account()->bill();
    }

    public function employee(): EmployeeProxy
    {
        return $this->account()->employee();
    }

    public function bank(): BankProxy
    {
        return $this->account()->bank();
    }

    public function profitAllocation(): ProfitAllocationProxy
    {
        return $this->account()->profitAllocation();
    }
}
