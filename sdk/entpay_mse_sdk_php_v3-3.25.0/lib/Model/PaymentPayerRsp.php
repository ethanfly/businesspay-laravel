<?php
/**
 * PaymentPayerRsp.
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
 * PaymentPayerRsp Class Doc Comment.
 *
 * @category Class
 * @description 微企付付款方信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentPayerRsp implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PaymentPayerRsp';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'payer_id'         => 'string',
        'payer_name'       => 'string',
        'out_payer_id'     => 'string',
        'payer_acct_last4' => 'string',
        'payer_bank_sname' => 'string',
        'payer_acct_type'  => '\Entpay\Mse\Client\Model\PayerAcctTypeEnum',
        'payer_bank_type'  => 'string',
        'payer_ent_name'   => 'string',
        'payer_bank_name'  => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'payer_id'         => null,
        'payer_name'       => 'encrypted|false',
        'out_payer_id'     => null,
        'payer_acct_last4' => null,
        'payer_bank_sname' => null,
        'payer_acct_type'  => null,
        'payer_bank_type'  => null,
        'payer_ent_name'   => null,
        'payer_bank_name'  => null,
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
        'payer_id'         => 'payer_id',
        'payer_name'       => 'payer_name',
        'out_payer_id'     => 'out_payer_id',
        'payer_acct_last4' => 'payer_acct_last4',
        'payer_bank_sname' => 'payer_bank_sname',
        'payer_acct_type'  => 'payer_acct_type',
        'payer_bank_type'  => 'payer_bank_type',
        'payer_ent_name'   => 'payer_ent_name',
        'payer_bank_name'  => 'payer_bank_name',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'payer_id'         => 'setPayerId',
        'payer_name'       => 'setPayerName',
        'out_payer_id'     => 'setOutPayerId',
        'payer_acct_last4' => 'setPayerAcctLast4',
        'payer_bank_sname' => 'setPayerBankSname',
        'payer_acct_type'  => 'setPayerAcctType',
        'payer_bank_type'  => 'setPayerBankType',
        'payer_ent_name'   => 'setPayerEntName',
        'payer_bank_name'  => 'setPayerBankName',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'payer_id'         => 'getPayerId',
        'payer_name'       => 'getPayerName',
        'out_payer_id'     => 'getOutPayerId',
        'payer_acct_last4' => 'getPayerAcctLast4',
        'payer_bank_sname' => 'getPayerBankSname',
        'payer_acct_type'  => 'getPayerAcctType',
        'payer_bank_type'  => 'getPayerBankType',
        'payer_ent_name'   => 'getPayerEntName',
        'payer_bank_name'  => 'getPayerBankName',
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
        $this->container['payer_id']         = isset($data['payer_id']) ? $data['payer_id'] : null;
        $this->container['payer_name']       = isset($data['payer_name']) ? $data['payer_name'] : null;
        $this->container['out_payer_id']     = isset($data['out_payer_id']) ? $data['out_payer_id'] : null;
        $this->container['payer_acct_last4'] = isset($data['payer_acct_last4']) ? $data['payer_acct_last4'] : null;
        $this->container['payer_bank_sname'] = isset($data['payer_bank_sname']) ? $data['payer_bank_sname'] : null;
        $this->container['payer_acct_type']  = isset($data['payer_acct_type']) ? $data['payer_acct_type'] : null;
        $this->container['payer_bank_type']  = isset($data['payer_bank_type']) ? $data['payer_bank_type'] : null;
        $this->container['payer_ent_name']   = isset($data['payer_ent_name']) ? $data['payer_ent_name'] : null;
        $this->container['payer_bank_name']  = isset($data['payer_bank_name']) ? $data['payer_bank_name'] : null;
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

        if (!is_null($this->container['payer_name']) && (mb_strlen($this->container['payer_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'payer_name', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['out_payer_id']) {
            $invalidProperties[] = "'out_payer_id' can't be null";
        }
        if ((mb_strlen($this->container['out_payer_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'out_payer_id', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['out_payer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_payer_id', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match('/^[A-Za-z0-9]+$/', $this->container['out_payer_id'])) {
            $invalidProperties[] = "invalid value for 'out_payer_id', must be conform to the pattern /^[A-Za-z0-9]+$/.";
        }

        if (null === $this->container['payer_acct_last4']) {
            $invalidProperties[] = "'payer_acct_last4' can't be null";
        }
        if ((mb_strlen($this->container['payer_acct_last4']) > 4)) {
            $invalidProperties[] = "invalid value for 'payer_acct_last4', the character length must be smaller than or equal to 4.";
        }

        if ((mb_strlen($this->container['payer_acct_last4']) < 4)) {
            $invalidProperties[] = "invalid value for 'payer_acct_last4', the character length must be bigger than or equal to 4.";
        }

        if (!is_null($this->container['payer_ent_name']) && (mb_strlen($this->container['payer_ent_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'payer_ent_name', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['payer_ent_name']) && (mb_strlen($this->container['payer_ent_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'payer_ent_name', the character length must be bigger than or equal to 1.";
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
     * @return string
     */
    public function getOutPayerId()
    {
        return $this->container['out_payer_id'];
    }

    /**
     * Sets out_payer_id.
     *
     * @param string $out_payer_id 平台付款方Id
     *
     * @return self
     */
    public function setOutPayerId($out_payer_id)
    {
        $this->container['out_payer_id'] = $out_payer_id;

        return $this;
    }

    /**
     * Gets payer_acct_last4.
     *
     * @return string
     */
    public function getPayerAcctLast4()
    {
        return $this->container['payer_acct_last4'];
    }

    /**
     * Sets payer_acct_last4.
     *
     * @param string $payer_acct_last4 付款方付款银行卡后四位
     *
     * @return self
     */
    public function setPayerAcctLast4($payer_acct_last4)
    {
        $this->container['payer_acct_last4'] = $payer_acct_last4;

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
     * Gets payer_acct_type.
     *
     * @return \Entpay\Mse\Client\Model\PayerAcctTypeEnum|null
     */
    public function getPayerAcctType()
    {
        return $this->container['payer_acct_type'];
    }

    /**
     * Sets payer_acct_type.
     *
     * @param \Entpay\Mse\Client\Model\PayerAcctTypeEnum|null $payer_acct_type payer_acct_type
     *
     * @return self
     */
    public function setPayerAcctType($payer_acct_type)
    {
        $this->container['payer_acct_type'] = $payer_acct_type;

        return $this;
    }

    /**
     * Gets payer_bank_type.
     *
     * @return string|null
     */
    public function getPayerBankType()
    {
        return $this->container['payer_bank_type'];
    }

    /**
     * Sets payer_bank_type.
     *
     * @param string|null $payer_bank_type 付款银行
     *
     * @return self
     */
    public function setPayerBankType($payer_bank_type)
    {
        $this->container['payer_bank_type'] = $payer_bank_type;

        return $this;
    }

    /**
     * Gets payer_ent_name.
     *
     * @return string|null
     */
    public function getPayerEntName()
    {
        return $this->container['payer_ent_name'];
    }

    /**
     * Sets payer_ent_name.
     *
     * @param string|null $payer_ent_name 付款方企业名称
     *
     * @return self
     */
    public function setPayerEntName($payer_ent_name)
    {
        $this->container['payer_ent_name'] = $payer_ent_name;

        return $this;
    }

    /**
     * Gets payer_bank_name.
     *
     * @return string|null
     */
    public function getPayerBankName()
    {
        return $this->container['payer_bank_name'];
    }

    /**
     * Sets payer_bank_name.
     *
     * @param string|null $payer_bank_name 付款方银行名称
     *
     * @return self
     */
    public function setPayerBankName($payer_bank_name)
    {
        $this->container['payer_bank_name'] = $payer_bank_name;

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
