<?php
/**
 * Goods.
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
 * Goods Class Doc Comment.
 *
 * @category Class
 * @description 商品信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Goods implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Goods';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'good_name'   => 'string',
        'good_number' => 'int',
        'good_amount' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'good_name'   => null,
        'good_number' => 'int32',
        'good_amount' => 'int64',
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
        'good_name'   => 'good_name',
        'good_number' => 'good_number',
        'good_amount' => 'good_amount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'good_name'   => 'setGoodName',
        'good_number' => 'setGoodNumber',
        'good_amount' => 'setGoodAmount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'good_name'   => 'getGoodName',
        'good_number' => 'getGoodNumber',
        'good_amount' => 'getGoodAmount',
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
        $this->container['good_name']   = isset($data['good_name']) ? $data['good_name'] : null;
        $this->container['good_number'] = isset($data['good_number']) ? $data['good_number'] : null;
        $this->container['good_amount'] = isset($data['good_amount']) ? $data['good_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['good_name']) {
            $invalidProperties[] = "'good_name' can't be null";
        }
        if ((mb_strlen($this->container['good_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'good_name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['good_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'good_name', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['good_number']) {
            $invalidProperties[] = "'good_number' can't be null";
        }
        if (null === $this->container['good_amount']) {
            $invalidProperties[] = "'good_amount' can't be null";
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
     * Gets good_name.
     *
     * @return string
     */
    public function getGoodName()
    {
        return $this->container['good_name'];
    }

    /**
     * Sets good_name.
     *
     * @param string $good_name 商品名称
     *
     * @return self
     */
    public function setGoodName($good_name)
    {
        $this->container['good_name'] = $good_name;

        return $this;
    }

    /**
     * Gets good_number.
     *
     * @return int
     */
    public function getGoodNumber()
    {
        return $this->container['good_number'];
    }

    /**
     * Sets good_number.
     *
     * @param int $good_number 商品数量
     *
     * @return self
     */
    public function setGoodNumber($good_number)
    {
        $this->container['good_number'] = $good_number;

        return $this;
    }

    /**
     * Gets good_amount.
     *
     * @return int
     */
    public function getGoodAmount()
    {
        return $this->container['good_amount'];
    }

    /**
     * Sets good_amount.
     *
     * @param int $good_amount 商品金额
     *
     * @return self
     */
    public function setGoodAmount($good_amount)
    {
        $this->container['good_amount'] = $good_amount;

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
