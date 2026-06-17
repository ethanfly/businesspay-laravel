<?php
/**
 * RetrievePredepositAcctParam.
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
 * RetrievePredepositAcctParam Class Doc Comment.
 *
 * @category Class
 * @description 余额账户查询参数
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RetrievePredepositAcctParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'RetrievePredepositAcctParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'ent_id'                     => 'string',
        'id_card_no'                 => 'string',
        'unified_social_credit_code' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'ent_id'                     => null,
        'id_card_no'                 => 'encrypted|false',
        'unified_social_credit_code' => null,
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
        'ent_id'                     => 'ent_id',
        'id_card_no'                 => 'id_card_no',
        'unified_social_credit_code' => 'unified_social_credit_code',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'ent_id'                     => 'setEntId',
        'id_card_no'                 => 'setIdCardNo',
        'unified_social_credit_code' => 'setUnifiedSocialCreditCode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'ent_id'                     => 'getEntId',
        'id_card_no'                 => 'getIdCardNo',
        'unified_social_credit_code' => 'getUnifiedSocialCreditCode',
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
        $this->container['ent_id']                     = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['id_card_no']                 = isset($data['id_card_no']) ? $data['id_card_no'] : null;
        $this->container['unified_social_credit_code'] = isset($data['unified_social_credit_code']) ? $data['unified_social_credit_code'] : null;
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

        if (!is_null($this->container['id_card_no']) && (mb_strlen($this->container['id_card_no']) > 18)) {
            $invalidProperties[] = "invalid value for 'id_card_no', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['id_card_no']) && (mb_strlen($this->container['id_card_no']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_card_no', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['unified_social_credit_code']) && (mb_strlen($this->container['unified_social_credit_code']) > 18)) {
            $invalidProperties[] = "invalid value for 'unified_social_credit_code', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['unified_social_credit_code']) && (mb_strlen($this->container['unified_social_credit_code']) < 18)) {
            $invalidProperties[] = "invalid value for 'unified_social_credit_code', the character length must be bigger than or equal to 18.";
        }

        if (!is_null($this->container['unified_social_credit_code']) && !preg_match('/^[A-Z0-9]+$/', $this->container['unified_social_credit_code'])) {
            $invalidProperties[] = "invalid value for 'unified_social_credit_code', must be conform to the pattern /^[A-Z0-9]+$/.";
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
     * @param string $ent_id 收款商户id
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

        return $this;
    }

    /**
     * Gets id_card_no.
     *
     * @return string|null
     */
    public function getIdCardNo()
    {
        return $this->container['id_card_no'];
    }

    /**
     * Sets id_card_no.
     *
     * @param string|null $id_card_no 身份证号码
     *
     * @return self
     */
    public function setIdCardNo($id_card_no)
    {
        $this->container['id_card_no'] = $id_card_no;

        return $this;
    }

    /**
     * Gets unified_social_credit_code.
     *
     * @return string|null
     */
    public function getUnifiedSocialCreditCode()
    {
        return $this->container['unified_social_credit_code'];
    }

    /**
     * Sets unified_social_credit_code.
     *
     * @param string|null $unified_social_credit_code 统一社会信用代码
     *
     * @return self
     */
    public function setUnifiedSocialCreditCode($unified_social_credit_code)
    {
        $this->container['unified_social_credit_code'] = $unified_social_credit_code;

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
