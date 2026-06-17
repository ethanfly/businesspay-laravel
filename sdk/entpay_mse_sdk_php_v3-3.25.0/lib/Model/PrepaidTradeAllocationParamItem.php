<?php
/**
 * PrepaidTradeAllocationParamItem.
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
 * PrepaidTradeAllocationParamItem Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PrepaidTradeAllocationParamItem implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PrepaidTradeAllocationParamItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_allocation_detail_id' => 'string',
        'receiver_ent_id'          => 'string',
        'receiver_merchant_name'   => 'string',
        'amount'                   => 'int',
        'currency'                 => '\Entpay\Mse\Client\Model\CurrencyEnum',
        'scenario'                 => '\Entpay\Mse\Client\Model\PrepaidScenarioEnum',
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
        'receiver_ent_id'          => null,
        'receiver_merchant_name'   => null,
        'amount'                   => 'int64',
        'currency'                 => null,
        'scenario'                 => null,
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
        'receiver_ent_id'          => 'receiver_ent_id',
        'receiver_merchant_name'   => 'receiver_merchant_name',
        'amount'                   => 'amount',
        'currency'                 => 'currency',
        'scenario'                 => 'scenario',
        'desc'                     => 'desc',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'out_allocation_detail_id' => 'setOutAllocationDetailId',
        'receiver_ent_id'          => 'setReceiverEntId',
        'receiver_merchant_name'   => 'setReceiverMerchantName',
        'amount'                   => 'setAmount',
        'currency'                 => 'setCurrency',
        'scenario'                 => 'setScenario',
        'desc'                     => 'setDesc',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'out_allocation_detail_id' => 'getOutAllocationDetailId',
        'receiver_ent_id'          => 'getReceiverEntId',
        'receiver_merchant_name'   => 'getReceiverMerchantName',
        'amount'                   => 'getAmount',
        'currency'                 => 'getCurrency',
        'scenario'                 => 'getScenario',
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
        $this->container['receiver_ent_id']          = isset($data['receiver_ent_id']) ? $data['receiver_ent_id'] : null;
        $this->container['receiver_merchant_name']   = isset($data['receiver_merchant_name']) ? $data['receiver_merchant_name'] : null;
        $this->container['amount']                   = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency']                 = isset($data['currency']) ? $data['currency'] : null;
        $this->container['scenario']                 = isset($data['scenario']) ? $data['scenario'] : null;
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

        if (null === $this->container['receiver_ent_id']) {
            $invalidProperties[] = "'receiver_ent_id' can't be null";
        }
        if ((mb_strlen($this->container['receiver_ent_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'receiver_ent_id', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['receiver_ent_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'receiver_ent_id', the character length must be bigger than or equal to 10.";
        }

        if (null === $this->container['receiver_merchant_name']) {
            $invalidProperties[] = "'receiver_merchant_name' can't be null";
        }
        if ((mb_strlen($this->container['receiver_merchant_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'receiver_merchant_name', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['receiver_merchant_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'receiver_merchant_name', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (null === $this->container['currency']) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if (null === $this->container['scenario']) {
            $invalidProperties[] = "'scenario' can't be null";
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
     * @param string $out_allocation_detail_id 平台分账明细单号
     *
     * @return self
     */
    public function setOutAllocationDetailId($out_allocation_detail_id)
    {
        $this->container['out_allocation_detail_id'] = $out_allocation_detail_id;

        return $this;
    }

    /**
     * Gets receiver_ent_id.
     *
     * @return string
     */
    public function getReceiverEntId()
    {
        return $this->container['receiver_ent_id'];
    }

    /**
     * Sets receiver_ent_id.
     *
     * @param string $receiver_ent_id 接收方企业ID
     *
     * @return self
     */
    public function setReceiverEntId($receiver_ent_id)
    {
        $this->container['receiver_ent_id'] = $receiver_ent_id;

        return $this;
    }

    /**
     * Gets receiver_merchant_name.
     *
     * @return string
     */
    public function getReceiverMerchantName()
    {
        return $this->container['receiver_merchant_name'];
    }

    /**
     * Sets receiver_merchant_name.
     *
     * @param string $receiver_merchant_name receiver_merchant_name
     *
     * @return self
     */
    public function setReceiverMerchantName($receiver_merchant_name)
    {
        $this->container['receiver_merchant_name'] = $receiver_merchant_name;

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
     * Gets scenario.
     *
     * @return \Entpay\Mse\Client\Model\PrepaidScenarioEnum
     */
    public function getScenario()
    {
        return $this->container['scenario'];
    }

    /**
     * Sets scenario.
     *
     * @param \Entpay\Mse\Client\Model\PrepaidScenarioEnum $scenario scenario
     *
     * @return self
     */
    public function setScenario($scenario)
    {
        $this->container['scenario'] = $scenario;

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
