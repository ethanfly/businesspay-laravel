<?php
/**
 * PaymentPayer.
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
 * PaymentPayer Class Doc Comment.
 *
 * @category Class
 * @description 微企付付款方信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentPayer implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PaymentPayer';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'payer_id'             => 'string',
        'payer_name'           => 'string',
        'out_payer_id'         => 'string',
        'bank_account_numbers' => 'string[]',
        'payer_bank_sname'     => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'payer_id'             => null,
        'payer_name'           => 'encrypted|false',
        'out_payer_id'         => null,
        'bank_account_numbers' => 'encrypted|false',
        'payer_bank_sname'     => null,
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
        'payer_id'             => 'payer_id',
        'payer_name'           => 'payer_name',
        'out_payer_id'         => 'out_payer_id',
        'bank_account_numbers' => 'bank_account_numbers',
        'payer_bank_sname'     => 'payer_bank_sname',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'payer_id'             => 'setPayerId',
        'payer_name'           => 'setPayerName',
        'out_payer_id'         => 'setOutPayerId',
        'bank_account_numbers' => 'setBankAccountNumbers',
        'payer_bank_sname'     => 'setPayerBankSname',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'payer_id'             => 'getPayerId',
        'payer_name'           => 'getPayerName',
        'out_payer_id'         => 'getOutPayerId',
        'bank_account_numbers' => 'getBankAccountNumbers',
        'payer_bank_sname'     => 'getPayerBankSname',
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
        $this->container['payer_id']             = isset($data['payer_id']) ? $data['payer_id'] : null;
        $this->container['payer_name']           = isset($data['payer_name']) ? $data['payer_name'] : null;
        $this->container['out_payer_id']         = isset($data['out_payer_id']) ? $data['out_payer_id'] : null;
        $this->container['bank_account_numbers'] = isset($data['bank_account_numbers']) ? $data['bank_account_numbers'] : null;
        $this->container['payer_bank_sname']     = isset($data['payer_bank_sname']) ? $data['payer_bank_sname'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['payer_id']) && (mb_strlen($this->container['payer_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'payer_id', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['payer_id']) && (mb_strlen($this->container['payer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'payer_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['payer_name']) && (mb_strlen($this->container['payer_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'payer_name', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['payer_name']) && (mb_strlen($this->container['payer_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'payer_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['out_payer_id']) && (mb_strlen($this->container['out_payer_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'out_payer_id', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['out_payer_id']) && (mb_strlen($this->container['out_payer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_payer_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['out_payer_id']) && !preg_match('/^[A-Za-z0-9]+$/', $this->container['out_payer_id'])) {
            $invalidProperties[] = "invalid value for 'out_payer_id', must be conform to the pattern /^[A-Za-z0-9]+$/.";
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
     * Gets payer_id.
     *
     * @return string|null
     */
    public function getPayerId()
    {
        return $this->container['payer_id'];
    }

    /**
     * Sets payer_id.
     *
     * @param string|null $payer_id 微企付openId
     *
     * @return self
     */
    public function setPayerId($payer_id)
    {
        $this->container['payer_id'] = $payer_id;

        return $this;
    }

    /**
     * Gets payer_name.
     *
     * @return string|null
     */
    public function getPayerName()
    {
        return $this->container['payer_name'];
    }

    /**
     * Sets payer_name.
     *
     * @param string|null $payer_name 付款方名称
     *
     * @return self
     */
    public function setPayerName($payer_name)
    {
        $this->container['payer_name'] = $payer_name;

        return $this;
    }

    /**
     * Gets out_payer_id.
     *
     * @return string|null
     */
    public function getOutPayerId()
    {
        return $this->container['out_payer_id'];
    }

    /**
     * Sets out_payer_id.
     *
     * @param string|null $out_payer_id 平台付款方Id
     *
     * @return self
     */
    public function setOutPayerId($out_payer_id)
    {
        $this->container['out_payer_id'] = $out_payer_id;

        return $this;
    }

    /**
     * Gets bank_account_numbers.
     *
     * @return string[]|null
     */
    public function getBankAccountNumbers()
    {
        return $this->container['bank_account_numbers'];
    }

    /**
     * Sets bank_account_numbers.
     *
     * @param string[]|null $bank_account_numbers 平台付款方卡号
     *
     * @return self
     */
    public function setBankAccountNumbers($bank_account_numbers)
    {
        $this->container['bank_account_numbers'] = $bank_account_numbers;

        return $this;
    }

    /**
     * Gets payer_bank_sname.
     *
     * @return string|null
     */
    public function getPayerBankSname()
    {
        return $this->container['payer_bank_sname'];
    }

    /**
     * Sets payer_bank_sname.
     *
     * @param string|null $payer_bank_sname 付款方银行简称
     *
     * @return self
     */
    public function setPayerBankSname($payer_bank_sname)
    {
        $this->container['payer_bank_sname'] = $payer_bank_sname;

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
