<?php
/**
 * PaymentId.
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
 * PaymentId Class Doc Comment.
 *
 * @category Class
 * @description 根据附言查询订单号响应参数
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentId implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PaymentId';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'payment_id'     => 'string',
        'out_payment_id' => 'string',
        'bank_attach'    => 'string',
        'amount'         => 'int',
        'ent_id'         => 'string',
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
        'bank_attach'    => null,
        'amount'         => 'int64',
        'ent_id'         => null,
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
        'bank_attach'    => 'bank_attach',
        'amount'         => 'amount',
        'ent_id'         => 'ent_id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_id'     => 'setPaymentId',
        'out_payment_id' => 'setOutPaymentId',
        'bank_attach'    => 'setBankAttach',
        'amount'         => 'setAmount',
        'ent_id'         => 'setEntId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_id'     => 'getPaymentId',
        'out_payment_id' => 'getOutPaymentId',
        'bank_attach'    => 'getBankAttach',
        'amount'         => 'getAmount',
        'ent_id'         => 'getEntId',
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
        $this->container['payment_id']     = isset($data['payment_id']) ? $data['payment_id'] : null;
        $this->container['out_payment_id'] = isset($data['out_payment_id']) ? $data['out_payment_id'] : null;
        $this->container['bank_attach']    = isset($data['bank_attach']) ? $data['bank_attach'] : null;
        $this->container['amount']         = isset($data['amount']) ? $data['amount'] : null;
        $this->container['ent_id']         = isset($data['ent_id']) ? $data['ent_id'] : null;
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

        if (null === $this->container['bank_attach']) {
            $invalidProperties[] = "'bank_attach' can't be null";
        }
        if ((mb_strlen($this->container['bank_attach']) > 128)) {
            $invalidProperties[] = "invalid value for 'bank_attach', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['bank_attach']) < 1)) {
            $invalidProperties[] = "invalid value for 'bank_attach', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (null === $this->container['ent_id']) {
            $invalidProperties[] = "'ent_id' can't be null";
        }
        if ((mb_strlen($this->container['ent_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['ent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be bigger than or equal to 1.";
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
     * Gets bank_attach.
     *
     * @return string
     */
    public function getBankAttach()
    {
        return $this->container['bank_attach'];
    }

    /**
     * Sets bank_attach.
     *
     * @param string $bank_attach 银行转帐附言
     *
     * @return self
     */
    public function setBankAttach($bank_attach)
    {
        $this->container['bank_attach'] = $bank_attach;

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
     * @param int $amount 支付金额
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
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
     * @param string $ent_id 商户Id
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

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
