<?php
/**
 * PaymentRiskControl.
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
 * PaymentRiskControl Class Doc Comment.
 *
 * @category Class
 * @description 风控信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentRiskControl implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PaymentRiskControl';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'device_id'                       => 'string',
        'payer_client_ip'                 => 'string',
        'payer_ua'                        => 'string',
        'create_time'                     => '\DateTime',
        'pick_type'                       => '\Entpay\Mse\Client\Model\PickTypeEnum',
        'pick_description'                => 'string',
        'logistics_info'                  => '\Entpay\Mse\Client\Model\LogisticsInfo',
        'wx_openid'                       => 'string',
        'goods_type'                      => '\Entpay\Mse\Client\Model\GoodsTypeEnum',
        'operator_is_first_payment'       => 'bool',
        'operator_platform_register_time' => '\DateTime',
        'operator_level'                  => 'string',
        'operator_social_credit_code'     => 'string',
        'operator_history_total_amount'   => 'int',
        'operator_history_pay_count'      => 'int',
        'operator_lbs'                    => '\Entpay\Mse\Client\Model\LbsInfo',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'device_id'                       => null,
        'payer_client_ip'                 => null,
        'payer_ua'                        => null,
        'create_time'                     => 'date-time',
        'pick_type'                       => null,
        'pick_description'                => null,
        'logistics_info'                  => 'encrypted|true',
        'wx_openid'                       => null,
        'goods_type'                      => null,
        'operator_is_first_payment'       => null,
        'operator_platform_register_time' => 'date-time',
        'operator_level'                  => null,
        'operator_social_credit_code'     => null,
        'operator_history_total_amount'   => 'int64',
        'operator_history_pay_count'      => 'int64',
        'operator_lbs'                    => null,
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
        'device_id'                       => 'device_id',
        'payer_client_ip'                 => 'payer_client_ip',
        'payer_ua'                        => 'payer_ua',
        'create_time'                     => 'create_time',
        'pick_type'                       => 'pick_type',
        'pick_description'                => 'pick_description',
        'logistics_info'                  => 'logistics_info',
        'wx_openid'                       => 'wx_openid',
        'goods_type'                      => 'goods_type',
        'operator_is_first_payment'       => 'operator_is_first_payment',
        'operator_platform_register_time' => 'operator_platform_register_time',
        'operator_level'                  => 'operator_level',
        'operator_social_credit_code'     => 'operator_social_credit_code',
        'operator_history_total_amount'   => 'operator_history_total_amount',
        'operator_history_pay_count'      => 'operator_history_pay_count',
        'operator_lbs'                    => 'operator_lbs',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'device_id'                       => 'setDeviceId',
        'payer_client_ip'                 => 'setPayerClientIp',
        'payer_ua'                        => 'setPayerUa',
        'create_time'                     => 'setCreateTime',
        'pick_type'                       => 'setPickType',
        'pick_description'                => 'setPickDescription',
        'logistics_info'                  => 'setLogisticsInfo',
        'wx_openid'                       => 'setWxOpenid',
        'goods_type'                      => 'setGoodsType',
        'operator_is_first_payment'       => 'setOperatorIsFirstPayment',
        'operator_platform_register_time' => 'setOperatorPlatformRegisterTime',
        'operator_level'                  => 'setOperatorLevel',
        'operator_social_credit_code'     => 'setOperatorSocialCreditCode',
        'operator_history_total_amount'   => 'setOperatorHistoryTotalAmount',
        'operator_history_pay_count'      => 'setOperatorHistoryPayCount',
        'operator_lbs'                    => 'setOperatorLbs',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'device_id'                       => 'getDeviceId',
        'payer_client_ip'                 => 'getPayerClientIp',
        'payer_ua'                        => 'getPayerUa',
        'create_time'                     => 'getCreateTime',
        'pick_type'                       => 'getPickType',
        'pick_description'                => 'getPickDescription',
        'logistics_info'                  => 'getLogisticsInfo',
        'wx_openid'                       => 'getWxOpenid',
        'goods_type'                      => 'getGoodsType',
        'operator_is_first_payment'       => 'getOperatorIsFirstPayment',
        'operator_platform_register_time' => 'getOperatorPlatformRegisterTime',
        'operator_level'                  => 'getOperatorLevel',
        'operator_social_credit_code'     => 'getOperatorSocialCreditCode',
        'operator_history_total_amount'   => 'getOperatorHistoryTotalAmount',
        'operator_history_pay_count'      => 'getOperatorHistoryPayCount',
        'operator_lbs'                    => 'getOperatorLbs',
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
        $this->container['device_id']                       = isset($data['device_id']) ? $data['device_id'] : null;
        $this->container['payer_client_ip']                 = isset($data['payer_client_ip']) ? $data['payer_client_ip'] : null;
        $this->container['payer_ua']                        = isset($data['payer_ua']) ? $data['payer_ua'] : null;
        $this->container['create_time']                     = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['pick_type']                       = isset($data['pick_type']) ? $data['pick_type'] : null;
        $this->container['pick_description']                = isset($data['pick_description']) ? $data['pick_description'] : null;
        $this->container['logistics_info']                  = isset($data['logistics_info']) ? $data['logistics_info'] : null;
        $this->container['wx_openid']                       = isset($data['wx_openid']) ? $data['wx_openid'] : null;
        $this->container['goods_type']                      = isset($data['goods_type']) ? $data['goods_type'] : null;
        $this->container['operator_is_first_payment']       = isset($data['operator_is_first_payment']) ? $data['operator_is_first_payment'] : null;
        $this->container['operator_platform_register_time'] = isset($data['operator_platform_register_time']) ? $data['operator_platform_register_time'] : null;
        $this->container['operator_level']                  = isset($data['operator_level']) ? $data['operator_level'] : null;
        $this->container['operator_social_credit_code']     = isset($data['operator_social_credit_code']) ? $data['operator_social_credit_code'] : null;
        $this->container['operator_history_total_amount']   = isset($data['operator_history_total_amount']) ? $data['operator_history_total_amount'] : null;
        $this->container['operator_history_pay_count']      = isset($data['operator_history_pay_count']) ? $data['operator_history_pay_count'] : null;
        $this->container['operator_lbs']                    = isset($data['operator_lbs']) ? $data['operator_lbs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['device_id']) && (mb_strlen($this->container['device_id']) > 32)) {
            $invalidProperties[] = "invalid value for 'device_id', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['device_id']) && (mb_strlen($this->container['device_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'device_id', the character length must be bigger than or equal to 0.";
        }

        if (null === $this->container['payer_client_ip']) {
            $invalidProperties[] = "'payer_client_ip' can't be null";
        }
        if ((mb_strlen($this->container['payer_client_ip']) > 45)) {
            $invalidProperties[] = "invalid value for 'payer_client_ip', the character length must be smaller than or equal to 45.";
        }

        if ((mb_strlen($this->container['payer_client_ip']) < 1)) {
            $invalidProperties[] = "invalid value for 'payer_client_ip', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['payer_ua']) {
            $invalidProperties[] = "'payer_ua' can't be null";
        }
        if ((mb_strlen($this->container['payer_ua']) > 1000)) {
            $invalidProperties[] = "invalid value for 'payer_ua', the character length must be smaller than or equal to 1000.";
        }

        if ((mb_strlen($this->container['payer_ua']) < 1)) {
            $invalidProperties[] = "invalid value for 'payer_ua', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['pick_description']) && (mb_strlen($this->container['pick_description']) > 256)) {
            $invalidProperties[] = "invalid value for 'pick_description', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['pick_description']) && (mb_strlen($this->container['pick_description']) < 0)) {
            $invalidProperties[] = "invalid value for 'pick_description', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['wx_openid']) && (mb_strlen($this->container['wx_openid']) > 128)) {
            $invalidProperties[] = "invalid value for 'wx_openid', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['wx_openid']) && (mb_strlen($this->container['wx_openid']) < 1)) {
            $invalidProperties[] = "invalid value for 'wx_openid', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['operator_level']) && (mb_strlen($this->container['operator_level']) > 32)) {
            $invalidProperties[] = "invalid value for 'operator_level', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['operator_level']) && (mb_strlen($this->container['operator_level']) < 1)) {
            $invalidProperties[] = "invalid value for 'operator_level', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['operator_social_credit_code']) && (mb_strlen($this->container['operator_social_credit_code']) > 18)) {
            $invalidProperties[] = "invalid value for 'operator_social_credit_code', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['operator_social_credit_code']) && (mb_strlen($this->container['operator_social_credit_code']) < 18)) {
            $invalidProperties[] = "invalid value for 'operator_social_credit_code', the character length must be bigger than or equal to 18.";
        }

        if (!is_null($this->container['operator_social_credit_code']) && !preg_match('/^[A-Z0-9]+$/', $this->container['operator_social_credit_code'])) {
            $invalidProperties[] = "invalid value for 'operator_social_credit_code', must be conform to the pattern /^[A-Z0-9]+$/.";
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
     * Gets device_id.
     *
     * @return string|null
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id.
     *
     * @param string|null $device_id 设备号
     *
     * @return self
     */
    public function setDeviceId($device_id)
    {
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets payer_client_ip.
     *
     * @return string
     */
    public function getPayerClientIp()
    {
        return $this->container['payer_client_ip'];
    }

    /**
     * Sets payer_client_ip.
     *
     * @param string $payer_client_ip 用户终端IP
     *
     * @return self
     */
    public function setPayerClientIp($payer_client_ip)
    {
        $this->container['payer_client_ip'] = $payer_client_ip;

        return $this;
    }

    /**
     * Gets payer_ua.
     *
     * @return string
     */
    public function getPayerUa()
    {
        return $this->container['payer_ua'];
    }

    /**
     * Sets payer_ua.
     *
     * @param string $payer_ua 用户UA
     *
     * @return self
     */
    public function setPayerUa($payer_ua)
    {
        $this->container['payer_ua'] = $payer_ua;

        return $this;
    }

    /**
     * Gets create_time.
     *
     * @return \DateTime|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time.
     *
     * @param \DateTime|null $create_time 下单时间
     *
     * @return self
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets pick_type.
     *
     * @return \Entpay\Mse\Client\Model\PickTypeEnum|null
     */
    public function getPickType()
    {
        return $this->container['pick_type'];
    }

    /**
     * Sets pick_type.
     *
     * @param \Entpay\Mse\Client\Model\PickTypeEnum|null $pick_type pick_type
     *
     * @return self
     */
    public function setPickType($pick_type)
    {
        $this->container['pick_type'] = $pick_type;

        return $this;
    }

    /**
     * Gets pick_description.
     *
     * @return string|null
     */
    public function getPickDescription()
    {
        return $this->container['pick_description'];
    }

    /**
     * Sets pick_description.
     *
     * @param string|null $pick_description 提货描述
     *
     * @return self
     */
    public function setPickDescription($pick_description)
    {
        $this->container['pick_description'] = $pick_description;

        return $this;
    }

    /**
     * Gets logistics_info.
     *
     * @return \Entpay\Mse\Client\Model\LogisticsInfo|null
     */
    public function getLogisticsInfo()
    {
        return $this->container['logistics_info'];
    }

    /**
     * Sets logistics_info.
     *
     * @param \Entpay\Mse\Client\Model\LogisticsInfo|null $logistics_info logistics_info
     *
     * @return self
     */
    public function setLogisticsInfo($logistics_info)
    {
        $this->container['logistics_info'] = $logistics_info;

        return $this;
    }

    /**
     * Gets wx_openid.
     *
     * @return string|null
     */
    public function getWxOpenid()
    {
        return $this->container['wx_openid'];
    }

    /**
     * Sets wx_openid.
     *
     * @param string|null $wx_openid 微信openid
     *
     * @return self
     */
    public function setWxOpenid($wx_openid)
    {
        $this->container['wx_openid'] = $wx_openid;

        return $this;
    }

    /**
     * Gets goods_type.
     *
     * @return \Entpay\Mse\Client\Model\GoodsTypeEnum|null
     */
    public function getGoodsType()
    {
        return $this->container['goods_type'];
    }

    /**
     * Sets goods_type.
     *
     * @param \Entpay\Mse\Client\Model\GoodsTypeEnum|null $goods_type goods_type
     *
     * @return self
     */
    public function setGoodsType($goods_type)
    {
        $this->container['goods_type'] = $goods_type;

        return $this;
    }

    /**
     * Gets operator_is_first_payment.
     *
     * @return bool|null
     */
    public function getOperatorIsFirstPayment()
    {
        return $this->container['operator_is_first_payment'];
    }

    /**
     * Sets operator_is_first_payment.
     *
     * @param bool|null $operator_is_first_payment 付款方是否平台首次付款
     *
     * @return self
     */
    public function setOperatorIsFirstPayment($operator_is_first_payment)
    {
        $this->container['operator_is_first_payment'] = $operator_is_first_payment;

        return $this;
    }

    /**
     * Gets operator_platform_register_time.
     *
     * @return \DateTime|null
     */
    public function getOperatorPlatformRegisterTime()
    {
        return $this->container['operator_platform_register_time'];
    }

    /**
     * Sets operator_platform_register_time.
     *
     * @param \DateTime|null $operator_platform_register_time 付款方在平台注册时间
     *
     * @return self
     */
    public function setOperatorPlatformRegisterTime($operator_platform_register_time)
    {
        $this->container['operator_platform_register_time'] = $operator_platform_register_time;

        return $this;
    }

    /**
     * Gets operator_level.
     *
     * @return string|null
     */
    public function getOperatorLevel()
    {
        return $this->container['operator_level'];
    }

    /**
     * Sets operator_level.
     *
     * @param string|null $operator_level 付款方评级
     *
     * @return self
     */
    public function setOperatorLevel($operator_level)
    {
        $this->container['operator_level'] = $operator_level;

        return $this;
    }

    /**
     * Gets operator_social_credit_code.
     *
     * @return string|null
     */
    public function getOperatorSocialCreditCode()
    {
        return $this->container['operator_social_credit_code'];
    }

    /**
     * Sets operator_social_credit_code.
     *
     * @param string|null $operator_social_credit_code 付款方所代表企业的社会信用代码
     *
     * @return self
     */
    public function setOperatorSocialCreditCode($operator_social_credit_code)
    {
        $this->container['operator_social_credit_code'] = $operator_social_credit_code;

        return $this;
    }

    /**
     * Gets operator_history_total_amount.
     *
     * @return int|null
     */
    public function getOperatorHistoryTotalAmount()
    {
        return $this->container['operator_history_total_amount'];
    }

    /**
     * Sets operator_history_total_amount.
     *
     * @param int|null $operator_history_total_amount 付款方在平台历史交易金额
     *
     * @return self
     */
    public function setOperatorHistoryTotalAmount($operator_history_total_amount)
    {
        $this->container['operator_history_total_amount'] = $operator_history_total_amount;

        return $this;
    }

    /**
     * Gets operator_history_pay_count.
     *
     * @return int|null
     */
    public function getOperatorHistoryPayCount()
    {
        return $this->container['operator_history_pay_count'];
    }

    /**
     * Sets operator_history_pay_count.
     *
     * @param int|null $operator_history_pay_count 付款方在平台历史交易笔数
     *
     * @return self
     */
    public function setOperatorHistoryPayCount($operator_history_pay_count)
    {
        $this->container['operator_history_pay_count'] = $operator_history_pay_count;

        return $this;
    }

    /**
     * Gets operator_lbs.
     *
     * @return \Entpay\Mse\Client\Model\LbsInfo|null
     */
    public function getOperatorLbs()
    {
        return $this->container['operator_lbs'];
    }

    /**
     * Sets operator_lbs.
     *
     * @param \Entpay\Mse\Client\Model\LbsInfo|null $operator_lbs operator_lbs
     *
     * @return self
     */
    public function setOperatorLbs($operator_lbs)
    {
        $this->container['operator_lbs'] = $operator_lbs;

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
