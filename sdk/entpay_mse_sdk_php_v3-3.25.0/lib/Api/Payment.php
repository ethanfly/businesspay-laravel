<?php
/**
 * Payment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */

/**
 * NOTE: File generated from our OpenAPI spec (https://business.tenpay.com).
 * https://business.tenpay.com
 * Do not edit the class manually.
 */

namespace Entpay\Mse\Client\Api;

use ArrayAccess;
use Entpay\Mse\Client\Http\EntpayClient;
use Entpay\Mse\Client\Model\ModelInterface;
use Entpay\Mse\Client\Model\PaymentClose;
use Entpay\Mse\Client\Model\PaymentId;
use Entpay\Mse\Client\ObjectSerializer;
use JsonSerializable;

/**
 * Payment Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class Payment implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Payment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'payment_id'     => 'string',
        'out_payment_id' => 'string',
        'user_openid'    => 'string',
        'amount'         => 'int',
        'currency'       => '\Entpay\Mse\Client\Model\CurrencyEnum',
        'payer'          => '\Entpay\Mse\Client\Model\PaymentPayerRsp',
        'payee'          => '\Entpay\Mse\Client\Model\PaymentPayeeRsp',
        'pay_status'     => 'string',
        'memo'           => 'string',
        'failed_reason'  => '\Entpay\Mse\Client\Model\FailReason',
        'attachment'     => 'string',
        'pay_time'       => 'string',
        'fee_amount'     => 'int',
        'mse_fee_amount' => 'int',
        'wxp_fee_amount' => 'int',
        'settle_status'  => 'string',
        'settle_time'    => 'string',
        'bank_attach'    => 'string',
        'redirect'       => '\Entpay\Mse\Client\Api\Redirect',
        'coupon_amount'  => 'int',
        'order_amount'   => 'int',
        'coupon_detail'  => '\Entpay\Mse\Client\Model\CouponDetailInfo[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'payment_id'     => null,
        'out_payment_id' => null,
        'user_openid'    => null,
        'amount'         => 'int64',
        'currency'       => null,
        'payer'          => 'decrypted|true',
        'payee'          => 'decrypted|true',
        'pay_status'     => null,
        'memo'           => null,
        'failed_reason'  => null,
        'attachment'     => null,
        'pay_time'       => null,
        'fee_amount'     => 'int64',
        'mse_fee_amount' => 'int64',
        'wxp_fee_amount' => 'int64',
        'settle_status'  => null,
        'settle_time'    => null,
        'bank_attach'    => null,
        'redirect'       => null,
        'coupon_amount'  => 'int64',
        'order_amount'   => 'int64',
        'coupon_detail'  => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'payment_id'     => 'payment_id',
        'out_payment_id' => 'out_payment_id',
        'user_openid'    => 'user_openid',
        'amount'         => 'amount',
        'currency'       => 'currency',
        'payer'          => 'payer',
        'payee'          => 'payee',
        'pay_status'     => 'pay_status',
        'memo'           => 'memo',
        'failed_reason'  => 'failed_reason',
        'attachment'     => 'attachment',
        'pay_time'       => 'pay_time',
        'fee_amount'     => 'fee_amount',
        'mse_fee_amount' => 'mse_fee_amount',
        'wxp_fee_amount' => 'wxp_fee_amount',
        'settle_status'  => 'settle_status',
        'settle_time'    => 'settle_time',
        'bank_attach'    => 'bank_attach',
        'redirect'       => 'redirect',
        'coupon_amount'  => 'coupon_amount',
        'order_amount'   => 'order_amount',
        'coupon_detail'  => 'coupon_detail',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_id'     => 'setPaymentId',
        'out_payment_id' => 'setOutPaymentId',
        'user_openid'    => 'setUserOpenid',
        'amount'         => 'setAmount',
        'currency'       => 'setCurrency',
        'payer'          => 'setPayer',
        'payee'          => 'setPayee',
        'pay_status'     => 'setPayStatus',
        'memo'           => 'setMemo',
        'failed_reason'  => 'setFailedReason',
        'attachment'     => 'setAttachment',
        'pay_time'       => 'setPayTime',
        'fee_amount'     => 'setFeeAmount',
        'mse_fee_amount' => 'setMseFeeAmount',
        'wxp_fee_amount' => 'setWxpFeeAmount',
        'settle_status'  => 'setSettleStatus',
        'settle_time'    => 'setSettleTime',
        'bank_attach'    => 'setBankAttach',
        'redirect'       => 'setRedirect',
        'coupon_amount'  => 'setCouponAmount',
        'order_amount'   => 'setOrderAmount',
        'coupon_detail'  => 'setCouponDetail',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_id'     => 'getPaymentId',
        'out_payment_id' => 'getOutPaymentId',
        'user_openid'    => 'getUserOpenid',
        'amount'         => 'getAmount',
        'currency'       => 'getCurrency',
        'payer'          => 'getPayer',
        'payee'          => 'getPayee',
        'pay_status'     => 'getPayStatus',
        'memo'           => 'getMemo',
        'failed_reason'  => 'getFailedReason',
        'attachment'     => 'getAttachment',
        'pay_time'       => 'getPayTime',
        'fee_amount'     => 'getFeeAmount',
        'mse_fee_amount' => 'getMseFeeAmount',
        'wxp_fee_amount' => 'getWxpFeeAmount',
        'settle_status'  => 'getSettleStatus',
        'settle_time'    => 'getSettleTime',
        'bank_attach'    => 'getBankAttach',
        'redirect'       => 'getRedirect',
        'coupon_amount'  => 'getCouponAmount',
        'order_amount'   => 'getOrderAmount',
        'coupon_detail'  => 'getCouponDetail',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const PAY_STATUS_PROCESSING    = 'PROCESSING';
    const PAY_STATUS_BANK_ACCEPTED = 'BANK_ACCEPTED';
    const PAY_STATUS_SUCCEEDED     = 'SUCCEEDED';
    const PAY_STATUS_CLEARING      = 'CLEARING';
    const PAY_STATUS_REVOKED       = 'REVOKED';
    const PAY_STATUS_CLOSED        = 'CLOSED';
    const SETTLE_STATUS_INIT       = 'INIT';
    const SETTLE_STATUS_SETTLING   = 'SETTLING';
    const SETTLE_STATUS_SETTLED    = 'SETTLED';

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    public $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['payment_id']     = isset($data['payment_id']) ? $data['payment_id'] : null;
        $this->container['out_payment_id'] = isset($data['out_payment_id']) ? $data['out_payment_id'] : null;
        $this->container['user_openid']    = isset($data['user_openid']) ? $data['user_openid'] : null;
        $this->container['amount']         = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency']       = isset($data['currency']) ? $data['currency'] : null;
        $this->container['payer']          = isset($data['payer']) ? $data['payer'] : null;
        $this->container['payee']          = isset($data['payee']) ? $data['payee'] : null;
        $this->container['pay_status']     = isset($data['pay_status']) ? $data['pay_status'] : null;
        $this->container['memo']           = isset($data['memo']) ? $data['memo'] : null;
        $this->container['failed_reason']  = isset($data['failed_reason']) ? $data['failed_reason'] : null;
        $this->container['attachment']     = isset($data['attachment']) ? $data['attachment'] : null;
        $this->container['pay_time']       = isset($data['pay_time']) ? $data['pay_time'] : null;
        $this->container['fee_amount']     = isset($data['fee_amount']) ? $data['fee_amount'] : null;
        $this->container['mse_fee_amount'] = isset($data['mse_fee_amount']) ? $data['mse_fee_amount'] : null;
        $this->container['wxp_fee_amount'] = isset($data['wxp_fee_amount']) ? $data['wxp_fee_amount'] : null;
        $this->container['settle_status']  = isset($data['settle_status']) ? $data['settle_status'] : null;
        $this->container['settle_time']    = isset($data['settle_time']) ? $data['settle_time'] : null;
        $this->container['bank_attach']    = isset($data['bank_attach']) ? $data['bank_attach'] : null;
        $this->container['redirect']       = isset($data['redirect']) ? $data['redirect'] : null;
        $this->container['coupon_amount']  = isset($data['coupon_amount']) ? $data['coupon_amount'] : null;
        $this->container['order_amount']   = isset($data['order_amount']) ? $data['order_amount'] : null;
        $this->container['coupon_detail']  = isset($data['coupon_detail']) ? $data['coupon_detail'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['payment_id']) {
            $invalidProperties[] = "'payment_id' can't be null";
        }
        if ((mb_strlen($this->container['payment_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'payment_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['payment_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'payment_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['out_payment_id']) {
            $invalidProperties[] = "'out_payment_id' can't be null";
        }
        if ((mb_strlen($this->container['out_payment_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_payment_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_payment_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_payment_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (null === $this->container['currency']) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if (null === $this->container['payer']) {
            $invalidProperties[] = "'payer' can't be null";
        }
        if (null === $this->container['payee']) {
            $invalidProperties[] = "'payee' can't be null";
        }
        if (null === $this->container['pay_status']) {
            $invalidProperties[] = "'pay_status' can't be null";
        }
        if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) > 128)) {
            $invalidProperties[] = "invalid value for 'memo', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) < 0)) {
            $invalidProperties[] = "invalid value for 'memo', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['attachment']) && (mb_strlen($this->container['attachment']) > 255)) {
            $invalidProperties[] = "invalid value for 'attachment', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['attachment']) && (mb_strlen($this->container['attachment']) < 1)) {
            $invalidProperties[] = "invalid value for 'attachment', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets payment_id.
     *
     * @return string
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id.
     *
     * @param string $payment_id 微企付支付单号
     *
     * @return self
     */
    public function setPaymentId($payment_id)
    {
        $this->container['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Gets out_payment_id.
     *
     * @return string
     */
    public function getOutPaymentId()
    {
        return $this->container['out_payment_id'];
    }

    /**
     * Sets out_payment_id.
     *
     * @param string $out_payment_id 平台支付单号
     *
     * @return self
     */
    public function setOutPaymentId($out_payment_id)
    {
        $this->container['out_payment_id'] = $out_payment_id;

        return $this;
    }

    /**
     * Gets user_openid.
     *
     * @return string|null
     */
    public function getUserOpenid()
    {
        return $this->container['user_openid'];
    }

    /**
     * Sets user_openid.
     *
     * @param string|null $user_openid 微企付用户openId
     *
     * @return self
     */
    public function setUserOpenid($user_openid)
    {
        $this->container['user_openid'] = $user_openid;

        return $this;
    }

    /**
     * Gets amount.
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount.
     *
     * @param int $amount 下单金额
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency.
     *
     * @return \Entpay\Mse\Client\Model\CurrencyEnum
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency.
     *
     * @param \Entpay\Mse\Client\Model\CurrencyEnum $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets payer.
     *
     * @return \Entpay\Mse\Client\Model\PaymentPayerRsp
     */
    public function getPayer()
    {
        return $this->container['payer'];
    }

    /**
     * Sets payer.
     *
     * @param \Entpay\Mse\Client\Model\PaymentPayerRsp $payer payer
     *
     * @return self
     */
    public function setPayer($payer)
    {
        $this->container['payer'] = $payer;

        return $this;
    }

    /**
     * Gets payee.
     *
     * @return \Entpay\Mse\Client\Model\PaymentPayeeRsp
     */
    public function getPayee()
    {
        return $this->container['payee'];
    }

    /**
     * Sets payee.
     *
     * @param \Entpay\Mse\Client\Model\PaymentPayeeRsp $payee payee
     *
     * @return self
     */
    public function setPayee($payee)
    {
        $this->container['payee'] = $payee;

        return $this;
    }

    /**
     * Gets pay_status.
     *
     * @return string
     */
    public function getPayStatus()
    {
        return $this->container['pay_status'];
    }

    /**
     * Sets pay_status.
     *
     * @param string $pay_status 支付状态
     *
     * @return self
     */
    public function setPayStatus($pay_status)
    {
        $this->container['pay_status'] = $pay_status;

        return $this;
    }

    /**
     * Gets memo.
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo.
     *
     * @param string|null $memo 附言
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets failed_reason.
     *
     * @return \Entpay\Mse\Client\Model\FailReason|null
     */
    public function getFailedReason()
    {
        return $this->container['failed_reason'];
    }

    /**
     * Sets failed_reason.
     *
     * @param \Entpay\Mse\Client\Model\FailReason|null $failed_reason failed_reason
     *
     * @return self
     */
    public function setFailedReason($failed_reason)
    {
        $this->container['failed_reason'] = $failed_reason;

        return $this;
    }

    /**
     * Gets attachment.
     *
     * @return string|null
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment.
     *
     * @param string|null $attachment 订单附加信息
     *
     * @return self
     */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;

        return $this;
    }

    /**
     * Gets pay_time.
     *
     * @return string|null
     */
    public function getPayTime()
    {
        return $this->container['pay_time'];
    }

    /**
     * Sets pay_time.
     *
     * @param string|null $pay_time 支付成功时间
     *
     * @return self
     */
    public function setPayTime($pay_time)
    {
        $this->container['pay_time'] = $pay_time;

        return $this;
    }

    /**
     * Gets fee_amount.
     *
     * @return int|null
     */
    public function getFeeAmount()
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount.
     *
     * @param int|null $fee_amount 总手续费金额
     *
     * @return self
     */
    public function setFeeAmount($fee_amount)
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets mse_fee_amount.
     *
     * @return int|null
     */
    public function getMseFeeAmount()
    {
        return $this->container['mse_fee_amount'];
    }

    /**
     * Sets mse_fee_amount.
     *
     * @param int|null $mse_fee_amount 微企付手续费金额
     *
     * @return self
     */
    public function setMseFeeAmount($mse_fee_amount)
    {
        $this->container['mse_fee_amount'] = $mse_fee_amount;

        return $this;
    }

    /**
     * Gets wxp_fee_amount.
     *
     * @return int|null
     */
    public function getWxpFeeAmount()
    {
        return $this->container['wxp_fee_amount'];
    }

    /**
     * Sets wxp_fee_amount.
     *
     * @param int|null $wxp_fee_amount 微信手续费金额
     *
     * @return self
     */
    public function setWxpFeeAmount($wxp_fee_amount)
    {
        $this->container['wxp_fee_amount'] = $wxp_fee_amount;

        return $this;
    }

    /**
     * Gets settle_status.
     *
     * @return string|null
     */
    public function getSettleStatus()
    {
        return $this->container['settle_status'];
    }

    /**
     * Sets settle_status.
     *
     * @param string|null $settle_status 结算状态
     *
     * @return self
     */
    public function setSettleStatus($settle_status)
    {
        $this->container['settle_status'] = $settle_status;

        return $this;
    }

    /**
     * Gets settle_time.
     *
     * @return string|null
     */
    public function getSettleTime()
    {
        return $this->container['settle_time'];
    }

    /**
     * Sets settle_time.
     *
     * @param string|null $settle_time 结算时间
     *
     * @return self
     */
    public function setSettleTime($settle_time)
    {
        $this->container['settle_time'] = $settle_time;

        return $this;
    }

    /**
     * Gets bank_attach.
     *
     * @return string|null
     */
    public function getBankAttach()
    {
        return $this->container['bank_attach'];
    }

    /**
     * Sets bank_attach.
     *
     * @param string|null $bank_attach 转账银行附言
     *
     * @return self
     */
    public function setBankAttach($bank_attach)
    {
        $this->container['bank_attach'] = $bank_attach;

        return $this;
    }

    /**
     * Gets redirect.
     *
     * @return \Entpay\Mse\Client\Api\Redirect|null
     */
    public function getRedirect()
    {
        return $this->container['redirect'];
    }

    /**
     * Sets redirect.
     *
     * @param \Entpay\Mse\Client\Api\Redirect|null $redirect redirect
     *
     * @return self
     */
    public function setRedirect($redirect)
    {
        $this->container['redirect'] = $redirect;

        return $this;
    }

    /**
     * Gets coupon_amount.
     *
     * @return int|null
     */
    public function getCouponAmount()
    {
        return $this->container['coupon_amount'];
    }

    /**
     * Sets coupon_amount.
     *
     * @param int|null $coupon_amount 优惠金额
     *
     * @return self
     */
    public function setCouponAmount($coupon_amount)
    {
        $this->container['coupon_amount'] = $coupon_amount;

        return $this;
    }

    /**
     * Gets order_amount.
     *
     * @return int|null
     */
    public function getOrderAmount()
    {
        return $this->container['order_amount'];
    }

    /**
     * Sets order_amount.
     *
     * @param int|null $order_amount 支付金额
     *
     * @return self
     */
    public function setOrderAmount($order_amount)
    {
        $this->container['order_amount'] = $order_amount;

        return $this;
    }

    /**
     * Gets coupon_detail.
     *
     * @return \Entpay\Mse\Client\Model\CouponDetailInfo[]|null
     */
    public function getCouponDetail()
    {
        return $this->container['coupon_detail'];
    }

    /**
     * Sets coupon_detail.
     *
     * @param \Entpay\Mse\Client\Model\CouponDetailInfo[]|null $coupon_detail 优惠信息
     *
     * @return self
     */
    public function setCouponDetail($coupon_detail)
    {
        $this->container['coupon_detail'] = $coupon_detail;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Create request for operation 'close'.
     *
     * @param string                                     $payment_id          (required)
     * @param \Entpay\Mse\Client\Model\PaymentCloseParam $payment_close_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions   $request_options     (optional)
     *
     * @throws \InvalidArgumentException
     * @return PaymentClose
     */
    public static function close($payment_id, $payment_close_param, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/payments/%s/close', urlencode($payment_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $payment_close_param,
            PaymentClose::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'createH5Pay'.
     *
     * @param \Entpay\Mse\Client\Model\PaymentH5Param  $payment_h5_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options  (optional)
     *
     * @throws \InvalidArgumentException
     * @return Payment
     */
    public static function createH5Pay($payment_h5_param, $request_options = null)
    {
        $path = '/v3/mse-pay/payments/h5-pay';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $payment_h5_param,
            Payment::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'createMpPay'.
     *
     * @param \Entpay\Mse\Client\Model\PaymentMpParam  $payment_mp_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options  (optional)
     *
     * @throws \InvalidArgumentException
     * @return Payment
     */
    public static function createMpPay($payment_mp_param, $request_options = null)
    {
        $path = '/v3/mse-pay/payments/mp-pay';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $payment_mp_param,
            Payment::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'createPcPay'.
     *
     * @param \Entpay\Mse\Client\Model\PaymentPcParam  $payment_pc_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options  (optional)
     *
     * @throws \InvalidArgumentException
     * @return Payment
     */
    public static function createPCPay($payment_pc_param, $request_options = null)
    {
        $path = '/v3/mse-pay/payments/pc-pay';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $payment_pc_param,
            Payment::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'createPay'.
     *
     * @param \Entpay\Mse\Client\Model\PaymentParam    $payment_param   (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return Payment
     */
    public static function createPay($payment_param, $request_options = null)
    {
        $path = '/v3/mse-pay/payments/app-pay';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $payment_param,
            Payment::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'createPayAllocate'.
     *
     * @param \Entpay\Mse\Client\Model\PaymentAllocationParam $payment_allocation_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions        $request_options          (optional)
     *
     * @throws \InvalidArgumentException
     * @return Payment
     */
    public static function createPayAllocate($payment_allocation_param, $request_options = null)
    {
        $path = '/v3/mse-pay/payments/payment-profit-allocation';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $payment_allocation_param,
            Payment::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'createQrCodePay'.
     *
     * @param \Entpay\Mse\Client\Model\PaymentQRParam  $payment_qr_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options  (optional)
     *
     * @throws \InvalidArgumentException
     * @return Payment
     */
    public static function createQrCodePay($payment_qr_param, $request_options = null)
    {
        $path = '/v3/mse-pay/payments/qrcode-pay';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $payment_qr_param,
            Payment::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'createWecomPay'.
     *
     * @param \Entpay\Mse\Client\Model\PaymentWecomParam $payment_wecom_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions   $request_options     (optional)
     *
     * @throws \InvalidArgumentException
     * @return Payment
     */
    public static function createWecomPay($payment_wecom_param, $request_options = null)
    {
        $path = '/v3/mse-pay/payments/wecom-pay';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $payment_wecom_param,
            Payment::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'createWecomPayReg'.
     *
     * @param \Entpay\Mse\Client\Model\PaymentWecomParam $payment_wecom_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions   $request_options     (optional)
     *
     * @throws \InvalidArgumentException
     * @return Payment
     */
    public static function createWecomPayReg($payment_wecom_param, $request_options = null)
    {
        $path = '/v3/mse-pay/payments/wecom-registering-pay';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $payment_wecom_param,
            Payment::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieve'.
     *
     * @param string                                   $payment_id      (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return Payment
     */
    public static function retrieve($payment_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/payments/%s', urlencode($payment_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            Payment::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveByOutPaymentId'.
     *
     * @param string                                   $out_payment_id  (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return Payment
     */
    public static function retrieveByOutPaymentId($out_payment_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/payments/out-payment-id/%s', urlencode($out_payment_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            Payment::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveFee'.
     *
     * @param string                                   $payment_id      (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return Payment
     */
    public static function retrieveFee($payment_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/payments/fee/%s', urlencode($payment_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            Payment::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveIdByBankAttach'.
     *
     * @param \Entpay\Mse\Client\Model\RetrieveIdByBankAttachGetParam $param           (optional)
     * @param \Entpay\Mse\Client\Config\RequestOptions                $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return PaymentId
     */
    public static function retrieveIdByBankAttach($param = null, $request_options = null)
    {
        $path = '/v3/mse-pay/payments';
        if (null != $param) {
            $path = $path . '?' . http_build_query($param->container);
        }

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            PaymentId::class,
            $request_options
        );
    }
}
