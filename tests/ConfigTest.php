<?php

namespace Ethanfly\BusinessPay\Tests;

use Ethanfly\BusinessPay\BusinessPayManager;

class ConfigTest extends TestCase
{
    public function test_default_account_is_loaded()
    {
        $manager = $this->app->make(BusinessPayManager::class);
        $account = $manager->account();

        $this->assertInstanceOf(\Ethanfly\BusinessPay\BusinessPayAccount::class, $account);
        $this->assertEquals('default', $account->getName());
    }

    public function test_account_switching()
    {
        $this->app['config']->set('businesspay.accounts.second', [
            'env' => 'production',
            'platform_id' => 'second-platform-id',
            'platform_private_key' => $this->defaultAccountConfig()['platform_private_key'],
            'platform_private_cert_serial_no' => 'second-serial',
            'tbep_serial_number' => 'second-tbep-serial',
            'tbep_public_key' => $this->defaultAccountConfig()['tbep_public_key'],
        ]);

        $manager = $this->app->make(BusinessPayManager::class);

        $this->assertEquals('second-platform-id', $manager->account('second')->getConfigValue('platform_id'));
        $this->assertEquals('test-platform-id', $manager->account()->getConfigValue('platform_id'));
    }

    public function test_undefined_account_throws_exception()
    {
        $this->expectException(\InvalidArgumentException::class);

        $manager = $this->app->make(BusinessPayManager::class);
        $manager->account('missing');
    }
}
