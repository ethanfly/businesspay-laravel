<?php
/**
 * RefundParam.
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

namespace Entpay\Mse\Client\Model;

use ArrayAccess;
use Entpay\Mse\Client\ObjectSerializer;
use JsonSerializable;

/**
 * RefundParam Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RefundParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'RefundParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'ent_id'            => 'string',
        'out_refund_id'     => 'string',
        'payment_id'        => 'string',
        'out_payment_id'    => 'string',
        'total_amount'      => 'int',
        'refund_amount'     => 'int',
        'refund_reason'     => 'string',
        'server_notify_url' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'ent_id'            => null,
        'out_refund_id'     => null,
        'payment_id'        => null,
        'out_payment_id'    => null,
        'total_amount'      => 'int64',
        'refund_amount'     => 'int64',
        'refund_reason'     => null,
        'server_notify_url' => null,
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
        'ent_id'            => 'ent_id',
        'out_refund_id'     => 'out_refund_id',
        'payment_id'        => 'payment_id',
        'out_payment_id'    => 'out_payment_id',
        'total_amount'      => 'total_amount',
        'refund_amount'     => 'refund_amount',
        'refund_reason'     => 'refund_reason',
        'server_notify_url' => 'server_notify_url',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'ent_id'            => 'setEntId',
        'out_refund_id'     => 'setOutRefundId',
        'payment_id'        => 'setPaymentId',
        'out_payment_id'    => 'setOutPaymentId',
        'total_amount'      => 'setTotalAmount',
        'refund_amount'     => 'setRefundAmount',
        'refund_reason'     => 'setRefundReason',
        'server_notify_url' => 'setServerNotifyUrl',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'ent_id'            => 'getEntId',
        'out_refund_id'     => 'getOutRefundId',
        'payment_id'        => 'getPaymentId',
        'out_payment_id'    => 'getOutPaymentId',
        'total_amount'      => 'getTotalAmount',
        'refund_amount'     => 'getRefundAmount',
        'refund_reason'     => 'getRefundReason',
        'server_notify_url' => 'getServerNotifyUrl',
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
        $this->container['ent_id']            = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['out_refund_id']     = isset($data['out_refund_id']) ? $data['out_refund_id'] : null;
        $this->container['payment_id']        = isset($data['payment_id']) ? $data['payment_id'] : null;
        $this->container['out_payment_id']    = isset($data['out_payment_id']) ? $data['out_payment_id'] : null;
        $this->container['total_amount']      = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['refund_amount']     = isset($data['refund_amount']) ? $data['refund_amount'] : null;
        $this->container['refund_reason']     = isset($data['refund_reason']) ? $data['refund_reason'] : null;
        $this->container['server_notify_url'] = isset($data['server_notify_url']) ? $data['server_notify_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['ent_id']) {
            $invalidProperties[] = "'ent_id' can't be null";
        }
        if ((mb_strlen($this->container['ent_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['ent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['out_refund_id']) {
            $invalidProperties[] = "'out_refund_id' can't be null";
        }
        if ((mb_strlen($this->container['out_refund_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_refund_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_refund_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_refund_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['payment_id']) && (mb_strlen($this->container['payment_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'payment_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['payment_id']) && (mb_strlen($this->container['payment_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'payment_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['out_payment_id']) && (mb_strlen($this->container['out_payment_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_payment_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['out_payment_id']) && (mb_strlen($this->container['out_payment_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_payment_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['total_amount']) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        if (null === $this->container['refund_amount']) {
            $invalidProperties[] = "'refund_amount' can't be null";
        }
        if (!is_null($this->container['refund_reason']) && (mb_strlen($this->container['refund_reason']) > 255)) {
            $invalidProperties[] = "invalid value for 'refund_reason', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['refund_reason']) && (mb_strlen($this->container['refund_reason']) < 1)) {
            $invalidProperties[] = "invalid value for 'refund_reason', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['server_notify_url']) {
            $invalidProperties[] = "'server_notify_url' can't be null";
        }
        if ((mb_strlen($this->container['server_notify_url']) > 255)) {
            $invalidProperties[] = "invalid value for 'server_notify_url', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['server_notify_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'server_notify_url', the character length must be bigger than or equal to 1.";
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
     * Gets ent_id.
     *
     * @return string
     */
    public function getEntId()
    {
        return $this->container['ent_id'];
    }

    /**
     * Sets ent_id.
     *
     * @param string $ent_id ent_id
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

        return $this;
    }

    /**
     * Gets out_refund_id.
     *
     * @return string
     */
    public function getOutRefundId()
    {
        return $this->container['out_refund_id'];
    }

    /**
     * Sets out_refund_id.
     *
     * @param string $out_refund_id out_refund_id
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
     * @return string|null
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id.
     *
     * @param string|null $payment_id payment_id
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
     * @return string|null
     */
    public function getOutPaymentId()
    {
        return $this->container['out_payment_id'];
    }

    /**
     * Sets out_payment_id.
     *
     * @param string|null $out_payment_id out_payment_id
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
     * Gets refund_reason.
     *
     * @return string|null
     */
    public function getRefundReason()
    {
        return $this->container['refund_reason'];
    }

    /**
     * Sets refund_reason.
     *
     * @param string|null $refund_reason 退款原因
     *
     * @return self
     */
    public function setRefundReason($refund_reason)
    {
        $this->container['refund_reason'] = $refund_reason;

        return $this;
    }

    /**
     * Gets server_notify_url.
     *
     * @return string
     */
    public function getServerNotifyUrl()
    {
        return $this->container['server_notify_url'];
    }

    /**
     * Sets server_notify_url.
     *
     * @param string $server_notify_url 回调地址
     *
     * @return self
     */
    public function setServerNotifyUrl($server_notify_url)
    {
        $this->container['server_notify_url'] = $server_notify_url;

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
}
