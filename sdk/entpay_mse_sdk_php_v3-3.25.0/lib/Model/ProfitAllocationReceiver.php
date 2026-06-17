<?php
/**
 * ProfitAllocationReceiver.
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
 * ProfitAllocationReceiver Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProfitAllocationReceiver implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ProfitAllocationReceiver';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_application_id' => 'string',
        'application_id'     => 'string',
        'status'             => '\Entpay\Mse\Client\Model\ProfitAllocationAccountApplicationStatusEnum',
        'ent_id'             => 'string',
        'receiver_info'      => '\Entpay\Mse\Client\Model\ApplicationAllocationReceiver',
        'failed_reason'      => '\Entpay\Mse\Client\Model\ProfitAllocationReceiverFailReason',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'out_application_id' => null,
        'application_id'     => null,
        'status'             => null,
        'ent_id'             => null,
        'receiver_info'      => null,
        'failed_reason'      => null,
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
        'out_application_id' => 'out_application_id',
        'application_id'     => 'application_id',
        'status'             => 'status',
        'ent_id'             => 'ent_id',
        'receiver_info'      => 'receiver_info',
        'failed_reason'      => 'failed_reason',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'out_application_id' => 'setOutApplicationId',
        'application_id'     => 'setApplicationId',
        'status'             => 'setStatus',
        'ent_id'             => 'setEntId',
        'receiver_info'      => 'setReceiverInfo',
        'failed_reason'      => 'setFailedReason',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'out_application_id' => 'getOutApplicationId',
        'application_id'     => 'getApplicationId',
        'status'             => 'getStatus',
        'ent_id'             => 'getEntId',
        'receiver_info'      => 'getReceiverInfo',
        'failed_reason'      => 'getFailedReason',
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
        $this->container['out_application_id'] = isset($data['out_application_id']) ? $data['out_application_id'] : null;
        $this->container['application_id']     = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['status']             = isset($data['status']) ? $data['status'] : null;
        $this->container['ent_id']             = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['receiver_info']      = isset($data['receiver_info']) ? $data['receiver_info'] : null;
        $this->container['failed_reason']      = isset($data['failed_reason']) ? $data['failed_reason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['out_application_id']) {
            $invalidProperties[] = "'out_application_id' can't be null";
        }
        if ((mb_strlen($this->container['out_application_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_application_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_application_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_application_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['application_id']) {
            $invalidProperties[] = "'application_id' can't be null";
        }
        if ((mb_strlen($this->container['application_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'application_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['application_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'application_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['status']) {
            $invalidProperties[] = "'status' can't be null";
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

        if (null === $this->container['receiver_info']) {
            $invalidProperties[] = "'receiver_info' can't be null";
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
     * Gets out_application_id.
     *
     * @return string
     */
    public function getOutApplicationId()
    {
        return $this->container['out_application_id'];
    }

    /**
     * Sets out_application_id.
     *
     * @param string $out_application_id out_application_id
     *
     * @return self
     */
    public function setOutApplicationId($out_application_id)
    {
        $this->container['out_application_id'] = $out_application_id;

        return $this;
    }

    /**
     * Gets application_id.
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id.
     *
     * @param string $application_id application_id
     *
     * @return self
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return \Entpay\Mse\Client\Model\ProfitAllocationAccountApplicationStatusEnum
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param \Entpay\Mse\Client\Model\ProfitAllocationAccountApplicationStatusEnum $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets receiver_info.
     *
     * @return \Entpay\Mse\Client\Model\ApplicationAllocationReceiver
     */
    public function getReceiverInfo()
    {
        return $this->container['receiver_info'];
    }

    /**
     * Sets receiver_info.
     *
     * @param \Entpay\Mse\Client\Model\ApplicationAllocationReceiver $receiver_info receiver_info
     *
     * @return self
     */
    public function setReceiverInfo($receiver_info)
    {
        $this->container['receiver_info'] = $receiver_info;

        return $this;
    }

    /**
     * Gets failed_reason.
     *
     * @return \Entpay\Mse\Client\Model\ProfitAllocationReceiverFailReason|null
     */
    public function getFailedReason()
    {
        return $this->container['failed_reason'];
    }

    /**
     * Sets failed_reason.
     *
     * @param \Entpay\Mse\Client\Model\ProfitAllocationReceiverFailReason|null $failed_reason failed_reason
     *
     * @return self
     */
    public function setFailedReason($failed_reason)
    {
        $this->container['failed_reason'] = $failed_reason;

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
