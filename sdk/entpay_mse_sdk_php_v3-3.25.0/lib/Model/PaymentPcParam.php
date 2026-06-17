<?php
/**
 * PaymentPcParam.
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
 * PaymentPcParam Class Doc Comment.
 *
 * @category Class
 * @description pc支付下单请求参数
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentPcParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PaymentPcParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_payment_id'         => 'string',
        'amount'                 => 'int',
        'currency'               => '\Entpay\Mse\Client\Model\CurrencyEnum',
        'expire_time'            => '\DateTime',
        'payee'                  => '\Entpay\Mse\Client\Model\PaymentPayee',
        'memo'                   => 'string',
        'goods'                  => '\Entpay\Mse\Client\Model\Goods[]',
        'attachment'             => 'string',
        'risk_control'           => '\Entpay\Mse\Client\Model\PaymentRiskControl',
        'notify_url'             => '\Entpay\Mse\Client\Model\PaymentNotifyUrl',
        'scene_info'             => '\Entpay\Mse\Client\Model\SceneInfo',
        'profit_allocation_flag' => '\Entpay\Mse\Client\Model\ProfitAllocationFlagEnum',
        'channel_options'        => '\Entpay\Mse\Client\Model\ChannelOptions',
        'payer_options'          => '\Entpay\Mse\Client\Model\PayerInfo[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'out_payment_id'         => null,
        'amount'                 => 'int64',
        'currency'               => null,
        'expire_time'            => 'date-time',
        'payee'                  => 'encrypted|true',
        'memo'                   => null,
        'goods'                  => null,
        'attachment'             => null,
        'risk_control'           => 'encrypted|true',
        'notify_url'             => null,
        'scene_info'             => null,
        'profit_allocation_flag' => null,
        'channel_options'        => null,
        'payer_options'          => 'encrypted|true',
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
        'out_payment_id'         => 'out_payment_id',
        'amount'                 => 'amount',
        'currency'               => 'currency',
        'expire_time'            => 'expire_time',
        'payee'                  => 'payee',
        'memo'                   => 'memo',
        'goods'                  => 'goods',
        'attachment'             => 'attachment',
        'risk_control'           => 'risk_control',
        'notify_url'             => 'notify_url',
        'scene_info'             => 'scene_info',
        'profit_allocation_flag' => 'profit_allocation_flag',
        'channel_options'        => 'channel_options',
        'payer_options'          => 'payer_options',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'out_payment_id'         => 'setOutPaymentId',
        'amount'                 => 'setAmount',
        'currency'               => 'setCurrency',
        'expire_time'            => 'setExpireTime',
        'payee'                  => 'setPayee',
        'memo'                   => 'setMemo',
        'goods'                  => 'setGoods',
        'attachment'             => 'setAttachment',
        'risk_control'           => 'setRiskControl',
        'notify_url'             => 'setNotifyUrl',
        'scene_info'             => 'setSceneInfo',
        'profit_allocation_flag' => 'setProfitAllocationFlag',
        'channel_options'        => 'setChannelOptions',
        'payer_options'          => 'setPayerOptions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'out_payment_id'         => 'getOutPaymentId',
        'amount'                 => 'getAmount',
        'currency'               => 'getCurrency',
        'expire_time'            => 'getExpireTime',
        'payee'                  => 'getPayee',
        'memo'                   => 'getMemo',
        'goods'                  => 'getGoods',
        'attachment'             => 'getAttachment',
        'risk_control'           => 'getRiskControl',
        'notify_url'             => 'getNotifyUrl',
        'scene_info'             => 'getSceneInfo',
        'profit_allocation_flag' => 'getProfitAllocationFlag',
        'channel_options'        => 'getChannelOptions',
        'payer_options'          => 'getPayerOptions',
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
        $this->container['out_payment_id']         = isset($data['out_payment_id']) ? $data['out_payment_id'] : null;
        $this->container['amount']                 = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency']               = isset($data['currency']) ? $data['currency'] : null;
        $this->container['expire_time']            = isset($data['expire_time']) ? $data['expire_time'] : null;
        $this->container['payee']                  = isset($data['payee']) ? $data['payee'] : null;
        $this->container['memo']                   = isset($data['memo']) ? $data['memo'] : null;
        $this->container['goods']                  = isset($data['goods']) ? $data['goods'] : null;
        $this->container['attachment']             = isset($data['attachment']) ? $data['attachment'] : null;
        $this->container['risk_control']           = isset($data['risk_control']) ? $data['risk_control'] : null;
        $this->container['notify_url']             = isset($data['notify_url']) ? $data['notify_url'] : null;
        $this->container['scene_info']             = isset($data['scene_info']) ? $data['scene_info'] : null;
        $this->container['profit_allocation_flag'] = isset($data['profit_allocation_flag']) ? $data['profit_allocation_flag'] : null;
        $this->container['channel_options']        = isset($data['channel_options']) ? $data['channel_options'] : null;
        $this->container['payer_options']          = isset($data['payer_options']) ? $data['payer_options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['out_payment_id']) {
            $invalidProperties[] = "'out_payment_id' can't be null";
        }
        if ((mb_strlen($this->container['out_payment_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_payment_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_payment_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_payment_id', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match('/^(\\w|-)+$/', $this->container['out_payment_id'])) {
            $invalidProperties[] = "invalid value for 'out_payment_id', must be conform to the pattern /^(\\w|-)+$/.";
        }

        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (null === $this->container['currency']) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if (null === $this->container['expire_time']) {
            $invalidProperties[] = "'expire_time' can't be null";
        }
        if (null === $this->container['payee']) {
            $invalidProperties[] = "'payee' can't be null";
        }
        if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) > 128)) {
            $invalidProperties[] = "invalid value for 'memo', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) < 1)) {
            $invalidProperties[] = "invalid value for 'memo', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['attachment']) && (mb_strlen($this->container['attachment']) > 256)) {
            $invalidProperties[] = "invalid value for 'attachment', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['attachment']) && (mb_strlen($this->container['attachment']) < 1)) {
            $invalidProperties[] = "invalid value for 'attachment', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['notify_url']) {
            $invalidProperties[] = "'notify_url' can't be null";
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
     * @param string $out_payment_id 平台支付单号
     *
     * @return self
     */
    public function setOutPaymentId($out_payment_id)
    {
        $this->container['out_payment_id'] = $out_payment_id;

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
     * @param int $amount 支付金额
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency.
     *
     * @return \Entpay\Mse\Client\Model\CurrencyEnum
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency.
     *
     * @param \Entpay\Mse\Client\Model\CurrencyEnum $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets expire_time.
     *
     * @return \DateTime
     */
    public function getExpireTime()
    {
        return $this->container['expire_time'];
    }

    /**
     * Sets expire_time.
     *
     * @param \DateTime $expire_time 过期时间
     *
     * @return self
     */
    public function setExpireTime($expire_time)
    {
        $this->container['expire_time'] = $expire_time;

        return $this;
    }

    /**
     * Gets payee.
     *
     * @return \Entpay\Mse\Client\Model\PaymentPayee
     */
    public function getPayee()
    {
        return $this->container['payee'];
    }

    /**
     * Sets payee.
     *
     * @param \Entpay\Mse\Client\Model\PaymentPayee $payee payee
     *
     * @return self
     */
    public function setPayee($payee)
    {
        $this->container['payee'] = $payee;

        return $this;
    }

    /**
     * Gets memo.
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo.
     *
     * @param string|null $memo 附言
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets goods.
     *
     * @return \Entpay\Mse\Client\Model\Goods[]|null
     */
    public function getGoods()
    {
        return $this->container['goods'];
    }

    /**
     * Sets goods.
     *
     * @param \Entpay\Mse\Client\Model\Goods[]|null $goods 商品信息
     *
     * @return self
     */
    public function setGoods($goods)
    {
        $this->container['goods'] = $goods;

        return $this;
    }

    /**
     * Gets attachment.
     *
     * @return string|null
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment.
     *
     * @param string|null $attachment 订单附加信息
     *
     * @return self
     */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;

        return $this;
    }

    /**
     * Gets risk_control.
     *
     * @return \Entpay\Mse\Client\Model\PaymentRiskControl|null
     */
    public function getRiskControl()
    {
        return $this->container['risk_control'];
    }

    /**
     * Sets risk_control.
     *
     * @param \Entpay\Mse\Client\Model\PaymentRiskControl|null $risk_control risk_control
     *
     * @return self
     */
    public function setRiskControl($risk_control)
    {
        $this->container['risk_control'] = $risk_control;

        return $this;
    }

    /**
     * Gets notify_url.
     *
     * @return \Entpay\Mse\Client\Model\PaymentNotifyUrl
     */
    public function getNotifyUrl()
    {
        return $this->container['notify_url'];
    }

    /**
     * Sets notify_url.
     *
     * @param \Entpay\Mse\Client\Model\PaymentNotifyUrl $notify_url notify_url
     *
     * @return self
     */
    public function setNotifyUrl($notify_url)
    {
        $this->container['notify_url'] = $notify_url;

        return $this;
    }

    /**
     * Gets scene_info.
     *
     * @return \Entpay\Mse\Client\Model\SceneInfo|null
     */
    public function getSceneInfo()
    {
        return $this->container['scene_info'];
    }

    /**
     * Sets scene_info.
     *
     * @param \Entpay\Mse\Client\Model\SceneInfo|null $scene_info scene_info
     *
     * @return self
     */
    public function setSceneInfo($scene_info)
    {
        $this->container['scene_info'] = $scene_info;

        return $this;
    }

    /**
     * Gets profit_allocation_flag.
     *
     * @return \Entpay\Mse\Client\Model\ProfitAllocationFlagEnum|null
     */
    public function getProfitAllocationFlag()
    {
        return $this->container['profit_allocation_flag'];
    }

    /**
     * Sets profit_allocation_flag.
     *
     * @param \Entpay\Mse\Client\Model\ProfitAllocationFlagEnum|null $profit_allocation_flag profit_allocation_flag
     *
     * @return self
     */
    public function setProfitAllocationFlag($profit_allocation_flag)
    {
        $this->container['profit_allocation_flag'] = $profit_allocation_flag;

        return $this;
    }

    /**
     * Gets channel_options.
     *
     * @return \Entpay\Mse\Client\Model\ChannelOptions|null
     */
    public function getChannelOptions()
    {
        return $this->container['channel_options'];
    }

    /**
     * Sets channel_options.
     *
     * @param \Entpay\Mse\Client\Model\ChannelOptions|null $channel_options channel_options
     *
     * @return self
     */
    public function setChannelOptions($channel_options)
    {
        $this->container['channel_options'] = $channel_options;

        return $this;
    }

    /**
     * Gets payer_options.
     *
     * @return \Entpay\Mse\Client\Model\PayerInfo[]|null
     */
    public function getPayerOptions()
    {
        return $this->container['payer_options'];
    }

    /**
     * Sets payer_options.
     *
     * @param \Entpay\Mse\Client\Model\PayerInfo[]|null $payer_options 指定付款方信息列表
     *
     * @return self
     */
    public function setPayerOptions($payer_options)
    {
        $this->container['payer_options'] = $payer_options;

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
