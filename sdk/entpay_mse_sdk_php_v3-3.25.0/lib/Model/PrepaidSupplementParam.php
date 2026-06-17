<?php
/**
 * PrepaidSupplementParam.
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
 * PrepaidSupplementParam Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PrepaidSupplementParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PrepaidSupplementParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_supplement_id'            => 'string',
        'ent_id'                       => 'string',
        'merchant_name'                => 'string',
        'supplement_out_ent_id'        => 'string',
        'supplement_out_merchant_name' => 'string',
        'mse_prepaid_card_id'          => 'string',
        'out_prepaid_card_id'          => 'string',
        'amount'                       => 'int',
        'currency'                     => '\Entpay\Mse\Client\Model\CurrencyEnum',
        'server_notify_url'            => 'string',
        'desc'                         => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'out_supplement_id'            => null,
        'ent_id'                       => null,
        'merchant_name'                => null,
        'supplement_out_ent_id'        => null,
        'supplement_out_merchant_name' => null,
        'mse_prepaid_card_id'          => null,
        'out_prepaid_card_id'          => null,
        'amount'                       => 'int64',
        'currency'                     => null,
        'server_notify_url'            => null,
        'desc'                         => null,
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
        'out_supplement_id'            => 'out_supplement_id',
        'ent_id'                       => 'ent_id',
        'merchant_name'                => 'merchant_name',
        'supplement_out_ent_id'        => 'supplement_out_ent_id',
        'supplement_out_merchant_name' => 'supplement_out_merchant_name',
        'mse_prepaid_card_id'          => 'mse_prepaid_card_id',
        'out_prepaid_card_id'          => 'out_prepaid_card_id',
        'amount'                       => 'amount',
        'currency'                     => 'currency',
        'server_notify_url'            => 'server_notify_url',
        'desc'                         => 'desc',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'out_supplement_id'            => 'setOutSupplementId',
        'ent_id'                       => 'setEntId',
        'merchant_name'                => 'setMerchantName',
        'supplement_out_ent_id'        => 'setSupplementOutEntId',
        'supplement_out_merchant_name' => 'setSupplementOutMerchantName',
        'mse_prepaid_card_id'          => 'setMsePrepaidCardId',
        'out_prepaid_card_id'          => 'setOutPrepaidCardId',
        'amount'                       => 'setAmount',
        'currency'                     => 'setCurrency',
        'server_notify_url'            => 'setServerNotifyUrl',
        'desc'                         => 'setDesc',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'out_supplement_id'            => 'getOutSupplementId',
        'ent_id'                       => 'getEntId',
        'merchant_name'                => 'getMerchantName',
        'supplement_out_ent_id'        => 'getSupplementOutEntId',
        'supplement_out_merchant_name' => 'getSupplementOutMerchantName',
        'mse_prepaid_card_id'          => 'getMsePrepaidCardId',
        'out_prepaid_card_id'          => 'getOutPrepaidCardId',
        'amount'                       => 'getAmount',
        'currency'                     => 'getCurrency',
        'server_notify_url'            => 'getServerNotifyUrl',
        'desc'                         => 'getDesc',
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
        $this->container['out_supplement_id']            = isset($data['out_supplement_id']) ? $data['out_supplement_id'] : null;
        $this->container['ent_id']                       = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['merchant_name']                = isset($data['merchant_name']) ? $data['merchant_name'] : null;
        $this->container['supplement_out_ent_id']        = isset($data['supplement_out_ent_id']) ? $data['supplement_out_ent_id'] : null;
        $this->container['supplement_out_merchant_name'] = isset($data['supplement_out_merchant_name']) ? $data['supplement_out_merchant_name'] : null;
        $this->container['mse_prepaid_card_id']          = isset($data['mse_prepaid_card_id']) ? $data['mse_prepaid_card_id'] : null;
        $this->container['out_prepaid_card_id']          = isset($data['out_prepaid_card_id']) ? $data['out_prepaid_card_id'] : null;
        $this->container['amount']                       = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency']                     = isset($data['currency']) ? $data['currency'] : null;
        $this->container['server_notify_url']            = isset($data['server_notify_url']) ? $data['server_notify_url'] : null;
        $this->container['desc']                         = isset($data['desc']) ? $data['desc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['out_supplement_id']) {
            $invalidProperties[] = "'out_supplement_id' can't be null";
        }
        if ((mb_strlen($this->container['out_supplement_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_supplement_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_supplement_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_supplement_id', the character length must be bigger than or equal to 1.";
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

        if (null === $this->container['supplement_out_ent_id']) {
            $invalidProperties[] = "'supplement_out_ent_id' can't be null";
        }
        if ((mb_strlen($this->container['supplement_out_ent_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'supplement_out_ent_id', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['supplement_out_ent_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'supplement_out_ent_id', the character length must be bigger than or equal to 10.";
        }

        if (null === $this->container['supplement_out_merchant_name']) {
            $invalidProperties[] = "'supplement_out_merchant_name' can't be null";
        }
        if ((mb_strlen($this->container['supplement_out_merchant_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'supplement_out_merchant_name', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['supplement_out_merchant_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'supplement_out_merchant_name', the character length must be bigger than or equal to 1.";
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

        if (null === $this->container['amount']) {
            $invalidProperties[] = "'amount' can't be null";
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
     * Gets out_supplement_id.
     *
     * @return string
     */
    public function getOutSupplementId()
    {
        return $this->container['out_supplement_id'];
    }

    /**
     * Sets out_supplement_id.
     *
     * @param string $out_supplement_id 平台补差单号
     *
     * @return self
     */
    public function setOutSupplementId($out_supplement_id)
    {
        $this->container['out_supplement_id'] = $out_supplement_id;

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
     * @param string $ent_id 企业id
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
     * Gets supplement_out_ent_id.
     *
     * @return string
     */
    public function getSupplementOutEntId()
    {
        return $this->container['supplement_out_ent_id'];
    }

    /**
     * Sets supplement_out_ent_id.
     *
     * @param string $supplement_out_ent_id 补差出资方企业id
     *
     * @return self
     */
    public function setSupplementOutEntId($supplement_out_ent_id)
    {
        $this->container['supplement_out_ent_id'] = $supplement_out_ent_id;

        return $this;
    }

    /**
     * Gets supplement_out_merchant_name.
     *
     * @return string
     */
    public function getSupplementOutMerchantName()
    {
        return $this->container['supplement_out_merchant_name'];
    }

    /**
     * Sets supplement_out_merchant_name.
     *
     * @param string $supplement_out_merchant_name 补差出资方企业名称
     *
     * @return self
     */
    public function setSupplementOutMerchantName($supplement_out_merchant_name)
    {
        $this->container['supplement_out_merchant_name'] = $supplement_out_merchant_name;

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
     * @param string $mse_prepaid_card_id 微企付预付卡绑定ID
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
     * @param int $amount 金额
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
     * @return \Entpay\Mse\Client\Model\CurrencyEnum|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency.
     *
     * @param \Entpay\Mse\Client\Model\CurrencyEnum|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
