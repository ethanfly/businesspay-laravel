<?php
/**
 * WithdrawTransfer.
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
 * WithdrawTransfer Class Doc Comment.
 *
 * @category Class
 * @description 提现调拨响应参数
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WithdrawTransfer implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'WithdrawTransfer';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'withdraw_transfer_id'     => 'string',
        'out_withdraw_transfer_id' => 'string',
        'ent_id'                   => 'string',
        'merchant_name'            => 'string',
        'amount'                   => 'int',
        'payee'                    => '\Entpay\Mse\Client\Model\WithdrawTransferPayeeRsp',
        'payer'                    => '\Entpay\Mse\Client\Model\WithdrawTransferPayerRsp',
        'desc'                     => 'string',
        'status'                   => 'string',
        'succeeded_time'           => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'withdraw_transfer_id'     => null,
        'out_withdraw_transfer_id' => null,
        'ent_id'                   => null,
        'merchant_name'            => null,
        'amount'                   => 'int64',
        'payee'                    => null,
        'payer'                    => null,
        'desc'                     => null,
        'status'                   => null,
        'succeeded_time'           => null,
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
        'withdraw_transfer_id'     => 'withdraw_transfer_id',
        'out_withdraw_transfer_id' => 'out_withdraw_transfer_id',
        'ent_id'                   => 'ent_id',
        'merchant_name'            => 'merchant_name',
        'amount'                   => 'amount',
        'payee'                    => 'payee',
        'payer'                    => 'payer',
        'desc'                     => 'desc',
        'status'                   => 'status',
        'succeeded_time'           => 'succeeded_time',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'withdraw_transfer_id'     => 'setWithdrawTransferId',
        'out_withdraw_transfer_id' => 'setOutWithdrawTransferId',
        'ent_id'                   => 'setEntId',
        'merchant_name'            => 'setMerchantName',
        'amount'                   => 'setAmount',
        'payee'                    => 'setPayee',
        'payer'                    => 'setPayer',
        'desc'                     => 'setDesc',
        'status'                   => 'setStatus',
        'succeeded_time'           => 'setSucceededTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'withdraw_transfer_id'     => 'getWithdrawTransferId',
        'out_withdraw_transfer_id' => 'getOutWithdrawTransferId',
        'ent_id'                   => 'getEntId',
        'merchant_name'            => 'getMerchantName',
        'amount'                   => 'getAmount',
        'payee'                    => 'getPayee',
        'payer'                    => 'getPayer',
        'desc'                     => 'getDesc',
        'status'                   => 'getStatus',
        'succeeded_time'           => 'getSucceededTime',
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

    const STATUS_INIT      = 'INIT';
    const STATUS_SUCCEEDED = 'SUCCEEDED';

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
        $this->container['withdraw_transfer_id']     = isset($data['withdraw_transfer_id']) ? $data['withdraw_transfer_id'] : null;
        $this->container['out_withdraw_transfer_id'] = isset($data['out_withdraw_transfer_id']) ? $data['out_withdraw_transfer_id'] : null;
        $this->container['ent_id']                   = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['merchant_name']            = isset($data['merchant_name']) ? $data['merchant_name'] : null;
        $this->container['amount']                   = isset($data['amount']) ? $data['amount'] : null;
        $this->container['payee']                    = isset($data['payee']) ? $data['payee'] : null;
        $this->container['payer']                    = isset($data['payer']) ? $data['payer'] : null;
        $this->container['desc']                     = isset($data['desc']) ? $data['desc'] : null;
        $this->container['status']                   = isset($data['status']) ? $data['status'] : null;
        $this->container['succeeded_time']           = isset($data['succeeded_time']) ? $data['succeeded_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['withdraw_transfer_id']) {
            $invalidProperties[] = "'withdraw_transfer_id' can't be null";
        }
        if ((mb_strlen($this->container['withdraw_transfer_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'withdraw_transfer_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['withdraw_transfer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'withdraw_transfer_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['out_withdraw_transfer_id']) {
            $invalidProperties[] = "'out_withdraw_transfer_id' can't be null";
        }
        if ((mb_strlen($this->container['out_withdraw_transfer_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'out_withdraw_transfer_id', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['out_withdraw_transfer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_withdraw_transfer_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['ent_id']) {
            $invalidProperties[] = "'ent_id' can't be null";
        }
        if ((mb_strlen($this->container['ent_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['ent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['merchant_name']) {
            $invalidProperties[] = "'merchant_name' can't be null";
        }
        if ((mb_strlen($this->container['merchant_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'merchant_name', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['merchant_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'merchant_name', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (null === $this->container['payee']) {
            $invalidProperties[] = "'payee' can't be null";
        }
        if (null === $this->container['payer']) {
            $invalidProperties[] = "'payer' can't be null";
        }
        if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 255)) {
            $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 1)) {
            $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['status']) {
            $invalidProperties[] = "'status' can't be null";
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
     * Gets withdraw_transfer_id.
     *
     * @return string
     */
    public function getWithdrawTransferId()
    {
        return $this->container['withdraw_transfer_id'];
    }

    /**
     * Sets withdraw_transfer_id.
     *
     * @param string $withdraw_transfer_id 微企付充值调拨单号
     *
     * @return self
     */
    public function setWithdrawTransferId($withdraw_transfer_id)
    {
        $this->container['withdraw_transfer_id'] = $withdraw_transfer_id;

        return $this;
    }

    /**
     * Gets out_withdraw_transfer_id.
     *
     * @return string
     */
    public function getOutWithdrawTransferId()
    {
        return $this->container['out_withdraw_transfer_id'];
    }

    /**
     * Sets out_withdraw_transfer_id.
     *
     * @param string $out_withdraw_transfer_id 平台充值调拨单号
     *
     * @return self
     */
    public function setOutWithdrawTransferId($out_withdraw_transfer_id)
    {
        $this->container['out_withdraw_transfer_id'] = $out_withdraw_transfer_id;

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
     * Gets payee.
     *
     * @return \Entpay\Mse\Client\Model\WithdrawTransferPayeeRsp
     */
    public function getPayee()
    {
        return $this->container['payee'];
    }

    /**
     * Sets payee.
     *
     * @param \Entpay\Mse\Client\Model\WithdrawTransferPayeeRsp $payee payee
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
     * @return \Entpay\Mse\Client\Model\WithdrawTransferPayerRsp
     */
    public function getPayer()
    {
        return $this->container['payer'];
    }

    /**
     * Sets payer.
     *
     * @param \Entpay\Mse\Client\Model\WithdrawTransferPayerRsp $payer payer
     *
     * @return self
     */
    public function setPayer($payer)
    {
        $this->container['payer'] = $payer;

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
     * @param string|null $desc 描述信息
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

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
     * @param string $status 提现调拨状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param string|null $succeeded_time 提现调拨成功时间
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
