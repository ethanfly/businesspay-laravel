<?php
/**
 * PrepaidTransfer.
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
use Entpay\Mse\Client\Model\ModelInterface;
use Entpay\Mse\Client\ObjectSerializer;
use JsonSerializable;

/**
 * PrepaidTransfer Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class PrepaidTransfer implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PrepaidTransfer';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'transfer_id'                => 'string',
        'out_transfer_id'            => 'string',
        'ent_id'                     => 'string',
        'merchant_name'              => 'string',
        'transfer_in_ent_id'         => 'string',
        'transfer_in_merchant_name'  => 'string',
        'transfer_out_ent_id'        => 'string',
        'transfer_out_merchant_name' => 'string',
        'amount'                     => 'int',
        'status'                     => 'string',
        'failed_reason'              => '\Entpay\Mse\Client\Model\TransferFailReason',
        'succeeded_time'             => '\DateTime',
        'desc'                       => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'transfer_id'                => null,
        'out_transfer_id'            => null,
        'ent_id'                     => null,
        'merchant_name'              => null,
        'transfer_in_ent_id'         => null,
        'transfer_in_merchant_name'  => null,
        'transfer_out_ent_id'        => null,
        'transfer_out_merchant_name' => null,
        'amount'                     => 'int64',
        'status'                     => null,
        'failed_reason'              => null,
        'succeeded_time'             => 'date-time',
        'desc'                       => null,
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
        'transfer_id'                => 'transfer_id',
        'out_transfer_id'            => 'out_transfer_id',
        'ent_id'                     => 'ent_id',
        'merchant_name'              => 'merchant_name',
        'transfer_in_ent_id'         => 'transfer_in_ent_id',
        'transfer_in_merchant_name'  => 'transfer_in_merchant_name',
        'transfer_out_ent_id'        => 'transfer_out_ent_id',
        'transfer_out_merchant_name' => 'transfer_out_merchant_name',
        'amount'                     => 'amount',
        'status'                     => 'status',
        'failed_reason'              => 'failed_reason',
        'succeeded_time'             => 'succeeded_time',
        'desc'                       => 'desc',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'transfer_id'                => 'setTransferId',
        'out_transfer_id'            => 'setOutTransferId',
        'ent_id'                     => 'setEntId',
        'merchant_name'              => 'setMerchantName',
        'transfer_in_ent_id'         => 'setTransferInEntId',
        'transfer_in_merchant_name'  => 'setTransferInMerchantName',
        'transfer_out_ent_id'        => 'setTransferOutEntId',
        'transfer_out_merchant_name' => 'setTransferOutMerchantName',
        'amount'                     => 'setAmount',
        'status'                     => 'setStatus',
        'failed_reason'              => 'setFailedReason',
        'succeeded_time'             => 'setSucceededTime',
        'desc'                       => 'setDesc',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'transfer_id'                => 'getTransferId',
        'out_transfer_id'            => 'getOutTransferId',
        'ent_id'                     => 'getEntId',
        'merchant_name'              => 'getMerchantName',
        'transfer_in_ent_id'         => 'getTransferInEntId',
        'transfer_in_merchant_name'  => 'getTransferInMerchantName',
        'transfer_out_ent_id'        => 'getTransferOutEntId',
        'transfer_out_merchant_name' => 'getTransferOutMerchantName',
        'amount'                     => 'getAmount',
        'status'                     => 'getStatus',
        'failed_reason'              => 'getFailedReason',
        'succeeded_time'             => 'getSucceededTime',
        'desc'                       => 'getDesc',
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

    const STATUS_INIT       = 'INIT';
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_SUCCEEDED  = 'SUCCEEDED';
    const STATUS_FAILED     = 'FAILED';

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
        $this->container['transfer_id']                = isset($data['transfer_id']) ? $data['transfer_id'] : null;
        $this->container['out_transfer_id']            = isset($data['out_transfer_id']) ? $data['out_transfer_id'] : null;
        $this->container['ent_id']                     = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['merchant_name']              = isset($data['merchant_name']) ? $data['merchant_name'] : null;
        $this->container['transfer_in_ent_id']         = isset($data['transfer_in_ent_id']) ? $data['transfer_in_ent_id'] : null;
        $this->container['transfer_in_merchant_name']  = isset($data['transfer_in_merchant_name']) ? $data['transfer_in_merchant_name'] : null;
        $this->container['transfer_out_ent_id']        = isset($data['transfer_out_ent_id']) ? $data['transfer_out_ent_id'] : null;
        $this->container['transfer_out_merchant_name'] = isset($data['transfer_out_merchant_name']) ? $data['transfer_out_merchant_name'] : null;
        $this->container['amount']                     = isset($data['amount']) ? $data['amount'] : null;
        $this->container['status']                     = isset($data['status']) ? $data['status'] : null;
        $this->container['failed_reason']              = isset($data['failed_reason']) ? $data['failed_reason'] : null;
        $this->container['succeeded_time']             = isset($data['succeeded_time']) ? $data['succeeded_time'] : null;
        $this->container['desc']                       = isset($data['desc']) ? $data['desc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['transfer_id']) {
            $invalidProperties[] = "'transfer_id' can't be null";
        }
        if ((mb_strlen($this->container['transfer_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'transfer_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['transfer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'transfer_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['out_transfer_id']) {
            $invalidProperties[] = "'out_transfer_id' can't be null";
        }
        if ((mb_strlen($this->container['out_transfer_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_transfer_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_transfer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_transfer_id', the character length must be bigger than or equal to 1.";
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

        if (null === $this->container['transfer_in_ent_id']) {
            $invalidProperties[] = "'transfer_in_ent_id' can't be null";
        }
        if ((mb_strlen($this->container['transfer_in_ent_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'transfer_in_ent_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['transfer_in_ent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'transfer_in_ent_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['transfer_in_merchant_name']) {
            $invalidProperties[] = "'transfer_in_merchant_name' can't be null";
        }
        if ((mb_strlen($this->container['transfer_in_merchant_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'transfer_in_merchant_name', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['transfer_in_merchant_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'transfer_in_merchant_name', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['transfer_out_ent_id']) {
            $invalidProperties[] = "'transfer_out_ent_id' can't be null";
        }
        if ((mb_strlen($this->container['transfer_out_ent_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'transfer_out_ent_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['transfer_out_ent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'transfer_out_ent_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['transfer_out_merchant_name']) {
            $invalidProperties[] = "'transfer_out_merchant_name' can't be null";
        }
        if ((mb_strlen($this->container['transfer_out_merchant_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'transfer_out_merchant_name', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['transfer_out_merchant_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'transfer_out_merchant_name', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (null === $this->container['status']) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ((mb_strlen($this->container['status']) > 64)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['status']) < 1)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 255)) {
            $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 1)) {
            $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 1.";
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
     * Gets transfer_id.
     *
     * @return string
     */
    public function getTransferId()
    {
        return $this->container['transfer_id'];
    }

    /**
     * Sets transfer_id.
     *
     * @param string $transfer_id 微企付转账单号
     *
     * @return self
     */
    public function setTransferId($transfer_id)
    {
        $this->container['transfer_id'] = $transfer_id;

        return $this;
    }

    /**
     * Gets out_transfer_id.
     *
     * @return string
     */
    public function getOutTransferId()
    {
        return $this->container['out_transfer_id'];
    }

    /**
     * Sets out_transfer_id.
     *
     * @param string $out_transfer_id 平台转账单号
     *
     * @return self
     */
    public function setOutTransferId($out_transfer_id)
    {
        $this->container['out_transfer_id'] = $out_transfer_id;

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
     * @param string $ent_id 企业ID
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
     * Gets transfer_in_ent_id.
     *
     * @return string
     */
    public function getTransferInEntId()
    {
        return $this->container['transfer_in_ent_id'];
    }

    /**
     * Sets transfer_in_ent_id.
     *
     * @param string $transfer_in_ent_id 转账入金方企业ID
     *
     * @return self
     */
    public function setTransferInEntId($transfer_in_ent_id)
    {
        $this->container['transfer_in_ent_id'] = $transfer_in_ent_id;

        return $this;
    }

    /**
     * Gets transfer_in_merchant_name.
     *
     * @return string
     */
    public function getTransferInMerchantName()
    {
        return $this->container['transfer_in_merchant_name'];
    }

    /**
     * Sets transfer_in_merchant_name.
     *
     * @param string $transfer_in_merchant_name 转账入金方企业名称
     *
     * @return self
     */
    public function setTransferInMerchantName($transfer_in_merchant_name)
    {
        $this->container['transfer_in_merchant_name'] = $transfer_in_merchant_name;

        return $this;
    }

    /**
     * Gets transfer_out_ent_id.
     *
     * @return string
     */
    public function getTransferOutEntId()
    {
        return $this->container['transfer_out_ent_id'];
    }

    /**
     * Sets transfer_out_ent_id.
     *
     * @param string $transfer_out_ent_id 转账出资方企业ID
     *
     * @return self
     */
    public function setTransferOutEntId($transfer_out_ent_id)
    {
        $this->container['transfer_out_ent_id'] = $transfer_out_ent_id;

        return $this;
    }

    /**
     * Gets transfer_out_merchant_name.
     *
     * @return string
     */
    public function getTransferOutMerchantName()
    {
        return $this->container['transfer_out_merchant_name'];
    }

    /**
     * Sets transfer_out_merchant_name.
     *
     * @param string $transfer_out_merchant_name 转账出资方名称
     *
     * @return self
     */
    public function setTransferOutMerchantName($transfer_out_merchant_name)
    {
        $this->container['transfer_out_merchant_name'] = $transfer_out_merchant_name;

        return $this;
    }

    /**
     * Gets amount.
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount.
     *
     * @param int $amount 转账金额
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * @param string $status 转账状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets failed_reason.
     *
     * @return \Entpay\Mse\Client\Model\TransferFailReason|null
     */
    public function getFailedReason()
    {
        return $this->container['failed_reason'];
    }

    /**
     * Sets failed_reason.
     *
     * @param \Entpay\Mse\Client\Model\TransferFailReason|null $failed_reason failed_reason
     *
     * @return self
     */
    public function setFailedReason($failed_reason)
    {
        $this->container['failed_reason'] = $failed_reason;

        return $this;
    }

    /**
     * Gets succeeded_time.
     *
     * @return \DateTime|null
     */
    public function getSucceededTime()
    {
        return $this->container['succeeded_time'];
    }

    /**
     * Sets succeeded_time.
     *
     * @param \DateTime|null $succeeded_time 成功时间
     *
     * @return self
     */
    public function setSucceededTime($succeeded_time)
    {
        $this->container['succeeded_time'] = $succeeded_time;

        return $this;
    }

    /**
     * Gets desc.
     *
     * @return string|null
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc.
     *
     * @param string|null $desc 描述
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

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
     * @param \Entpay\Mse\Client\Model\PrepaidTransferParam $prepaid_transfer_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions      $request_options        (optional)
     *
     * @throws \InvalidArgumentException
     * @return PrepaidTransfer
     */
    public static function create($prepaid_transfer_param, $request_options = null)
    {
        $path = '/v3/mse-pay/prepaid/directed-transfer';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $prepaid_transfer_param,
            PrepaidTransfer::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieve'.
     *
     * @param string                                   $transfer_id     (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return PrepaidTransfer
     */
    public static function retrieve($transfer_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/prepaid/directed-transfer/%s', urlencode($transfer_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            PrepaidTransfer::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveByOutTransferId'.
     *
     * @param string                                   $ent_id          (required)
     * @param string                                   $out_transfer_id (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return PrepaidTransfer
     */
    public static function retrieveByOutTransferId($ent_id, $out_transfer_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/prepaid/directed-transfer/%s/out-transfer-id/%s', urlencode($ent_id), urlencode($out_transfer_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            PrepaidTransfer::class,
            $request_options
        );
    }
}
