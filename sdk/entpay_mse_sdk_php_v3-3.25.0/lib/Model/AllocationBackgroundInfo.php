<?php
/**
 * AllocationBackgroundInfo.
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
 * AllocationBackgroundInfo Class Doc Comment.
 *
 * @category Class
 * @description 分账背景信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AllocationBackgroundInfo implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'AllocationBackgroundInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'allocation_trade_type'         => '\Entpay\Mse\Client\Model\ProfitAllocationTradeTypeEnum',
        'trade_type_desc'               => 'string',
        'allocation_attachment_file_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'allocation_trade_type'         => null,
        'trade_type_desc'               => null,
        'allocation_attachment_file_id' => null,
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
        'allocation_trade_type'         => 'allocation_trade_type',
        'trade_type_desc'               => 'trade_type_desc',
        'allocation_attachment_file_id' => 'allocation_attachment_file_id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'allocation_trade_type'         => 'setAllocationTradeType',
        'trade_type_desc'               => 'setTradeTypeDesc',
        'allocation_attachment_file_id' => 'setAllocationAttachmentFileId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'allocation_trade_type'         => 'getAllocationTradeType',
        'trade_type_desc'               => 'getTradeTypeDesc',
        'allocation_attachment_file_id' => 'getAllocationAttachmentFileId',
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
        $this->container['allocation_trade_type']         = isset($data['allocation_trade_type']) ? $data['allocation_trade_type'] : null;
        $this->container['trade_type_desc']               = isset($data['trade_type_desc']) ? $data['trade_type_desc'] : null;
        $this->container['allocation_attachment_file_id'] = isset($data['allocation_attachment_file_id']) ? $data['allocation_attachment_file_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['allocation_trade_type']) {
            $invalidProperties[] = "'allocation_trade_type' can't be null";
        }
        if (!is_null($this->container['trade_type_desc']) && (mb_strlen($this->container['trade_type_desc']) > 100)) {
            $invalidProperties[] = "invalid value for 'trade_type_desc', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['trade_type_desc']) && (mb_strlen($this->container['trade_type_desc']) < 1)) {
            $invalidProperties[] = "invalid value for 'trade_type_desc', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['allocation_attachment_file_id']) {
            $invalidProperties[] = "'allocation_attachment_file_id' can't be null";
        }
        if ((mb_strlen($this->container['allocation_attachment_file_id']) > 256)) {
            $invalidProperties[] = "invalid value for 'allocation_attachment_file_id', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['allocation_attachment_file_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'allocation_attachment_file_id', the character length must be bigger than or equal to 1.";
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
     * Gets allocation_trade_type.
     *
     * @return \Entpay\Mse\Client\Model\ProfitAllocationTradeTypeEnum
     */
    public function getAllocationTradeType()
    {
        return $this->container['allocation_trade_type'];
    }

    /**
     * Sets allocation_trade_type.
     *
     * @param \Entpay\Mse\Client\Model\ProfitAllocationTradeTypeEnum $allocation_trade_type allocation_trade_type
     *
     * @return self
     */
    public function setAllocationTradeType($allocation_trade_type)
    {
        $this->container['allocation_trade_type'] = $allocation_trade_type;

        return $this;
    }

    /**
     * Gets trade_type_desc.
     *
     * @return string|null
     */
    public function getTradeTypeDesc()
    {
        return $this->container['trade_type_desc'];
    }

    /**
     * Sets trade_type_desc.
     *
     * @param string|null $trade_type_desc 其他分账类型描述
     *
     * @return self
     */
    public function setTradeTypeDesc($trade_type_desc)
    {
        $this->container['trade_type_desc'] = $trade_type_desc;

        return $this;
    }

    /**
     * Gets allocation_attachment_file_id.
     *
     * @return string
     */
    public function getAllocationAttachmentFileId()
    {
        return $this->container['allocation_attachment_file_id'];
    }

    /**
     * Sets allocation_attachment_file_id.
     *
     * @param string $allocation_attachment_file_id 分账背景佐证材料
     *
     * @return self
     */
    public function setAllocationAttachmentFileId($allocation_attachment_file_id)
    {
        $this->container['allocation_attachment_file_id'] = $allocation_attachment_file_id;

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
