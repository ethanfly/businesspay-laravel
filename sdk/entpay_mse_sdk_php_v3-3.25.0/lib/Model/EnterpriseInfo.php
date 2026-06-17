<?php
/**
 * EnterpriseInfo.
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
 * EnterpriseInfo Class Doc Comment.
 *
 * @category Class
 * @description 企业信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EnterpriseInfo implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'EnterpriseInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'merchant_name'           => 'string',
        'business_license_number' => 'string',
        'legal_person_name'       => 'string',
        'legal_person_id_card_no' => 'string',
        'legal_person_phone_no'   => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'merchant_name'           => null,
        'business_license_number' => null,
        'legal_person_name'       => 'encrypted|false',
        'legal_person_id_card_no' => 'encrypted|false',
        'legal_person_phone_no'   => 'encrypted|false',
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
        'merchant_name'           => 'merchant_name',
        'business_license_number' => 'business_license_number',
        'legal_person_name'       => 'legal_person_name',
        'legal_person_id_card_no' => 'legal_person_id_card_no',
        'legal_person_phone_no'   => 'legal_person_phone_no',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_name'           => 'setMerchantName',
        'business_license_number' => 'setBusinessLicenseNumber',
        'legal_person_name'       => 'setLegalPersonName',
        'legal_person_id_card_no' => 'setLegalPersonIdCardNo',
        'legal_person_phone_no'   => 'setLegalPersonPhoneNo',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_name'           => 'getMerchantName',
        'business_license_number' => 'getBusinessLicenseNumber',
        'legal_person_name'       => 'getLegalPersonName',
        'legal_person_id_card_no' => 'getLegalPersonIdCardNo',
        'legal_person_phone_no'   => 'getLegalPersonPhoneNo',
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
        $this->container['merchant_name']           = isset($data['merchant_name']) ? $data['merchant_name'] : null;
        $this->container['business_license_number'] = isset($data['business_license_number']) ? $data['business_license_number'] : null;
        $this->container['legal_person_name']       = isset($data['legal_person_name']) ? $data['legal_person_name'] : null;
        $this->container['legal_person_id_card_no'] = isset($data['legal_person_id_card_no']) ? $data['legal_person_id_card_no'] : null;
        $this->container['legal_person_phone_no']   = isset($data['legal_person_phone_no']) ? $data['legal_person_phone_no'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['merchant_name']) {
            $invalidProperties[] = "'merchant_name' can't be null";
        }
        if ((mb_strlen($this->container['merchant_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'merchant_name', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['merchant_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'merchant_name', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['business_license_number']) {
            $invalidProperties[] = "'business_license_number' can't be null";
        }
        if ((mb_strlen($this->container['business_license_number']) > 18)) {
            $invalidProperties[] = "invalid value for 'business_license_number', the character length must be smaller than or equal to 18.";
        }

        if ((mb_strlen($this->container['business_license_number']) < 18)) {
            $invalidProperties[] = "invalid value for 'business_license_number', the character length must be bigger than or equal to 18.";
        }

        if (null === $this->container['legal_person_name']) {
            $invalidProperties[] = "'legal_person_name' can't be null";
        }
        if ((mb_strlen($this->container['legal_person_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'legal_person_name', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['legal_person_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'legal_person_name', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['legal_person_id_card_no']) {
            $invalidProperties[] = "'legal_person_id_card_no' can't be null";
        }
        if ((mb_strlen($this->container['legal_person_id_card_no']) > 18)) {
            $invalidProperties[] = "invalid value for 'legal_person_id_card_no', the character length must be smaller than or equal to 18.";
        }

        if ((mb_strlen($this->container['legal_person_id_card_no']) < 1)) {
            $invalidProperties[] = "invalid value for 'legal_person_id_card_no', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['legal_person_phone_no']) {
            $invalidProperties[] = "'legal_person_phone_no' can't be null";
        }
        if ((mb_strlen($this->container['legal_person_phone_no']) > 32)) {
            $invalidProperties[] = "invalid value for 'legal_person_phone_no', the character length must be smaller than or equal to 32.";
        }

        if ((mb_strlen($this->container['legal_person_phone_no']) < 1)) {
            $invalidProperties[] = "invalid value for 'legal_person_phone_no', the character length must be bigger than or equal to 1.";
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
     * Gets business_license_number.
     *
     * @return string
     */
    public function getBusinessLicenseNumber()
    {
        return $this->container['business_license_number'];
    }

    /**
     * Sets business_license_number.
     *
     * @param string $business_license_number 社会信用代码
     *
     * @return self
     */
    public function setBusinessLicenseNumber($business_license_number)
    {
        $this->container['business_license_number'] = $business_license_number;

        return $this;
    }

    /**
     * Gets legal_person_name.
     *
     * @return string
     */
    public function getLegalPersonName()
    {
        return $this->container['legal_person_name'];
    }

    /**
     * Sets legal_person_name.
     *
     * @param string $legal_person_name 法人身份证姓名
     *
     * @return self
     */
    public function setLegalPersonName($legal_person_name)
    {
        $this->container['legal_person_name'] = $legal_person_name;

        return $this;
    }

    /**
     * Gets legal_person_id_card_no.
     *
     * @return string
     */
    public function getLegalPersonIdCardNo()
    {
        return $this->container['legal_person_id_card_no'];
    }

    /**
     * Sets legal_person_id_card_no.
     *
     * @param string $legal_person_id_card_no 法人身份证号
     *
     * @return self
     */
    public function setLegalPersonIdCardNo($legal_person_id_card_no)
    {
        $this->container['legal_person_id_card_no'] = $legal_person_id_card_no;

        return $this;
    }

    /**
     * Gets legal_person_phone_no.
     *
     * @return string
     */
    public function getLegalPersonPhoneNo()
    {
        return $this->container['legal_person_phone_no'];
    }

    /**
     * Sets legal_person_phone_no.
     *
     * @param string $legal_person_phone_no 法人手机号
     *
     * @return self
     */
    public function setLegalPersonPhoneNo($legal_person_phone_no)
    {
        $this->container['legal_person_phone_no'] = $legal_person_phone_no;

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
