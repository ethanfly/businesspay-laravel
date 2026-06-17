<?php
/**
 * Deposit.
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
use Entpay\Mse\Client\Model\DepositList;
use Entpay\Mse\Client\Model\ModelInterface;
use Entpay\Mse\Client\ObjectSerializer;
use JsonSerializable;

/**
 * Deposit Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class Deposit implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Deposit';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'deposit_id'      => 'string',
        'amount'          => 'int',
        'deposit_time'    => '\DateTime',
        'status'          => 'string',
        'deposit_channel' => '\Entpay\Mse\Client\Model\DepositChannleTypeEnum',
        'remark'          => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'deposit_id'      => null,
        'amount'          => 'int64',
        'deposit_time'    => 'date-time',
        'status'          => null,
        'deposit_channel' => null,
        'remark'          => null,
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
        'deposit_id'      => 'deposit_id',
        'amount'          => 'amount',
        'deposit_time'    => 'deposit_time',
        'status'          => 'status',
        'deposit_channel' => 'deposit_channel',
        'remark'          => 'remark',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'deposit_id'      => 'setDepositId',
        'amount'          => 'setAmount',
        'deposit_time'    => 'setDepositTime',
        'status'          => 'setStatus',
        'deposit_channel' => 'setDepositChannel',
        'remark'          => 'setRemark',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'deposit_id'      => 'getDepositId',
        'amount'          => 'getAmount',
        'deposit_time'    => 'getDepositTime',
        'status'          => 'getStatus',
        'deposit_channel' => 'getDepositChannel',
        'remark'          => 'getRemark',
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
        $this->container['deposit_id']      = isset($data['deposit_id']) ? $data['deposit_id'] : null;
        $this->container['amount']          = isset($data['amount']) ? $data['amount'] : null;
        $this->container['deposit_time']    = isset($data['deposit_time']) ? $data['deposit_time'] : null;
        $this->container['status']          = isset($data['status']) ? $data['status'] : null;
        $this->container['deposit_channel'] = isset($data['deposit_channel']) ? $data['deposit_channel'] : null;
        $this->container['remark']          = isset($data['remark']) ? $data['remark'] : null;
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
     * @param int|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets deposit_time.
     *
     * @return \DateTime|null
     */
    public function getDepositTime()
    {
        return $this->container['deposit_time'];
    }

    /**
     * Sets deposit_time.
     *
     * @param \DateTime|null $deposit_time deposit_time
     *
     * @return self
     */
    public function setDepositTime($deposit_time)
    {
        $this->container['deposit_time'] = $deposit_time;

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
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets deposit_channel.
     *
     * @return \Entpay\Mse\Client\Model\DepositChannleTypeEnum|null
     */
    public function getDepositChannel()
    {
        return $this->container['deposit_channel'];
    }

    /**
     * Sets deposit_channel.
     *
     * @param \Entpay\Mse\Client\Model\DepositChannleTypeEnum|null $deposit_channel deposit_channel
     *
     * @return self
     */
    public function setDepositChannel($deposit_channel)
    {
        $this->container['deposit_channel'] = $deposit_channel;

        return $this;
    }

    /**
     * Gets remark.
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark.
     *
     * @param string|null $remark remark
     *
     * @return self
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

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
     * Create request for operation 'retrieve'.
     *
     * @param string                                   $deposit_id      (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return Deposit
     */
    public static function retrieve($deposit_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/deposits/%s', urlencode($deposit_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            Deposit::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveList'.
     *
     * @param \Entpay\Mse\Client\Model\RetrieveListGetParam $param           (optional)
     * @param \Entpay\Mse\Client\Config\RequestOptions      $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return DepositList
     */
    public static function retrieveList($param = null, $request_options = null)
    {
        $path = '/v3/mse-pay/deposits';
        if (null != $param) {
            $path = $path . '?' . http_build_query($param->container);
        }

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            DepositList::class,
            $request_options
        );
    }
}
