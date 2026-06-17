<?php

namespace Ethanfly\BusinessPay\Notify;

use Entpay\Mse\Client\Config\EntpayConfig;
use Entpay\Mse\Client\Http\NotifyHandler as SdkNotifyHandler;
use Entpay\Mse\Client\Model\ModelInterface;
use Ethanfly\BusinessPay\BusinessPayAccount;
use Ethanfly\BusinessPay\Exceptions\BusinessPayException;
use Illuminate\Http\Request;
use InvalidArgumentException;

class NotifyHandler
{
    /**
     * @var BusinessPayAccount|null
     */
    protected $account;

    /**
     * @var string|null
     */
    protected $publicKey;

    public function __construct(?BusinessPayAccount $account = null, ?string $publicKey = null)
    {
        $this->account = $account;
        $this->publicKey = $publicKey;
    }

    /**
     * Handle a raw webhook body + authorization header.
     *
     * @param  string  $notifyClass SDK notification model class FQCN
     * @return ModelInterface
     */
    public function handle(string $body, string $authorization, string $notifyClass)
    {
        $publicKey = $this->publicKey;

        if ($publicKey === null && $this->account !== null) {
            $publicKey = $this->account->normalizeKey($this->account->getConfigValue('tbep_public_key'));
        }

        if (empty($publicKey)) {
            $publicKey = EntpayConfig::getRealTbepPublicKey(null);
        }

        if (empty($publicKey)) {
            throw new InvalidArgumentException('TBEP public key is required to verify webhook notifications.');
        }

        try {
            return SdkNotifyHandler::handlerWebhook($body, $authorization, $notifyClass, $publicKey);
        } catch (\Entpay\Mse\Client\ApiException $e) {
            throw BusinessPayException::fromApiException($e);
        }
    }

    /**
     * Handle a Laravel request.
     *
     *
     * @return ModelInterface
     */
    public function handleRequest(Request $request, string $notifyClass)
    {
        $body = $request->getContent();
        $authorization = $request->header('Authorization', '');

        return $this->handle($body, $authorization, $notifyClass);
    }

    /**
     * Set the public key used for verification.
     *
     *
     * @return $this
     */
    public function withPublicKey(string $publicKey)
    {
        $this->publicKey = $publicKey;

        return $this;
    }

    /**
     * Set the account used to resolve the public key.
     *
     *
     * @return $this
     */
    public function withAccount(BusinessPayAccount $account)
    {
        $this->account = $account;

        return $this;
    }
}
