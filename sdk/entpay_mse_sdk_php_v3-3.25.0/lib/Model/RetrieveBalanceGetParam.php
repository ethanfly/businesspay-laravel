<?php
/**
 * RetrieveBalanceGetParam.
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
 * RetrieveBalanceGetParam Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RetrieveBalanceGetParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'RetrieveBalanceGetParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'account_type' => '\Entpay\Mse\Client\Model\WithdrawAccountTypeEnum',
        'ent_id'       => 'string',
        'ent_acct_id'  => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'account_type' => null,
        'ent_id'       => null,
        'ent_acct_id'  => null,
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
        'account_type' => 'account_type',
        'ent_id'       => 'ent_id',
        'ent_acct_id'  => 'ent_acct_id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'account_type' => 'setAccountType',
        'ent_id'       => 'setEntId',
        'ent_acct_id'  => 'setEntAcctId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'account_type' => 'getAccountType',
        'ent_id'       => 'getEntId',
        'ent_acct_id'  => 'getEntAcctId',
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
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['ent_id']       = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['ent_acct_id']  = isset($data['ent_acct_id']) ? $data['ent_acct_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['ent_id']) && (mb_strlen($this->container['ent_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['ent_id']) && (mb_strlen($this->container['ent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['ent_acct_id']) && (mb_strlen($this->container['ent_acct_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'ent_acct_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['ent_acct_id']) && (mb_strlen($this->container['ent_acct_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'ent_acct_id', the character length must be bigger than or equal to 1.";
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
     * Gets account_type.
     *
     * @return \Entpay\Mse\Client\Model\WithdrawAccountTypeEnum|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type.
     *
     * @param \Entpay\Mse\Client\Model\WithdrawAccountTypeEnum|null $account_type account_type
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets ent_id.
     *
     * @return string|null
     */
    public function getEntId()
    {
        return $this->container['ent_id'];
    }

    /**
     * Sets ent_id.
     *
     * @param string|null $ent_id ent_id
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

        return $this;
    }

    /**
     * Gets ent_acct_id.
     *
     * @return string|null
     */
    public function getEntAcctId()
    {
        return $this->container['ent_acct_id'];
    }

    /**
     * Sets ent_acct_id.
     *
     * @param string|null $ent_acct_id ent_acct_id
     *
     * @return self
     */
    public function setEntAcctId($ent_acct_id)
    {
        $this->container['ent_acct_id'] = $ent_acct_id;

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
