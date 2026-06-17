<?php
/**
 * DepositAllocationParam.
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
 * DepositAllocationParam Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DepositAllocationParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'DepositAllocationParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'ent_id'            => 'string',
        'deposit_id'        => 'string',
        'out_allocation_id' => 'string',
        'server_notify_url' => 'string',
        'finish'            => 'bool',
        'desc'              => 'string',
        'allocations'       => '\Entpay\Mse\Client\Model\DepositsAllocationParam[]',
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
        'deposit_id'        => null,
        'out_allocation_id' => null,
        'server_notify_url' => null,
        'finish'            => null,
        'desc'              => null,
        'allocations'       => 'encrypted|true',
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
        'deposit_id'        => 'deposit_id',
        'out_allocation_id' => 'out_allocation_id',
        'server_notify_url' => 'server_notify_url',
        'finish'            => 'finish',
        'desc'              => 'desc',
        'allocations'       => 'allocations',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'ent_id'            => 'setEntId',
        'deposit_id'        => 'setDepositId',
        'out_allocation_id' => 'setOutAllocationId',
        'server_notify_url' => 'setServerNotifyUrl',
        'finish'            => 'setFinish',
        'desc'              => 'setDesc',
        'allocations'       => 'setAllocations',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'ent_id'            => 'getEntId',
        'deposit_id'        => 'getDepositId',
        'out_allocation_id' => 'getOutAllocationId',
        'server_notify_url' => 'getServerNotifyUrl',
        'finish'            => 'getFinish',
        'desc'              => 'getDesc',
        'allocations'       => 'getAllocations',
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
        $this->container['deposit_id']        = isset($data['deposit_id']) ? $data['deposit_id'] : null;
        $this->container['out_allocation_id'] = isset($data['out_allocation_id']) ? $data['out_allocation_id'] : null;
        $this->container['server_notify_url'] = isset($data['server_notify_url']) ? $data['server_notify_url'] : null;
        $this->container['finish']            = isset($data['finish']) ? $data['finish'] : null;
        $this->container['desc']              = isset($data['desc']) ? $data['desc'] : null;
        $this->container['allocations']       = isset($data['allocations']) ? $data['allocations'] : null;
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

        if (null === $this->container['deposit_id']) {
            $invalidProperties[] = "'deposit_id' can't be null";
        }
        if ((mb_strlen($this->container['deposit_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'deposit_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['deposit_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'deposit_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['out_allocation_id']) {
            $invalidProperties[] = "'out_allocation_id' can't be null";
        }
        if ((mb_strlen($this->container['out_allocation_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_allocation_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_allocation_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_allocation_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['server_notify_url']) {
            $invalidProperties[] = "'server_notify_url' can't be null";
        }
        if ((mb_strlen($this->container['server_notify_url']) > 256)) {
            $invalidProperties[] = "invalid value for 'server_notify_url', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['server_notify_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'server_notify_url', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^https?:\/\/[^?]+/", $this->container['server_notify_url'])) {
            $invalidProperties[] = "invalid value for 'server_notify_url', must be conform to the pattern /^https?:\/\/[^?]+/.";
        }

        if (null === $this->container['finish']) {
            $invalidProperties[] = "'finish' can't be null";
        }
        if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 255)) {
            $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 1)) {
            $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['allocations']) {
            $invalidProperties[] = "'allocations' can't be null";
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
     * Gets out_allocation_id.
     *
     * @return string
     */
    public function getOutAllocationId()
    {
        return $this->container['out_allocation_id'];
    }

    /**
     * Sets out_allocation_id.
     *
     * @param string $out_allocation_id out_allocation_id
     *
     * @return self
     */
    public function setOutAllocationId($out_allocation_id)
    {
        $this->container['out_allocation_id'] = $out_allocation_id;

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
     * @param string $server_notify_url server_notify_url
     *
     * @return self
     */
    public function setServerNotifyUrl($server_notify_url)
    {
        $this->container['server_notify_url'] = $server_notify_url;

        return $this;
    }

    /**
     * Gets finish.
     *
     * @return bool
     */
    public function getFinish()
    {
        return $this->container['finish'];
    }

    /**
     * Sets finish.
     *
     * @param bool $finish finish
     *
     * @return self
     */
    public function setFinish($finish)
    {
        $this->container['finish'] = $finish;

        return $this;
    }

    /**
     * Gets desc.
     *
     * @return string|null
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc.
     *
     * @param string|null $desc desc
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets allocations.
     *
     * @return \Entpay\Mse\Client\Model\DepositsAllocationParam[]
     */
    public function getAllocations()
    {
        return $this->container['allocations'];
    }

    /**
     * Sets allocations.
     *
     * @param \Entpay\Mse\Client\Model\DepositsAllocationParam[] $allocations allocations
     *
     * @return self
     */
    public function setAllocations($allocations)
    {
        $this->container['allocations'] = $allocations;

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
