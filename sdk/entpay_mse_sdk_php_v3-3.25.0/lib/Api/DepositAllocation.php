<?php
/**
 * DepositAllocation.
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
 * DepositAllocation Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class DepositAllocation implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'DepositAllocation';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'deposit_id'        => 'string',
        'out_allocation_id' => 'string',
        'allocation_id'     => 'string',
        'status'            => 'string',
        'finished_time'     => '\DateTime',
        'unsplit_amount'    => 'int',
        'finish_amount'     => 'int',
        'finish_desc'       => 'string',
        'allocations'       => '\Entpay\Mse\Client\Model\Allocation[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'deposit_id'        => null,
        'out_allocation_id' => null,
        'allocation_id'     => null,
        'status'            => null,
        'finished_time'     => 'date-time',
        'unsplit_amount'    => 'int64',
        'finish_amount'     => 'int64',
        'finish_desc'       => null,
        'allocations'       => null,
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
        'deposit_id'        => 'deposit_id',
        'out_allocation_id' => 'out_allocation_id',
        'allocation_id'     => 'allocation_id',
        'status'            => 'status',
        'finished_time'     => 'finished_time',
        'unsplit_amount'    => 'unsplit_amount',
        'finish_amount'     => 'finish_amount',
        'finish_desc'       => 'finish_desc',
        'allocations'       => 'allocations',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'deposit_id'        => 'setDepositId',
        'out_allocation_id' => 'setOutAllocationId',
        'allocation_id'     => 'setAllocationId',
        'status'            => 'setStatus',
        'finished_time'     => 'setFinishedTime',
        'unsplit_amount'    => 'setUnsplitAmount',
        'finish_amount'     => 'setFinishAmount',
        'finish_desc'       => 'setFinishDesc',
        'allocations'       => 'setAllocations',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'deposit_id'        => 'getDepositId',
        'out_allocation_id' => 'getOutAllocationId',
        'allocation_id'     => 'getAllocationId',
        'status'            => 'getStatus',
        'finished_time'     => 'getFinishedTime',
        'unsplit_amount'    => 'getUnsplitAmount',
        'finish_amount'     => 'getFinishAmount',
        'finish_desc'       => 'getFinishDesc',
        'allocations'       => 'getAllocations',
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
    const STATUS_FINISHED   = 'FINISHED';

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
        $this->container['deposit_id']        = isset($data['deposit_id']) ? $data['deposit_id'] : null;
        $this->container['out_allocation_id'] = isset($data['out_allocation_id']) ? $data['out_allocation_id'] : null;
        $this->container['allocation_id']     = isset($data['allocation_id']) ? $data['allocation_id'] : null;
        $this->container['status']            = isset($data['status']) ? $data['status'] : null;
        $this->container['finished_time']     = isset($data['finished_time']) ? $data['finished_time'] : null;
        $this->container['unsplit_amount']    = isset($data['unsplit_amount']) ? $data['unsplit_amount'] : null;
        $this->container['finish_amount']     = isset($data['finish_amount']) ? $data['finish_amount'] : null;
        $this->container['finish_desc']       = isset($data['finish_desc']) ? $data['finish_desc'] : null;
        $this->container['allocations']       = isset($data['allocations']) ? $data['allocations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['out_allocation_id']) {
            $invalidProperties[] = "'out_allocation_id' can't be null";
        }
        if ((mb_strlen($this->container['out_allocation_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_allocation_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_allocation_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_allocation_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['allocation_id']) {
            $invalidProperties[] = "'allocation_id' can't be null";
        }
        if ((mb_strlen($this->container['allocation_id']) > 30)) {
            $invalidProperties[] = "invalid value for 'allocation_id', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['allocation_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'allocation_id', the character length must be bigger than or equal to 1.";
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

        if (!is_null($this->container['finished_time']) && (mb_strlen($this->container['finished_time']) > 16)) {
            $invalidProperties[] = "invalid value for 'finished_time', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['finished_time']) && (mb_strlen($this->container['finished_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'finished_time', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['unsplit_amount']) {
            $invalidProperties[] = "'unsplit_amount' can't be null";
        }
        if (!is_null($this->container['finish_desc']) && (mb_strlen($this->container['finish_desc']) > 255)) {
            $invalidProperties[] = "invalid value for 'finish_desc', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['finish_desc']) && (mb_strlen($this->container['finish_desc']) < 1)) {
            $invalidProperties[] = "invalid value for 'finish_desc', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['allocations']) {
            $invalidProperties[] = "'allocations' can't be null";
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
     * Gets deposit_id.
     *
     * @return string|null
     */
    public function getDepositId()
    {
        return $this->container['deposit_id'];
    }

    /**
     * Sets deposit_id.
     *
     * @param string|null $deposit_id deposit_id
     *
     * @return self
     */
    public function setDepositId($deposit_id)
    {
        $this->container['deposit_id'] = $deposit_id;

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
     * @param string $status 分账状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param \DateTime|null $finished_time 完成时间
     *
     * @return self
     */
    public function setFinishedTime($finished_time)
    {
        $this->container['finished_time'] = $finished_time;

        return $this;
    }

    /**
     * Gets unsplit_amount.
     *
     * @return int
     */
    public function getUnsplitAmount()
    {
        return $this->container['unsplit_amount'];
    }

    /**
     * Sets unsplit_amount.
     *
     * @param int $unsplit_amount 订单剩余待分金额
     *
     * @return self
     */
    public function setUnsplitAmount($unsplit_amount)
    {
        $this->container['unsplit_amount'] = $unsplit_amount;

        return $this;
    }

    /**
     * Gets finish_amount.
     *
     * @return int|null
     */
    public function getFinishAmount()
    {
        return $this->container['finish_amount'];
    }

    /**
     * Sets finish_amount.
     *
     * @param int|null $finish_amount 分账完结金额
     *
     * @return self
     */
    public function setFinishAmount($finish_amount)
    {
        $this->container['finish_amount'] = $finish_amount;

        return $this;
    }

    /**
     * Gets finish_desc.
     *
     * @return string|null
     */
    public function getFinishDesc()
    {
        return $this->container['finish_desc'];
    }

    /**
     * Sets finish_desc.
     *
     * @param string|null $finish_desc 分账完结描述
     *
     * @return self
     */
    public function setFinishDesc($finish_desc)
    {
        $this->container['finish_desc'] = $finish_desc;

        return $this;
    }

    /**
     * Gets allocations.
     *
     * @return \Entpay\Mse\Client\Model\Allocation[]
     */
    public function getAllocations()
    {
        return $this->container['allocations'];
    }

    /**
     * Sets allocations.
     *
     * @param \Entpay\Mse\Client\Model\Allocation[] $allocations 分账结果列表
     *
     * @return self
     */
    public function setAllocations($allocations)
    {
        $this->container['allocations'] = $allocations;

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
     * @param \Entpay\Mse\Client\Model\DepositAllocationParam $deposit_allocation_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions        $request_options          (optional)
     *
     * @throws \InvalidArgumentException
     * @return DepositAllocation
     */
    public static function create($deposit_allocation_param, $request_options = null)
    {
        $path = '/v3/mse-pay/deposit-allocations';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $deposit_allocation_param,
            DepositAllocation::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'finish'.
     *
     * @param \Entpay\Mse\Client\Model\DepositAllocationFinishParam $deposit_allocation_finish_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions              $request_options                 (optional)
     *
     * @throws \InvalidArgumentException
     * @return DepositAllocation
     */
    public static function finish($deposit_allocation_finish_param, $request_options = null)
    {
        $path = '/v3/mse-pay/deposit-allocations/finish';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $deposit_allocation_finish_param,
            DepositAllocation::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieve'.
     *
     * @param string                                   $allocation_id   (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return DepositAllocation
     */
    public static function retrieve($allocation_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/deposit-allocations/%s', urlencode($allocation_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            DepositAllocation::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveBalance'.
     *
     * @param string                                   $deposit_id      (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return DepositAllocation
     */
    public static function retrieveBalance($deposit_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/deposit-allocations/%s/amounts', urlencode($deposit_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            DepositAllocation::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveByOutAllocationId'.
     *
     * @param string                                   $out_allocation_id (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options   (optional)
     *
     * @throws \InvalidArgumentException
     * @return DepositAllocation
     */
    public static function retrieveByOutAllocationId($out_allocation_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/deposit-allocations/out-allocation-id/%s', urlencode($out_allocation_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            DepositAllocation::class,
            $request_options
        );
    }
}
