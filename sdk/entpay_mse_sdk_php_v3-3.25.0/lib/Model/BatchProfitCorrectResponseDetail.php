<?php
/**
 * BatchProfitCorrectResponseDetail.
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
 * BatchProfitCorrectResponseDetail Class Doc Comment.
 *
 * @category Class
 * @description 批量分账冲退响应详情
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BatchProfitCorrectResponseDetail implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'BatchProfitCorrectResponseDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_allocation_detail_correct_id' => 'string',
        'out_allocation_id'                => 'string',
        'allocation_id'                    => 'string',
        'out_allocation_detail_id'         => 'string',
        'allocation_detail_id'             => 'string',
        'receiver_acct_id'                 => 'string',
        'amount'                           => 'int',
        'status'                           => 'string',
        'create_time'                      => '\DateTime',
        'finished_time'                    => '\DateTime',
        'failed_reason'                    => '\Entpay\Mse\Client\Model\AllocationsFailedReason',
        'allocation_detail_correct_id'     => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'out_allocation_detail_correct_id' => null,
        'out_allocation_id'                => null,
        'allocation_id'                    => null,
        'out_allocation_detail_id'         => null,
        'allocation_detail_id'             => null,
        'receiver_acct_id'                 => null,
        'amount'                           => 'int64',
        'status'                           => null,
        'create_time'                      => 'date-time',
        'finished_time'                    => 'date-time',
        'failed_reason'                    => null,
        'allocation_detail_correct_id'     => null,
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
        'out_allocation_detail_correct_id' => 'out_allocation_detail_correct_id',
        'out_allocation_id'                => 'out_allocation_id',
        'allocation_id'                    => 'allocation_id',
        'out_allocation_detail_id'         => 'out_allocation_detail_id',
        'allocation_detail_id'             => 'allocation_detail_id',
        'receiver_acct_id'                 => 'receiver_acct_id',
        'amount'                           => 'amount',
        'status'                           => 'status',
        'create_time'                      => 'create_time',
        'finished_time'                    => 'finished_time',
        'failed_reason'                    => 'failed_reason',
        'allocation_detail_correct_id'     => 'allocation_detail_correct_id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'out_allocation_detail_correct_id' => 'setOutAllocationDetailCorrectId',
        'out_allocation_id'                => 'setOutAllocationId',
        'allocation_id'                    => 'setAllocationId',
        'out_allocation_detail_id'         => 'setOutAllocationDetailId',
        'allocation_detail_id'             => 'setAllocationDetailId',
        'receiver_acct_id'                 => 'setReceiverAcctId',
        'amount'                           => 'setAmount',
        'status'                           => 'setStatus',
        'create_time'                      => 'setCreateTime',
        'finished_time'                    => 'setFinishedTime',
        'failed_reason'                    => 'setFailedReason',
        'allocation_detail_correct_id'     => 'setAllocationDetailCorrectId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'out_allocation_detail_correct_id' => 'getOutAllocationDetailCorrectId',
        'out_allocation_id'                => 'getOutAllocationId',
        'allocation_id'                    => 'getAllocationId',
        'out_allocation_detail_id'         => 'getOutAllocationDetailId',
        'allocation_detail_id'             => 'getAllocationDetailId',
        'receiver_acct_id'                 => 'getReceiverAcctId',
        'amount'                           => 'getAmount',
        'status'                           => 'getStatus',
        'create_time'                      => 'getCreateTime',
        'finished_time'                    => 'getFinishedTime',
        'failed_reason'                    => 'getFailedReason',
        'allocation_detail_correct_id'     => 'getAllocationDetailCorrectId',
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

    const STATUS_INIT      = 'INIT';
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
        $this->container['out_allocation_detail_correct_id'] = isset($data['out_allocation_detail_correct_id']) ? $data['out_allocation_detail_correct_id'] : null;
        $this->container['out_allocation_id']                = isset($data['out_allocation_id']) ? $data['out_allocation_id'] : null;
        $this->container['allocation_id']                    = isset($data['allocation_id']) ? $data['allocation_id'] : null;
        $this->container['out_allocation_detail_id']         = isset($data['out_allocation_detail_id']) ? $data['out_allocation_detail_id'] : null;
        $this->container['allocation_detail_id']             = isset($data['allocation_detail_id']) ? $data['allocation_detail_id'] : null;
        $this->container['receiver_acct_id']                 = isset($data['receiver_acct_id']) ? $data['receiver_acct_id'] : null;
        $this->container['amount']                           = isset($data['amount']) ? $data['amount'] : null;
        $this->container['status']                           = isset($data['status']) ? $data['status'] : null;
        $this->container['create_time']                      = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['finished_time']                    = isset($data['finished_time']) ? $data['finished_time'] : null;
        $this->container['failed_reason']                    = isset($data['failed_reason']) ? $data['failed_reason'] : null;
        $this->container['allocation_detail_correct_id']     = isset($data['allocation_detail_correct_id']) ? $data['allocation_detail_correct_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['out_allocation_detail_correct_id']) {
            $invalidProperties[] = "'out_allocation_detail_correct_id' can't be null";
        }
        if ((mb_strlen($this->container['out_allocation_detail_correct_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_allocation_detail_correct_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_allocation_detail_correct_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_allocation_detail_correct_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['out_allocation_id']) && (mb_strlen($this->container['out_allocation_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_allocation_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['out_allocation_id']) && (mb_strlen($this->container['out_allocation_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_allocation_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['allocation_id']) && (mb_strlen($this->container['allocation_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'allocation_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['allocation_id']) && (mb_strlen($this->container['allocation_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'allocation_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['out_allocation_detail_id']) && (mb_strlen($this->container['out_allocation_detail_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_allocation_detail_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['out_allocation_detail_id']) && (mb_strlen($this->container['out_allocation_detail_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_allocation_detail_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['allocation_detail_id']) && (mb_strlen($this->container['allocation_detail_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'allocation_detail_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['allocation_detail_id']) && (mb_strlen($this->container['allocation_detail_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'allocation_detail_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['receiver_acct_id']) {
            $invalidProperties[] = "'receiver_acct_id' can't be null";
        }
        if ((mb_strlen($this->container['receiver_acct_id']) > 32)) {
            $invalidProperties[] = "invalid value for 'receiver_acct_id', the character length must be smaller than or equal to 32.";
        }

        if ((mb_strlen($this->container['receiver_acct_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'receiver_acct_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (null === $this->container['status']) {
            $invalidProperties[] = "'status' can't be null";
        }
        if (null === $this->container['create_time']) {
            $invalidProperties[] = "'create_time' can't be null";
        }
        if ((mb_strlen($this->container['create_time']) > 32)) {
            $invalidProperties[] = "invalid value for 'create_time', the character length must be smaller than or equal to 32.";
        }

        if ((mb_strlen($this->container['create_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'create_time', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['finished_time']) && (mb_strlen($this->container['finished_time']) > 32)) {
            $invalidProperties[] = "invalid value for 'finished_time', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['finished_time']) && (mb_strlen($this->container['finished_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'finished_time', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['allocation_detail_correct_id']) && (mb_strlen($this->container['allocation_detail_correct_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'allocation_detail_correct_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['allocation_detail_correct_id']) && (mb_strlen($this->container['allocation_detail_correct_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'allocation_detail_correct_id', the character length must be bigger than or equal to 1.";
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
     * Gets out_allocation_detail_correct_id.
     *
     * @return string
     */
    public function getOutAllocationDetailCorrectId()
    {
        return $this->container['out_allocation_detail_correct_id'];
    }

    /**
     * Sets out_allocation_detail_correct_id.
     *
     * @param string $out_allocation_detail_correct_id out_allocation_detail_correct_id
     *
     * @return self
     */
    public function setOutAllocationDetailCorrectId($out_allocation_detail_correct_id)
    {
        $this->container['out_allocation_detail_correct_id'] = $out_allocation_detail_correct_id;

        return $this;
    }

    /**
     * Gets out_allocation_id.
     *
     * @return string|null
     */
    public function getOutAllocationId()
    {
        return $this->container['out_allocation_id'];
    }

    /**
     * Sets out_allocation_id.
     *
     * @param string|null $out_allocation_id 平台分账单号，与allocation_id二选一
     *
     * @return self
     */
    public function setOutAllocationId($out_allocation_id)
    {
        $this->container['out_allocation_id'] = $out_allocation_id;

        return $this;
    }

    /**
     * Gets allocation_id.
     *
     * @return string|null
     */
    public function getAllocationId()
    {
        return $this->container['allocation_id'];
    }

    /**
     * Sets allocation_id.
     *
     * @param string|null $allocation_id 微企付分账单号，与out_allocation_id二选一
     *
     * @return self
     */
    public function setAllocationId($allocation_id)
    {
        $this->container['allocation_id'] = $allocation_id;

        return $this;
    }

    /**
     * Gets out_allocation_detail_id.
     *
     * @return string|null
     */
    public function getOutAllocationDetailId()
    {
        return $this->container['out_allocation_detail_id'];
    }

    /**
     * Sets out_allocation_detail_id.
     *
     * @param string|null $out_allocation_detail_id out_allocation_detail_id
     *
     * @return self
     */
    public function setOutAllocationDetailId($out_allocation_detail_id)
    {
        $this->container['out_allocation_detail_id'] = $out_allocation_detail_id;

        return $this;
    }

    /**
     * Gets allocation_detail_id.
     *
     * @return string|null
     */
    public function getAllocationDetailId()
    {
        return $this->container['allocation_detail_id'];
    }

    /**
     * Sets allocation_detail_id.
     *
     * @param string|null $allocation_detail_id 微企付分账明细单号，与out_allocation_detail_id 二选一
     *
     * @return self
     */
    public function setAllocationDetailId($allocation_detail_id)
    {
        $this->container['allocation_detail_id'] = $allocation_detail_id;

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
     * @param string $receiver_acct_id 分账接收方账户唯一标识，必须与原分账单的分账接收方保持一致
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
     * @param int $amount amount
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
     * @param string $status 处理状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets create_time.
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time.
     *
     * @param \DateTime $create_time 分账冲退/回退申请时间，东八区时间 如:2023-07-08T10:34:56+08:00
     *
     * @return self
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets finished_time.
     *
     * @return \DateTime|null
     */
    public function getFinishedTime()
    {
        return $this->container['finished_time'];
    }

    /**
     * Sets finished_time.
     *
     * @param \DateTime|null $finished_time 分账冲退完成时间，东八区时间 如:2023-07-08T10:34:56+08:00，仅当状态到达SUCCEEDED/FAILED时存在
     *
     * @return self
     */
    public function setFinishedTime($finished_time)
    {
        $this->container['finished_time'] = $finished_time;

        return $this;
    }

    /**
     * Gets failed_reason.
     *
     * @return \Entpay\Mse\Client\Model\AllocationsFailedReason|null
     */
    public function getFailedReason()
    {
        return $this->container['failed_reason'];
    }

    /**
     * Sets failed_reason.
     *
     * @param \Entpay\Mse\Client\Model\AllocationsFailedReason|null $failed_reason failed_reason
     *
     * @return self
     */
    public function setFailedReason($failed_reason)
    {
        $this->container['failed_reason'] = $failed_reason;

        return $this;
    }

    /**
     * Gets allocation_detail_correct_id.
     *
     * @return string|null
     */
    public function getAllocationDetailCorrectId()
    {
        return $this->container['allocation_detail_correct_id'];
    }

    /**
     * Sets allocation_detail_correct_id.
     *
     * @param string|null $allocation_detail_correct_id 分账冲退单号
     *
     * @return self
     */
    public function setAllocationDetailCorrectId($allocation_detail_correct_id)
    {
        $this->container['allocation_detail_correct_id'] = $allocation_detail_correct_id;

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
