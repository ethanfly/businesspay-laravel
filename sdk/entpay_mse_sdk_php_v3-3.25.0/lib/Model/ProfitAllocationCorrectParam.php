<?php
/**
 * ProfitAllocationCorrectParam.
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
 * ProfitAllocationCorrectParam Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProfitAllocationCorrectParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ProfitAllocationCorrectParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_allocation_detail_correct_id' => 'string',
        'out_allocation_id'                => 'string',
        'allocation_id'                    => 'string',
        'out_allocation_detail_id'         => 'string',
        'allocation_detail_id'             => 'string',
        'ent_id'                           => 'string',
        'receiver_acct_id'                 => 'string',
        'amount'                           => 'int',
        'desc'                             => 'string',
        'server_notify_url'                => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'out_allocation_detail_correct_id' => null,
        'out_allocation_id'                => null,
        'allocation_id'                    => null,
        'out_allocation_detail_id'         => null,
        'allocation_detail_id'             => null,
        'ent_id'                           => null,
        'receiver_acct_id'                 => null,
        'amount'                           => 'int64',
        'desc'                             => null,
        'server_notify_url'                => null,
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
        'out_allocation_detail_correct_id' => 'out_allocation_detail_correct_id',
        'out_allocation_id'                => 'out_allocation_id',
        'allocation_id'                    => 'allocation_id',
        'out_allocation_detail_id'         => 'out_allocation_detail_id',
        'allocation_detail_id'             => 'allocation_detail_id',
        'ent_id'                           => 'ent_id',
        'receiver_acct_id'                 => 'receiver_acct_id',
        'amount'                           => 'amount',
        'desc'                             => 'desc',
        'server_notify_url'                => 'server_notify_url',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'out_allocation_detail_correct_id' => 'setOutAllocationDetailCorrectId',
        'out_allocation_id'                => 'setOutAllocationId',
        'allocation_id'                    => 'setAllocationId',
        'out_allocation_detail_id'         => 'setOutAllocationDetailId',
        'allocation_detail_id'             => 'setAllocationDetailId',
        'ent_id'                           => 'setEntId',
        'receiver_acct_id'                 => 'setReceiverAcctId',
        'amount'                           => 'setAmount',
        'desc'                             => 'setDesc',
        'server_notify_url'                => 'setServerNotifyUrl',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'out_allocation_detail_correct_id' => 'getOutAllocationDetailCorrectId',
        'out_allocation_id'                => 'getOutAllocationId',
        'allocation_id'                    => 'getAllocationId',
        'out_allocation_detail_id'         => 'getOutAllocationDetailId',
        'allocation_detail_id'             => 'getAllocationDetailId',
        'ent_id'                           => 'getEntId',
        'receiver_acct_id'                 => 'getReceiverAcctId',
        'amount'                           => 'getAmount',
        'desc'                             => 'getDesc',
        'server_notify_url'                => 'getServerNotifyUrl',
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
        $this->container['out_allocation_detail_correct_id'] = isset($data['out_allocation_detail_correct_id']) ? $data['out_allocation_detail_correct_id'] : null;
        $this->container['out_allocation_id']                = isset($data['out_allocation_id']) ? $data['out_allocation_id'] : null;
        $this->container['allocation_id']                    = isset($data['allocation_id']) ? $data['allocation_id'] : null;
        $this->container['out_allocation_detail_id']         = isset($data['out_allocation_detail_id']) ? $data['out_allocation_detail_id'] : null;
        $this->container['allocation_detail_id']             = isset($data['allocation_detail_id']) ? $data['allocation_detail_id'] : null;
        $this->container['ent_id']                           = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['receiver_acct_id']                 = isset($data['receiver_acct_id']) ? $data['receiver_acct_id'] : null;
        $this->container['amount']                           = isset($data['amount']) ? $data['amount'] : null;
        $this->container['desc']                             = isset($data['desc']) ? $data['desc'] : null;
        $this->container['server_notify_url']                = isset($data['server_notify_url']) ? $data['server_notify_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['out_allocation_detail_correct_id']) {
            $invalidProperties[] = "'out_allocation_detail_correct_id' can't be null";
        }
        if ((mb_strlen($this->container['out_allocation_detail_correct_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_allocation_detail_correct_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_allocation_detail_correct_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_allocation_detail_correct_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['out_allocation_id']) && (mb_strlen($this->container['out_allocation_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_allocation_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['out_allocation_id']) && (mb_strlen($this->container['out_allocation_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_allocation_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['allocation_id']) && (mb_strlen($this->container['allocation_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'allocation_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['allocation_id']) && (mb_strlen($this->container['allocation_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'allocation_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['out_allocation_detail_id']) && (mb_strlen($this->container['out_allocation_detail_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_allocation_detail_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['out_allocation_detail_id']) && (mb_strlen($this->container['out_allocation_detail_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_allocation_detail_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['allocation_detail_id']) && (mb_strlen($this->container['allocation_detail_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'allocation_detail_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['allocation_detail_id']) && (mb_strlen($this->container['allocation_detail_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'allocation_detail_id', the character length must be bigger than or equal to 1.";
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

        if (null === $this->container['receiver_acct_id']) {
            $invalidProperties[] = "'receiver_acct_id' can't be null";
        }
        if ((mb_strlen($this->container['receiver_acct_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'receiver_acct_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['receiver_acct_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'receiver_acct_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 128)) {
            $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 1)) {
            $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['server_notify_url']) {
            $invalidProperties[] = "'server_notify_url' can't be null";
        }
        if ((mb_strlen($this->container['server_notify_url']) > 255)) {
            $invalidProperties[] = "invalid value for 'server_notify_url', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['server_notify_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'server_notify_url', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^https?:\/\/[^?]+/", $this->container['server_notify_url'])) {
            $invalidProperties[] = "invalid value for 'server_notify_url', must be conform to the pattern /^https?:\/\/[^?]+/.";
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
     * Gets out_allocation_detail_correct_id.
     *
     * @return string
     */
    public function getOutAllocationDetailCorrectId()
    {
        return $this->container['out_allocation_detail_correct_id'];
    }

    /**
     * Sets out_allocation_detail_correct_id.
     *
     * @param string $out_allocation_detail_correct_id out_allocation_detail_correct_id
     *
     * @return self
     */
    public function setOutAllocationDetailCorrectId($out_allocation_detail_correct_id)
    {
        $this->container['out_allocation_detail_correct_id'] = $out_allocation_detail_correct_id;

        return $this;
    }

    /**
     * Gets out_allocation_id.
     *
     * @return string|null
     */
    public function getOutAllocationId()
    {
        return $this->container['out_allocation_id'];
    }

    /**
     * Sets out_allocation_id.
     *
     * @param string|null $out_allocation_id out_allocation_id
     *
     * @return self
     */
    public function setOutAllocationId($out_allocation_id)
    {
        $this->container['out_allocation_id'] = $out_allocation_id;

        return $this;
    }

    /**
     * Gets allocation_id.
     *
     * @return string|null
     */
    public function getAllocationId()
    {
        return $this->container['allocation_id'];
    }

    /**
     * Sets allocation_id.
     *
     * @param string|null $allocation_id allocation_id
     *
     * @return self
     */
    public function setAllocationId($allocation_id)
    {
        $this->container['allocation_id'] = $allocation_id;

        return $this;
    }

    /**
     * Gets out_allocation_detail_id.
     *
     * @return string|null
     */
    public function getOutAllocationDetailId()
    {
        return $this->container['out_allocation_detail_id'];
    }

    /**
     * Sets out_allocation_detail_id.
     *
     * @param string|null $out_allocation_detail_id out_allocation_detail_id
     *
     * @return self
     */
    public function setOutAllocationDetailId($out_allocation_detail_id)
    {
        $this->container['out_allocation_detail_id'] = $out_allocation_detail_id;

        return $this;
    }

    /**
     * Gets allocation_detail_id.
     *
     * @return string|null
     */
    public function getAllocationDetailId()
    {
        return $this->container['allocation_detail_id'];
    }

    /**
     * Sets allocation_detail_id.
     *
     * @param string|null $allocation_detail_id allocation_detail_id
     *
     * @return self
     */
    public function setAllocationDetailId($allocation_detail_id)
    {
        $this->container['allocation_detail_id'] = $allocation_detail_id;

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
     * @param string $ent_id ent_id
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

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
     * @param int $amount 分账冲退金额
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
