<?php
/**
 * SupportBank.
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
 * SupportBank Class Doc Comment.
 *
 * @category Class
 * @description 支持银行信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SupportBank implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SupportBank';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'bank_sname'        => 'string',
        'bank_name'         => 'string',
        'quota'             => 'int',
        'under_maintenance' => 'bool',
        'maintenance_info'  => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'bank_sname'        => null,
        'bank_name'         => null,
        'quota'             => 'int64',
        'under_maintenance' => null,
        'maintenance_info'  => null,
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
        'bank_sname'        => 'bank_sname',
        'bank_name'         => 'bank_name',
        'quota'             => 'quota',
        'under_maintenance' => 'under_maintenance',
        'maintenance_info'  => 'maintenance_info',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_sname'        => 'setBankSname',
        'bank_name'         => 'setBankName',
        'quota'             => 'setQuota',
        'under_maintenance' => 'setUnderMaintenance',
        'maintenance_info'  => 'setMaintenanceInfo',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_sname'        => 'getBankSname',
        'bank_name'         => 'getBankName',
        'quota'             => 'getQuota',
        'under_maintenance' => 'getUnderMaintenance',
        'maintenance_info'  => 'getMaintenanceInfo',
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
        $this->container['bank_sname']        = isset($data['bank_sname']) ? $data['bank_sname'] : null;
        $this->container['bank_name']         = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['quota']             = isset($data['quota']) ? $data['quota'] : null;
        $this->container['under_maintenance'] = isset($data['under_maintenance']) ? $data['under_maintenance'] : null;
        $this->container['maintenance_info']  = isset($data['maintenance_info']) ? $data['maintenance_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['bank_sname']) {
            $invalidProperties[] = "'bank_sname' can't be null";
        }
        if (null === $this->container['bank_name']) {
            $invalidProperties[] = "'bank_name' can't be null";
        }
        if (null === $this->container['quota']) {
            $invalidProperties[] = "'quota' can't be null";
        }
        if (null === $this->container['under_maintenance']) {
            $invalidProperties[] = "'under_maintenance' can't be null";
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
     * Gets bank_sname.
     *
     * @return string
     */
    public function getBankSname()
    {
        return $this->container['bank_sname'];
    }

    /**
     * Sets bank_sname.
     *
     * @param string $bank_sname bank_sname
     *
     * @return self
     */
    public function setBankSname($bank_sname)
    {
        $this->container['bank_sname'] = $bank_sname;

        return $this;
    }

    /**
     * Gets bank_name.
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name.
     *
     * @param string $bank_name bank_name
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets quota.
     *
     * @return int
     */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
     * Sets quota.
     *
     * @param int $quota quota
     *
     * @return self
     */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;

        return $this;
    }

    /**
     * Gets under_maintenance.
     *
     * @return bool
     */
    public function getUnderMaintenance()
    {
        return $this->container['under_maintenance'];
    }

    /**
     * Sets under_maintenance.
     *
     * @param bool $under_maintenance 是否维护
     *
     * @return self
     */
    public function setUnderMaintenance($under_maintenance)
    {
        $this->container['under_maintenance'] = $under_maintenance;

        return $this;
    }

    /**
     * Gets maintenance_info.
     *
     * @return string|null
     */
    public function getMaintenanceInfo()
    {
        return $this->container['maintenance_info'];
    }

    /**
     * Sets maintenance_info.
     *
     * @param string|null $maintenance_info 维护公告
     *
     * @return self
     */
    public function setMaintenanceInfo($maintenance_info)
    {
        $this->container['maintenance_info'] = $maintenance_info;

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
