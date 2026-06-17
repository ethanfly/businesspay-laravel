<?php
/**
 * ProfitAllocationReceiverApplicationParam.
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
 * ProfitAllocationReceiverApplicationParam Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProfitAllocationReceiverApplicationParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ProfitAllocationReceiverApplicationParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_application_id'        => 'string',
        'ent_id'                    => 'string',
        'receiver_type'             => '\Entpay\Mse\Client\Model\ProfitAllocationReceiverTypeEnum',
        'out_receiver_name'         => 'string',
        'natural_person_info'       => '\Entpay\Mse\Client\Model\LegalPersonIdCard',
        'settlement_account'        => '\Entpay\Mse\Client\Model\PayeeAccounts',
        'receiver_business_license' => '\Entpay\Mse\Client\Model\AllocationReceiverBusinessLicense',
        'legal_person_info'         => '\Entpay\Mse\Client\Model\LegalPersonIdCard',
        'allocation_background'     => '\Entpay\Mse\Client\Model\AllocationBackgroundInfo',
        'server_notify_url'         => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'out_application_id'        => null,
        'ent_id'                    => null,
        'receiver_type'             => null,
        'out_receiver_name'         => null,
        'natural_person_info'       => 'encrypted|true',
        'settlement_account'        => 'encrypted|true',
        'receiver_business_license' => null,
        'legal_person_info'         => 'encrypted|true',
        'allocation_background'     => null,
        'server_notify_url'         => null,
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
        'out_application_id'        => 'out_application_id',
        'ent_id'                    => 'ent_id',
        'receiver_type'             => 'receiver_type',
        'out_receiver_name'         => 'out_receiver_name',
        'natural_person_info'       => 'natural_person_info',
        'settlement_account'        => 'settlement_account',
        'receiver_business_license' => 'receiver_business_license',
        'legal_person_info'         => 'legal_person_info',
        'allocation_background'     => 'allocation_background',
        'server_notify_url'         => 'server_notify_url',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'out_application_id'        => 'setOutApplicationId',
        'ent_id'                    => 'setEntId',
        'receiver_type'             => 'setReceiverType',
        'out_receiver_name'         => 'setOutReceiverName',
        'natural_person_info'       => 'setNaturalPersonInfo',
        'settlement_account'        => 'setSettlementAccount',
        'receiver_business_license' => 'setReceiverBusinessLicense',
        'legal_person_info'         => 'setLegalPersonInfo',
        'allocation_background'     => 'setAllocationBackground',
        'server_notify_url'         => 'setServerNotifyUrl',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'out_application_id'        => 'getOutApplicationId',
        'ent_id'                    => 'getEntId',
        'receiver_type'             => 'getReceiverType',
        'out_receiver_name'         => 'getOutReceiverName',
        'natural_person_info'       => 'getNaturalPersonInfo',
        'settlement_account'        => 'getSettlementAccount',
        'receiver_business_license' => 'getReceiverBusinessLicense',
        'legal_person_info'         => 'getLegalPersonInfo',
        'allocation_background'     => 'getAllocationBackground',
        'server_notify_url'         => 'getServerNotifyUrl',
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
        $this->container['out_application_id']        = isset($data['out_application_id']) ? $data['out_application_id'] : null;
        $this->container['ent_id']                    = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['receiver_type']             = isset($data['receiver_type']) ? $data['receiver_type'] : null;
        $this->container['out_receiver_name']         = isset($data['out_receiver_name']) ? $data['out_receiver_name'] : null;
        $this->container['natural_person_info']       = isset($data['natural_person_info']) ? $data['natural_person_info'] : null;
        $this->container['settlement_account']        = isset($data['settlement_account']) ? $data['settlement_account'] : null;
        $this->container['receiver_business_license'] = isset($data['receiver_business_license']) ? $data['receiver_business_license'] : null;
        $this->container['legal_person_info']         = isset($data['legal_person_info']) ? $data['legal_person_info'] : null;
        $this->container['allocation_background']     = isset($data['allocation_background']) ? $data['allocation_background'] : null;
        $this->container['server_notify_url']         = isset($data['server_notify_url']) ? $data['server_notify_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['out_application_id']) {
            $invalidProperties[] = "'out_application_id' can't be null";
        }
        if ((mb_strlen($this->container['out_application_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_application_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_application_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_application_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['ent_id']) {
            $invalidProperties[] = "'ent_id' can't be null";
        }
        if ((mb_strlen($this->container['ent_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['ent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['receiver_type']) {
            $invalidProperties[] = "'receiver_type' can't be null";
        }
        if (!is_null($this->container['out_receiver_name']) && (mb_strlen($this->container['out_receiver_name']) > 32)) {
            $invalidProperties[] = "invalid value for 'out_receiver_name', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['out_receiver_name']) && (mb_strlen($this->container['out_receiver_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_receiver_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['server_notify_url']) && (mb_strlen($this->container['server_notify_url']) > 255)) {
            $invalidProperties[] = "invalid value for 'server_notify_url', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['server_notify_url']) && (mb_strlen($this->container['server_notify_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'server_notify_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['server_notify_url']) && !preg_match("/^https?:\/\/[^?]+/", $this->container['server_notify_url'])) {
            $invalidProperties[] = "invalid value for 'server_notify_url', must be conform to the pattern /^https?:\/\/[^?]+/.";
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
     * Gets out_application_id.
     *
     * @return string
     */
    public function getOutApplicationId()
    {
        return $this->container['out_application_id'];
    }

    /**
     * Sets out_application_id.
     *
     * @param string $out_application_id out_application_id
     *
     * @return self
     */
    public function setOutApplicationId($out_application_id)
    {
        $this->container['out_application_id'] = $out_application_id;

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
     * @param string $ent_id ent_id
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

        return $this;
    }

    /**
     * Gets receiver_type.
     *
     * @return \Entpay\Mse\Client\Model\ProfitAllocationReceiverTypeEnum
     */
    public function getReceiverType()
    {
        return $this->container['receiver_type'];
    }

    /**
     * Sets receiver_type.
     *
     * @param \Entpay\Mse\Client\Model\ProfitAllocationReceiverTypeEnum $receiver_type receiver_type
     *
     * @return self
     */
    public function setReceiverType($receiver_type)
    {
        $this->container['receiver_type'] = $receiver_type;

        return $this;
    }

    /**
     * Gets out_receiver_name.
     *
     * @return string|null
     */
    public function getOutReceiverName()
    {
        return $this->container['out_receiver_name'];
    }

    /**
     * Sets out_receiver_name.
     *
     * @param string|null $out_receiver_name 平台分账接收方名称
     *
     * @return self
     */
    public function setOutReceiverName($out_receiver_name)
    {
        $this->container['out_receiver_name'] = $out_receiver_name;

        return $this;
    }

    /**
     * Gets natural_person_info.
     *
     * @return \Entpay\Mse\Client\Model\LegalPersonIdCard|null
     */
    public function getNaturalPersonInfo()
    {
        return $this->container['natural_person_info'];
    }

    /**
     * Sets natural_person_info.
     *
     * @param \Entpay\Mse\Client\Model\LegalPersonIdCard|null $natural_person_info natural_person_info
     *
     * @return self
     */
    public function setNaturalPersonInfo($natural_person_info)
    {
        $this->container['natural_person_info'] = $natural_person_info;

        return $this;
    }

    /**
     * Gets settlement_account.
     *
     * @return \Entpay\Mse\Client\Model\PayeeAccounts|null
     */
    public function getSettlementAccount()
    {
        return $this->container['settlement_account'];
    }

    /**
     * Sets settlement_account.
     *
     * @param \Entpay\Mse\Client\Model\PayeeAccounts|null $settlement_account settlement_account
     *
     * @return self
     */
    public function setSettlementAccount($settlement_account)
    {
        $this->container['settlement_account'] = $settlement_account;

        return $this;
    }

    /**
     * Gets receiver_business_license.
     *
     * @return \Entpay\Mse\Client\Model\AllocationReceiverBusinessLicense|null
     */
    public function getReceiverBusinessLicense()
    {
        return $this->container['receiver_business_license'];
    }

    /**
     * Sets receiver_business_license.
     *
     * @param \Entpay\Mse\Client\Model\AllocationReceiverBusinessLicense|null $receiver_business_license receiver_business_license
     *
     * @return self
     */
    public function setReceiverBusinessLicense($receiver_business_license)
    {
        $this->container['receiver_business_license'] = $receiver_business_license;

        return $this;
    }

    /**
     * Gets legal_person_info.
     *
     * @return \Entpay\Mse\Client\Model\LegalPersonIdCard|null
     */
    public function getLegalPersonInfo()
    {
        return $this->container['legal_person_info'];
    }

    /**
     * Sets legal_person_info.
     *
     * @param \Entpay\Mse\Client\Model\LegalPersonIdCard|null $legal_person_info legal_person_info
     *
     * @return self
     */
    public function setLegalPersonInfo($legal_person_info)
    {
        $this->container['legal_person_info'] = $legal_person_info;

        return $this;
    }

    /**
     * Gets allocation_background.
     *
     * @return \Entpay\Mse\Client\Model\AllocationBackgroundInfo|null
     */
    public function getAllocationBackground()
    {
        return $this->container['allocation_background'];
    }

    /**
     * Sets allocation_background.
     *
     * @param \Entpay\Mse\Client\Model\AllocationBackgroundInfo|null $allocation_background allocation_background
     *
     * @return self
     */
    public function setAllocationBackground($allocation_background)
    {
        $this->container['allocation_background'] = $allocation_background;

        return $this;
    }

    /**
     * Gets server_notify_url.
     *
     * @return string|null
     */
    public function getServerNotifyUrl()
    {
        return $this->container['server_notify_url'];
    }

    /**
     * Sets server_notify_url.
     *
     * @param string|null $server_notify_url server_notify_url
     *
     * @return self
     */
    public function setServerNotifyUrl($server_notify_url)
    {
        $this->container['server_notify_url'] = $server_notify_url;

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
