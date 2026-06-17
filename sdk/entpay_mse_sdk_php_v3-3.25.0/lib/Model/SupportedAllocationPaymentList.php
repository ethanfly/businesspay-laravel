<?php
/**
 * SupportedAllocationPaymentList.
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
 * SupportedAllocationPaymentList Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SupportedAllocationPaymentList implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SupportedAllocationPaymentList';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'supported_allocation_payment_list' => '\Entpay\Mse\Client\Model\SupportedAllocationPayment[]',
        'total_num'                         => 'int',
        'has_next'                          => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'supported_allocation_payment_list' => null,
        'total_num'                         => 'int64',
        'has_next'                          => null,
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
        'supported_allocation_payment_list' => 'supported_allocation_payment_list',
        'total_num'                         => 'total_num',
        'has_next'                          => 'has_next',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'supported_allocation_payment_list' => 'setSupportedAllocationPaymentList',
        'total_num'                         => 'setTotalNum',
        'has_next'                          => 'setHasNext',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'supported_allocation_payment_list' => 'getSupportedAllocationPaymentList',
        'total_num'                         => 'getTotalNum',
        'has_next'                          => 'getHasNext',
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
        $this->container['supported_allocation_payment_list'] = isset($data['supported_allocation_payment_list']) ? $data['supported_allocation_payment_list'] : null;
        $this->container['total_num']                         = isset($data['total_num']) ? $data['total_num'] : null;
        $this->container['has_next']                          = isset($data['has_next']) ? $data['has_next'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['supported_allocation_payment_list']) {
            $invalidProperties[] = "'supported_allocation_payment_list' can't be null";
        }
        if (null === $this->container['total_num']) {
            $invalidProperties[] = "'total_num' can't be null";
        }
        if (null === $this->container['has_next']) {
            $invalidProperties[] = "'has_next' can't be null";
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
     * Gets supported_allocation_payment_list.
     *
     * @return \Entpay\Mse\Client\Model\SupportedAllocationPayment[]
     */
    public function getSupportedAllocationPaymentList()
    {
        return $this->container['supported_allocation_payment_list'];
    }

    /**
     * Sets supported_allocation_payment_list.
     *
     * @param \Entpay\Mse\Client\Model\SupportedAllocationPayment[] $supported_allocation_payment_list supported_allocation_payment_list
     *
     * @return self
     */
    public function setSupportedAllocationPaymentList($supported_allocation_payment_list)
    {
        $this->container['supported_allocation_payment_list'] = $supported_allocation_payment_list;

        return $this;
    }

    /**
     * Gets total_num.
     *
     * @return int
     */
    public function getTotalNum()
    {
        return $this->container['total_num'];
    }

    /**
     * Sets total_num.
     *
     * @param int $total_num 总数
     *
     * @return self
     */
    public function setTotalNum($total_num)
    {
        $this->container['total_num'] = $total_num;

        return $this;
    }

    /**
     * Gets has_next.
     *
     * @return bool
     */
    public function getHasNext()
    {
        return $this->container['has_next'];
    }

    /**
     * Sets has_next.
     *
     * @param bool $has_next 是否有下一页
     *
     * @return self
     */
    public function setHasNext($has_next)
    {
        $this->container['has_next'] = $has_next;

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
