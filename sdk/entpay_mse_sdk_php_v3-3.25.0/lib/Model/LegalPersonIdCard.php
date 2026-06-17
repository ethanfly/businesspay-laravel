<?php
/**
 * LegalPersonIdCard.
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
 * LegalPersonIdCard Class Doc Comment.
 *
 * @category Class
 * @description 法人身份证信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LegalPersonIdCard implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'LegalPersonIdCard';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'name'                    => 'string',
        'number'                  => 'string',
        'validity_period'         => 'string[]',
        'front_photocopy_file_id' => 'string',
        'back_photocopy_file_id'  => 'string',
        'address'                 => 'string',
        'id_card_address_info'    => '\Entpay\Mse\Client\Model\IdCardAddressInfo',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'name'                    => 'encrypted|false',
        'number'                  => 'encrypted|false',
        'validity_period'         => null,
        'front_photocopy_file_id' => null,
        'back_photocopy_file_id'  => null,
        'address'                 => null,
        'id_card_address_info'    => null,
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
        'name'                    => 'name',
        'number'                  => 'number',
        'validity_period'         => 'validity_period',
        'front_photocopy_file_id' => 'front_photocopy_file_id',
        'back_photocopy_file_id'  => 'back_photocopy_file_id',
        'address'                 => 'address',
        'id_card_address_info'    => 'id_card_address_info',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'name'                    => 'setName',
        'number'                  => 'setNumber',
        'validity_period'         => 'setValidityPeriod',
        'front_photocopy_file_id' => 'setFrontPhotocopyFileId',
        'back_photocopy_file_id'  => 'setBackPhotocopyFileId',
        'address'                 => 'setAddress',
        'id_card_address_info'    => 'setIdCardAddressInfo',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'name'                    => 'getName',
        'number'                  => 'getNumber',
        'validity_period'         => 'getValidityPeriod',
        'front_photocopy_file_id' => 'getFrontPhotocopyFileId',
        'back_photocopy_file_id'  => 'getBackPhotocopyFileId',
        'address'                 => 'getAddress',
        'id_card_address_info'    => 'getIdCardAddressInfo',
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
        $this->container['name']                    = isset($data['name']) ? $data['name'] : null;
        $this->container['number']                  = isset($data['number']) ? $data['number'] : null;
        $this->container['validity_period']         = isset($data['validity_period']) ? $data['validity_period'] : null;
        $this->container['front_photocopy_file_id'] = isset($data['front_photocopy_file_id']) ? $data['front_photocopy_file_id'] : null;
        $this->container['back_photocopy_file_id']  = isset($data['back_photocopy_file_id']) ? $data['back_photocopy_file_id'] : null;
        $this->container['address']                 = isset($data['address']) ? $data['address'] : null;
        $this->container['id_card_address_info']    = isset($data['id_card_address_info']) ? $data['id_card_address_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) > 256)) {
            $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 256.";
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
     * @param string|null $address 证件地址信息(只有小程序入驻地址详情)
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
