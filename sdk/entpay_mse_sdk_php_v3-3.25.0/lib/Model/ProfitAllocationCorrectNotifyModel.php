<?php
/**
 * ProfitAllocationCorrectNotifyModel.
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
 * ProfitAllocationCorrectNotifyModel Class Doc Comment.
 *
 * @category Class
 * @description 分账冲退退回调对象
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProfitAllocationCorrectNotifyModel implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ProfitAllocationCorrectNotifyModel';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'api_version'      => 'string',
        'live_mode'        => 'bool',
        'event_id'         => 'string',
        'event_type'       => 'string',
        'pending_webhooks' => 'int',
        'create_time'      => '\DateTime',
        'event_content'    => '\Entpay\Mse\Client\Api\ProfitAllocationCorrect',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'api_version'      => null,
        'live_mode'        => null,
        'event_id'         => null,
        'event_type'       => null,
        'pending_webhooks' => 'int32',
        'create_time'      => 'date-time',
        'event_content'    => null,
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
        'api_version'      => 'api_version',
        'live_mode'        => 'live_mode',
        'event_id'         => 'event_id',
        'event_type'       => 'event_type',
        'pending_webhooks' => 'pending_webhooks',
        'create_time'      => 'create_time',
        'event_content'    => 'event_content',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'api_version'      => 'setApiVersion',
        'live_mode'        => 'setLiveMode',
        'event_id'         => 'setEventId',
        'event_type'       => 'setEventType',
        'pending_webhooks' => 'setPendingWebhooks',
        'create_time'      => 'setCreateTime',
        'event_content'    => 'setEventContent',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'api_version'      => 'getApiVersion',
        'live_mode'        => 'getLiveMode',
        'event_id'         => 'getEventId',
        'event_type'       => 'getEventType',
        'pending_webhooks' => 'getPendingWebhooks',
        'create_time'      => 'getCreateTime',
        'event_content'    => 'getEventContent',
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
        $this->container['api_version']      = isset($data['api_version']) ? $data['api_version'] : null;
        $this->container['live_mode']        = isset($data['live_mode']) ? $data['live_mode'] : null;
        $this->container['event_id']         = isset($data['event_id']) ? $data['event_id'] : null;
        $this->container['event_type']       = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['pending_webhooks'] = isset($data['pending_webhooks']) ? $data['pending_webhooks'] : null;
        $this->container['create_time']      = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['event_content']    = isset($data['event_content']) ? $data['event_content'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets api_version.
     *
     * @return string|null
     */
    public function getApiVersion()
    {
        return $this->container['api_version'];
    }

    /**
     * Sets api_version.
     *
     * @param string|null $api_version 生成通知的API版本
     *
     * @return self
     */
    public function setApiVersion($api_version)
    {
        $this->container['api_version'] = $api_version;

        return $this;
    }

    /**
     * Gets live_mode.
     *
     * @return bool|null
     */
    public function getLiveMode()
    {
        return $this->container['live_mode'];
    }

    /**
     * Sets live_mode.
     *
     * @param bool|null $live_mode 是否是正式生产的回调通知
     *
     * @return self
     */
    public function setLiveMode($live_mode)
    {
        $this->container['live_mode'] = $live_mode;

        return $this;
    }

    /**
     * Gets event_id.
     *
     * @return string|null
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id.
     *
     * @param string|null $event_id 通知ID
     *
     * @return self
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets event_type.
     *
     * @return string|null
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type.
     *
     * @param string|null $event_type 通知类型
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets pending_webhooks.
     *
     * @return int|null
     */
    public function getPendingWebhooks()
    {
        return $this->container['pending_webhooks'];
    }

    /**
     * Sets pending_webhooks.
     *
     * @param int|null $pending_webhooks 之前回调通知失败的次数
     *
     * @return self
     */
    public function setPendingWebhooks($pending_webhooks)
    {
        $this->container['pending_webhooks'] = $pending_webhooks;

        return $this;
    }

    /**
     * Gets create_time.
     *
     * @return \DateTime|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time.
     *
     * @param \DateTime|null $create_time 通知创建时间
     *
     * @return self
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets event_content.
     *
     * @return \Entpay\Mse\Client\Api\ProfitAllocationCorrect|null
     */
    public function getEventContent()
    {
        return $this->container['event_content'];
    }

    /**
     * Sets event_content.
     *
     * @param \Entpay\Mse\Client\Api\ProfitAllocationCorrect|null $event_content event_content
     *
     * @return self
     */
    public function setEventContent($event_content)
    {
        $this->container['event_content'] = $event_content;

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
