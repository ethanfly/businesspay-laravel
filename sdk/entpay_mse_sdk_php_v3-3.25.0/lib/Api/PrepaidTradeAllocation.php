<?php
/**
 * PrepaidTradeAllocation.
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
 * PrepaidTradeAllocation Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class PrepaidTradeAllocation implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PrepaidTradeAllocation';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_allocation_id'   => 'string',
        'ent_id'              => 'string',
        'merchant_name'       => 'string',
        'allocation_id'       => 'string',
        'mse_prepaid_card_id' => 'string',
        'out_prepaid_card_id' => 'string',
        'status'              => 'string',
        'finished_time'       => '\DateTime',
        'allocations'         => '\Entpay\Mse\Client\Model\PrepaidTradeAllocationItem[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'out_allocation_id'   => null,
        'ent_id'              => null,
        'merchant_name'       => null,
        'allocation_id'       => null,
        'mse_prepaid_card_id' => null,
        'out_prepaid_card_id' => null,
        'status'              => null,
        'finished_time'       => 'date-time',
        'allocations'         => null,
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
        'out_allocation_id'   => 'out_allocation_id',
        'ent_id'              => 'ent_id',
        'merchant_name'       => 'merchant_name',
        'allocation_id'       => 'allocation_id',
        'mse_prepaid_card_id' => 'mse_prepaid_card_id',
        'out_prepaid_card_id' => 'out_prepaid_card_id',
        'status'              => 'status',
        'finished_time'       => 'finished_time',
        'allocations'         => 'allocations',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'out_allocation_id'   => 'setOutAllocationId',
        'ent_id'              => 'setEntId',
        'merchant_name'       => 'setMerchantName',
        'allocation_id'       => 'setAllocationId',
        'mse_prepaid_card_id' => 'setMsePrepaidCardId',
        'out_prepaid_card_id' => 'setOutPrepaidCardId',
        'status'              => 'setStatus',
        'finished_time'       => 'setFinishedTime',
        'allocations'         => 'setAllocations',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'out_allocation_id'   => 'getOutAllocationId',
        'ent_id'              => 'getEntId',
        'merchant_name'       => 'getMerchantName',
        'allocation_id'       => 'getAllocationId',
        'mse_prepaid_card_id' => 'getMsePrepaidCardId',
        'out_prepaid_card_id' => 'getOutPrepaidCardId',
        'status'              => 'getStatus',
        'finished_time'       => 'getFinishedTime',
        'allocations'         => 'getAllocations',
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
        $this->container['out_allocation_id']   = isset($data['out_allocation_id']) ? $data['out_allocation_id'] : null;
        $this->container['ent_id']              = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['merchant_name']       = isset($data['merchant_name']) ? $data['merchant_name'] : null;
        $this->container['allocation_id']       = isset($data['allocation_id']) ? $data['allocation_id'] : null;
        $this->container['mse_prepaid_card_id'] = isset($data['mse_prepaid_card_id']) ? $data['mse_prepaid_card_id'] : null;
        $this->container['out_prepaid_card_id'] = isset($data['out_prepaid_card_id']) ? $data['out_prepaid_card_id'] : null;
        $this->container['status']              = isset($data['status']) ? $data['status'] : null;
        $this->container['finished_time']       = isset($data['finished_time']) ? $data['finished_time'] : null;
        $this->container['allocations']         = isset($data['allocations']) ? $data['allocations'] : null;
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

        if (null === $this->container['allocation_id']) {
            $invalidProperties[] = "'allocation_id' can't be null";
        }
        if ((mb_strlen($this->container['allocation_id']) > 30)) {
            $invalidProperties[] = "invalid value for 'allocation_id', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['allocation_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'allocation_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['mse_prepaid_card_id']) {
            $invalidProperties[] = "'mse_prepaid_card_id' can't be null";
        }
        if ((mb_strlen($this->container['mse_prepaid_card_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'mse_prepaid_card_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['mse_prepaid_card_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'mse_prepaid_card_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['out_prepaid_card_id']) {
            $invalidProperties[] = "'out_prepaid_card_id' can't be null";
        }
        if ((mb_strlen($this->container['out_prepaid_card_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'out_prepaid_card_id', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['out_prepaid_card_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_prepaid_card_id', the character length must be bigger than or equal to 1.";
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
     * Gets mse_prepaid_card_id.
     *
     * @return string
     */
    public function getMsePrepaidCardId()
    {
        return $this->container['mse_prepaid_card_id'];
    }

    /**
     * Sets mse_prepaid_card_id.
     *
     * @param string $mse_prepaid_card_id 预付卡微企付绑定ID
     *
     * @return self
     */
    public function setMsePrepaidCardId($mse_prepaid_card_id)
    {
        $this->container['mse_prepaid_card_id'] = $mse_prepaid_card_id;

        return $this;
    }

    /**
     * Gets out_prepaid_card_id.
     *
     * @return string
     */
    public function getOutPrepaidCardId()
    {
        return $this->container['out_prepaid_card_id'];
    }

    /**
     * Sets out_prepaid_card_id.
     *
     * @param string $out_prepaid_card_id 外部预付卡ID
     *
     * @return self
     */
    public function setOutPrepaidCardId($out_prepaid_card_id)
    {
        $this->container['out_prepaid_card_id'] = $out_prepaid_card_id;

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
     * Gets allocations.
     *
     * @return \Entpay\Mse\Client\Model\PrepaidTradeAllocationItem[]
     */
    public function getAllocations()
    {
        return $this->container['allocations'];
    }

    /**
     * Sets allocations.
     *
     * @param \Entpay\Mse\Client\Model\PrepaidTradeAllocationItem[] $allocations 分账结果列表
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
     * @param \Entpay\Mse\Client\Model\PrepaidTradeAllocationParam $prepaid_trade_allocation_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions             $request_options                (optional)
     *
     * @throws \InvalidArgumentException
     * @return PrepaidTradeAllocation
     */
    public static function create($prepaid_trade_allocation_param, $request_options = null)
    {
        $path = '/v3/mse-pay/prepaid/trade-allocations';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $prepaid_trade_allocation_param,
            PrepaidTradeAllocation::class,
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
     * @return PrepaidTradeAllocation
     */
    public static function retrieve($allocation_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/prepaid/trade-allocations/%s', urlencode($allocation_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            PrepaidTradeAllocation::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveByOutAllocationId'.
     *
     * @param string                                   $ent_id            (required)
     * @param string                                   $out_allocation_id (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options   (optional)
     *
     * @throws \InvalidArgumentException
     * @return PrepaidTradeAllocation
     */
    public static function retrieveByOutAllocationId($ent_id, $out_allocation_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/prepaid/trade-allocations/%s/out-allocation-id/%s', urlencode($ent_id), urlencode($out_allocation_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            PrepaidTradeAllocation::class,
            $request_options
        );
    }
}
