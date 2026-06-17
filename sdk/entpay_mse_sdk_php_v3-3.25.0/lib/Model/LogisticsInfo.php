<?php
/**
 * LogisticsInfo.
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
 * LogisticsInfo Class Doc Comment.
 *
 * @category Class
 * @description 物流信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LogisticsInfo implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'LogisticsInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'receiver_address' => 'string',
        'receiver_name'    => 'string',
        'receiver_phone'   => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'receiver_address' => 'encrypted|false',
        'receiver_name'    => 'encrypted|false',
        'receiver_phone'   => 'encrypted|false',
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
        'receiver_address' => 'receiver_address',
        'receiver_name'    => 'receiver_name',
        'receiver_phone'   => 'receiver_phone',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'receiver_address' => 'setReceiverAddress',
        'receiver_name'    => 'setReceiverName',
        'receiver_phone'   => 'setReceiverPhone',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'receiver_address' => 'getReceiverAddress',
        'receiver_name'    => 'getReceiverName',
        'receiver_phone'   => 'getReceiverPhone',
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
        $this->container['receiver_address'] = isset($data['receiver_address']) ? $data['receiver_address'] : null;
        $this->container['receiver_name']    = isset($data['receiver_name']) ? $data['receiver_name'] : null;
        $this->container['receiver_phone']   = isset($data['receiver_phone']) ? $data['receiver_phone'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['receiver_address']) {
            $invalidProperties[] = "'receiver_address' can't be null";
        }
        if ((mb_strlen($this->container['receiver_address']) > 1024)) {
            $invalidProperties[] = "invalid value for 'receiver_address', the character length must be smaller than or equal to 1024.";
        }

        if ((mb_strlen($this->container['receiver_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'receiver_address', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['receiver_name']) {
            $invalidProperties[] = "'receiver_name' can't be null";
        }
        if ((mb_strlen($this->container['receiver_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'receiver_name', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['receiver_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'receiver_name', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['receiver_phone']) {
            $invalidProperties[] = "'receiver_phone' can't be null";
        }
        if ((mb_strlen($this->container['receiver_phone']) > 32)) {
            $invalidProperties[] = "invalid value for 'receiver_phone', the character length must be smaller than or equal to 32.";
        }

        if ((mb_strlen($this->container['receiver_phone']) < 1)) {
            $invalidProperties[] = "invalid value for 'receiver_phone', the character length must be bigger than or equal to 1.";
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
     * Gets receiver_address.
     *
     * @return string
     */
    public function getReceiverAddress()
    {
        return $this->container['receiver_address'];
    }

    /**
     * Sets receiver_address.
     *
     * @param string $receiver_address 详细收货地址
     *
     * @return self
     */
    public function setReceiverAddress($receiver_address)
    {
        $this->container['receiver_address'] = $receiver_address;

        return $this;
    }

    /**
     * Gets receiver_name.
     *
     * @return string
     */
    public function getReceiverName()
    {
        return $this->container['receiver_name'];
    }

    /**
     * Sets receiver_name.
     *
     * @param string $receiver_name 收货人名称
     *
     * @return self
     */
    public function setReceiverName($receiver_name)
    {
        $this->container['receiver_name'] = $receiver_name;

        return $this;
    }

    /**
     * Gets receiver_phone.
     *
     * @return string
     */
    public function getReceiverPhone()
    {
        return $this->container['receiver_phone'];
    }

    /**
     * Sets receiver_phone.
     *
     * @param string $receiver_phone 收货人手机号
     *
     * @return self
     */
    public function setReceiverPhone($receiver_phone)
    {
        $this->container['receiver_phone'] = $receiver_phone;

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
