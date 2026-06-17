<?php
/**
 * AllocationParam.
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
 * AllocationParam Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AllocationParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'AllocationParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_allocation_detail_id' => 'string',
        'receiver_acct_id'         => 'string',
        'merchant_name'            => 'string',
        'amount'                   => 'int',
        'scenario'                 => '\Entpay\Mse\Client\Model\ScenarioEnum',
        'detail'                   => 'string',
        'desc'                     => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'out_allocation_detail_id' => null,
        'receiver_acct_id'         => null,
        'merchant_name'            => null,
        'amount'                   => 'int64',
        'scenario'                 => null,
        'detail'                   => null,
        'desc'                     => null,
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
        'out_allocation_detail_id' => 'out_allocation_detail_id',
        'receiver_acct_id'         => 'receiver_acct_id',
        'merchant_name'            => 'merchant_name',
        'amount'                   => 'amount',
        'scenario'                 => 'scenario',
        'detail'                   => 'detail',
        'desc'                     => 'desc',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'out_allocation_detail_id' => 'setOutAllocationDetailId',
        'receiver_acct_id'         => 'setReceiverAcctId',
        'merchant_name'            => 'setMerchantName',
        'amount'                   => 'setAmount',
        'scenario'                 => 'setScenario',
        'detail'                   => 'setDetail',
        'desc'                     => 'setDesc',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'out_allocation_detail_id' => 'getOutAllocationDetailId',
        'receiver_acct_id'         => 'getReceiverAcctId',
        'merchant_name'            => 'getMerchantName',
        'amount'                   => 'getAmount',
        'scenario'                 => 'getScenario',
        'detail'                   => 'getDetail',
        'desc'                     => 'getDesc',
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
        $this->container['out_allocation_detail_id'] = isset($data['out_allocation_detail_id']) ? $data['out_allocation_detail_id'] : null;
        $this->container['receiver_acct_id']         = isset($data['receiver_acct_id']) ? $data['receiver_acct_id'] : null;
        $this->container['merchant_name']            = isset($data['merchant_name']) ? $data['merchant_name'] : null;
        $this->container['amount']                   = isset($data['amount']) ? $data['amount'] : null;
        $this->container['scenario']                 = isset($data['scenario']) ? $data['scenario'] : null;
        $this->container['detail']                   = isset($data['detail']) ? $data['detail'] : null;
        $this->container['desc']                     = isset($data['desc']) ? $data['desc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['out_allocation_detail_id']) {
            $invalidProperties[] = "'out_allocation_detail_id' can't be null";
        }
        if ((mb_strlen($this->container['out_allocation_detail_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_allocation_detail_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_allocation_detail_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_allocation_detail_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['receiver_acct_id']) {
            $invalidProperties[] = "'receiver_acct_id' can't be null";
        }
        if ((mb_strlen($this->container['receiver_acct_id']) > 32)) {
            $invalidProperties[] = "invalid value for 'receiver_acct_id', the character length must be smaller than or equal to 32.";
        }

        if ((mb_strlen($this->container['receiver_acct_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'receiver_acct_id', the character length must be bigger than or equal to 1.";
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

        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (!is_null($this->container['detail']) && (mb_strlen($this->container['detail']) > 32)) {
            $invalidProperties[] = "invalid value for 'detail', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['detail']) && (mb_strlen($this->container['detail']) < 1)) {
            $invalidProperties[] = "invalid value for 'detail', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 255)) {
            $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 1)) {
            $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 1.";
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
     * Gets out_allocation_detail_id.
     *
     * @return string
     */
    public function getOutAllocationDetailId()
    {
        return $this->container['out_allocation_detail_id'];
    }

    /**
     * Sets out_allocation_detail_id.
     *
     * @param string $out_allocation_detail_id out_allocation_detail_id
     *
     * @return self
     */
    public function setOutAllocationDetailId($out_allocation_detail_id)
    {
        $this->container['out_allocation_detail_id'] = $out_allocation_detail_id;

        return $this;
    }

    /**
     * Gets receiver_acct_id.
     *
     * @return string
     */
    public function getReceiverAcctId()
    {
        return $this->container['receiver_acct_id'];
    }

    /**
     * Sets receiver_acct_id.
     *
     * @param string $receiver_acct_id receiver_acct_id
     *
     * @return self
     */
    public function setReceiverAcctId($receiver_acct_id)
    {
        $this->container['receiver_acct_id'] = $receiver_acct_id;

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
     * @param string $merchant_name merchant_name
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
     * @param int $amount 分账金额
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets scenario.
     *
     * @return \Entpay\Mse\Client\Model\ScenarioEnum|null
     */
    public function getScenario()
    {
        return $this->container['scenario'];
    }

    /**
     * Sets scenario.
     *
     * @param \Entpay\Mse\Client\Model\ScenarioEnum|null $scenario scenario
     *
     * @return self
     */
    public function setScenario($scenario)
    {
        $this->container['scenario'] = $scenario;

        return $this;
    }

    /**
     * Gets detail.
     *
     * @return string|null
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail.
     *
     * @param string|null $detail detail
     *
     * @return self
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

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
     * @param string|null $desc desc
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

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
