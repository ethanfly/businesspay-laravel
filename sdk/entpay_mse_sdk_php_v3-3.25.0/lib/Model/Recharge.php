<?php
/**
 * Recharge.
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
 * Recharge Class Doc Comment.
 *
 * @category Class
 * @description 充值响应参数
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Recharge implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Recharge';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'recharge_id'     => 'string',
        'out_recharge_id' => 'string',
        'amount'          => 'int',
        'currency'        => '\Entpay\Mse\Client\Model\CurrencyEnum',
        'payee'           => '\Entpay\Mse\Client\Model\PrepaidCardRechargePayeeRsp',
        'payer'           => '\Entpay\Mse\Client\Model\PrepaidCardRechargePayerRsp',
        'memo'            => 'string',
        'attachment'      => 'string',
        'recharge_status' => 'string',
        'succeeded_time'  => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'recharge_id'     => null,
        'out_recharge_id' => null,
        'amount'          => 'int64',
        'currency'        => null,
        'payee'           => 'decrypted|true',
        'payer'           => null,
        'memo'            => null,
        'attachment'      => null,
        'recharge_status' => null,
        'succeeded_time'  => null,
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
        'recharge_id'     => 'recharge_id',
        'out_recharge_id' => 'out_recharge_id',
        'amount'          => 'amount',
        'currency'        => 'currency',
        'payee'           => 'payee',
        'payer'           => 'payer',
        'memo'            => 'memo',
        'attachment'      => 'attachment',
        'recharge_status' => 'recharge_status',
        'succeeded_time'  => 'succeeded_time',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'recharge_id'     => 'setRechargeId',
        'out_recharge_id' => 'setOutRechargeId',
        'amount'          => 'setAmount',
        'currency'        => 'setCurrency',
        'payee'           => 'setPayee',
        'payer'           => 'setPayer',
        'memo'            => 'setMemo',
        'attachment'      => 'setAttachment',
        'recharge_status' => 'setRechargeStatus',
        'succeeded_time'  => 'setSucceededTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'recharge_id'     => 'getRechargeId',
        'out_recharge_id' => 'getOutRechargeId',
        'amount'          => 'getAmount',
        'currency'        => 'getCurrency',
        'payee'           => 'getPayee',
        'payer'           => 'getPayer',
        'memo'            => 'getMemo',
        'attachment'      => 'getAttachment',
        'recharge_status' => 'getRechargeStatus',
        'succeeded_time'  => 'getSucceededTime',
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

    const RECHARGE_STATUS_PROCESSING    = 'PROCESSING';
    const RECHARGE_STATUS_BANK_ACCEPTED = 'BANK_ACCEPTED';
    const RECHARGE_STATUS_SUCCEEDED     = 'SUCCEEDED';
    const RECHARGE_STATUS_CLEARING      = 'CLEARING';
    const RECHARGE_STATUS_REVOKED       = 'REVOKED';
    const RECHARGE_STATUS_CLOSED        = 'CLOSED';

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
        $this->container['recharge_id']     = isset($data['recharge_id']) ? $data['recharge_id'] : null;
        $this->container['out_recharge_id'] = isset($data['out_recharge_id']) ? $data['out_recharge_id'] : null;
        $this->container['amount']          = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency']        = isset($data['currency']) ? $data['currency'] : null;
        $this->container['payee']           = isset($data['payee']) ? $data['payee'] : null;
        $this->container['payer']           = isset($data['payer']) ? $data['payer'] : null;
        $this->container['memo']            = isset($data['memo']) ? $data['memo'] : null;
        $this->container['attachment']      = isset($data['attachment']) ? $data['attachment'] : null;
        $this->container['recharge_status'] = isset($data['recharge_status']) ? $data['recharge_status'] : null;
        $this->container['succeeded_time']  = isset($data['succeeded_time']) ? $data['succeeded_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['recharge_id']) {
            $invalidProperties[] = "'recharge_id' can't be null";
        }
        if ((mb_strlen($this->container['recharge_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'recharge_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['recharge_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'recharge_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['out_recharge_id']) {
            $invalidProperties[] = "'out_recharge_id' can't be null";
        }
        if ((mb_strlen($this->container['out_recharge_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'out_recharge_id', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['out_recharge_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_recharge_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (null === $this->container['currency']) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if (null === $this->container['payee']) {
            $invalidProperties[] = "'payee' can't be null";
        }
        if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) > 128)) {
            $invalidProperties[] = "invalid value for 'memo', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) < 0)) {
            $invalidProperties[] = "invalid value for 'memo', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['attachment']) && (mb_strlen($this->container['attachment']) > 255)) {
            $invalidProperties[] = "invalid value for 'attachment', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['attachment']) && (mb_strlen($this->container['attachment']) < 1)) {
            $invalidProperties[] = "invalid value for 'attachment', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['recharge_status']) {
            $invalidProperties[] = "'recharge_status' can't be null";
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
     * Gets recharge_id.
     *
     * @return string
     */
    public function getRechargeId()
    {
        return $this->container['recharge_id'];
    }

    /**
     * Sets recharge_id.
     *
     * @param string $recharge_id 微企付充值单号
     *
     * @return self
     */
    public function setRechargeId($recharge_id)
    {
        $this->container['recharge_id'] = $recharge_id;

        return $this;
    }

    /**
     * Gets out_recharge_id.
     *
     * @return string
     */
    public function getOutRechargeId()
    {
        return $this->container['out_recharge_id'];
    }

    /**
     * Sets out_recharge_id.
     *
     * @param string $out_recharge_id 平台支付单号
     *
     * @return self
     */
    public function setOutRechargeId($out_recharge_id)
    {
        $this->container['out_recharge_id'] = $out_recharge_id;

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
     * @param int $amount 下单金额
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
     * Gets payee.
     *
     * @return \Entpay\Mse\Client\Model\PrepaidCardRechargePayeeRsp
     */
    public function getPayee()
    {
        return $this->container['payee'];
    }

    /**
     * Sets payee.
     *
     * @param \Entpay\Mse\Client\Model\PrepaidCardRechargePayeeRsp $payee payee
     *
     * @return self
     */
    public function setPayee($payee)
    {
        $this->container['payee'] = $payee;

        return $this;
    }

    /**
     * Gets payer.
     *
     * @return \Entpay\Mse\Client\Model\PrepaidCardRechargePayerRsp|null
     */
    public function getPayer()
    {
        return $this->container['payer'];
    }

    /**
     * Sets payer.
     *
     * @param \Entpay\Mse\Client\Model\PrepaidCardRechargePayerRsp|null $payer payer
     *
     * @return self
     */
    public function setPayer($payer)
    {
        $this->container['payer'] = $payer;

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
     * Gets recharge_status.
     *
     * @return string
     */
    public function getRechargeStatus()
    {
        return $this->container['recharge_status'];
    }

    /**
     * Sets recharge_status.
     *
     * @param string $recharge_status 充值状态
     *
     * @return self
     */
    public function setRechargeStatus($recharge_status)
    {
        $this->container['recharge_status'] = $recharge_status;

        return $this;
    }

    /**
     * Gets succeeded_time.
     *
     * @return string|null
     */
    public function getSucceededTime()
    {
        return $this->container['succeeded_time'];
    }

    /**
     * Sets succeeded_time.
     *
     * @param string|null $succeeded_time 充值成功时间
     *
     * @return self
     */
    public function setSucceededTime($succeeded_time)
    {
        $this->container['succeeded_time'] = $succeeded_time;

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
