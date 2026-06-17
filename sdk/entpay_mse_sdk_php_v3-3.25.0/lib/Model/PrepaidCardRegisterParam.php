<?php
/**
 * PrepaidCardRegisterParam.
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
 * PrepaidCardRegisterParam Class Doc Comment.
 *
 * @category Class
 * @description 预付卡注册参数
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PrepaidCardRegisterParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PrepaidCardRegisterParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_prepaid_card_id' => 'string',
        'ent_id'              => 'string',
        'merchant_name'       => 'string',
        'user_type'           => 'string',
        'individual_info'     => '\Entpay\Mse\Client\Model\IndividualInfo',
        'enterprise_info'     => '\Entpay\Mse\Client\Model\EnterpriseInfo',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'out_prepaid_card_id' => null,
        'ent_id'              => null,
        'merchant_name'       => null,
        'user_type'           => null,
        'individual_info'     => 'encrypted|true',
        'enterprise_info'     => 'encrypted|true',
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
        'out_prepaid_card_id' => 'out_prepaid_card_id',
        'ent_id'              => 'ent_id',
        'merchant_name'       => 'merchant_name',
        'user_type'           => 'user_type',
        'individual_info'     => 'individual_info',
        'enterprise_info'     => 'enterprise_info',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'out_prepaid_card_id' => 'setOutPrepaidCardId',
        'ent_id'              => 'setEntId',
        'merchant_name'       => 'setMerchantName',
        'user_type'           => 'setUserType',
        'individual_info'     => 'setIndividualInfo',
        'enterprise_info'     => 'setEnterpriseInfo',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'out_prepaid_card_id' => 'getOutPrepaidCardId',
        'ent_id'              => 'getEntId',
        'merchant_name'       => 'getMerchantName',
        'user_type'           => 'getUserType',
        'individual_info'     => 'getIndividualInfo',
        'enterprise_info'     => 'getEnterpriseInfo',
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

    const USER_TYPE_INDIVIDUAL = 'INDIVIDUAL';
    const USER_TYPE_ENTERPRISE = 'ENTERPRISE';

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
        $this->container['out_prepaid_card_id'] = isset($data['out_prepaid_card_id']) ? $data['out_prepaid_card_id'] : null;
        $this->container['ent_id']              = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['merchant_name']       = isset($data['merchant_name']) ? $data['merchant_name'] : null;
        $this->container['user_type']           = isset($data['user_type']) ? $data['user_type'] : null;
        $this->container['individual_info']     = isset($data['individual_info']) ? $data['individual_info'] : null;
        $this->container['enterprise_info']     = isset($data['enterprise_info']) ? $data['enterprise_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['out_prepaid_card_id']) {
            $invalidProperties[] = "'out_prepaid_card_id' can't be null";
        }
        if ((mb_strlen($this->container['out_prepaid_card_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'out_prepaid_card_id', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['out_prepaid_card_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_prepaid_card_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['ent_id']) {
            $invalidProperties[] = "'ent_id' can't be null";
        }
        if ((mb_strlen($this->container['ent_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['ent_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be bigger than or equal to 10.";
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

        if (null === $this->container['user_type']) {
            $invalidProperties[] = "'user_type' can't be null";
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
     * Gets out_prepaid_card_id.
     *
     * @return string
     */
    public function getOutPrepaidCardId()
    {
        return $this->container['out_prepaid_card_id'];
    }

    /**
     * Sets out_prepaid_card_id.
     *
     * @param string $out_prepaid_card_id 外部预付卡id
     *
     * @return self
     */
    public function setOutPrepaidCardId($out_prepaid_card_id)
    {
        $this->container['out_prepaid_card_id'] = $out_prepaid_card_id;

        return $this;
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
     * @param string $ent_id 企业id
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

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
     * @param string $merchant_name 企业名称
     *
     * @return self
     */
    public function setMerchantName($merchant_name)
    {
        $this->container['merchant_name'] = $merchant_name;

        return $this;
    }

    /**
     * Gets user_type.
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->container['user_type'];
    }

    /**
     * Sets user_type.
     *
     * @param string $user_type 用户类型
     *
     * @return self
     */
    public function setUserType($user_type)
    {
        $this->container['user_type'] = $user_type;

        return $this;
    }

    /**
     * Gets individual_info.
     *
     * @return \Entpay\Mse\Client\Model\IndividualInfo|null
     */
    public function getIndividualInfo()
    {
        return $this->container['individual_info'];
    }

    /**
     * Sets individual_info.
     *
     * @param \Entpay\Mse\Client\Model\IndividualInfo|null $individual_info individual_info
     *
     * @return self
     */
    public function setIndividualInfo($individual_info)
    {
        $this->container['individual_info'] = $individual_info;

        return $this;
    }

    /**
     * Gets enterprise_info.
     *
     * @return \Entpay\Mse\Client\Model\EnterpriseInfo|null
     */
    public function getEnterpriseInfo()
    {
        return $this->container['enterprise_info'];
    }

    /**
     * Sets enterprise_info.
     *
     * @param \Entpay\Mse\Client\Model\EnterpriseInfo|null $enterprise_info enterprise_info
     *
     * @return self
     */
    public function setEnterpriseInfo($enterprise_info)
    {
        $this->container['enterprise_info'] = $enterprise_info;

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
