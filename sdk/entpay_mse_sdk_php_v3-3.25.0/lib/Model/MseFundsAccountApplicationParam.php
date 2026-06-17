<?php
/**
 * MseFundsAccountApplicationParam.
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
 * MseFundsAccountApplicationParam Class Doc Comment.
 *
 * @category Class
 * @description 开户申请请求参数
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MseFundsAccountApplicationParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'MseFundsAccountApplicationParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_request_no'         => 'string',
        'payee_ent_id'           => 'string',
        'business_license'       => '\Entpay\Mse\Client\Model\BusinessLicense',
        'legal_person_id_card'   => '\Entpay\Mse\Client\Model\LegalPersonIdCard',
        'contact_info'           => '\Entpay\Mse\Client\Model\ContactInfo',
        'withdraw_account'       => '\Entpay\Mse\Client\Model\PayeeAccounts',
        'actual_controller_info' => '\Entpay\Mse\Client\Model\ActualControllerInfo',
        'notify_url'             => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'out_request_no'         => null,
        'payee_ent_id'           => null,
        'business_license'       => 'encrypted|true',
        'legal_person_id_card'   => 'encrypted|true',
        'contact_info'           => 'encrypted|true',
        'withdraw_account'       => 'encrypted|true',
        'actual_controller_info' => 'encrypted|true',
        'notify_url'             => null,
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
        'out_request_no'         => 'out_request_no',
        'payee_ent_id'           => 'payee_ent_id',
        'business_license'       => 'business_license',
        'legal_person_id_card'   => 'legal_person_id_card',
        'contact_info'           => 'contact_info',
        'withdraw_account'       => 'withdraw_account',
        'actual_controller_info' => 'actual_controller_info',
        'notify_url'             => 'notify_url',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'out_request_no'         => 'setOutRequestNo',
        'payee_ent_id'           => 'setPayeeEntId',
        'business_license'       => 'setBusinessLicense',
        'legal_person_id_card'   => 'setLegalPersonIdCard',
        'contact_info'           => 'setContactInfo',
        'withdraw_account'       => 'setWithdrawAccount',
        'actual_controller_info' => 'setActualControllerInfo',
        'notify_url'             => 'setNotifyUrl',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'out_request_no'         => 'getOutRequestNo',
        'payee_ent_id'           => 'getPayeeEntId',
        'business_license'       => 'getBusinessLicense',
        'legal_person_id_card'   => 'getLegalPersonIdCard',
        'contact_info'           => 'getContactInfo',
        'withdraw_account'       => 'getWithdrawAccount',
        'actual_controller_info' => 'getActualControllerInfo',
        'notify_url'             => 'getNotifyUrl',
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
        $this->container['out_request_no']         = isset($data['out_request_no']) ? $data['out_request_no'] : null;
        $this->container['payee_ent_id']           = isset($data['payee_ent_id']) ? $data['payee_ent_id'] : null;
        $this->container['business_license']       = isset($data['business_license']) ? $data['business_license'] : null;
        $this->container['legal_person_id_card']   = isset($data['legal_person_id_card']) ? $data['legal_person_id_card'] : null;
        $this->container['contact_info']           = isset($data['contact_info']) ? $data['contact_info'] : null;
        $this->container['withdraw_account']       = isset($data['withdraw_account']) ? $data['withdraw_account'] : null;
        $this->container['actual_controller_info'] = isset($data['actual_controller_info']) ? $data['actual_controller_info'] : null;
        $this->container['notify_url']             = isset($data['notify_url']) ? $data['notify_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['out_request_no']) {
            $invalidProperties[] = "'out_request_no' can't be null";
        }
        if ((mb_strlen($this->container['out_request_no']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_request_no', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_request_no']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_request_no', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match('/^(\\w|-)+$/', $this->container['out_request_no'])) {
            $invalidProperties[] = "invalid value for 'out_request_no', must be conform to the pattern /^(\\w|-)+$/.";
        }

        if (null === $this->container['payee_ent_id']) {
            $invalidProperties[] = "'payee_ent_id' can't be null";
        }
        if ((mb_strlen($this->container['payee_ent_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'payee_ent_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['payee_ent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'payee_ent_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['business_license']) {
            $invalidProperties[] = "'business_license' can't be null";
        }
        if (null === $this->container['notify_url']) {
            $invalidProperties[] = "'notify_url' can't be null";
        }
        if ((mb_strlen($this->container['notify_url']) > 256)) {
            $invalidProperties[] = "invalid value for 'notify_url', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['notify_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'notify_url', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^https?:\/\/[^?]+/", $this->container['notify_url'])) {
            $invalidProperties[] = "invalid value for 'notify_url', must be conform to the pattern /^https?:\/\/[^?]+/.";
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
     * Gets out_request_no.
     *
     * @return string
     */
    public function getOutRequestNo()
    {
        return $this->container['out_request_no'];
    }

    /**
     * Sets out_request_no.
     *
     * @param string $out_request_no 业务申请编号
     *
     * @return self
     */
    public function setOutRequestNo($out_request_no)
    {
        $this->container['out_request_no'] = $out_request_no;

        return $this;
    }

    /**
     * Gets payee_ent_id.
     *
     * @return string
     */
    public function getPayeeEntId()
    {
        return $this->container['payee_ent_id'];
    }

    /**
     * Sets payee_ent_id.
     *
     * @param string $payee_ent_id payee_ent_id
     *
     * @return self
     */
    public function setPayeeEntId($payee_ent_id)
    {
        $this->container['payee_ent_id'] = $payee_ent_id;

        return $this;
    }

    /**
     * Gets business_license.
     *
     * @return \Entpay\Mse\Client\Model\BusinessLicense
     */
    public function getBusinessLicense()
    {
        return $this->container['business_license'];
    }

    /**
     * Sets business_license.
     *
     * @param \Entpay\Mse\Client\Model\BusinessLicense $business_license business_license
     *
     * @return self
     */
    public function setBusinessLicense($business_license)
    {
        $this->container['business_license'] = $business_license;

        return $this;
    }

    /**
     * Gets legal_person_id_card.
     *
     * @return \Entpay\Mse\Client\Model\LegalPersonIdCard|null
     */
    public function getLegalPersonIdCard()
    {
        return $this->container['legal_person_id_card'];
    }

    /**
     * Sets legal_person_id_card.
     *
     * @param \Entpay\Mse\Client\Model\LegalPersonIdCard|null $legal_person_id_card legal_person_id_card
     *
     * @return self
     */
    public function setLegalPersonIdCard($legal_person_id_card)
    {
        $this->container['legal_person_id_card'] = $legal_person_id_card;

        return $this;
    }

    /**
     * Gets contact_info.
     *
     * @return \Entpay\Mse\Client\Model\ContactInfo|null
     */
    public function getContactInfo()
    {
        return $this->container['contact_info'];
    }

    /**
     * Sets contact_info.
     *
     * @param \Entpay\Mse\Client\Model\ContactInfo|null $contact_info contact_info
     *
     * @return self
     */
    public function setContactInfo($contact_info)
    {
        $this->container['contact_info'] = $contact_info;

        return $this;
    }

    /**
     * Gets withdraw_account.
     *
     * @return \Entpay\Mse\Client\Model\PayeeAccounts|null
     */
    public function getWithdrawAccount()
    {
        return $this->container['withdraw_account'];
    }

    /**
     * Sets withdraw_account.
     *
     * @param \Entpay\Mse\Client\Model\PayeeAccounts|null $withdraw_account withdraw_account
     *
     * @return self
     */
    public function setWithdrawAccount($withdraw_account)
    {
        $this->container['withdraw_account'] = $withdraw_account;

        return $this;
    }

    /**
     * Gets actual_controller_info.
     *
     * @return \Entpay\Mse\Client\Model\ActualControllerInfo|null
     */
    public function getActualControllerInfo()
    {
        return $this->container['actual_controller_info'];
    }

    /**
     * Sets actual_controller_info.
     *
     * @param \Entpay\Mse\Client\Model\ActualControllerInfo|null $actual_controller_info actual_controller_info
     *
     * @return self
     */
    public function setActualControllerInfo($actual_controller_info)
    {
        $this->container['actual_controller_info'] = $actual_controller_info;

        return $this;
    }

    /**
     * Gets notify_url.
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->container['notify_url'];
    }

    /**
     * Sets notify_url.
     *
     * @param string $notify_url 结果后台通知url
     *
     * @return self
     */
    public function setNotifyUrl($notify_url)
    {
        $this->container['notify_url'] = $notify_url;

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
