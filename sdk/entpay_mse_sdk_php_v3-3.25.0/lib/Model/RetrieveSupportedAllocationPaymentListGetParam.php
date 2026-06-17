<?php
/**
 * RetrieveSupportedAllocationPaymentListGetParam.
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
 * RetrieveSupportedAllocationPaymentListGetParam Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RetrieveSupportedAllocationPaymentListGetParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'RetrieveSupportedAllocationPaymentListGetParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'ent_id'            => 'string',
        'end_pay_time'      => 'string',
        'begin_pay_time'    => 'string',
        'allocation_status' => 'string',
        'page_no'           => 'int',
        'page_size'         => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'ent_id'            => null,
        'end_pay_time'      => null,
        'begin_pay_time'    => null,
        'allocation_status' => null,
        'page_no'           => 'int64',
        'page_size'         => 'int32',
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
        'ent_id'            => 'ent_id',
        'end_pay_time'      => 'end_pay_time',
        'begin_pay_time'    => 'begin_pay_time',
        'allocation_status' => 'allocation_status',
        'page_no'           => 'page_no',
        'page_size'         => 'page_size',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'ent_id'            => 'setEntId',
        'end_pay_time'      => 'setEndPayTime',
        'begin_pay_time'    => 'setBeginPayTime',
        'allocation_status' => 'setAllocationStatus',
        'page_no'           => 'setPageNo',
        'page_size'         => 'setPageSize',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'ent_id'            => 'getEntId',
        'end_pay_time'      => 'getEndPayTime',
        'begin_pay_time'    => 'getBeginPayTime',
        'allocation_status' => 'getAllocationStatus',
        'page_no'           => 'getPageNo',
        'page_size'         => 'getPageSize',
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

    const ALLOCATION_STATUS_PENDING  = 'PENDING';
    const ALLOCATION_STATUS_FINISHED = 'FINISHED';
    const ALLOCATION_STATUS_ALL      = 'ALL';

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
        $this->container['ent_id']            = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['end_pay_time']      = isset($data['end_pay_time']) ? $data['end_pay_time'] : null;
        $this->container['begin_pay_time']    = isset($data['begin_pay_time']) ? $data['begin_pay_time'] : null;
        $this->container['allocation_status'] = isset($data['allocation_status']) ? $data['allocation_status'] : null;
        $this->container['page_no']           = isset($data['page_no']) ? $data['page_no'] : null;
        $this->container['page_size']         = isset($data['page_size']) ? $data['page_size'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['ent_id']) && (mb_strlen($this->container['ent_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['ent_id']) && (mb_strlen($this->container['ent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['page_no']) && ($this->container['page_no'] < 1)) {
            $invalidProperties[] = "invalid value for 'page_no', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['page_size']) && ($this->container['page_size'] > 1000)) {
            $invalidProperties[] = "invalid value for 'page_size', must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['page_size']) && ($this->container['page_size'] < 1)) {
            $invalidProperties[] = "invalid value for 'page_size', must be bigger than or equal to 1.";
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
     * @param string|null $ent_id 商户ID
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

        return $this;
    }

    /**
     * Gets end_pay_time.
     *
     * @return string|null
     */
    public function getEndPayTime()
    {
        return $this->container['end_pay_time'];
    }

    /**
     * Sets end_pay_time.
     *
     * @param string|null $end_pay_time 筛选订单支付成功结束时间，格式yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setEndPayTime($end_pay_time)
    {
        $this->container['end_pay_time'] = $end_pay_time;

        return $this;
    }

    /**
     * Gets begin_pay_time.
     *
     * @return string|null
     */
    public function getBeginPayTime()
    {
        return $this->container['begin_pay_time'];
    }

    /**
     * Sets begin_pay_time.
     *
     * @param string|null $begin_pay_time 筛选订单支付成功开始时间，格式yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setBeginPayTime($begin_pay_time)
    {
        $this->container['begin_pay_time'] = $begin_pay_time;

        return $this;
    }

    /**
     * Gets allocation_status.
     *
     * @return string|null
     */
    public function getAllocationStatus()
    {
        return $this->container['allocation_status'];
    }

    /**
     * Sets allocation_status.
     *
     * @param string|null $allocation_status 分账状态 PENDING待分账 FINISHED分账完成 ALL全部订单(默认值)  PENDING状态包括还未发起分账的交易订单以及已发起分账但还未分账完成的交易订单（对应分账查询接口的INIT和PROCESSING状态）)
     *
     * @return self
     */
    public function setAllocationStatus($allocation_status)
    {
        $this->container['allocation_status'] = $allocation_status;

        return $this;
    }

    /**
     * Gets page_no.
     *
     * @return int|null
     */
    public function getPageNo()
    {
        return $this->container['page_no'];
    }

    /**
     * Sets page_no.
     *
     * @param int|null $page_no 页码，最小值为1
     *
     * @return self
     */
    public function setPageNo($page_no)
    {
        $this->container['page_no'] = $page_no;

        return $this;
    }

    /**
     * Gets page_size.
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size.
     *
     * @param int|null $page_size 每页大小，最小值为1，最大值为1000
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

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
