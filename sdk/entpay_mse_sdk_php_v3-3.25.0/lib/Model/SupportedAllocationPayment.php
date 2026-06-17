<?php
/**
 * SupportedAllocationPayment.
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
 * SupportedAllocationPayment Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SupportedAllocationPayment implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SupportedAllocationPayment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'payment_id'                => 'string',
        'out_payment_id'            => 'string',
        'payee_ent_id'              => 'string',
        'pay_time'                  => '\DateTime',
        'trans_amount'              => 'int',
        'fee_amount'                => 'int',
        'pending_allocation_amount' => 'int',
        'allocated_amount'          => 'int',
        'finish_amount'             => 'int',
        'allocation_status'         => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'payment_id'                => null,
        'out_payment_id'            => null,
        'payee_ent_id'              => null,
        'pay_time'                  => 'date-time',
        'trans_amount'              => 'int64',
        'fee_amount'                => 'int64',
        'pending_allocation_amount' => 'int64',
        'allocated_amount'          => 'int64',
        'finish_amount'             => 'int64',
        'allocation_status'         => null,
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
        'payment_id'                => 'payment_id',
        'out_payment_id'            => 'out_payment_id',
        'payee_ent_id'              => 'payee_ent_id',
        'pay_time'                  => 'pay_time',
        'trans_amount'              => 'trans_amount',
        'fee_amount'                => 'fee_amount',
        'pending_allocation_amount' => 'pending_allocation_amount',
        'allocated_amount'          => 'allocated_amount',
        'finish_amount'             => 'finish_amount',
        'allocation_status'         => 'allocation_status',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_id'                => 'setPaymentId',
        'out_payment_id'            => 'setOutPaymentId',
        'payee_ent_id'              => 'setPayeeEntId',
        'pay_time'                  => 'setPayTime',
        'trans_amount'              => 'setTransAmount',
        'fee_amount'                => 'setFeeAmount',
        'pending_allocation_amount' => 'setPendingAllocationAmount',
        'allocated_amount'          => 'setAllocatedAmount',
        'finish_amount'             => 'setFinishAmount',
        'allocation_status'         => 'setAllocationStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_id'                => 'getPaymentId',
        'out_payment_id'            => 'getOutPaymentId',
        'payee_ent_id'              => 'getPayeeEntId',
        'pay_time'                  => 'getPayTime',
        'trans_amount'              => 'getTransAmount',
        'fee_amount'                => 'getFeeAmount',
        'pending_allocation_amount' => 'getPendingAllocationAmount',
        'allocated_amount'          => 'getAllocatedAmount',
        'finish_amount'             => 'getFinishAmount',
        'allocation_status'         => 'getAllocationStatus',
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
        $this->container['payment_id']                = isset($data['payment_id']) ? $data['payment_id'] : null;
        $this->container['out_payment_id']            = isset($data['out_payment_id']) ? $data['out_payment_id'] : null;
        $this->container['payee_ent_id']              = isset($data['payee_ent_id']) ? $data['payee_ent_id'] : null;
        $this->container['pay_time']                  = isset($data['pay_time']) ? $data['pay_time'] : null;
        $this->container['trans_amount']              = isset($data['trans_amount']) ? $data['trans_amount'] : null;
        $this->container['fee_amount']                = isset($data['fee_amount']) ? $data['fee_amount'] : null;
        $this->container['pending_allocation_amount'] = isset($data['pending_allocation_amount']) ? $data['pending_allocation_amount'] : null;
        $this->container['allocated_amount']          = isset($data['allocated_amount']) ? $data['allocated_amount'] : null;
        $this->container['finish_amount']             = isset($data['finish_amount']) ? $data['finish_amount'] : null;
        $this->container['allocation_status']         = isset($data['allocation_status']) ? $data['allocation_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['payment_id']) {
            $invalidProperties[] = "'payment_id' can't be null";
        }
        if (null === $this->container['out_payment_id']) {
            $invalidProperties[] = "'out_payment_id' can't be null";
        }
        if (null === $this->container['payee_ent_id']) {
            $invalidProperties[] = "'payee_ent_id' can't be null";
        }
        if (null === $this->container['pay_time']) {
            $invalidProperties[] = "'pay_time' can't be null";
        }
        if (null === $this->container['trans_amount']) {
            $invalidProperties[] = "'trans_amount' can't be null";
        }
        if (null === $this->container['fee_amount']) {
            $invalidProperties[] = "'fee_amount' can't be null";
        }
        if (null === $this->container['pending_allocation_amount']) {
            $invalidProperties[] = "'pending_allocation_amount' can't be null";
        }
        if (null === $this->container['allocated_amount']) {
            $invalidProperties[] = "'allocated_amount' can't be null";
        }
        if (null === $this->container['finish_amount']) {
            $invalidProperties[] = "'finish_amount' can't be null";
        }
        if (null === $this->container['allocation_status']) {
            $invalidProperties[] = "'allocation_status' can't be null";
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
     * Gets payment_id.
     *
     * @return string
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id.
     *
     * @param string $payment_id 微企付支付单号
     *
     * @return self
     */
    public function setPaymentId($payment_id)
    {
        $this->container['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Gets out_payment_id.
     *
     * @return string
     */
    public function getOutPaymentId()
    {
        return $this->container['out_payment_id'];
    }

    /**
     * Sets out_payment_id.
     *
     * @param string $out_payment_id 外部支付单号
     *
     * @return self
     */
    public function setOutPaymentId($out_payment_id)
    {
        $this->container['out_payment_id'] = $out_payment_id;

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
     * @param string $payee_ent_id 收款方企业id
     *
     * @return self
     */
    public function setPayeeEntId($payee_ent_id)
    {
        $this->container['payee_ent_id'] = $payee_ent_id;

        return $this;
    }

    /**
     * Gets pay_time.
     *
     * @return \DateTime
     */
    public function getPayTime()
    {
        return $this->container['pay_time'];
    }

    /**
     * Sets pay_time.
     *
     * @param \DateTime $pay_time 订单支付成功时间, 东八区时间 如:2021-06-08T10:34:56+08:00
     *
     * @return self
     */
    public function setPayTime($pay_time)
    {
        $this->container['pay_time'] = $pay_time;

        return $this;
    }

    /**
     * Gets trans_amount.
     *
     * @return int
     */
    public function getTransAmount()
    {
        return $this->container['trans_amount'];
    }

    /**
     * Sets trans_amount.
     *
     * @param int $trans_amount 支付金额
     *
     * @return self
     */
    public function setTransAmount($trans_amount)
    {
        $this->container['trans_amount'] = $trans_amount;

        return $this;
    }

    /**
     * Gets fee_amount.
     *
     * @return int
     */
    public function getFeeAmount()
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount.
     *
     * @param int $fee_amount 手续费金额
     *
     * @return self
     */
    public function setFeeAmount($fee_amount)
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets pending_allocation_amount.
     *
     * @return int
     */
    public function getPendingAllocationAmount()
    {
        return $this->container['pending_allocation_amount'];
    }

    /**
     * Sets pending_allocation_amount.
     *
     * @param int $pending_allocation_amount 待分账金额，不包含分账中的金额
     *
     * @return self
     */
    public function setPendingAllocationAmount($pending_allocation_amount)
    {
        $this->container['pending_allocation_amount'] = $pending_allocation_amount;

        return $this;
    }

    /**
     * Gets allocated_amount.
     *
     * @return int
     */
    public function getAllocatedAmount()
    {
        return $this->container['allocated_amount'];
    }

    /**
     * Sets allocated_amount.
     *
     * @param int $allocated_amount 已分账金额
     *
     * @return self
     */
    public function setAllocatedAmount($allocated_amount)
    {
        $this->container['allocated_amount'] = $allocated_amount;

        return $this;
    }

    /**
     * Gets finish_amount.
     *
     * @return int
     */
    public function getFinishAmount()
    {
        return $this->container['finish_amount'];
    }

    /**
     * Sets finish_amount.
     *
     * @param int $finish_amount 分账完结金额
     *
     * @return self
     */
    public function setFinishAmount($finish_amount)
    {
        $this->container['finish_amount'] = $finish_amount;

        return $this;
    }

    /**
     * Gets allocation_status.
     *
     * @return string
     */
    public function getAllocationStatus()
    {
        return $this->container['allocation_status'];
    }

    /**
     * Sets allocation_status.
     *
     * @param string $allocation_status 分账状态 PENDING待分账 FINISH分账完结  PENDING状态包括还未发起分账的交易订单、以及已发起分账但还未分账完结的交易订单（对应分账查询接口的INIT和PROCESSING状态）
     *
     * @return self
     */
    public function setAllocationStatus($allocation_status)
    {
        $this->container['allocation_status'] = $allocation_status;

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
