<?php
/**
 * ProductApplicationParam.
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
 * ProductApplicationParam Class Doc Comment.
 *
 * @category Class
 * @description 开户申请请求参数
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductApplicationParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ProductApplicationParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_request_no'         => 'string',
        'products'               => '\Entpay\Mse\Client\Model\Product[]',
        'business_license'       => '\Entpay\Mse\Client\Model\BusinessLicense',
        'legal_person_id_card'   => '\Entpay\Mse\Client\Model\LegalPersonIdCard',
        'notify_url'             => '\Entpay\Mse\Client\Model\NotifyUrl',
        'contact_info'           => '\Entpay\Mse\Client\Model\ContactInfo',
        'payee_accounts'         => '\Entpay\Mse\Client\Model\PayeeAccounts[]',
        'actual_controller_info' => '\Entpay\Mse\Client\Model\ActualControllerInfo',
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
        'products'               => null,
        'business_license'       => 'encrypted|true',
        'legal_person_id_card'   => 'encrypted|true',
        'notify_url'             => null,
        'contact_info'           => 'encrypted|true',
        'payee_accounts'         => 'encrypted|true',
        'actual_controller_info' => 'encrypted|true',
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
        'products'               => 'products',
        'business_license'       => 'business_license',
        'legal_person_id_card'   => 'legal_person_id_card',
        'notify_url'             => 'notify_url',
        'contact_info'           => 'contact_info',
        'payee_accounts'         => 'payee_accounts',
        'actual_controller_info' => 'actual_controller_info',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'out_request_no'         => 'setOutRequestNo',
        'products'               => 'setProducts',
        'business_license'       => 'setBusinessLicense',
        'legal_person_id_card'   => 'setLegalPersonIdCard',
        'notify_url'             => 'setNotifyUrl',
        'contact_info'           => 'setContactInfo',
        'payee_accounts'         => 'setPayeeAccounts',
        'actual_controller_info' => 'setActualControllerInfo',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'out_request_no'         => 'getOutRequestNo',
        'products'               => 'getProducts',
        'business_license'       => 'getBusinessLicense',
        'legal_person_id_card'   => 'getLegalPersonIdCard',
        'notify_url'             => 'getNotifyUrl',
        'contact_info'           => 'getContactInfo',
        'payee_accounts'         => 'getPayeeAccounts',
        'actual_controller_info' => 'getActualControllerInfo',
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
        $this->container['products']               = isset($data['products']) ? $data['products'] : null;
        $this->container['business_license']       = isset($data['business_license']) ? $data['business_license'] : null;
        $this->container['legal_person_id_card']   = isset($data['legal_person_id_card']) ? $data['legal_person_id_card'] : null;
        $this->container['notify_url']             = isset($data['notify_url']) ? $data['notify_url'] : null;
        $this->container['contact_info']           = isset($data['contact_info']) ? $data['contact_info'] : null;
        $this->container['payee_accounts']         = isset($data['payee_accounts']) ? $data['payee_accounts'] : null;
        $this->container['actual_controller_info'] = isset($data['actual_controller_info']) ? $data['actual_controller_info'] : null;
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

        if (null === $this->container['products']) {
            $invalidProperties[] = "'products' can't be null";
        }
        if (null === $this->container['business_license']) {
            $invalidProperties[] = "'business_license' can't be null";
        }
        if (null === $this->container['notify_url']) {
            $invalidProperties[] = "'notify_url' can't be null";
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
     * Gets products.
     *
     * @return \Entpay\Mse\Client\Model\Product[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products.
     *
     * @param \Entpay\Mse\Client\Model\Product[] $products 产品信息
     *
     * @return self
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

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
     * Gets notify_url.
     *
     * @return \Entpay\Mse\Client\Model\NotifyUrl
     */
    public function getNotifyUrl()
    {
        return $this->container['notify_url'];
    }

    /**
     * Sets notify_url.
     *
     * @param \Entpay\Mse\Client\Model\NotifyUrl $notify_url notify_url
     *
     * @return self
     */
    public function setNotifyUrl($notify_url)
    {
        $this->container['notify_url'] = $notify_url;

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
     * Gets payee_accounts.
     *
     * @return \Entpay\Mse\Client\Model\PayeeAccounts[]|null
     */
    public function getPayeeAccounts()
    {
        return $this->container['payee_accounts'];
    }

    /**
     * Sets payee_accounts.
     *
     * @param \Entpay\Mse\Client\Model\PayeeAccounts[]|null $payee_accounts 收款账户信息
     *
     * @return self
     */
    public function setPayeeAccounts($payee_accounts)
    {
        $this->container['payee_accounts'] = $payee_accounts;

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
