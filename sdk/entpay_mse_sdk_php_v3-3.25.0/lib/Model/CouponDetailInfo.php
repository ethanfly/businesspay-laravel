<?php
/**
 * CouponDetailInfo.
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
 * CouponDetailInfo Class Doc Comment.
 *
 * @category Class
 * @description 优惠信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CouponDetailInfo implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CouponDetailInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'coupon_id'     => 'string',
        'coupon_name'   => 'string',
        'coupon_amount' => 'int',
        'coupon_type'   => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'coupon_id'     => null,
        'coupon_name'   => null,
        'coupon_amount' => 'int64',
        'coupon_type'   => null,
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
        'coupon_id'     => 'coupon_id',
        'coupon_name'   => 'coupon_name',
        'coupon_amount' => 'coupon_amount',
        'coupon_type'   => 'coupon_type',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'coupon_id'     => 'setCouponId',
        'coupon_name'   => 'setCouponName',
        'coupon_amount' => 'setCouponAmount',
        'coupon_type'   => 'setCouponType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'coupon_id'     => 'getCouponId',
        'coupon_name'   => 'getCouponName',
        'coupon_amount' => 'getCouponAmount',
        'coupon_type'   => 'getCouponType',
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

    const COUPON_TYPE_INSTANT_OFF_COUPON = 'INSTANT_OFF_COUPON';
    const COUPON_TYPE_FULL_OFF_COUPON    = 'FULL_OFF_COUPON';
    const COUPON_TYPE_DISCOUNT_COUPON    = 'DISCOUNT_COUPON';

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
        $this->container['coupon_id']     = isset($data['coupon_id']) ? $data['coupon_id'] : null;
        $this->container['coupon_name']   = isset($data['coupon_name']) ? $data['coupon_name'] : null;
        $this->container['coupon_amount'] = isset($data['coupon_amount']) ? $data['coupon_amount'] : null;
        $this->container['coupon_type']   = isset($data['coupon_type']) ? $data['coupon_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['coupon_id']) {
            $invalidProperties[] = "'coupon_id' can't be null";
        }
        if (null === $this->container['coupon_name']) {
            $invalidProperties[] = "'coupon_name' can't be null";
        }
        if (null === $this->container['coupon_amount']) {
            $invalidProperties[] = "'coupon_amount' can't be null";
        }
        if (null === $this->container['coupon_type']) {
            $invalidProperties[] = "'coupon_type' can't be null";
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
     * Gets coupon_id.
     *
     * @return string
     */
    public function getCouponId()
    {
        return $this->container['coupon_id'];
    }

    /**
     * Sets coupon_id.
     *
     * @param string $coupon_id 优惠券id
     *
     * @return self
     */
    public function setCouponId($coupon_id)
    {
        $this->container['coupon_id'] = $coupon_id;

        return $this;
    }

    /**
     * Gets coupon_name.
     *
     * @return string
     */
    public function getCouponName()
    {
        return $this->container['coupon_name'];
    }

    /**
     * Sets coupon_name.
     *
     * @param string $coupon_name 优惠券名称
     *
     * @return self
     */
    public function setCouponName($coupon_name)
    {
        $this->container['coupon_name'] = $coupon_name;

        return $this;
    }

    /**
     * Gets coupon_amount.
     *
     * @return int
     */
    public function getCouponAmount()
    {
        return $this->container['coupon_amount'];
    }

    /**
     * Sets coupon_amount.
     *
     * @param int $coupon_amount 优惠金额
     *
     * @return self
     */
    public function setCouponAmount($coupon_amount)
    {
        $this->container['coupon_amount'] = $coupon_amount;

        return $this;
    }

    /**
     * Gets coupon_type.
     *
     * @return string
     */
    public function getCouponType()
    {
        return $this->container['coupon_type'];
    }

    /**
     * Sets coupon_type.
     *
     * @param string $coupon_type 券类型
     *
     * @return self
     */
    public function setCouponType($coupon_type)
    {
        $this->container['coupon_type'] = $coupon_type;

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
