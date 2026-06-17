<?php

namespace Ethanfly\BusinessPay\Tests;

use Entpay\Mse\Client\Model\PaymentNotifyModel;
use Entpay\Mse\Client\Utils\JsonUtil;
use Ethanfly\BusinessPay\Notify\NotifyHandler;
use Illuminate\Http\Request;

class NotifyHandlerContainerTest extends TestCase
{
    public function test_container_resolves_notify_handler_with_default_account()
    {
        $this->app['config']->set('businesspay.accounts.default.tbep_public_key', $this->fixtureKey('tbep_public.pem'));

        $handler = $this->app->make(NotifyHandler::class);
        $this->assertInstanceOf(NotifyHandler::class, $handler);

        $payload = [
            'api_version' => 'v3',
            'live_mode' => false,
            'event_id' => 'evt-container',
            'event_type' => 'PAYMENT.SUCCEEDED',
            'pending_webhooks' => 0,
            'create_time' => '2024-01-01T00:00:00+08:00',
            'event_content' => [
                'payment_id' => 'container-payment-id',
                'out_payment_id' => 'container-out',
                'pay_status' => 'SUCCEEDED',
                'amount' => 100,
                'currency' => 'CNY',
                'payer' => ['acct_type' => 'BASIC'],
                'payee' => ['acct_type' => 'BASIC'],
            ],
        ];

        $body = json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $auth = $this->signWebhookAuthorization($body, $this->fixtureKey('tbep_private.pem'));

        $request = Request::create('/notify', 'POST', [], [], [], [
            'CONTENT_TYPE' => 'application/json',
        ], $body);
        $request->headers->set('Authorization', $auth);

        $model = $handler->handleRequest($request, PaymentNotifyModel::class);

        $this->assertInstanceOf(PaymentNotifyModel::class, $model);
        $this->assertEquals('PAYMENT.SUCCEEDED', $model->getEventType());
        $this->assertEquals('container-payment-id', $model->getEventContent()->getPaymentId());
    }

    protected function signWebhookAuthorization($body, $privateKey)
    {
        $sortedBody = JsonUtil::sortJson($body);
        if (substr($body, -1) === "\n") {
            $sortedBody .= "\n";
        }

        $nonce = 'container-nonce';
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
