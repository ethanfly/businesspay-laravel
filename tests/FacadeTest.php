<?php

namespace Ethanfly\BusinessPay\Tests;

use Ethanfly\BusinessPay\Facades\BusinessPay;

class FacadeTest extends TestCase
{
    public function test_facade_resolves_manager()
    {
        $this->assertInstanceOf(
            \Ethanfly\BusinessPay\BusinessPayManager::class,
            BusinessPay::getFacadeRoot()
        );
    }

    public function test_facade_account_method()
    {
        $account = BusinessPay::account();

        $this->assertInstanceOf(\Ethanfly\BusinessPay\BusinessPayAccount::class, $account);
        $this->assertEquals('default', $account->getName());
    }

    public function test_facade_api_proxy_method()
    {
        $this->assertInstanceOf(
            \Ethanfly\BusinessPay\Api\PaymentProxy::class,
            BusinessPay::payment()
        );
    }
}
