<?php
/**
 * DepositBillFileUploadParam.
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
 * DepositBillFileUploadParam Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DepositBillFileUploadParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'DepositBillFileUploadParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'deposit_id'      => 'string',
        'deposit_channel' => '\Entpay\Mse\Client\Model\DepositChannleTypeEnum',
        'start_time'      => 'string',
        'end_time'        => 'string',
        'meta'            => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'deposit_id'      => null,
        'deposit_channel' => null,
        'start_time'      => null,
        'end_time'        => null,
        'meta'            => null,
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
        'deposit_id'      => 'deposit_id',
        'deposit_channel' => 'deposit_channel',
        'start_time'      => 'start_time',
        'end_time'        => 'end_time',
        'meta'            => 'meta',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'deposit_id'      => 'setDepositId',
        'deposit_channel' => 'setDepositChannel',
        'start_time'      => 'setStartTime',
        'end_time'        => 'setEndTime',
        'meta'            => 'setMeta',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'deposit_id'      => 'getDepositId',
        'deposit_channel' => 'getDepositChannel',
        'start_time'      => 'getStartTime',
        'end_time'        => 'getEndTime',
        'meta'            => 'getMeta',
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
        $this->container['deposit_id']      = isset($data['deposit_id']) ? $data['deposit_id'] : null;
        $this->container['deposit_channel'] = isset($data['deposit_channel']) ? $data['deposit_channel'] : null;
        $this->container['start_time']      = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time']        = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['meta']            = isset($data['meta']) ? $data['meta'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['deposit_id']) {
            $invalidProperties[] = "'deposit_id' can't be null";
        }
        if ((mb_strlen($this->container['deposit_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'deposit_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['deposit_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'deposit_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['start_time']) {
            $invalidProperties[] = "'start_time' can't be null";
        }
        if ((mb_strlen($this->container['start_time']) > 10)) {
            $invalidProperties[] = "invalid value for 'start_time', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['start_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'start_time', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['end_time']) {
            $invalidProperties[] = "'end_time' can't be null";
        }
        if ((mb_strlen($this->container['end_time']) > 10)) {
            $invalidProperties[] = "invalid value for 'end_time', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['end_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'end_time', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['meta']) {
            $invalidProperties[] = "'meta' can't be null";
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
     * Gets deposit_id.
     *
     * @return string
     */
    public function getDepositId()
    {
        return $this->container['deposit_id'];
    }

    /**
     * Sets deposit_id.
     *
     * @param string $deposit_id deposit_id
     *
     * @return self
     */
    public function setDepositId($deposit_id)
    {
        $this->container['deposit_id'] = $deposit_id;

        return $this;
    }

    /**
     * Gets deposit_channel.
     *
     * @return \Entpay\Mse\Client\Model\DepositChannleTypeEnum|null
     */
    public function getDepositChannel()
    {
        return $this->container['deposit_channel'];
    }

    /**
     * Sets deposit_channel.
     *
     * @param \Entpay\Mse\Client\Model\DepositChannleTypeEnum|null $deposit_channel deposit_channel
     *
     * @return self
     */
    public function setDepositChannel($deposit_channel)
    {
        $this->container['deposit_channel'] = $deposit_channel;

        return $this;
    }

    /**
     * Gets start_time.
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time.
     *
     * @param string $start_time 收银起始时间
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time.
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time.
     *
     * @param string $end_time 收银结束时间
     *
     * @return self
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets meta.
     *
     * @return string
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta.
     *
     * @param string $meta meta
     *
     * @return self
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

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
