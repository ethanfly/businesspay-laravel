<?php

namespace Ethanfly\BusinessPay\Tests;

use Entpay\Mse\Client\Model\PaymentNotifyModel;
use Ethanfly\BusinessPay\BusinessPayManager;
use Ethanfly\BusinessPay\Notify\NotifyHandler;

class NotifyHandlerTest extends TestCase
{
    public function test_notification_is_handled()
    {
        $manager = $this->app->make(BusinessPayManager::class);
        $this->app['config']->set('businesspay.accounts.default.tbep_public_key', $this->fixtureKey('tbep_public.pem'));

        $account = $manager->account();

        $payload = [
            'api_version' => 'v3',
            'live_mode' => false,
            'event_id' => 'evt-test',
            'event_type' => 'PAYMENT.SUCCEEDED',
            'pending_webhooks' => 0,
            'create_time' => '2024-01-01T00:00:00+08:00',
            'event_content' => [
                'payment_id' => 'test-payment-id',
                'out_payment_id' => 'test-out-payment-id',
                'pay_status' => 'SUCCEEDED',
                'amount' => 100,
                'currency' => 'CNY',
                'payer' => ['acct_type' => 'BASIC'],
                'payee' => ['acct_type' => 'BASIC'],
            ],
        ];

        $body = json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $auth = $this->signWebhookAuthorization($body, $this->fixtureKey('tbep_private.pem'));

        $handler = new NotifyHandler($account);
        $model = $handler->handle($body, $auth, PaymentNotifyModel::class);

        $this->assertInstanceOf(PaymentNotifyModel::class, $model);
        $this->assertEquals('PAYMENT.SUCCEEDED', $model->getEventType());
        $this->assertEquals('test-payment-id', $model->getEventContent()->getPaymentId());
        $this->assertEquals('SUCCEEDED', $model->getEventContent()->getPayStatus());
    }

    public function test_notification_with_invalid_signature_throws()
    {
        $manager = $this->app->make(BusinessPayManager::class);
        $account = $manager->account();

        $body = json_encode(['payment_id' => 'test'], JSON_UNESCAPED_UNICODE);
        $auth = 'nonce="123", timestamp="123", signature="invalid"';

        $this->expectException(\Ethanfly\BusinessPay\Exceptions\BusinessPayException::class);

        $handler = new NotifyHandler($account);
        $handler->handle($body, $auth, PaymentNotifyModel::class);
    }

    protected function signWebhookAuthorization($body, $privateKey)
    {
        $sortedBody = \Entpay\Mse\Client\Utils\JsonUtil::sortJson($body);

        // The SDK keeps a trailing newline if the original body had one.
        if (substr($body, -1) === "\n") {
            $sortedBody .= "\n";
        }

        $nonce = 'testnonce';
        $timestamp = time();
        $message = $timestamp."\n".$nonce."\n".$sortedBody."\n";

        openssl_sign($message, $signature, $privateKey, OPENSSL_ALGO_SHA256);
        $signatureB64 = base64_encode($signature);
        $serialNo = 'test-tbep-serial';

        return sprintf(
            'platform_id="test-platform-id",nonce="%s",timestamp="%d",platform_serial_number="%s",signature="%s",signature_algorithm="SHA256withRSA"',
            $nonce,
            $timestamp,
            $serialNo,
            $signatureB64
        );
    }
}
