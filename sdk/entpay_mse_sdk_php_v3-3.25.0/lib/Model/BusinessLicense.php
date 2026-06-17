<?php
/**
 * BusinessLicense.
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
 * BusinessLicense Class Doc Comment.
 *
 * @category Class
 * @description 营业执照信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BusinessLicense implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'BusinessLicense';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'business_register_type'     => '\Entpay\Mse\Client\Model\EntTypeEnum',
        'unified_social_credit_code' => 'string',
        'merchant_name'              => 'string',
        'merchant_short_name'        => 'string',
        'legal_person_name'          => 'string',
        'validity_period'            => 'string[]',
        'photocopy_file_id'          => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'business_register_type'     => null,
        'unified_social_credit_code' => null,
        'merchant_name'              => null,
        'merchant_short_name'        => null,
        'legal_person_name'          => 'encrypted|false',
        'validity_period'            => null,
        'photocopy_file_id'          => null,
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
        'business_register_type'     => 'business_register_type',
        'unified_social_credit_code' => 'unified_social_credit_code',
        'merchant_name'              => 'merchant_name',
        'merchant_short_name'        => 'merchant_short_name',
        'legal_person_name'          => 'legal_person_name',
        'validity_period'            => 'validity_period',
        'photocopy_file_id'          => 'photocopy_file_id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'business_register_type'     => 'setBusinessRegisterType',
        'unified_social_credit_code' => 'setUnifiedSocialCreditCode',
        'merchant_name'              => 'setMerchantName',
        'merchant_short_name'        => 'setMerchantShortName',
        'legal_person_name'          => 'setLegalPersonName',
        'validity_period'            => 'setValidityPeriod',
        'photocopy_file_id'          => 'setPhotocopyFileId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'business_register_type'     => 'getBusinessRegisterType',
        'unified_social_credit_code' => 'getUnifiedSocialCreditCode',
        'merchant_name'              => 'getMerchantName',
        'merchant_short_name'        => 'getMerchantShortName',
        'legal_person_name'          => 'getLegalPersonName',
        'validity_period'            => 'getValidityPeriod',
        'photocopy_file_id'          => 'getPhotocopyFileId',
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
        $this->container['business_register_type']     = isset($data['business_register_type']) ? $data['business_register_type'] : null;
        $this->container['unified_social_credit_code'] = isset($data['unified_social_credit_code']) ? $data['unified_social_credit_code'] : null;
        $this->container['merchant_name']              = isset($data['merchant_name']) ? $data['merchant_name'] : null;
        $this->container['merchant_short_name']        = isset($data['merchant_short_name']) ? $data['merchant_short_name'] : null;
        $this->container['legal_person_name']          = isset($data['legal_person_name']) ? $data['legal_person_name'] : null;
        $this->container['validity_period']            = isset($data['validity_period']) ? $data['validity_period'] : null;
        $this->container['photocopy_file_id']          = isset($data['photocopy_file_id']) ? $data['photocopy_file_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['unified_social_credit_code']) {
            $invalidProperties[] = "'unified_social_credit_code' can't be null";
        }
        if ((mb_strlen($this->container['unified_social_credit_code']) > 18)) {
            $invalidProperties[] = "invalid value for 'unified_social_credit_code', the character length must be smaller than or equal to 18.";
        }

        if ((mb_strlen($this->container['unified_social_credit_code']) < 18)) {
            $invalidProperties[] = "invalid value for 'unified_social_credit_code', the character length must be bigger than or equal to 18.";
        }

        if (!preg_match('/^[A-Z0-9]+$/', $this->container['unified_social_credit_code'])) {
            $invalidProperties[] = "invalid value for 'unified_social_credit_code', must be conform to the pattern /^[A-Z0-9]+$/.";
        }

        if (null === $this->container['merchant_name']) {
            $invalidProperties[] = "'merchant_name' can't be null";
        }
        if ((mb_strlen($this->container['merchant_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'merchant_name', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['merchant_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'merchant_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['merchant_short_name']) && (mb_strlen($this->container['merchant_short_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'merchant_short_name', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['merchant_short_name']) && (mb_strlen($this->container['merchant_short_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'merchant_short_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['legal_person_name']) && (mb_strlen($this->container['legal_person_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'legal_person_name', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['legal_person_name']) && (mb_strlen($this->container['legal_person_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'legal_person_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['photocopy_file_id']) && (mb_strlen($this->container['photocopy_file_id']) > 256)) {
            $invalidProperties[] = "invalid value for 'photocopy_file_id', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['photocopy_file_id']) && (mb_strlen($this->container['photocopy_file_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'photocopy_file_id', the character length must be bigger than or equal to 1.";
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
     * Gets business_register_type.
     *
     * @return \Entpay\Mse\Client\Model\EntTypeEnum|null
     */
    public function getBusinessRegisterType()
    {
        return $this->container['business_register_type'];
    }

    /**
     * Sets business_register_type.
     *
     * @param \Entpay\Mse\Client\Model\EntTypeEnum|null $business_register_type business_register_type
     *
     * @return self
     */
    public function setBusinessRegisterType($business_register_type)
    {
        $this->container['business_register_type'] = $business_register_type;

        return $this;
    }

    /**
     * Gets unified_social_credit_code.
     *
     * @return string
     */
    public function getUnifiedSocialCreditCode()
    {
        return $this->container['unified_social_credit_code'];
    }

    /**
     * Sets unified_social_credit_code.
     *
     * @param string $unified_social_credit_code 统一社会信用代码
     *
     * @return self
     */
    public function setUnifiedSocialCreditCode($unified_social_credit_code)
    {
        $this->container['unified_social_credit_code'] = $unified_social_credit_code;

        return $this;
    }

    /**
     * Gets merchant_name.
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->container['merchant_name'];
    }

    /**
     * Sets merchant_name.
     *
     * @param string $merchant_name 商户名称
     *
     * @return self
     */
    public function setMerchantName($merchant_name)
    {
        $this->container['merchant_name'] = $merchant_name;

        return $this;
    }

    /**
     * Gets merchant_short_name.
     *
     * @return string|null
     */
    public function getMerchantShortName()
    {
        return $this->container['merchant_short_name'];
    }

    /**
     * Sets merchant_short_name.
     *
     * @param string|null $merchant_short_name 商户简称
     *
     * @return self
     */
    public function setMerchantShortName($merchant_short_name)
    {
        $this->container['merchant_short_name'] = $merchant_short_name;

        return $this;
    }

    /**
     * Gets legal_person_name.
     *
     * @return string|null
     */
    public function getLegalPersonName()
    {
        return $this->container['legal_person_name'];
    }

    /**
     * Sets legal_person_name.
     *
     * @param string|null $legal_person_name 经营者/法定代表人姓名
     *
     * @return self
     */
    public function setLegalPersonName($legal_person_name)
    {
        $this->container['legal_person_name'] = $legal_person_name;

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
     * @param string[]|null $validity_period 营业期限
     *
     * @return self
     */
    public function setValidityPeriod($validity_period)
    {
        $this->container['validity_period'] = $validity_period;

        return $this;
    }

    /**
     * Gets photocopy_file_id.
     *
     * @return string|null
     */
    public function getPhotocopyFileId()
    {
        return $this->container['photocopy_file_id'];
    }

    /**
     * Sets photocopy_file_id.
     *
     * @param string|null $photocopy_file_id 营业执照图片id，调用图片上传接口后返回该id
     *
     * @return self
     */
    public function setPhotocopyFileId($photocopy_file_id)
    {
        $this->container['photocopy_file_id'] = $photocopy_file_id;

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
