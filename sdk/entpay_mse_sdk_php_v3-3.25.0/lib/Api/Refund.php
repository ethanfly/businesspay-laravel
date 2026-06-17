<?php
/**
 * Refund.
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
use Entpay\Mse\Client\ObjectSerializer;
use JsonSerializable;

/**
 * Refund Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class Refund implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Refund';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'refund_id'      => 'string',
        'out_refund_id'  => 'string',
        'payment_id'     => 'string',
        'out_payment_id' => 'string',
        'total_amount'   => 'int',
        'refund_amount'  => 'int',
        'status'         => 'string',
        'refund_reason'  => 'string',
        'succeeded_time' => '\DateTime',
        'created_time'   => '\DateTime',
        'failed_code'    => 'string',
        'failed_msg'     => 'string',
        'fee_amount'     => 'int',
        'funds_account'  => 'string',
        'channel'        => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'refund_id'      => null,
        'out_refund_id'  => null,
        'payment_id'     => null,
        'out_payment_id' => null,
        'total_amount'   => 'int64',
        'refund_amount'  => 'int64',
        'status'         => null,
        'refund_reason'  => null,
        'succeeded_time' => 'date-time',
        'created_time'   => 'date-time',
        'failed_code'    => null,
        'failed_msg'     => null,
        'fee_amount'     => 'int64',
        'funds_account'  => null,
        'channel'        => null,
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
        'refund_id'      => 'refund_id',
        'out_refund_id'  => 'out_refund_id',
        'payment_id'     => 'payment_id',
        'out_payment_id' => 'out_payment_id',
        'total_amount'   => 'total_amount',
        'refund_amount'  => 'refund_amount',
        'status'         => 'status',
        'refund_reason'  => 'refund_reason',
        'succeeded_time' => 'succeeded_time',
        'created_time'   => 'created_time',
        'failed_code'    => 'failed_code',
        'failed_msg'     => 'failed_msg',
        'fee_amount'     => 'fee_amount',
        'funds_account'  => 'funds_account',
        'channel'        => 'channel',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'refund_id'      => 'setRefundId',
        'out_refund_id'  => 'setOutRefundId',
        'payment_id'     => 'setPaymentId',
        'out_payment_id' => 'setOutPaymentId',
        'total_amount'   => 'setTotalAmount',
        'refund_amount'  => 'setRefundAmount',
        'status'         => 'setStatus',
        'refund_reason'  => 'setRefundReason',
        'succeeded_time' => 'setSucceededTime',
        'created_time'   => 'setCreatedTime',
        'failed_code'    => 'setFailedCode',
        'failed_msg'     => 'setFailedMsg',
        'fee_amount'     => 'setFeeAmount',
        'funds_account'  => 'setFundsAccount',
        'channel'        => 'setChannel',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'refund_id'      => 'getRefundId',
        'out_refund_id'  => 'getOutRefundId',
        'payment_id'     => 'getPaymentId',
        'out_payment_id' => 'getOutPaymentId',
        'total_amount'   => 'getTotalAmount',
        'refund_amount'  => 'getRefundAmount',
        'status'         => 'getStatus',
        'refund_reason'  => 'getRefundReason',
        'succeeded_time' => 'getSucceededTime',
        'created_time'   => 'getCreatedTime',
        'failed_code'    => 'getFailedCode',
        'failed_msg'     => 'getFailedMsg',
        'fee_amount'     => 'getFeeAmount',
        'funds_account'  => 'getFundsAccount',
        'channel'        => 'getChannel',
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

    const STATUS_INIT                     = 'INIT';
    const STATUS_ACCEPTED                 = 'ACCEPTED';
    const STATUS_SUCCEEDED                = 'SUCCEEDED';
    const STATUS_CANCELLING               = 'CANCELLING';
    const STATUS_FAILED                   = 'FAILED';
    const STATUS_ABNORMAL                 = 'ABNORMAL';
    const STATUS_MERCHANT_SUCCEEDED       = 'MERCHANT_SUCCEEDED';
    const FUNDS_ACCOUNT_UNSETTLED         = 'UNSETTLED';
    const FUNDS_ACCOUNT_PROFIT_ALLOCATION = 'PROFIT_ALLOCATION';
    const FUNDS_ACCOUNT_BASIC             = 'BASIC';
    const CHANNEL_ORIGINAL                = 'ORIGINAL';
    const CHANNEL_OTHER_BALANCE           = 'OTHER_BALANCE';
    const CHANNEL_OTHER_BANKCARD          = 'OTHER_BANKCARD';

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
        $this->container['refund_id']      = isset($data['refund_id']) ? $data['refund_id'] : null;
        $this->container['out_refund_id']  = isset($data['out_refund_id']) ? $data['out_refund_id'] : null;
        $this->container['payment_id']     = isset($data['payment_id']) ? $data['payment_id'] : null;
        $this->container['out_payment_id'] = isset($data['out_payment_id']) ? $data['out_payment_id'] : null;
        $this->container['total_amount']   = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['refund_amount']  = isset($data['refund_amount']) ? $data['refund_amount'] : null;
        $this->container['status']         = isset($data['status']) ? $data['status'] : null;
        $this->container['refund_reason']  = isset($data['refund_reason']) ? $data['refund_reason'] : null;
        $this->container['succeeded_time'] = isset($data['succeeded_time']) ? $data['succeeded_time'] : null;
        $this->container['created_time']   = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['failed_code']    = isset($data['failed_code']) ? $data['failed_code'] : null;
        $this->container['failed_msg']     = isset($data['failed_msg']) ? $data['failed_msg'] : null;
        $this->container['fee_amount']     = isset($data['fee_amount']) ? $data['fee_amount'] : null;
        $this->container['funds_account']  = isset($data['funds_account']) ? $data['funds_account'] : null;
        $this->container['channel']        = isset($data['channel']) ? $data['channel'] : null;
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

        if (null === $this->container['total_amount']) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        if (null === $this->container['refund_amount']) {
            $invalidProperties[] = "'refund_amount' can't be null";
        }
        if (null === $this->container['refund_reason']) {
            $invalidProperties[] = "'refund_reason' can't be null";
        }
        if ((mb_strlen($this->container['refund_reason']) > 255)) {
            $invalidProperties[] = "invalid value for 'refund_reason', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['refund_reason']) < 1)) {
            $invalidProperties[] = "invalid value for 'refund_reason', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['fee_amount']) {
            $invalidProperties[] = "'fee_amount' can't be null";
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
     * Gets refund_id.
     *
     * @return string|null
     */
    public function getRefundId()
    {
        return $this->container['refund_id'];
    }

    /**
     * Sets refund_id.
     *
     * @param string|null $refund_id refund_id
     *
     * @return self
     */
    public function setRefundId($refund_id)
    {
        $this->container['refund_id'] = $refund_id;

        return $this;
    }

    /**
     * Gets out_refund_id.
     *
     * @return string|null
     */
    public function getOutRefundId()
    {
        return $this->container['out_refund_id'];
    }

    /**
     * Sets out_refund_id.
     *
     * @param string|null $out_refund_id out_refund_id
     *
     * @return self
     */
    public function setOutRefundId($out_refund_id)
    {
        $this->container['out_refund_id'] = $out_refund_id;

        return $this;
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
     * Gets total_amount.
     *
     * @return int
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount.
     *
     * @param int $total_amount 原支付金额
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets refund_amount.
     *
     * @return int
     */
    public function getRefundAmount()
    {
        return $this->container['refund_amount'];
    }

    /**
     * Sets refund_amount.
     *
     * @param int $refund_amount 退款金额
     *
     * @return self
     */
    public function setRefundAmount($refund_amount)
    {
        $this->container['refund_amount'] = $refund_amount;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets refund_reason.
     *
     * @return string
     */
    public function getRefundReason()
    {
        return $this->container['refund_reason'];
    }

    /**
     * Sets refund_reason.
     *
     * @param string $refund_reason 退款金额
     *
     * @return self
     */
    public function setRefundReason($refund_reason)
    {
        $this->container['refund_reason'] = $refund_reason;

        return $this;
    }

    /**
     * Gets succeeded_time.
     *
     * @return \DateTime|null
     */
    public function getSucceededTime()
    {
        return $this->container['succeeded_time'];
    }

    /**
     * Sets succeeded_time.
     *
     * @param \DateTime|null $succeeded_time 退款成功时间
     *
     * @return self
     */
    public function setSucceededTime($succeeded_time)
    {
        $this->container['succeeded_time'] = $succeeded_time;

        return $this;
    }

    /**
     * Gets created_time.
     *
     * @return \DateTime|null
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time.
     *
     * @param \DateTime|null $created_time created_time
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets failed_code.
     *
     * @return string|null
     */
    public function getFailedCode()
    {
        return $this->container['failed_code'];
    }

    /**
     * Sets failed_code.
     *
     * @param string|null $failed_code failed_code
     *
     * @return self
     */
    public function setFailedCode($failed_code)
    {
        $this->container['failed_code'] = $failed_code;

        return $this;
    }

    /**
     * Gets failed_msg.
     *
     * @return string|null
     */
    public function getFailedMsg()
    {
        return $this->container['failed_msg'];
    }

    /**
     * Sets failed_msg.
     *
     * @param string|null $failed_msg failed_msg
     *
     * @return self
     */
    public function setFailedMsg($failed_msg)
    {
        $this->container['failed_msg'] = $failed_msg;

        return $this;
    }

    /**
     * Gets fee_amount.
     *
     * @return int
     */
    public function getFeeAmount()
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount.
     *
     * @param int $fee_amount 退回手续费
     *
     * @return self
     */
    public function setFeeAmount($fee_amount)
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets funds_account.
     *
     * @return string|null
     */
    public function getFundsAccount()
    {
        return $this->container['funds_account'];
    }

    /**
     * Sets funds_account.
     *
     * @param string|null $funds_account funds_account
     *
     * @return self
     */
    public function setFundsAccount($funds_account)
    {
        $this->container['funds_account'] = $funds_account;

        return $this;
    }

    /**
     * Gets channel.
     *
     * @return string|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel.
     *
     * @param string|null $channel channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

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
     * Create request for operation 'abnormalToAvail'.
     *
     * @param \Entpay\Mse\Client\Model\AbnormalToAvailParam $abnormal_to_avail_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions      $request_options         (optional)
     *
     * @throws \InvalidArgumentException
     * @return Refund
     */
    public static function abnormalToAvail($abnormal_to_avail_param, $request_options = null)
    {
        $path = '/v3/mse-pay/refunds/abnormal-to-avail';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $abnormal_to_avail_param,
            Refund::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'create'.
     *
     * @param \Entpay\Mse\Client\Model\RefundParam     $refund_param    (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return Refund
     */
    public static function create($refund_param, $request_options = null)
    {
        $path = '/v3/mse-pay/refunds';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $refund_param,
            Refund::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieve'.
     *
     * @param string                                   $refund_id       (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return Refund
     */
    public static function retrieve($refund_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/refunds/refund-id/%s', urlencode($refund_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            Refund::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveByOutRefundId'.
     *
     * @param string                                   $out_refund_id   (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return Refund
     */
    public static function retrieveByOutRefundId($out_refund_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/refunds/out-refund-id/%s', urlencode($out_refund_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            Refund::class,
            $request_options
        );
    }
}
