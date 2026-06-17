<?php
/**
 * RechargeClose.
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
 * RechargeClose Class Doc Comment.
 *
 * @category Class
 * @description 关单响应参数
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RechargeClose implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'RechargeClose';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'recharge_id'     => 'string',
        'out_recharge_id' => 'string',
        'close_time'      => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'recharge_id'     => null,
        'out_recharge_id' => null,
        'close_time'      => 'date-time',
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
        'recharge_id'     => 'recharge_id',
        'out_recharge_id' => 'out_recharge_id',
        'close_time'      => 'close_time',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'recharge_id'     => 'setRechargeId',
        'out_recharge_id' => 'setOutRechargeId',
        'close_time'      => 'setCloseTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'recharge_id'     => 'getRechargeId',
        'out_recharge_id' => 'getOutRechargeId',
        'close_time'      => 'getCloseTime',
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
        $this->container['recharge_id']     = isset($data['recharge_id']) ? $data['recharge_id'] : null;
        $this->container['out_recharge_id'] = isset($data['out_recharge_id']) ? $data['out_recharge_id'] : null;
        $this->container['close_time']      = isset($data['close_time']) ? $data['close_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['recharge_id']) {
            $invalidProperties[] = "'recharge_id' can't be null";
        }
        if ((mb_strlen($this->container['recharge_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'recharge_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['recharge_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'recharge_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['out_recharge_id']) {
            $invalidProperties[] = "'out_recharge_id' can't be null";
        }
        if ((mb_strlen($this->container['out_recharge_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'out_recharge_id', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['out_recharge_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_recharge_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['close_time']) {
            $invalidProperties[] = "'close_time' can't be null";
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
     * Gets recharge_id.
     *
     * @return string
     */
    public function getRechargeId()
    {
        return $this->container['recharge_id'];
    }

    /**
     * Sets recharge_id.
     *
     * @param string $recharge_id 微企付充值单号
     *
     * @return self
     */
    public function setRechargeId($recharge_id)
    {
        $this->container['recharge_id'] = $recharge_id;

        return $this;
    }

    /**
     * Gets out_recharge_id.
     *
     * @return string
     */
    public function getOutRechargeId()
    {
        return $this->container['out_recharge_id'];
    }

    /**
     * Sets out_recharge_id.
     *
     * @param string $out_recharge_id 平台充值单号
     *
     * @return self
     */
    public function setOutRechargeId($out_recharge_id)
    {
        $this->container['out_recharge_id'] = $out_recharge_id;

        return $this;
    }

    /**
     * Gets close_time.
     *
     * @return \DateTime
     */
    public function getCloseTime()
    {
        return $this->container['close_time'];
    }

    /**
     * Sets close_time.
     *
     * @param \DateTime $close_time 关单成功时间
     *
     * @return self
     */
    public function setCloseTime($close_time)
    {
        $this->container['close_time'] = $close_time;

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
