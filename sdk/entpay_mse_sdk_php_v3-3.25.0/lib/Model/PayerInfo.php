<?php
/**
 * PayerInfo.
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
 * PayerInfo Class Doc Comment.
 *
 * @category Class
 * @description 指定付款方信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PayerInfo implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PayerInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'assign_pay_type'  => '\Entpay\Mse\Client\Model\AssignPayTypeEnum',
        'payer_name'       => 'string',
        'payer_id_card_no' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'assign_pay_type'  => null,
        'payer_name'       => 'encrypted|false',
        'payer_id_card_no' => 'encrypted|false',
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
        'assign_pay_type'  => 'assign_pay_type',
        'payer_name'       => 'payer_name',
        'payer_id_card_no' => 'payer_id_card_no',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'assign_pay_type'  => 'setAssignPayType',
        'payer_name'       => 'setPayerName',
        'payer_id_card_no' => 'setPayerIdCardNo',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'assign_pay_type'  => 'getAssignPayType',
        'payer_name'       => 'getPayerName',
        'payer_id_card_no' => 'getPayerIdCardNo',
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
        $this->container['assign_pay_type']  = isset($data['assign_pay_type']) ? $data['assign_pay_type'] : null;
        $this->container['payer_name']       = isset($data['payer_name']) ? $data['payer_name'] : null;
        $this->container['payer_id_card_no'] = isset($data['payer_id_card_no']) ? $data['payer_id_card_no'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['assign_pay_type']) {
            $invalidProperties[] = "'assign_pay_type' can't be null";
        }
        if (!is_null($this->container['payer_name']) && (mb_strlen($this->container['payer_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'payer_name', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['payer_name']) && (mb_strlen($this->container['payer_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'payer_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['payer_id_card_no']) && (mb_strlen($this->container['payer_id_card_no']) > 128)) {
            $invalidProperties[] = "invalid value for 'payer_id_card_no', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['payer_id_card_no']) && (mb_strlen($this->container['payer_id_card_no']) < 1)) {
            $invalidProperties[] = "invalid value for 'payer_id_card_no', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['payer_id_card_no']) && !preg_match('/(^[1-9]\\d{5}(18|19|([23]\\d))\\d{2}((0[1-9])|(10|11|12))(([0-2][1-9])|10|20|30|31)\\d{3}[0-9Xx]$)|(^[1-9]\\d{5}\\d{2}((0[1-9])|(10|11|12))(([0-2][1-9])|10|20|30|31)\\d{2}$)|^[A-Z0-9]+$/', $this->container['payer_id_card_no'])) {
            $invalidProperties[] = "invalid value for 'payer_id_card_no', must be conform to the pattern /(^[1-9]\\d{5}(18|19|([23]\\d))\\d{2}((0[1-9])|(10|11|12))(([0-2][1-9])|10|20|30|31)\\d{3}[0-9Xx]$)|(^[1-9]\\d{5}\\d{2}((0[1-9])|(10|11|12))(([0-2][1-9])|10|20|30|31)\\d{2}$)|^[A-Z0-9]+$/.";
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
     * Gets assign_pay_type.
     *
     * @return \Entpay\Mse\Client\Model\AssignPayTypeEnum
     */
    public function getAssignPayType()
    {
        return $this->container['assign_pay_type'];
    }

    /**
     * Sets assign_pay_type.
     *
     * @param \Entpay\Mse\Client\Model\AssignPayTypeEnum $assign_pay_type assign_pay_type
     *
     * @return self
     */
    public function setAssignPayType($assign_pay_type)
    {
        $this->container['assign_pay_type'] = $assign_pay_type;

        return $this;
    }

    /**
     * Gets payer_name.
     *
     * @return string|null
     */
    public function getPayerName()
    {
        return $this->container['payer_name'];
    }

    /**
     * Sets payer_name.
     *
     * @param string|null $payer_name 付款方名称
     *
     * @return self
     */
    public function setPayerName($payer_name)
    {
        $this->container['payer_name'] = $payer_name;

        return $this;
    }

    /**
     * Gets payer_id_card_no.
     *
     * @return string|null
     */
    public function getPayerIdCardNo()
    {
        return $this->container['payer_id_card_no'];
    }

    /**
     * Sets payer_id_card_no.
     *
     * @param string|null $payer_id_card_no 付款方证件号
     *
     * @return self
     */
    public function setPayerIdCardNo($payer_id_card_no)
    {
        $this->container['payer_id_card_no'] = $payer_id_card_no;

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
