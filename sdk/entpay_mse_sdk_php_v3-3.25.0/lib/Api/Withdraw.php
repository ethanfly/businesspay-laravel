<?php
/**
 * Withdraw.
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
 * Withdraw Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class Withdraw implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Withdraw';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'withdraw_id'       => 'string',
        'out_withdraw_id'   => 'string',
        'amount'            => 'int',
        'status'            => 'string',
        'succeeded_time'    => '\DateTime',
        'failed_reason'     => '\Entpay\Mse\Client\Model\WithdrawFailReason',
        'total_balance'     => 'int',
        'available_balance' => 'int',
        'pending_amount'    => 'int',
        'unsplit_amount'    => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'withdraw_id'       => null,
        'out_withdraw_id'   => null,
        'amount'            => 'int64',
        'status'            => null,
        'succeeded_time'    => 'date-time',
        'failed_reason'     => null,
        'total_balance'     => 'int64',
        'available_balance' => 'int64',
        'pending_amount'    => 'int64',
        'unsplit_amount'    => 'int64',
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
        'withdraw_id'       => 'withdraw_id',
        'out_withdraw_id'   => 'out_withdraw_id',
        'amount'            => 'amount',
        'status'            => 'status',
        'succeeded_time'    => 'succeeded_time',
        'failed_reason'     => 'failed_reason',
        'total_balance'     => 'total_balance',
        'available_balance' => 'available_balance',
        'pending_amount'    => 'pending_amount',
        'unsplit_amount'    => 'unsplit_amount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'withdraw_id'       => 'setWithdrawId',
        'out_withdraw_id'   => 'setOutWithdrawId',
        'amount'            => 'setAmount',
        'status'            => 'setStatus',
        'succeeded_time'    => 'setSucceededTime',
        'failed_reason'     => 'setFailedReason',
        'total_balance'     => 'setTotalBalance',
        'available_balance' => 'setAvailableBalance',
        'pending_amount'    => 'setPendingAmount',
        'unsplit_amount'    => 'setUnsplitAmount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'withdraw_id'       => 'getWithdrawId',
        'out_withdraw_id'   => 'getOutWithdrawId',
        'amount'            => 'getAmount',
        'status'            => 'getStatus',
        'succeeded_time'    => 'getSucceededTime',
        'failed_reason'     => 'getFailedReason',
        'total_balance'     => 'getTotalBalance',
        'available_balance' => 'getAvailableBalance',
        'pending_amount'    => 'getPendingAmount',
        'unsplit_amount'    => 'getUnsplitAmount',
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
    const STATUS_SUCCEEDED  = 'SUCCEEDED';
    const STATUS_FAILED     = 'FAILED';

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
        $this->container['withdraw_id']       = isset($data['withdraw_id']) ? $data['withdraw_id'] : null;
        $this->container['out_withdraw_id']   = isset($data['out_withdraw_id']) ? $data['out_withdraw_id'] : null;
        $this->container['amount']            = isset($data['amount']) ? $data['amount'] : null;
        $this->container['status']            = isset($data['status']) ? $data['status'] : null;
        $this->container['succeeded_time']    = isset($data['succeeded_time']) ? $data['succeeded_time'] : null;
        $this->container['failed_reason']     = isset($data['failed_reason']) ? $data['failed_reason'] : null;
        $this->container['total_balance']     = isset($data['total_balance']) ? $data['total_balance'] : null;
        $this->container['available_balance'] = isset($data['available_balance']) ? $data['available_balance'] : null;
        $this->container['pending_amount']    = isset($data['pending_amount']) ? $data['pending_amount'] : null;
        $this->container['unsplit_amount']    = isset($data['unsplit_amount']) ? $data['unsplit_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets withdraw_id.
     *
     * @return string|null
     */
    public function getWithdrawId()
    {
        return $this->container['withdraw_id'];
    }

    /**
     * Sets withdraw_id.
     *
     * @param string|null $withdraw_id 微企付提现单号
     *
     * @return self
     */
    public function setWithdrawId($withdraw_id)
    {
        $this->container['withdraw_id'] = $withdraw_id;

        return $this;
    }

    /**
     * Gets out_withdraw_id.
     *
     * @return string|null
     */
    public function getOutWithdrawId()
    {
        return $this->container['out_withdraw_id'];
    }

    /**
     * Sets out_withdraw_id.
     *
     * @param string|null $out_withdraw_id 平台提现单号
     *
     * @return self
     */
    public function setOutWithdrawId($out_withdraw_id)
    {
        $this->container['out_withdraw_id'] = $out_withdraw_id;

        return $this;
    }

    /**
     * Gets amount.
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount.
     *
     * @param int|null $amount 提现金额
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * @param string|null $status 提现状态
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
     * @return \DateTime|null
     */
    public function getSucceededTime()
    {
        return $this->container['succeeded_time'];
    }

    /**
     * Sets succeeded_time.
     *
     * @param \DateTime|null $succeeded_time 提现成功时间
     *
     * @return self
     */
    public function setSucceededTime($succeeded_time)
    {
        $this->container['succeeded_time'] = $succeeded_time;

        return $this;
    }

    /**
     * Gets failed_reason.
     *
     * @return \Entpay\Mse\Client\Model\WithdrawFailReason|null
     */
    public function getFailedReason()
    {
        return $this->container['failed_reason'];
    }

    /**
     * Sets failed_reason.
     *
     * @param \Entpay\Mse\Client\Model\WithdrawFailReason|null $failed_reason failed_reason
     *
     * @return self
     */
    public function setFailedReason($failed_reason)
    {
        $this->container['failed_reason'] = $failed_reason;

        return $this;
    }

    /**
     * Gets total_balance.
     *
     * @return int|null
     */
    public function getTotalBalance()
    {
        return $this->container['total_balance'];
    }

    /**
     * Sets total_balance.
     *
     * @param int|null $total_balance 总金额
     *
     * @return self
     */
    public function setTotalBalance($total_balance)
    {
        $this->container['total_balance'] = $total_balance;

        return $this;
    }

    /**
     * Gets available_balance.
     *
     * @return int|null
     */
    public function getAvailableBalance()
    {
        return $this->container['available_balance'];
    }

    /**
     * Sets available_balance.
     *
     * @param int|null $available_balance 可提现余额
     *
     * @return self
     */
    public function setAvailableBalance($available_balance)
    {
        $this->container['available_balance'] = $available_balance;

        return $this;
    }

    /**
     * Gets pending_amount.
     *
     * @return int|null
     */
    public function getPendingAmount()
    {
        return $this->container['pending_amount'];
    }

    /**
     * Sets pending_amount.
     *
     * @param int|null $pending_amount 不可提现余额
     *
     * @return self
     */
    public function setPendingAmount($pending_amount)
    {
        $this->container['pending_amount'] = $pending_amount;

        return $this;
    }

    /**
     * Gets unsplit_amount.
     *
     * @return int|null
     */
    public function getUnsplitAmount()
    {
        return $this->container['unsplit_amount'];
    }

    /**
     * Sets unsplit_amount.
     *
     * @param int|null $unsplit_amount 待分账余额
     *
     * @return self
     */
    public function setUnsplitAmount($unsplit_amount)
    {
        $this->container['unsplit_amount'] = $unsplit_amount;

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
     * @param \Entpay\Mse\Client\Model\WithdrawParam   $withdraw_param  (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return Withdraw
     */
    public static function create($withdraw_param, $request_options = null)
    {
        $path = '/v3/mse-pay/withdraws';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $withdraw_param,
            Withdraw::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieve'.
     *
     * @param string                                   $withdraw_id     (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return Withdraw
     */
    public static function retrieve($withdraw_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/withdraws/%s', urlencode($withdraw_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            Withdraw::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveBalance'.
     *
     * @param \Entpay\Mse\Client\Model\RetrieveBalanceGetParam $param           (optional)
     * @param \Entpay\Mse\Client\Config\RequestOptions         $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return Withdraw
     */
    public static function retrieveBalance($param = null, $request_options = null)
    {
        $path = '/v3/mse-pay/withdraws/amounts';
        if (null != $param) {
            $path = $path . '?' . http_build_query($param->container);
        }

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            Withdraw::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveByOutWithdrawId'.
     *
     * @param string                                   $out_withdraw_id (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return Withdraw
     */
    public static function retrieveByOutWithdrawId($out_withdraw_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/withdraws/out-withdraw-id/%s', urlencode($out_withdraw_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            Withdraw::class,
            $request_options
        );
    }
}
