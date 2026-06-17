<?php
/**
 * Allocation.
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
 * Allocation Class Doc Comment.
 *
 * @category Class
 * @description 分账结果列表
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Allocation implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Allocation';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'allocation_detail_id'     => 'string',
        'out_allocation_detail_id' => 'string',
        'receiver_acct_id'         => 'string',
        'merchant_name'            => 'string',
        'amount'                   => 'int',
        'result'                   => 'string',
        'succeeded_time'           => '\DateTime',
        'failed_reason'            => '\Entpay\Mse\Client\Model\FailReason',
        'desc'                     => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'allocation_detail_id'     => null,
        'out_allocation_detail_id' => null,
        'receiver_acct_id'         => null,
        'merchant_name'            => null,
        'amount'                   => 'int64',
        'result'                   => null,
        'succeeded_time'           => 'date-time',
        'failed_reason'            => null,
        'desc'                     => null,
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
        'allocation_detail_id'     => 'allocation_detail_id',
        'out_allocation_detail_id' => 'out_allocation_detail_id',
        'receiver_acct_id'         => 'receiver_acct_id',
        'merchant_name'            => 'merchant_name',
        'amount'                   => 'amount',
        'result'                   => 'result',
        'succeeded_time'           => 'succeeded_time',
        'failed_reason'            => 'failed_reason',
        'desc'                     => 'desc',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'allocation_detail_id'     => 'setAllocationDetailId',
        'out_allocation_detail_id' => 'setOutAllocationDetailId',
        'receiver_acct_id'         => 'setReceiverAcctId',
        'merchant_name'            => 'setMerchantName',
        'amount'                   => 'setAmount',
        'result'                   => 'setResult',
        'succeeded_time'           => 'setSucceededTime',
        'failed_reason'            => 'setFailedReason',
        'desc'                     => 'setDesc',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'allocation_detail_id'     => 'getAllocationDetailId',
        'out_allocation_detail_id' => 'getOutAllocationDetailId',
        'receiver_acct_id'         => 'getReceiverAcctId',
        'merchant_name'            => 'getMerchantName',
        'amount'                   => 'getAmount',
        'result'                   => 'getResult',
        'succeeded_time'           => 'getSucceededTime',
        'failed_reason'            => 'getFailedReason',
        'desc'                     => 'getDesc',
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

    const RESULT_PENDING    = 'PENDING';
    const RESULT_ALLOCATED  = 'ALLOCATED';
    const RESULT_WITHDRAWED = 'WITHDRAWED';
    const RESULT_FAILED     = 'FAILED';
    const RESULT_CANCELED   = 'CANCELED';

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
        $this->container['allocation_detail_id']     = isset($data['allocation_detail_id']) ? $data['allocation_detail_id'] : null;
        $this->container['out_allocation_detail_id'] = isset($data['out_allocation_detail_id']) ? $data['out_allocation_detail_id'] : null;
        $this->container['receiver_acct_id']         = isset($data['receiver_acct_id']) ? $data['receiver_acct_id'] : null;
        $this->container['merchant_name']            = isset($data['merchant_name']) ? $data['merchant_name'] : null;
        $this->container['amount']                   = isset($data['amount']) ? $data['amount'] : null;
        $this->container['result']                   = isset($data['result']) ? $data['result'] : null;
        $this->container['succeeded_time']           = isset($data['succeeded_time']) ? $data['succeeded_time'] : null;
        $this->container['failed_reason']            = isset($data['failed_reason']) ? $data['failed_reason'] : null;
        $this->container['desc']                     = isset($data['desc']) ? $data['desc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['allocation_detail_id']) {
            $invalidProperties[] = "'allocation_detail_id' can't be null";
        }
        if ((mb_strlen($this->container['allocation_detail_id']) > 30)) {
            $invalidProperties[] = "invalid value for 'allocation_detail_id', the character length must be smaller than or equal to 30.";
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

        if (null === $this->container['receiver_acct_id']) {
            $invalidProperties[] = "'receiver_acct_id' can't be null";
        }
        if ((mb_strlen($this->container['receiver_acct_id']) > 28)) {
            $invalidProperties[] = "invalid value for 'receiver_acct_id', the character length must be smaller than or equal to 28.";
        }

        if ((mb_strlen($this->container['receiver_acct_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'receiver_acct_id', the character length must be bigger than or equal to 1.";
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

        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (null === $this->container['result']) {
            $invalidProperties[] = "'result' can't be null";
        }
        if ((mb_strlen($this->container['result']) > 32)) {
            $invalidProperties[] = "invalid value for 'result', the character length must be smaller than or equal to 32.";
        }

        if ((mb_strlen($this->container['result']) < 1)) {
            $invalidProperties[] = "invalid value for 'result', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['succeeded_time']) && (mb_strlen($this->container['succeeded_time']) > 16)) {
            $invalidProperties[] = "invalid value for 'succeeded_time', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['succeeded_time']) && (mb_strlen($this->container['succeeded_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'succeeded_time', the character length must be bigger than or equal to 1.";
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
     * @param string $receiver_acct_id 分账接收方账户ID
     *
     * @return self
     */
    public function setReceiverAcctId($receiver_acct_id)
    {
        $this->container['receiver_acct_id'] = $receiver_acct_id;

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
     * @param int $amount 分账金额
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets result.
     *
     * @return string
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result.
     *
     * @param string $result 分账结果
     *
     * @return self
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

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
     * @param \DateTime|null $succeeded_time 分账成功时间
     *
     * @return self
     */
    public function setSucceededTime($succeeded_time)
    {
        $this->container['succeeded_time'] = $succeeded_time;

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
}
