<?php
/**
 * StoreInfo.
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
 * StoreInfo Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StoreInfo implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'StoreInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'id'                 => 'string',
        'name'               => 'string',
        'area_code'          => 'string',
        'address'            => 'string',
        'social_credit_code' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'id'                 => null,
        'name'               => null,
        'area_code'          => null,
        'address'            => null,
        'social_credit_code' => null,
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
        'id'                 => 'id',
        'name'               => 'name',
        'area_code'          => 'area_code',
        'address'            => 'address',
        'social_credit_code' => 'social_credit_code',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'id'                 => 'setId',
        'name'               => 'setName',
        'area_code'          => 'setAreaCode',
        'address'            => 'setAddress',
        'social_credit_code' => 'setSocialCreditCode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'id'                 => 'getId',
        'name'               => 'getName',
        'area_code'          => 'getAreaCode',
        'address'            => 'getAddress',
        'social_credit_code' => 'getSocialCreditCode',
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
        $this->container['id']                 = isset($data['id']) ? $data['id'] : null;
        $this->container['name']               = isset($data['name']) ? $data['name'] : null;
        $this->container['area_code']          = isset($data['area_code']) ? $data['area_code'] : null;
        $this->container['address']            = isset($data['address']) ? $data['address'] : null;
        $this->container['social_credit_code'] = isset($data['social_credit_code']) ? $data['social_credit_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 32)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['area_code']) && (mb_strlen($this->container['area_code']) > 32)) {
            $invalidProperties[] = "invalid value for 'area_code', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['area_code']) && (mb_strlen($this->container['area_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'area_code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) > 1024)) {
            $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) < 1)) {
            $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['social_credit_code']) && (mb_strlen($this->container['social_credit_code']) > 18)) {
            $invalidProperties[] = "invalid value for 'social_credit_code', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['social_credit_code']) && (mb_strlen($this->container['social_credit_code']) < 18)) {
            $invalidProperties[] = "invalid value for 'social_credit_code', the character length must be bigger than or equal to 18.";
        }

        if (!is_null($this->container['social_credit_code']) && !preg_match('/^[A-Z0-9]+$/', $this->container['social_credit_code'])) {
            $invalidProperties[] = "invalid value for 'social_credit_code', must be conform to the pattern /^[A-Z0-9]+$/.";
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
     * Gets id.
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id.
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets area_code.
     *
     * @return string|null
     */
    public function getAreaCode()
    {
        return $this->container['area_code'];
    }

    /**
     * Sets area_code.
     *
     * @param string|null $area_code area_code
     *
     * @return self
     */
    public function setAreaCode($area_code)
    {
        $this->container['area_code'] = $area_code;

        return $this;
    }

    /**
     * Gets address.
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address.
     *
     * @param string|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets social_credit_code.
     *
     * @return string|null
     */
    public function getSocialCreditCode()
    {
        return $this->container['social_credit_code'];
    }

    /**
     * Sets social_credit_code.
     *
     * @param string|null $social_credit_code 门店社会信用代码
     *
     * @return self
     */
    public function setSocialCreditCode($social_credit_code)
    {
        $this->container['social_credit_code'] = $social_credit_code;

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
