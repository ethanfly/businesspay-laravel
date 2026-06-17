<?php

namespace Ethanfly\BusinessPay\Tests;

use Ethanfly\BusinessPay\Api\PaymentProxy;
use Ethanfly\BusinessPay\Api\RefundProxy;
use Ethanfly\BusinessPay\BusinessPayManager;

class ManagerTest extends TestCase
{
    public function test_manager_resolves_api_proxies()
    {
        $manager = $this->app->make(BusinessPayManager::class);

        $this->assertInstanceOf(PaymentProxy::class, $manager->payment());
        $this->assertInstanceOf(RefundProxy::class, $manager->refund());
    }

    public function test_using_method_returns_manager_instance()
    {
        $manager = $this->app->make(BusinessPayManager::class);

        $this->app['config']->set('businesspay.accounts.second', $this->defaultAccountConfig());

        $this->assertSame($manager, $manager->using('second'));
        $this->assertEquals('second', $manager->account()->getName());
    }

    public function test_manager_is_singleton()
    {
        $a = $this->app->make(BusinessPayManager::class);
        $b = $this->app->make(BusinessPayManager::class);

        $this->assertSame($a, $b);
    }
}
