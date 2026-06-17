<?php
/**
 * PayeeAccounts.
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
 * PayeeAccounts Class Doc Comment.
 *
 * @category Class
 * @description 收款账户信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PayeeAccounts implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PayeeAccounts';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'account_type'            => 'string',
        'bank_account_name'       => 'string',
        'bank_account_number'     => 'string',
        'bank_account_mobile'     => 'string',
        'bank_branch_id'          => 'string',
        'bank_branch_name'        => 'string',
        'bank_name'               => 'string',
        'front_photocopy_file_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'account_type'            => null,
        'bank_account_name'       => 'encrypted|false',
        'bank_account_number'     => 'encrypted|false',
        'bank_account_mobile'     => 'encrypted|false',
        'bank_branch_id'          => null,
        'bank_branch_name'        => null,
        'bank_name'               => null,
        'front_photocopy_file_id' => null,
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
        'account_type'            => 'account_type',
        'bank_account_name'       => 'bank_account_name',
        'bank_account_number'     => 'bank_account_number',
        'bank_account_mobile'     => 'bank_account_mobile',
        'bank_branch_id'          => 'bank_branch_id',
        'bank_branch_name'        => 'bank_branch_name',
        'bank_name'               => 'bank_name',
        'front_photocopy_file_id' => 'front_photocopy_file_id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'account_type'            => 'setAccountType',
        'bank_account_name'       => 'setBankAccountName',
        'bank_account_number'     => 'setBankAccountNumber',
        'bank_account_mobile'     => 'setBankAccountMobile',
        'bank_branch_id'          => 'setBankBranchId',
        'bank_branch_name'        => 'setBankBranchName',
        'bank_name'               => 'setBankName',
        'front_photocopy_file_id' => 'setFrontPhotocopyFileId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'account_type'            => 'getAccountType',
        'bank_account_name'       => 'getBankAccountName',
        'bank_account_number'     => 'getBankAccountNumber',
        'bank_account_mobile'     => 'getBankAccountMobile',
        'bank_branch_id'          => 'getBankBranchId',
        'bank_branch_name'        => 'getBankBranchName',
        'bank_name'               => 'getBankName',
        'front_photocopy_file_id' => 'getFrontPhotocopyFileId',
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

    const ACCOUNT_TYPE_ENTERPRISE_ACCOUNT = 'ENTERPRISE_ACCOUNT';
    const ACCOUNT_TYPE_PERSON_ACCOUNT     = 'PERSON_ACCOUNT';

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
        $this->container['account_type']            = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['bank_account_name']       = isset($data['bank_account_name']) ? $data['bank_account_name'] : null;
        $this->container['bank_account_number']     = isset($data['bank_account_number']) ? $data['bank_account_number'] : null;
        $this->container['bank_account_mobile']     = isset($data['bank_account_mobile']) ? $data['bank_account_mobile'] : null;
        $this->container['bank_branch_id']          = isset($data['bank_branch_id']) ? $data['bank_branch_id'] : null;
        $this->container['bank_branch_name']        = isset($data['bank_branch_name']) ? $data['bank_branch_name'] : null;
        $this->container['bank_name']               = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['front_photocopy_file_id'] = isset($data['front_photocopy_file_id']) ? $data['front_photocopy_file_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['bank_account_name']) && (mb_strlen($this->container['bank_account_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'bank_account_name', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['bank_account_name']) && (mb_strlen($this->container['bank_account_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'bank_account_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['bank_account_number']) && (mb_strlen($this->container['bank_account_number']) > 64)) {
            $invalidProperties[] = "invalid value for 'bank_account_number', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['bank_account_number']) && (mb_strlen($this->container['bank_account_number']) < 8)) {
            $invalidProperties[] = "invalid value for 'bank_account_number', the character length must be bigger than or equal to 8.";
        }

        if (!is_null($this->container['bank_account_number']) && !preg_match('/^[0-9]*$/', $this->container['bank_account_number'])) {
            $invalidProperties[] = "invalid value for 'bank_account_number', must be conform to the pattern /^[0-9]*$/.";
        }

        if (!is_null($this->container['bank_account_mobile']) && (mb_strlen($this->container['bank_account_mobile']) > 32)) {
            $invalidProperties[] = "invalid value for 'bank_account_mobile', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['bank_account_mobile']) && (mb_strlen($this->container['bank_account_mobile']) < 1)) {
            $invalidProperties[] = "invalid value for 'bank_account_mobile', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['bank_account_mobile']) && !preg_match('/^[0-9]*$/', $this->container['bank_account_mobile'])) {
            $invalidProperties[] = "invalid value for 'bank_account_mobile', must be conform to the pattern /^[0-9]*$/.";
        }

        if (!is_null($this->container['bank_branch_id']) && (mb_strlen($this->container['bank_branch_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'bank_branch_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['bank_branch_id']) && (mb_strlen($this->container['bank_branch_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'bank_branch_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['bank_branch_id']) && !preg_match('/^[0-9]*$/', $this->container['bank_branch_id'])) {
            $invalidProperties[] = "invalid value for 'bank_branch_id', must be conform to the pattern /^[0-9]*$/.";
        }

        if (!is_null($this->container['bank_branch_name']) && (mb_strlen($this->container['bank_branch_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'bank_branch_name', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['bank_branch_name']) && (mb_strlen($this->container['bank_branch_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'bank_branch_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['bank_name']) && (mb_strlen($this->container['bank_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'bank_name', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['bank_name']) && (mb_strlen($this->container['bank_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'bank_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['front_photocopy_file_id']) && (mb_strlen($this->container['front_photocopy_file_id']) > 256)) {
            $invalidProperties[] = "invalid value for 'front_photocopy_file_id', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['front_photocopy_file_id']) && (mb_strlen($this->container['front_photocopy_file_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'front_photocopy_file_id', the character length must be bigger than or equal to 1.";
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
     * Gets account_type.
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type.
     *
     * @param string|null $account_type 账户类型
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets bank_account_name.
     *
     * @return string|null
     */
    public function getBankAccountName()
    {
        return $this->container['bank_account_name'];
    }

    /**
     * Sets bank_account_name.
     *
     * @param string|null $bank_account_name 账户名
     *
     * @return self
     */
    public function setBankAccountName($bank_account_name)
    {
        $this->container['bank_account_name'] = $bank_account_name;

        return $this;
    }

    /**
     * Gets bank_account_number.
     *
     * @return string|null
     */
    public function getBankAccountNumber()
    {
        return $this->container['bank_account_number'];
    }

    /**
     * Sets bank_account_number.
     *
     * @param string|null $bank_account_number 银行账户
     *
     * @return self
     */
    public function setBankAccountNumber($bank_account_number)
    {
        $this->container['bank_account_number'] = $bank_account_number;

        return $this;
    }

    /**
     * Gets bank_account_mobile.
     *
     * @return string|null
     */
    public function getBankAccountMobile()
    {
        return $this->container['bank_account_mobile'];
    }

    /**
     * Sets bank_account_mobile.
     *
     * @param string|null $bank_account_mobile 银行预留手机号
     *
     * @return self
     */
    public function setBankAccountMobile($bank_account_mobile)
    {
        $this->container['bank_account_mobile'] = $bank_account_mobile;

        return $this;
    }

    /**
     * Gets bank_branch_id.
     *
     * @return string|null
     */
    public function getBankBranchId()
    {
        return $this->container['bank_branch_id'];
    }

    /**
     * Sets bank_branch_id.
     *
     * @param string|null $bank_branch_id 开户银行联行号
     *
     * @return self
     */
    public function setBankBranchId($bank_branch_id)
    {
        $this->container['bank_branch_id'] = $bank_branch_id;

        return $this;
    }

    /**
     * Gets bank_branch_name.
     *
     * @return string|null
     */
    public function getBankBranchName()
    {
        return $this->container['bank_branch_name'];
    }

    /**
     * Sets bank_branch_name.
     *
     * @param string|null $bank_branch_name 开户支行名
     *
     * @return self
     */
    public function setBankBranchName($bank_branch_name)
    {
        $this->container['bank_branch_name'] = $bank_branch_name;

        return $this;
    }

    /**
     * Gets bank_name.
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name.
     *
     * @param string|null $bank_name 开户银行名称
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets front_photocopy_file_id.
     *
     * @return string|null
     */
    public function getFrontPhotocopyFileId()
    {
        return $this->container['front_photocopy_file_id'];
    }

    /**
     * Sets front_photocopy_file_id.
     *
     * @param string|null $front_photocopy_file_id 银行卡正面照片
     *
     * @return self
     */
    public function setFrontPhotocopyFileId($front_photocopy_file_id)
    {
        $this->container['front_photocopy_file_id'] = $front_photocopy_file_id;

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
