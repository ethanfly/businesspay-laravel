<?php
/**
 * BatchProfitAllocationCorrect.
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
 * BatchProfitAllocationCorrect Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class BatchProfitAllocationCorrect implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'BatchProfitAllocationCorrect';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_allocation_correct_id' => 'string',
        'allocation_correct_id'     => 'string',
        'status'                    => 'string',
        'finished_time'             => '\DateTime',
        'ent_id'                    => 'string',
        'profit_corrects'           => '\Entpay\Mse\Client\Model\BatchProfitCorrectResponseDetail[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'out_allocation_correct_id' => null,
        'allocation_correct_id'     => null,
        'status'                    => null,
        'finished_time'             => 'date-time',
        'ent_id'                    => null,
        'profit_corrects'           => null,
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
        'out_allocation_correct_id' => 'out_allocation_correct_id',
        'allocation_correct_id'     => 'allocation_correct_id',
        'status'                    => 'status',
        'finished_time'             => 'finished_time',
        'ent_id'                    => 'ent_id',
        'profit_corrects'           => 'profit_corrects',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'out_allocation_correct_id' => 'setOutAllocationCorrectId',
        'allocation_correct_id'     => 'setAllocationCorrectId',
        'status'                    => 'setStatus',
        'finished_time'             => 'setFinishedTime',
        'ent_id'                    => 'setEntId',
        'profit_corrects'           => 'setProfitCorrects',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'out_allocation_correct_id' => 'getOutAllocationCorrectId',
        'allocation_correct_id'     => 'getAllocationCorrectId',
        'status'                    => 'getStatus',
        'finished_time'             => 'getFinishedTime',
        'ent_id'                    => 'getEntId',
        'profit_corrects'           => 'getProfitCorrects',
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
        $this->container['out_allocation_correct_id'] = isset($data['out_allocation_correct_id']) ? $data['out_allocation_correct_id'] : null;
        $this->container['allocation_correct_id']     = isset($data['allocation_correct_id']) ? $data['allocation_correct_id'] : null;
        $this->container['status']                    = isset($data['status']) ? $data['status'] : null;
        $this->container['finished_time']             = isset($data['finished_time']) ? $data['finished_time'] : null;
        $this->container['ent_id']                    = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['profit_corrects']           = isset($data['profit_corrects']) ? $data['profit_corrects'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['out_allocation_correct_id']) {
            $invalidProperties[] = "'out_allocation_correct_id' can't be null";
        }
        if ((mb_strlen($this->container['out_allocation_correct_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_allocation_correct_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_allocation_correct_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_allocation_correct_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['allocation_correct_id']) {
            $invalidProperties[] = "'allocation_correct_id' can't be null";
        }
        if ((mb_strlen($this->container['allocation_correct_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'allocation_correct_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['allocation_correct_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'allocation_correct_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['finished_time']) && (mb_strlen($this->container['finished_time']) > 32)) {
            $invalidProperties[] = "invalid value for 'finished_time', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['finished_time']) && (mb_strlen($this->container['finished_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'finished_time', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['ent_id']) && (mb_strlen($this->container['ent_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['ent_id']) && (mb_strlen($this->container['ent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be bigger than or equal to 1.";
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
     * Gets out_allocation_correct_id.
     *
     * @return string
     */
    public function getOutAllocationCorrectId()
    {
        return $this->container['out_allocation_correct_id'];
    }

    /**
     * Sets out_allocation_correct_id.
     *
     * @param string $out_allocation_correct_id out_allocation_correct_id
     *
     * @return self
     */
    public function setOutAllocationCorrectId($out_allocation_correct_id)
    {
        $this->container['out_allocation_correct_id'] = $out_allocation_correct_id;

        return $this;
    }

    /**
     * Gets allocation_correct_id.
     *
     * @return string
     */
    public function getAllocationCorrectId()
    {
        return $this->container['allocation_correct_id'];
    }

    /**
     * Sets allocation_correct_id.
     *
     * @param string $allocation_correct_id 微企付分账冲退单号
     *
     * @return self
     */
    public function setAllocationCorrectId($allocation_correct_id)
    {
        $this->container['allocation_correct_id'] = $allocation_correct_id;

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
     * @param string|null $status 处理状态
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
     * @param \DateTime|null $finished_time 分账冲退完成时间，东八区时间 如:2023-07-08T10:34:56+08:00，状态为FINISHED时返回
     *
     * @return self
     */
    public function setFinishedTime($finished_time)
    {
        $this->container['finished_time'] = $finished_time;

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
     * @param string|null $ent_id 分账方企业ID
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

        return $this;
    }

    /**
     * Gets profit_corrects.
     *
     * @return \Entpay\Mse\Client\Model\BatchProfitCorrectResponseDetail[]|null
     */
    public function getProfitCorrects()
    {
        return $this->container['profit_corrects'];
    }

    /**
     * Sets profit_corrects.
     *
     * @param \Entpay\Mse\Client\Model\BatchProfitCorrectResponseDetail[]|null $profit_corrects 分账冲退明细
     *
     * @return self
     */
    public function setProfitCorrects($profit_corrects)
    {
        $this->container['profit_corrects'] = $profit_corrects;

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
     * @param \Entpay\Mse\Client\Model\BatchAllocationCollectApplyParam $batch_allocation_collect_apply_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions                  $request_options                      (optional)
     *
     * @throws \InvalidArgumentException
     * @return BatchProfitAllocationCorrect
     */
    public static function create($batch_allocation_collect_apply_param, $request_options = null)
    {
        $path = '/v3/mse-pay/batch-profit-allocation-corrects';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $batch_allocation_collect_apply_param,
            BatchProfitAllocationCorrect::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieve'.
     *
     * @param string                                   $allocation_correct_id (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options       (optional)
     *
     * @throws \InvalidArgumentException
     * @return BatchProfitAllocationCorrect
     */
    public static function retrieve($allocation_correct_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/batch-profit-allocation-corrects/%s', urlencode($allocation_correct_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            BatchProfitAllocationCorrect::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveByOutAllocationCorrectId'.
     *
     * @param string                                   $out_allocation_correct_id (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options           (optional)
     *
     * @throws \InvalidArgumentException
     * @return BatchProfitAllocationCorrect
     */
    public static function retrieveByOutAllocationCorrectId($out_allocation_correct_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/batch-profit-allocation-corrects/out-allocation-return-id/%s', urlencode($out_allocation_correct_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            BatchProfitAllocationCorrect::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveByOutProfitAllocationCorrectId'.
     *
     * @param string                                   $out_allocation_correct_id (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options           (optional)
     *
     * @throws \InvalidArgumentException
     * @return BatchProfitAllocationCorrect
     */
    public static function retrieveByOutProfitAllocationCorrectId($out_allocation_correct_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/batch-profit-allocation-corrects/out-allocation-correct-id/%s', urlencode($out_allocation_correct_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            BatchProfitAllocationCorrect::class,
            $request_options
        );
    }
}
