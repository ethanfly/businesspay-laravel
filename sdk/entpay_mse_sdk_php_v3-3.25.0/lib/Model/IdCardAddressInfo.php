<?php
/**
 * IdCardAddressInfo.
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
 * IdCardAddressInfo Class Doc Comment.
 *
 * @category Class
 * @description 身份证地址信息，需下载mainland_id_card_add_code.json后，匹配对应的省市区名称和代码
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IdCardAddressInfo implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'IdCardAddressInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'detail_address' => 'string',
        'province_name'  => 'string',
        'province_code'  => 'string',
        'city_name'      => 'string',
        'city_code'      => 'string',
        'area_name'      => 'string',
        'area_code'      => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'detail_address' => null,
        'province_name'  => null,
        'province_code'  => null,
        'city_name'      => null,
        'city_code'      => null,
        'area_name'      => null,
        'area_code'      => null,
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
        'detail_address' => 'detail_address',
        'province_name'  => 'province_name',
        'province_code'  => 'province_code',
        'city_name'      => 'city_name',
        'city_code'      => 'city_code',
        'area_name'      => 'area_name',
        'area_code'      => 'area_code',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'detail_address' => 'setDetailAddress',
        'province_name'  => 'setProvinceName',
        'province_code'  => 'setProvinceCode',
        'city_name'      => 'setCityName',
        'city_code'      => 'setCityCode',
        'area_name'      => 'setAreaName',
        'area_code'      => 'setAreaCode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'detail_address' => 'getDetailAddress',
        'province_name'  => 'getProvinceName',
        'province_code'  => 'getProvinceCode',
        'city_name'      => 'getCityName',
        'city_code'      => 'getCityCode',
        'area_name'      => 'getAreaName',
        'area_code'      => 'getAreaCode',
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
        $this->container['detail_address'] = isset($data['detail_address']) ? $data['detail_address'] : null;
        $this->container['province_name']  = isset($data['province_name']) ? $data['province_name'] : null;
        $this->container['province_code']  = isset($data['province_code']) ? $data['province_code'] : null;
        $this->container['city_name']      = isset($data['city_name']) ? $data['city_name'] : null;
        $this->container['city_code']      = isset($data['city_code']) ? $data['city_code'] : null;
        $this->container['area_name']      = isset($data['area_name']) ? $data['area_name'] : null;
        $this->container['area_code']      = isset($data['area_code']) ? $data['area_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['detail_address']) {
            $invalidProperties[] = "'detail_address' can't be null";
        }
        if ((mb_strlen($this->container['detail_address']) > 128)) {
            $invalidProperties[] = "invalid value for 'detail_address', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['detail_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'detail_address', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['province_name']) {
            $invalidProperties[] = "'province_name' can't be null";
        }
        if ((mb_strlen($this->container['province_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'province_name', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['province_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'province_name', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['province_code']) {
            $invalidProperties[] = "'province_code' can't be null";
        }
        if ((mb_strlen($this->container['province_code']) > 16)) {
            $invalidProperties[] = "invalid value for 'province_code', the character length must be smaller than or equal to 16.";
        }

        if ((mb_strlen($this->container['province_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'province_code', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['city_name']) {
            $invalidProperties[] = "'city_name' can't be null";
        }
        if ((mb_strlen($this->container['city_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'city_name', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['city_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'city_name', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['city_code']) {
            $invalidProperties[] = "'city_code' can't be null";
        }
        if ((mb_strlen($this->container['city_code']) > 16)) {
            $invalidProperties[] = "invalid value for 'city_code', the character length must be smaller than or equal to 16.";
        }

        if ((mb_strlen($this->container['city_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'city_code', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['area_name']) {
            $invalidProperties[] = "'area_name' can't be null";
        }
        if ((mb_strlen($this->container['area_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'area_name', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['area_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'area_name', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['area_code']) {
            $invalidProperties[] = "'area_code' can't be null";
        }
        if ((mb_strlen($this->container['area_code']) > 16)) {
            $invalidProperties[] = "invalid value for 'area_code', the character length must be smaller than or equal to 16.";
        }

        if ((mb_strlen($this->container['area_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'area_code', the character length must be bigger than or equal to 1.";
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
     * Gets detail_address.
     *
     * @return string
     */
    public function getDetailAddress()
    {
        return $this->container['detail_address'];
    }

    /**
     * Sets detail_address.
     *
     * @param string $detail_address 详细地址，如：xx街道xx号
     *
     * @return self
     */
    public function setDetailAddress($detail_address)
    {
        $this->container['detail_address'] = $detail_address;

        return $this;
    }

    /**
     * Gets province_name.
     *
     * @return string
     */
    public function getProvinceName()
    {
        return $this->container['province_name'];
    }

    /**
     * Sets province_name.
     *
     * @param string $province_name 省份名称，如：广东省
     *
     * @return self
     */
    public function setProvinceName($province_name)
    {
        $this->container['province_name'] = $province_name;

        return $this;
    }

    /**
     * Gets province_code.
     *
     * @return string
     */
    public function getProvinceCode()
    {
        return $this->container['province_code'];
    }

    /**
     * Sets province_code.
     *
     * @param string $province_code 省份代码，如：440000
     *
     * @return self
     */
    public function setProvinceCode($province_code)
    {
        $this->container['province_code'] = $province_code;

        return $this;
    }

    /**
     * Gets city_name.
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->container['city_name'];
    }

    /**
     * Sets city_name.
     *
     * @param string $city_name 市名称，如：深圳市
     *
     * @return self
     */
    public function setCityName($city_name)
    {
        $this->container['city_name'] = $city_name;

        return $this;
    }

    /**
     * Gets city_code.
     *
     * @return string
     */
    public function getCityCode()
    {
        return $this->container['city_code'];
    }

    /**
     * Sets city_code.
     *
     * @param string $city_code 市代码，如：440300
     *
     * @return self
     */
    public function setCityCode($city_code)
    {
        $this->container['city_code'] = $city_code;

        return $this;
    }

    /**
     * Gets area_name.
     *
     * @return string
     */
    public function getAreaName()
    {
        return $this->container['area_name'];
    }

    /**
     * Sets area_name.
     *
     * @param string $area_name 区名称，如：南山区
     *
     * @return self
     */
    public function setAreaName($area_name)
    {
        $this->container['area_name'] = $area_name;

        return $this;
    }

    /**
     * Gets area_code.
     *
     * @return string
     */
    public function getAreaCode()
    {
        return $this->container['area_code'];
    }

    /**
     * Sets area_code.
     *
     * @param string $area_code 区代码，如：440305
     *
     * @return self
     */
    public function setAreaCode($area_code)
    {
        $this->container['area_code'] = $area_code;

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
