<?php
/**
 * MseFundsAccountApplication.
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

namespace Entpay\Mse\Client\Api;

use ArrayAccess;
use Entpay\Mse\Client\Http\EntpayClient;
use Entpay\Mse\Client\Model\AccountLink;
use Entpay\Mse\Client\Model\ModelInterface;
use Entpay\Mse\Client\ObjectSerializer;
use JsonSerializable;

/**
 * MseFundsAccountApplication Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class MseFundsAccountApplication implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'MseFundsAccountApplication';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'request_no'                 => 'string',
        'out_request_no'             => 'string',
        'unified_social_credit_code' => 'string',
        'merchant_name'              => 'string',
        'ent_id'                     => 'string',
        'mse_funds_account'          => '\Entpay\Mse\Client\Model\MseFundsAccount',
        'status'                     => 'string',
        'failed_type'                => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'request_no'                 => null,
        'out_request_no'             => null,
        'unified_social_credit_code' => null,
        'merchant_name'              => null,
        'ent_id'                     => null,
        'mse_funds_account'          => null,
        'status'                     => null,
        'failed_type'                => null,
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
        'request_no'                 => 'request_no',
        'out_request_no'             => 'out_request_no',
        'unified_social_credit_code' => 'unified_social_credit_code',
        'merchant_name'              => 'merchant_name',
        'ent_id'                     => 'ent_id',
        'mse_funds_account'          => 'mse_funds_account',
        'status'                     => 'status',
        'failed_type'                => 'failed_type',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'request_no'                 => 'setRequestNo',
        'out_request_no'             => 'setOutRequestNo',
        'unified_social_credit_code' => 'setUnifiedSocialCreditCode',
        'merchant_name'              => 'setMerchantName',
        'ent_id'                     => 'setEntId',
        'mse_funds_account'          => 'setMseFundsAccount',
        'status'                     => 'setStatus',
        'failed_type'                => 'setFailedType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'request_no'                 => 'getRequestNo',
        'out_request_no'             => 'getOutRequestNo',
        'unified_social_credit_code' => 'getUnifiedSocialCreditCode',
        'merchant_name'              => 'getMerchantName',
        'ent_id'                     => 'getEntId',
        'mse_funds_account'          => 'getMseFundsAccount',
        'status'                     => 'getStatus',
        'failed_type'                => 'getFailedType',
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

    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_SUCCESS    = 'SUCCESS';
    const STATUS_FAILED     = 'FAILED';
    const STATUS_INIT       = 'INIT';

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
        $this->container['request_no']                 = isset($data['request_no']) ? $data['request_no'] : null;
        $this->container['out_request_no']             = isset($data['out_request_no']) ? $data['out_request_no'] : null;
        $this->container['unified_social_credit_code'] = isset($data['unified_social_credit_code']) ? $data['unified_social_credit_code'] : null;
        $this->container['merchant_name']              = isset($data['merchant_name']) ? $data['merchant_name'] : null;
        $this->container['ent_id']                     = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['mse_funds_account']          = isset($data['mse_funds_account']) ? $data['mse_funds_account'] : null;
        $this->container['status']                     = isset($data['status']) ? $data['status'] : null;
        $this->container['failed_type']                = isset($data['failed_type']) ? $data['failed_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['request_no']) {
            $invalidProperties[] = "'request_no' can't be null";
        }
        if ((mb_strlen($this->container['request_no']) > 64)) {
            $invalidProperties[] = "invalid value for 'request_no', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['request_no']) < 1)) {
            $invalidProperties[] = "invalid value for 'request_no', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['out_request_no']) {
            $invalidProperties[] = "'out_request_no' can't be null";
        }
        if ((mb_strlen($this->container['out_request_no']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_request_no', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_request_no']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_request_no', the character length must be bigger than or equal to 1.";
        }

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

        if (!is_null($this->container['ent_id']) && (mb_strlen($this->container['ent_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['ent_id']) && (mb_strlen($this->container['ent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['status']) {
            $invalidProperties[] = "'status' can't be null";
        }
        if (!is_null($this->container['failed_type']) && (mb_strlen($this->container['failed_type']) > 256)) {
            $invalidProperties[] = "invalid value for 'failed_type', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['failed_type']) && (mb_strlen($this->container['failed_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'failed_type', the character length must be bigger than or equal to 1.";
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
     * Gets request_no.
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->container['request_no'];
    }

    /**
     * Sets request_no.
     *
     * @param string $request_no 微资金开通申请单号
     *
     * @return self
     */
    public function setRequestNo($request_no)
    {
        $this->container['request_no'] = $request_no;

        return $this;
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
     * Gets ent_id.
     *
     * @return string|null
     */
    public function getEntId()
    {
        return $this->container['ent_id'];
    }

    /**
     * Sets ent_id.
     *
     * @param string|null $ent_id 企业ID
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

        return $this;
    }

    /**
     * Gets mse_funds_account.
     *
     * @return \Entpay\Mse\Client\Model\MseFundsAccount|null
     */
    public function getMseFundsAccount()
    {
        return $this->container['mse_funds_account'];
    }

    /**
     * Sets mse_funds_account.
     *
     * @param \Entpay\Mse\Client\Model\MseFundsAccount|null $mse_funds_account mse_funds_account
     *
     * @return self
     */
    public function setMseFundsAccount($mse_funds_account)
    {
        $this->container['mse_funds_account'] = $mse_funds_account;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string $status 入驻状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets failed_type.
     *
     * @return string|null
     */
    public function getFailedType()
    {
        return $this->container['failed_type'];
    }

    /**
     * Sets failed_type.
     *
     * @param string|null $failed_type 失败类型
     *
     * @return self
     */
    public function setFailedType($failed_type)
    {
        $this->container['failed_type'] = $failed_type;

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

    /**
     * Create request for operation 'create'.
     *
     * @param \Entpay\Mse\Client\Model\MseFundsAccountApplicationParam $mse_funds_account_application_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions                 $request_options                     (optional)
     *
     * @throws \InvalidArgumentException
     * @return MseFundsAccountApplication
     */
    public static function create($mse_funds_account_application_param, $request_options = null)
    {
        $path = '/v3/mse-pay/mse-funds-account-applications';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $mse_funds_account_application_param,
            MseFundsAccountApplication::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'createLink'.
     *
     * @param string                                   $request_no      (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return AccountLink
     */
    public static function createLink($request_no, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/mse-funds-account-applications/%s/links', urlencode($request_no));

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            null,
            AccountLink::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieve'.
     *
     * @param string                                   $request_no      (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return MseFundsAccountApplication
     */
    public static function retrieve($request_no, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/mse-funds-account-applications/%s', urlencode($request_no));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            MseFundsAccountApplication::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveByOutRequestNo'.
     *
     * @param string                                   $out_request_no  (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return MseFundsAccountApplication
     */
    public static function retrieveByOutRequestNo($out_request_no, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/mse-funds-account-applications/out-request-no/%s', urlencode($out_request_no));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            MseFundsAccountApplication::class,
            $request_options
        );
    }
}
