<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\Payment;
use Entpay\Mse\Client\Model\PaymentAllocationParam;
use Entpay\Mse\Client\Model\PaymentCloseParam;
use Entpay\Mse\Client\Model\PaymentH5Param;
use Entpay\Mse\Client\Model\PaymentMpParam;
use Entpay\Mse\Client\Model\PaymentParam;
use Entpay\Mse\Client\Model\PaymentPcParam;
use Entpay\Mse\Client\Model\PaymentQRParam;
use Entpay\Mse\Client\Model\PaymentWecomParam;
use Entpay\Mse\Client\Model\RetrieveIdByBankAttachGetParam;

class PaymentProxy extends AbstractApiProxy
{
    protected $sdkClass = Payment::class;

    protected $paramMap = [
        'close' => PaymentCloseParam::class,
        'createH5Pay' => PaymentH5Param::class,
        'createMpPay' => PaymentMpParam::class,
        'createPay' => PaymentParam::class,
        'createPayAllocate' => PaymentAllocationParam::class,
        'createPCPay' => PaymentPcParam::class,
        'createQrCodePay' => PaymentQRParam::class,
        'createWecomPay' => PaymentWecomParam::class,
        'createWecomPayReg' => PaymentWecomParam::class,
        'retrieveIdByBankAttach' => RetrieveIdByBankAttachGetParam::class,
    ];

    /**
     * Close a payment order.
     *
     * @param  string  $paymentId
     * @param  array|\Entpay\Mse\Client\Model\PaymentCloseParam  $param
     * @return \Entpay\Mse\Client\Model\PaymentClose
     */
    public function close($paymentId, $param)
    {
        return $this->call('close', $param, PaymentCloseParam::class, [$paymentId]);
    }

    /**
     * Create an app payment.
     *
     * @param  array|\Entpay\Mse\Client\Model\PaymentParam  $param
     * @return \Entpay\Mse\Client\Api\Payment
     */
    public function createPay($param)
    {
        return $this->call('createPay', $param, PaymentParam::class);
    }

    /**
     * Create an H5 payment.
     *
     * @param  array|\Entpay\Mse\Client\Model\PaymentH5Param  $param
     * @return \Entpay\Mse\Client\Api\Payment
     */
    public function createH5Pay($param)
    {
        return $this->call('createH5Pay', $param, PaymentH5Param::class);
    }

    /**
     * Create a mini-program payment.
     *
     * @param  array|\Entpay\Mse\Client\Model\PaymentMpParam  $param
     * @return \Entpay\Mse\Client\Api\Payment
     */
    public function createMpPay($param)
    {
        return $this->call('createMpPay', $param, PaymentMpParam::class);
    }

    /**
     * Create a PC payment.
     *
     * @param  array|\Entpay\Mse\Client\Model\PaymentPcParam  $param
     * @return \Entpay\Mse\Client\Api\Payment
     */
    public function createPCPay($param)
    {
        return $this->call('createPCPay', $param, PaymentPcParam::class);
    }

    /**
     * Create a QR code payment.
     *
     * @param  array|\Entpay\Mse\Client\Model\PaymentQRParam  $param
     * @return \Entpay\Mse\Client\Api\Payment
     */
    public function createQrCodePay($param)
    {
        return $this->call('createQrCodePay', $param, PaymentQRParam::class);
    }

    /**
     * Create a WeCom payment.
     *
     * @param  array|\Entpay\Mse\Client\Model\PaymentWecomParam  $param
     * @return \Entpay\Mse\Client\Api\Payment
     */
    public function createWecomPay($param)
    {
        return $this->call('createWecomPay', $param, PaymentWecomParam::class);
    }

    /**
     * Create a WeCom registering payment.
     *
     * @param  array|\Entpay\Mse\Client\Model\PaymentWecomParam  $param
     * @return \Entpay\Mse\Client\Api\Payment
     */
    public function createWecomPayReg($param)
    {
        return $this->call('createWecomPayReg', $param, PaymentWecomParam::class);
    }

    /**
     * Create a payment with profit allocation.
     *
     * @param  array|\Entpay\Mse\Client\Model\PaymentAllocationParam  $param
     * @return \Entpay\Mse\Client\Api\Payment
     */
    public function createPayAllocate($param)
    {
        return $this->call('createPayAllocate', $param, PaymentAllocationParam::class);
    }

    /**
     * Retrieve a payment by ID.
     *
     * @param  string  $paymentId
     * @return \Entpay\Mse\Client\Api\Payment
     */
    public function retrieve($paymentId)
    {
        return $this->callWithoutParam('retrieve', [$paymentId]);
    }

    /**
     * Retrieve a payment by out payment ID.
     *
     * @param  string  $outPaymentId
     * @return \Entpay\Mse\Client\Api\Payment
     */
    public function retrieveByOutPaymentId($outPaymentId)
    {
        return $this->callWithoutParam('retrieveByOutPaymentId', [$outPaymentId]);
    }

    /**
     * Retrieve payment fee.
     *
     * @param  string  $paymentId
     * @return \Entpay\Mse\Client\Api\Payment
     */
    public function retrieveFee($paymentId)
    {
        return $this->callWithoutParam('retrieveFee', [$paymentId]);
    }

    /**
     * Retrieve payment ID by bank attach.
     *
     * @param  array|\Entpay\Mse\Client\Model\RetrieveIdByBankAttachGetParam|null  $param
     * @return \Entpay\Mse\Client\Model\PaymentId
     */
    public function retrieveIdByBankAttach($param = null)
    {
        return $this->call('retrieveIdByBankAttach', $param, RetrieveIdByBankAttachGetParam::class);
    }
}
