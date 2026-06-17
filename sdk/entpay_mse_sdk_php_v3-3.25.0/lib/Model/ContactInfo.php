<?php
/**
 * ContactInfo.
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
 * ContactInfo Class Doc Comment.
 *
 * @category Class
 * @description 联系人信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ContactInfo implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ContactInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'mobile_number'                => 'string',
        'name'                         => 'string',
        'number'                       => 'string',
        'email'                        => 'string',
        'validity_period'              => 'string[]',
        'front_photocopy_file_id'      => 'string',
        'back_photocopy_file_id'       => 'string',
        'id_card_address_info'         => '\Entpay\Mse\Client\Model\IdCardAddressInfo',
        'authorization_letter_file_id' => 'string',
        'address'                      => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'mobile_number'                => 'encrypted|false',
        'name'                         => 'encrypted|false',
        'number'                       => 'encrypted|false',
        'email'                        => 'encrypted|false',
        'validity_period'              => null,
        'front_photocopy_file_id'      => null,
        'back_photocopy_file_id'       => null,
        'id_card_address_info'         => null,
        'authorization_letter_file_id' => null,
        'address'                      => null,
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
        'mobile_number'                => 'mobile_number',
        'name'                         => 'name',
        'number'                       => 'number',
        'email'                        => 'email',
        'validity_period'              => 'validity_period',
        'front_photocopy_file_id'      => 'front_photocopy_file_id',
        'back_photocopy_file_id'       => 'back_photocopy_file_id',
        'id_card_address_info'         => 'id_card_address_info',
        'authorization_letter_file_id' => 'authorization_letter_file_id',
        'address'                      => 'address',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'mobile_number'                => 'setMobileNumber',
        'name'                         => 'setName',
        'number'                       => 'setNumber',
        'email'                        => 'setEmail',
        'validity_period'              => 'setValidityPeriod',
        'front_photocopy_file_id'      => 'setFrontPhotocopyFileId',
        'back_photocopy_file_id'       => 'setBackPhotocopyFileId',
        'id_card_address_info'         => 'setIdCardAddressInfo',
        'authorization_letter_file_id' => 'setAuthorizationLetterFileId',
        'address'                      => 'setAddress',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'mobile_number'                => 'getMobileNumber',
        'name'                         => 'getName',
        'number'                       => 'getNumber',
        'email'                        => 'getEmail',
        'validity_period'              => 'getValidityPeriod',
        'front_photocopy_file_id'      => 'getFrontPhotocopyFileId',
        'back_photocopy_file_id'       => 'getBackPhotocopyFileId',
        'id_card_address_info'         => 'getIdCardAddressInfo',
        'authorization_letter_file_id' => 'getAuthorizationLetterFileId',
        'address'                      => 'getAddress',
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
        $this->container['mobile_number']                = isset($data['mobile_number']) ? $data['mobile_number'] : null;
        $this->container['name']                         = isset($data['name']) ? $data['name'] : null;
        $this->container['number']                       = isset($data['number']) ? $data['number'] : null;
        $this->container['email']                        = isset($data['email']) ? $data['email'] : null;
        $this->container['validity_period']              = isset($data['validity_period']) ? $data['validity_period'] : null;
        $this->container['front_photocopy_file_id']      = isset($data['front_photocopy_file_id']) ? $data['front_photocopy_file_id'] : null;
        $this->container['back_photocopy_file_id']       = isset($data['back_photocopy_file_id']) ? $data['back_photocopy_file_id'] : null;
        $this->container['id_card_address_info']         = isset($data['id_card_address_info']) ? $data['id_card_address_info'] : null;
        $this->container['authorization_letter_file_id'] = isset($data['authorization_letter_file_id']) ? $data['authorization_letter_file_id'] : null;
        $this->container['address']                      = isset($data['address']) ? $data['address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['mobile_number']) && (mb_strlen($this->container['mobile_number']) > 32)) {
            $invalidProperties[] = "invalid value for 'mobile_number', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['mobile_number']) && (mb_strlen($this->container['mobile_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'mobile_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 18)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) < 1)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 64)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 1)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['front_photocopy_file_id']) && (mb_strlen($this->container['front_photocopy_file_id']) > 256)) {
            $invalidProperties[] = "invalid value for 'front_photocopy_file_id', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['front_photocopy_file_id']) && (mb_strlen($this->container['front_photocopy_file_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'front_photocopy_file_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['back_photocopy_file_id']) && (mb_strlen($this->container['back_photocopy_file_id']) > 256)) {
            $invalidProperties[] = "invalid value for 'back_photocopy_file_id', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['back_photocopy_file_id']) && (mb_strlen($this->container['back_photocopy_file_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'back_photocopy_file_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['authorization_letter_file_id']) && (mb_strlen($this->container['authorization_letter_file_id']) > 256)) {
            $invalidProperties[] = "invalid value for 'authorization_letter_file_id', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['authorization_letter_file_id']) && (mb_strlen($this->container['authorization_letter_file_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'authorization_letter_file_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) > 128)) {
            $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) < 1)) {
            $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 1.";
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
     * Gets mobile_number.
     *
     * @return string|null
     */
    public function getMobileNumber()
    {
        return $this->container['mobile_number'];
    }

    /**
     * Sets mobile_number.
     *
     * @param string|null $mobile_number 联系方式
     *
     * @return self
     */
    public function setMobileNumber($mobile_number)
    {
        $this->container['mobile_number'] = $mobile_number;

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
     * @param string|null $name 身份证姓名
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number.
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number.
     *
     * @param string|null $number 身份证号码
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email.
     *
     * @param string|null $email 超管的邮箱
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * @param string[]|null $validity_period 身份证有效期限
     *
     * @return self
     */
    public function setValidityPeriod($validity_period)
    {
        $this->container['validity_period'] = $validity_period;

        return $this;
    }

    /**
     * Gets front_photocopy_file_id.
     *
     * @return string|null
     */
    public function getFrontPhotocopyFileId()
    {
        return $this->container['front_photocopy_file_id'];
    }

    /**
     * Sets front_photocopy_file_id.
     *
     * @param string|null $front_photocopy_file_id 身份证人像面照片，文件上传接口返回的file_id
     *
     * @return self
     */
    public function setFrontPhotocopyFileId($front_photocopy_file_id)
    {
        $this->container['front_photocopy_file_id'] = $front_photocopy_file_id;

        return $this;
    }

    /**
     * Gets back_photocopy_file_id.
     *
     * @return string|null
     */
    public function getBackPhotocopyFileId()
    {
        return $this->container['back_photocopy_file_id'];
    }

    /**
     * Sets back_photocopy_file_id.
     *
     * @param string|null $back_photocopy_file_id 身份证国徽面照片，文件上传接口返回的file_id
     *
     * @return self
     */
    public function setBackPhotocopyFileId($back_photocopy_file_id)
    {
        $this->container['back_photocopy_file_id'] = $back_photocopy_file_id;

        return $this;
    }

    /**
     * Gets id_card_address_info.
     *
     * @return \Entpay\Mse\Client\Model\IdCardAddressInfo|null
     */
    public function getIdCardAddressInfo()
    {
        return $this->container['id_card_address_info'];
    }

    /**
     * Sets id_card_address_info.
     *
     * @param \Entpay\Mse\Client\Model\IdCardAddressInfo|null $id_card_address_info id_card_address_info
     *
     * @return self
     */
    public function setIdCardAddressInfo($id_card_address_info)
    {
        $this->container['id_card_address_info'] = $id_card_address_info;

        return $this;
    }

    /**
     * Gets authorization_letter_file_id.
     *
     * @return string|null
     */
    public function getAuthorizationLetterFileId()
    {
        return $this->container['authorization_letter_file_id'];
    }

    /**
     * Sets authorization_letter_file_id.
     *
     * @param string|null $authorization_letter_file_id 法人授权书，文件上传接口返回的file_id
     *
     * @return self
     */
    public function setAuthorizationLetterFileId($authorization_letter_file_id)
    {
        $this->container['authorization_letter_file_id'] = $authorization_letter_file_id;

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
     * @param string|null $address 身份证地址信息
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
