<?php
/**
 * ProfitAllocationReturn.
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
 * ProfitAllocationReturn Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class ProfitAllocationReturn implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ProfitAllocationReturn';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'allocation_detail_return_id'     => 'string',
        'out_allocation_detail_return_id' => 'string',
        'allocation_id'                   => 'string',
        'out_allocation_id'               => 'string',
        'allocation_detail_id'            => 'string',
        'out_allocation_detail_id'        => 'string',
        'ent_id'                          => 'string',
        'receiver_acct_id'                => 'string',
        'amount'                          => 'int',
        'desc'                            => 'string',
        'status'                          => 'string',
        'failed_reason'                   => '\Entpay\Mse\Client\Model\FailReason',
        'created_time'                    => '\DateTime',
        'succeeded_time'                  => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'allocation_detail_return_id'     => null,
        'out_allocation_detail_return_id' => null,
        'allocation_id'                   => null,
        'out_allocation_id'               => null,
        'allocation_detail_id'            => null,
        'out_allocation_detail_id'        => null,
        'ent_id'                          => null,
        'receiver_acct_id'                => null,
        'amount'                          => 'int64',
        'desc'                            => null,
        'status'                          => null,
        'failed_reason'                   => null,
        'created_time'                    => 'date-time',
        'succeeded_time'                  => 'date-time',
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
        'allocation_detail_return_id'     => 'allocation_detail_return_id',
        'out_allocation_detail_return_id' => 'out_allocation_detail_return_id',
        'allocation_id'                   => 'allocation_id',
        'out_allocation_id'               => 'out_allocation_id',
        'allocation_detail_id'            => 'allocation_detail_id',
        'out_allocation_detail_id'        => 'out_allocation_detail_id',
        'ent_id'                          => 'ent_id',
        'receiver_acct_id'                => 'receiver_acct_id',
        'amount'                          => 'amount',
        'desc'                            => 'desc',
        'status'                          => 'status',
        'failed_reason'                   => 'failed_reason',
        'created_time'                    => 'created_time',
        'succeeded_time'                  => 'succeeded_time',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'allocation_detail_return_id'     => 'setAllocationDetailReturnId',
        'out_allocation_detail_return_id' => 'setOutAllocationDetailReturnId',
        'allocation_id'                   => 'setAllocationId',
        'out_allocation_id'               => 'setOutAllocationId',
        'allocation_detail_id'            => 'setAllocationDetailId',
        'out_allocation_detail_id'        => 'setOutAllocationDetailId',
        'ent_id'                          => 'setEntId',
        'receiver_acct_id'                => 'setReceiverAcctId',
        'amount'                          => 'setAmount',
        'desc'                            => 'setDesc',
        'status'                          => 'setStatus',
        'failed_reason'                   => 'setFailedReason',
        'created_time'                    => 'setCreatedTime',
        'succeeded_time'                  => 'setSucceededTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'allocation_detail_return_id'     => 'getAllocationDetailReturnId',
        'out_allocation_detail_return_id' => 'getOutAllocationDetailReturnId',
        'allocation_id'                   => 'getAllocationId',
        'out_allocation_id'               => 'getOutAllocationId',
        'allocation_detail_id'            => 'getAllocationDetailId',
        'out_allocation_detail_id'        => 'getOutAllocationDetailId',
        'ent_id'                          => 'getEntId',
        'receiver_acct_id'                => 'getReceiverAcctId',
        'amount'                          => 'getAmount',
        'desc'                            => 'getDesc',
        'status'                          => 'getStatus',
        'failed_reason'                   => 'getFailedReason',
        'created_time'                    => 'getCreatedTime',
        'succeeded_time'                  => 'getSucceededTime',
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

    const STATUS_ACCEPTED  = 'ACCEPTED';
    const STATUS_SUCCEEDED = 'SUCCEEDED';
    const STATUS_FAILED    = 'FAILED';

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
        $this->container['allocation_detail_return_id']     = isset($data['allocation_detail_return_id']) ? $data['allocation_detail_return_id'] : null;
        $this->container['out_allocation_detail_return_id'] = isset($data['out_allocation_detail_return_id']) ? $data['out_allocation_detail_return_id'] : null;
        $this->container['allocation_id']                   = isset($data['allocation_id']) ? $data['allocation_id'] : null;
        $this->container['out_allocation_id']               = isset($data['out_allocation_id']) ? $data['out_allocation_id'] : null;
        $this->container['allocation_detail_id']            = isset($data['allocation_detail_id']) ? $data['allocation_detail_id'] : null;
        $this->container['out_allocation_detail_id']        = isset($data['out_allocation_detail_id']) ? $data['out_allocation_detail_id'] : null;
        $this->container['ent_id']                          = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['receiver_acct_id']                = isset($data['receiver_acct_id']) ? $data['receiver_acct_id'] : null;
        $this->container['amount']                          = isset($data['amount']) ? $data['amount'] : null;
        $this->container['desc']                            = isset($data['desc']) ? $data['desc'] : null;
        $this->container['status']                          = isset($data['status']) ? $data['status'] : null;
        $this->container['failed_reason']                   = isset($data['failed_reason']) ? $data['failed_reason'] : null;
        $this->container['created_time']                    = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['succeeded_time']                  = isset($data['succeeded_time']) ? $data['succeeded_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['allocation_id']) {
            $invalidProperties[] = "'allocation_id' can't be null";
        }
        if ((mb_strlen($this->container['allocation_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'allocation_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['allocation_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'allocation_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['out_allocation_id']) {
            $invalidProperties[] = "'out_allocation_id' can't be null";
        }
        if ((mb_strlen($this->container['out_allocation_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_allocation_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_allocation_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_allocation_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['allocation_detail_id']) {
            $invalidProperties[] = "'allocation_detail_id' can't be null";
        }
        if ((mb_strlen($this->container['allocation_detail_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'allocation_detail_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['allocation_detail_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'allocation_detail_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['out_allocation_detail_id']) {
            $invalidProperties[] = "'out_allocation_detail_id' can't be null";
        }
        if ((mb_strlen($this->container['out_allocation_detail_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_allocation_detail_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_allocation_detail_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_allocation_detail_id', the character length must be bigger than or equal to 1.";
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

        if (null === $this->container['receiver_acct_id']) {
            $invalidProperties[] = "'receiver_acct_id' can't be null";
        }
        if ((mb_strlen($this->container['receiver_acct_id']) > 28)) {
            $invalidProperties[] = "invalid value for 'receiver_acct_id', the character length must be smaller than or equal to 28.";
        }

        if ((mb_strlen($this->container['receiver_acct_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'receiver_acct_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 128)) {
            $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 1)) {
            $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['created_time']) {
            $invalidProperties[] = "'created_time' can't be null";
        }
        if ((mb_strlen($this->container['created_time']) > 64)) {
            $invalidProperties[] = "invalid value for 'created_time', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['created_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'created_time', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['succeeded_time']) && (mb_strlen($this->container['succeeded_time']) > 64)) {
            $invalidProperties[] = "invalid value for 'succeeded_time', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['succeeded_time']) && (mb_strlen($this->container['succeeded_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'succeeded_time', the character length must be bigger than or equal to 1.";
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
     * Gets allocation_detail_return_id.
     *
     * @return string|null
     */
    public function getAllocationDetailReturnId()
    {
        return $this->container['allocation_detail_return_id'];
    }

    /**
     * Sets allocation_detail_return_id.
     *
     * @param string|null $allocation_detail_return_id allocation_detail_return_id
     *
     * @return self
     */
    public function setAllocationDetailReturnId($allocation_detail_return_id)
    {
        $this->container['allocation_detail_return_id'] = $allocation_detail_return_id;

        return $this;
    }

    /**
     * Gets out_allocation_detail_return_id.
     *
     * @return string|null
     */
    public function getOutAllocationDetailReturnId()
    {
        return $this->container['out_allocation_detail_return_id'];
    }

    /**
     * Sets out_allocation_detail_return_id.
     *
     * @param string|null $out_allocation_detail_return_id 平台分账回退单号
     *
     * @return self
     */
    public function setOutAllocationDetailReturnId($out_allocation_detail_return_id)
    {
        $this->container['out_allocation_detail_return_id'] = $out_allocation_detail_return_id;

        return $this;
    }

    /**
     * Gets allocation_id.
     *
     * @return string
     */
    public function getAllocationId()
    {
        return $this->container['allocation_id'];
    }

    /**
     * Sets allocation_id.
     *
     * @param string $allocation_id 微企付分账单号
     *
     * @return self
     */
    public function setAllocationId($allocation_id)
    {
        $this->container['allocation_id'] = $allocation_id;

        return $this;
    }

    /**
     * Gets out_allocation_id.
     *
     * @return string
     */
    public function getOutAllocationId()
    {
        return $this->container['out_allocation_id'];
    }

    /**
     * Sets out_allocation_id.
     *
     * @param string $out_allocation_id 平台分账单号
     *
     * @return self
     */
    public function setOutAllocationId($out_allocation_id)
    {
        $this->container['out_allocation_id'] = $out_allocation_id;

        return $this;
    }

    /**
     * Gets allocation_detail_id.
     *
     * @return string
     */
    public function getAllocationDetailId()
    {
        return $this->container['allocation_detail_id'];
    }

    /**
     * Sets allocation_detail_id.
     *
     * @param string $allocation_detail_id 微企付分账明细单号
     *
     * @return self
     */
    public function setAllocationDetailId($allocation_detail_id)
    {
        $this->container['allocation_detail_id'] = $allocation_detail_id;

        return $this;
    }

    /**
     * Gets out_allocation_detail_id.
     *
     * @return string
     */
    public function getOutAllocationDetailId()
    {
        return $this->container['out_allocation_detail_id'];
    }

    /**
     * Sets out_allocation_detail_id.
     *
     * @param string $out_allocation_detail_id 平台分账明细单号
     *
     * @return self
     */
    public function setOutAllocationDetailId($out_allocation_detail_id)
    {
        $this->container['out_allocation_detail_id'] = $out_allocation_detail_id;

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
     * @param string $ent_id 分账方企业ID
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

        return $this;
    }

    /**
     * Gets receiver_acct_id.
     *
     * @return string
     */
    public function getReceiverAcctId()
    {
        return $this->container['receiver_acct_id'];
    }

    /**
     * Sets receiver_acct_id.
     *
     * @param string $receiver_acct_id 分账接收方企业账户ID
     *
     * @return self
     */
    public function setReceiverAcctId($receiver_acct_id)
    {
        $this->container['receiver_acct_id'] = $receiver_acct_id;

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
     * @param int $amount 分账回退金额
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * Gets status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string|null $status 分账回退状态
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
     * @return \Entpay\Mse\Client\Model\FailReason|null
     */
    public function getFailedReason()
    {
        return $this->container['failed_reason'];
    }

    /**
     * Sets failed_reason.
     *
     * @param \Entpay\Mse\Client\Model\FailReason|null $failed_reason failed_reason
     *
     * @return self
     */
    public function setFailedReason($failed_reason)
    {
        $this->container['failed_reason'] = $failed_reason;

        return $this;
    }

    /**
     * Gets created_time.
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time.
     *
     * @param \DateTime $created_time 分账回退发起时间，东八区时间 如:2023-07-08T10:34:56+08:00
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

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
     * @param \DateTime|null $succeeded_time 分账回退成功时间，东八区时间 如:2023-07-08T10:34:56+08:00
     *
     * @return self
     */
    public function setSucceededTime($succeeded_time)
    {
        $this->container['succeeded_time'] = $succeeded_time;

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
     * @param \Entpay\Mse\Client\Model\ProfitAllocationReturnParam $profit_allocation_return_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions             $request_options                (optional)
     *
     * @throws \InvalidArgumentException
     * @return ProfitAllocationReturn
     */
    public static function create($profit_allocation_return_param, $request_options = null)
    {
        $path = '/v3/mse-pay/profit-allocation-returns';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $profit_allocation_return_param,
            ProfitAllocationReturn::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieve'.
     *
     * @param string                                   $allocation_detail_return_id (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options             (optional)
     *
     * @throws \InvalidArgumentException
     * @return ProfitAllocationReturn
     */
    public static function retrieve($allocation_detail_return_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/profit-allocation-returns/%s', urlencode($allocation_detail_return_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            ProfitAllocationReturn::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveByOutAllocationDetailReturnId'.
     *
     * @param string                                   $out_allocation_detail_return_id (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options                 (optional)
     *
     * @throws \InvalidArgumentException
     * @return ProfitAllocationReturn
     */
    public static function retrieveByOutAllocationDetailReturnId($out_allocation_detail_return_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/profit-allocation-returns/out-allocation-detail-return-id/%s', urlencode($out_allocation_detail_return_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            ProfitAllocationReturn::class,
            $request_options
        );
    }
}
