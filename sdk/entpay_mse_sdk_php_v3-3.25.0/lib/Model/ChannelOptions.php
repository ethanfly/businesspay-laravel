<?php
/**
 * ChannelOptions.
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
 * ChannelOptions Class Doc Comment.
 *
 * @category Class
 * @description 渠道选项
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelOptions implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ChannelOptions';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'include_bank_snames'  => 'string[]',
        'exclude_bank_snames'  => 'string[]',
        'include_pay_channels' => 'object[]',
        'exclude_pay_channels' => 'object[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'include_bank_snames'  => null,
        'exclude_bank_snames'  => null,
        'include_pay_channels' => null,
        'exclude_pay_channels' => null,
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
        'include_bank_snames'  => 'include_bank_snames',
        'exclude_bank_snames'  => 'exclude_bank_snames',
        'include_pay_channels' => 'include_pay_channels',
        'exclude_pay_channels' => 'exclude_pay_channels',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'include_bank_snames'  => 'setIncludeBankSnames',
        'exclude_bank_snames'  => 'setExcludeBankSnames',
        'include_pay_channels' => 'setIncludePayChannels',
        'exclude_pay_channels' => 'setExcludePayChannels',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'include_bank_snames'  => 'getIncludeBankSnames',
        'exclude_bank_snames'  => 'getExcludeBankSnames',
        'include_pay_channels' => 'getIncludePayChannels',
        'exclude_pay_channels' => 'getExcludePayChannels',
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

    const INCLUDE_PAY_CHANNELS_WX_BALANCE  = 'WX_BALANCE';
    const INCLUDE_PAY_CHANNELS_INDIVIDUAL  = 'INDIVIDUAL';
    const INCLUDE_PAY_CHANNELS_ENTERPRISE  = 'ENTERPRISE';
    const INCLUDE_PAY_CHANNELS_BALANCE_PAY = 'BALANCE_PAY';
    const INCLUDE_PAY_CHANNELS_WX_PRO      = 'WX_PRO';
    const INCLUDE_PAY_CHANNELS_WX_CREDIT   = 'WX_CREDIT';
    const INCLUDE_PAY_CHANNELS_CREDIT      = 'CREDIT';
    const INCLUDE_PAY_CHANNELS_TRANSFER    = 'TRANSFER';
    const EXCLUDE_PAY_CHANNELS_WX_BALANCE  = 'WX_BALANCE';
    const EXCLUDE_PAY_CHANNELS_INDIVIDUAL  = 'INDIVIDUAL';
    const EXCLUDE_PAY_CHANNELS_ENTERPRISE  = 'ENTERPRISE';
    const EXCLUDE_PAY_CHANNELS_BALANCE_PAY = 'BALANCE_PAY';
    const EXCLUDE_PAY_CHANNELS_WX_PRO      = 'WX_PRO';
    const EXCLUDE_PAY_CHANNELS_WX_CREDIT   = 'WX_CREDIT';
    const EXCLUDE_PAY_CHANNELS_CREDIT      = 'CREDIT';
    const EXCLUDE_PAY_CHANNELS_TRANSFER    = 'TRANSFER';

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
        $this->container['include_bank_snames']  = isset($data['include_bank_snames']) ? $data['include_bank_snames'] : null;
        $this->container['exclude_bank_snames']  = isset($data['exclude_bank_snames']) ? $data['exclude_bank_snames'] : null;
        $this->container['include_pay_channels'] = isset($data['include_pay_channels']) ? $data['include_pay_channels'] : null;
        $this->container['exclude_pay_channels'] = isset($data['exclude_pay_channels']) ? $data['exclude_pay_channels'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['include_bank_snames']) && (count($this->container['include_bank_snames']) > 20)) {
            $invalidProperties[] = "invalid value for 'include_bank_snames', number of items must be less than or equal to 20.";
        }

        if (!is_null($this->container['include_bank_snames']) && (count($this->container['include_bank_snames']) < 0)) {
            $invalidProperties[] = "invalid value for 'include_bank_snames', number of items must be greater than or equal to 0.";
        }

        if (!is_null($this->container['exclude_bank_snames']) && (count($this->container['exclude_bank_snames']) > 20)) {
            $invalidProperties[] = "invalid value for 'exclude_bank_snames', number of items must be less than or equal to 20.";
        }

        if (!is_null($this->container['exclude_bank_snames']) && (count($this->container['exclude_bank_snames']) < 0)) {
            $invalidProperties[] = "invalid value for 'exclude_bank_snames', number of items must be greater than or equal to 0.";
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
     * Gets include_bank_snames.
     *
     * @return string[]|null
     */
    public function getIncludeBankSnames()
    {
        return $this->container['include_bank_snames'];
    }

    /**
     * Sets include_bank_snames.
     *
     * @param string[]|null $include_bank_snames 指定包含银行简称列表
     *
     * @return self
     */
    public function setIncludeBankSnames($include_bank_snames)
    {
        $this->container['include_bank_snames'] = $include_bank_snames;

        return $this;
    }

    /**
     * Gets exclude_bank_snames.
     *
     * @return string[]|null
     */
    public function getExcludeBankSnames()
    {
        return $this->container['exclude_bank_snames'];
    }

    /**
     * Sets exclude_bank_snames.
     *
     * @param string[]|null $exclude_bank_snames 指定排除银行简称列表
     *
     * @return self
     */
    public function setExcludeBankSnames($exclude_bank_snames)
    {
        $this->container['exclude_bank_snames'] = $exclude_bank_snames;

        return $this;
    }

    /**
     * Gets include_pay_channels.
     *
     * @return object[]|null
     */
    public function getIncludePayChannels()
    {
        return $this->container['include_pay_channels'];
    }

    /**
     * Sets include_pay_channels.
     *
     * @param object[]|null $include_pay_channels 指定支付渠道
     *
     * @return self
     */
    public function setIncludePayChannels($include_pay_channels)
    {
        $this->container['include_pay_channels'] = $include_pay_channels;

        return $this;
    }

    /**
     * Gets exclude_pay_channels.
     *
     * @return object[]|null
     */
    public function getExcludePayChannels()
    {
        return $this->container['exclude_pay_channels'];
    }

    /**
     * Sets exclude_pay_channels.
     *
     * @param object[]|null $exclude_pay_channels 指定排除支付渠道
     *
     * @return self
     */
    public function setExcludePayChannels($exclude_pay_channels)
    {
        $this->container['exclude_pay_channels'] = $exclude_pay_channels;

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
