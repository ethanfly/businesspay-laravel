<?php

namespace Ethanfly\BusinessPay\Tests;

use Ethanfly\BusinessPay\BusinessPayServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            BusinessPayServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'BusinessPay' => \Ethanfly\BusinessPay\Facades\BusinessPay::class,
        ];
    }

    protected function defineEnvironment($app)
    {
        $app['config']->set('businesspay.default', 'default');
        $app['config']->set('businesspay.accounts.default', $this->defaultAccountConfig());
    }

    protected function defaultAccountConfig()
    {
        return [
            'env' => 'sandbox',
            'platform_id' => 'test-platform-id',
            'platform_private_key' => $this->fixtureKey('test_private.pem'),
            'platform_private_cert_serial_no' => 'test-serial-no',
            'tbep_serial_number' => 'test-tbep-serial',
            'tbep_public_key' => $this->fixtureKey('test_public.pem'),
            'timeout' => 10,
        ];
    }

    protected function fixtureKey($filename)
    {
        $path = __DIR__.'/fixtures/'.$filename;

        if (! is_file($path) || ! is_readable($path)) {
            throw new \RuntimeException("Fixture key not found: {$path}");
        }

        $contents = file_get_contents($path);

        if ($contents === false) {
            throw new \RuntimeException("Failed to read fixture key: {$path}");
        }

        return $contents;
    }

    protected function generateKeyPair()
    {
        $config = [
            'private_key_type' => OPENSSL_KEYTYPE_RSA,
            'private_key_bits' => 2048,
        ];

        $res = openssl_pkey_new($config);

        if ($res === false) {
            throw new \RuntimeException('Failed to generate OpenSSL key pair.');
        }

        openssl_pkey_export($res, $privateKey);

        $details = openssl_pkey_get_details($res);

        return [
            'private' => $privateKey,
            'public' => $details['key'],
        ];
    }
}
