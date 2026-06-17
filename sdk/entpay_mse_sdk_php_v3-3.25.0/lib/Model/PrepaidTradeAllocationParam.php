<?php
/**
 * PrepaidTradeAllocationParam.
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
 * PrepaidTradeAllocationParam Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PrepaidTradeAllocationParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PrepaidTradeAllocationParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_allocation_id'   => 'string',
        'ent_id'              => 'string',
        'merchant_name'       => 'string',
        'mse_prepaid_card_id' => 'string',
        'out_prepaid_card_id' => 'string',
        'server_notify_url'   => 'string',
        'out_trade_time'      => '\DateTime',
        'amount'              => 'int',
        'desc'                => 'string',
        'allocations'         => '\Entpay\Mse\Client\Model\PrepaidTradeAllocationParamItem[]',
        'goods'               => '\Entpay\Mse\Client\Model\Goods[]',
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
        'mse_prepaid_card_id' => null,
        'out_prepaid_card_id' => null,
        'server_notify_url'   => null,
        'out_trade_time'      => 'date-time',
        'amount'              => 'int64',
        'desc'                => null,
        'allocations'         => null,
        'goods'               => null,
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
        'mse_prepaid_card_id' => 'mse_prepaid_card_id',
        'out_prepaid_card_id' => 'out_prepaid_card_id',
        'server_notify_url'   => 'server_notify_url',
        'out_trade_time'      => 'out_trade_time',
        'amount'              => 'amount',
        'desc'                => 'desc',
        'allocations'         => 'allocations',
        'goods'               => 'goods',
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
        'mse_prepaid_card_id' => 'setMsePrepaidCardId',
        'out_prepaid_card_id' => 'setOutPrepaidCardId',
        'server_notify_url'   => 'setServerNotifyUrl',
        'out_trade_time'      => 'setOutTradeTime',
        'amount'              => 'setAmount',
        'desc'                => 'setDesc',
        'allocations'         => 'setAllocations',
        'goods'               => 'setGoods',
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
        'mse_prepaid_card_id' => 'getMsePrepaidCardId',
        'out_prepaid_card_id' => 'getOutPrepaidCardId',
        'server_notify_url'   => 'getServerNotifyUrl',
        'out_trade_time'      => 'getOutTradeTime',
        'amount'              => 'getAmount',
        'desc'                => 'getDesc',
        'allocations'         => 'getAllocations',
        'goods'               => 'getGoods',
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
        $this->container['out_allocation_id']   = isset($data['out_allocation_id']) ? $data['out_allocation_id'] : null;
        $this->container['ent_id']              = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['merchant_name']       = isset($data['merchant_name']) ? $data['merchant_name'] : null;
        $this->container['mse_prepaid_card_id'] = isset($data['mse_prepaid_card_id']) ? $data['mse_prepaid_card_id'] : null;
        $this->container['out_prepaid_card_id'] = isset($data['out_prepaid_card_id']) ? $data['out_prepaid_card_id'] : null;
        $this->container['server_notify_url']   = isset($data['server_notify_url']) ? $data['server_notify_url'] : null;
        $this->container['out_trade_time']      = isset($data['out_trade_time']) ? $data['out_trade_time'] : null;
        $this->container['amount']              = isset($data['amount']) ? $data['amount'] : null;
        $this->container['desc']                = isset($data['desc']) ? $data['desc'] : null;
        $this->container['allocations']         = isset($data['allocations']) ? $data['allocations'] : null;
        $this->container['goods']               = isset($data['goods']) ? $data['goods'] : null;
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

        if (null === $this->container['server_notify_url']) {
            $invalidProperties[] = "'server_notify_url' can't be null";
        }
        if ((mb_strlen($this->container['server_notify_url']) > 256)) {
            $invalidProperties[] = "invalid value for 'server_notify_url', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['server_notify_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'server_notify_url', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^https?:\/\/[^?]+/", $this->container['server_notify_url'])) {
            $invalidProperties[] = "invalid value for 'server_notify_url', must be conform to the pattern /^https?:\/\/[^?]+/.";
        }

        if (null === $this->container['out_trade_time']) {
            $invalidProperties[] = "'out_trade_time' can't be null";
        }
        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (null === $this->container['desc']) {
            $invalidProperties[] = "'desc' can't be null";
        }
        if ((mb_strlen($this->container['desc']) > 255)) {
            $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['desc']) < 1)) {
            $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['allocations']) {
            $invalidProperties[] = "'allocations' can't be null";
        }
        if (null === $this->container['goods']) {
            $invalidProperties[] = "'goods' can't be null";
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
     * @param string $ent_id 分账方企业id
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
     * @param string $merchant_name 分账方企业名称
     *
     * @return self
     */
    public function setMerchantName($merchant_name)
    {
        $this->container['merchant_name'] = $merchant_name;

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
     * Gets server_notify_url.
     *
     * @return string
     */
    public function getServerNotifyUrl()
    {
        return $this->container['server_notify_url'];
    }

    /**
     * Sets server_notify_url.
     *
     * @param string $server_notify_url server_notify_url
     *
     * @return self
     */
    public function setServerNotifyUrl($server_notify_url)
    {
        $this->container['server_notify_url'] = $server_notify_url;

        return $this;
    }

    /**
     * Gets out_trade_time.
     *
     * @return \DateTime
     */
    public function getOutTradeTime()
    {
        return $this->container['out_trade_time'];
    }

    /**
     * Sets out_trade_time.
     *
     * @param \DateTime $out_trade_time 外部交易时间
     *
     * @return self
     */
    public function setOutTradeTime($out_trade_time)
    {
        $this->container['out_trade_time'] = $out_trade_time;

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
     * @param int $amount 总分出金额
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
     * @return string
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc.
     *
     * @param string $desc desc
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets allocations.
     *
     * @return \Entpay\Mse\Client\Model\PrepaidTradeAllocationParamItem[]
     */
    public function getAllocations()
    {
        return $this->container['allocations'];
    }

    /**
     * Sets allocations.
     *
     * @param \Entpay\Mse\Client\Model\PrepaidTradeAllocationParamItem[] $allocations allocations
     *
     * @return self
     */
    public function setAllocations($allocations)
    {
        $this->container['allocations'] = $allocations;

        return $this;
    }

    /**
     * Gets goods.
     *
     * @return \Entpay\Mse\Client\Model\Goods[]
     */
    public function getGoods()
    {
        return $this->container['goods'];
    }

    /**
     * Sets goods.
     *
     * @param \Entpay\Mse\Client\Model\Goods[] $goods 商品信息
     *
     * @return self
     */
    public function setGoods($goods)
    {
        $this->container['goods'] = $goods;

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
