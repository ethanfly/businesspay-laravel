<?php
/**
 * ActualControllerInfo.
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
 * ActualControllerInfo Class Doc Comment.
 *
 * @category Class
 * @description 实控人信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ActualControllerInfo implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ActualControllerInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'name'            => 'string',
        'card_type'       => 'string',
        'card_no'         => 'string',
        'validity_period' => 'string[]',
        'share_ratio'     => 'float',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'name'            => null,
        'card_type'       => null,
        'card_no'         => null,
        'validity_period' => null,
        'share_ratio'     => null,
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
        'name'            => 'name',
        'card_type'       => 'card_type',
        'card_no'         => 'card_no',
        'validity_period' => 'validity_period',
        'share_ratio'     => 'share_ratio',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'name'            => 'setName',
        'card_type'       => 'setCardType',
        'card_no'         => 'setCardNo',
        'validity_period' => 'setValidityPeriod',
        'share_ratio'     => 'setShareRatio',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'name'            => 'getName',
        'card_type'       => 'getCardType',
        'card_no'         => 'getCardNo',
        'validity_period' => 'getValidityPeriod',
        'share_ratio'     => 'getShareRatio',
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

    const CARD_TYPE_MAINLAND_IDCARD  = 'MAINLAND_IDCARD';
    const CARD_TYPE_OVERSEA_PASSPORT = 'OVERSEA_PASSPORT';
    const CARD_TYPE_BUSINESS_LICENSE = 'BUSINESS_LICENSE';

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
        $this->container['name']            = isset($data['name']) ? $data['name'] : null;
        $this->container['card_type']       = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['card_no']         = isset($data['card_no']) ? $data['card_no'] : null;
        $this->container['validity_period'] = isset($data['validity_period']) ? $data['validity_period'] : null;
        $this->container['share_ratio']     = isset($data['share_ratio']) ? $data['share_ratio'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['share_ratio']) && ($this->container['share_ratio'] > 100.0)) {
            $invalidProperties[] = "invalid value for 'share_ratio', must be smaller than or equal to 100.0.";
        }

        if (!is_null($this->container['share_ratio']) && ($this->container['share_ratio'] < 0.01)) {
            $invalidProperties[] = "invalid value for 'share_ratio', must be bigger than or equal to 0.01.";
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
     * Gets name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string|null $name 实控人名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets card_type.
     *
     * @return string|null
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type.
     *
     * @param string|null $card_type 实控人证件类型
     *
     * @return self
     */
    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets card_no.
     *
     * @return string|null
     */
    public function getCardNo()
    {
        return $this->container['card_no'];
    }

    /**
     * Sets card_no.
     *
     * @param string|null $card_no 实控人证件号码
     *
     * @return self
     */
    public function setCardNo($card_no)
    {
        $this->container['card_no'] = $card_no;

        return $this;
    }

    /**
     * Gets validity_period.
     *
     * @return string[]|null
     */
    public function getValidityPeriod()
    {
        return $this->container['validity_period'];
    }

    /**
     * Sets validity_period.
     *
     * @param string[]|null $validity_period 实控人证件有效期
     *
     * @return self
     */
    public function setValidityPeriod($validity_period)
    {
        $this->container['validity_period'] = $validity_period;

        return $this;
    }

    /**
     * Gets share_ratio.
     *
     * @return float|null
     */
    public function getShareRatio()
    {
        return $this->container['share_ratio'];
    }

    /**
     * Sets share_ratio.
     *
     * @param float|null $share_ratio share_ratio
     *
     * @return self
     */
    public function setShareRatio($share_ratio)
    {
        $this->container['share_ratio'] = $share_ratio;

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
