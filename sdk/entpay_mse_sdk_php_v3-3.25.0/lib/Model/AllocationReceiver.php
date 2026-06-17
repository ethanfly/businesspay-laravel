<?php
/**
 * AllocationReceiver.
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
 * AllocationReceiver Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AllocationReceiver implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'AllocationReceiver';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'receiver_acct_id'           => 'string',
        'receiver_type'              => '\Entpay\Mse\Client\Model\ProfitAllocationReceiverTypeEnum',
        'merchant_name'              => 'string',
        'out_receiver_name'          => 'string',
        'unified_social_credit_code' => 'string',
        'id_card_num_mask'           => 'string',
        'id_card_num_md5'            => 'string',
        'bank_name'                  => 'string',
        'account_type'               => 'string',
        'bank_account_name'          => 'string',
        'bank_account_number_last4'  => 'string',
        'withdraw_cycle'             => '\Entpay\Mse\Client\Model\WithDrawCycle',
        'receiver_withdraw_cycle'    => '\Entpay\Mse\Client\Model\WithDrawCycle',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'receiver_acct_id'           => null,
        'receiver_type'              => null,
        'merchant_name'              => null,
        'out_receiver_name'          => null,
        'unified_social_credit_code' => null,
        'id_card_num_mask'           => null,
        'id_card_num_md5'            => null,
        'bank_name'                  => null,
        'account_type'               => null,
        'bank_account_name'          => null,
        'bank_account_number_last4'  => null,
        'withdraw_cycle'             => null,
        'receiver_withdraw_cycle'    => null,
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
        'receiver_acct_id'           => 'receiver_acct_id',
        'receiver_type'              => 'receiver_type',
        'merchant_name'              => 'merchant_name',
        'out_receiver_name'          => 'out_receiver_name',
        'unified_social_credit_code' => 'unified_social_credit_code',
        'id_card_num_mask'           => 'id_card_num_mask',
        'id_card_num_md5'            => 'id_card_num_md5',
        'bank_name'                  => 'bank_name',
        'account_type'               => 'account_type',
        'bank_account_name'          => 'bank_account_name',
        'bank_account_number_last4'  => 'bank_account_number_last4',
        'withdraw_cycle'             => 'withdraw_cycle',
        'receiver_withdraw_cycle'    => 'receiver_withdraw_cycle',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'receiver_acct_id'           => 'setReceiverAcctId',
        'receiver_type'              => 'setReceiverType',
        'merchant_name'              => 'setMerchantName',
        'out_receiver_name'          => 'setOutReceiverName',
        'unified_social_credit_code' => 'setUnifiedSocialCreditCode',
        'id_card_num_mask'           => 'setIdCardNumMask',
        'id_card_num_md5'            => 'setIdCardNumMd5',
        'bank_name'                  => 'setBankName',
        'account_type'               => 'setAccountType',
        'bank_account_name'          => 'setBankAccountName',
        'bank_account_number_last4'  => 'setBankAccountNumberLast4',
        'withdraw_cycle'             => 'setWithdrawCycle',
        'receiver_withdraw_cycle'    => 'setReceiverWithdrawCycle',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'receiver_acct_id'           => 'getReceiverAcctId',
        'receiver_type'              => 'getReceiverType',
        'merchant_name'              => 'getMerchantName',
        'out_receiver_name'          => 'getOutReceiverName',
        'unified_social_credit_code' => 'getUnifiedSocialCreditCode',
        'id_card_num_mask'           => 'getIdCardNumMask',
        'id_card_num_md5'            => 'getIdCardNumMd5',
        'bank_name'                  => 'getBankName',
        'account_type'               => 'getAccountType',
        'bank_account_name'          => 'getBankAccountName',
        'bank_account_number_last4'  => 'getBankAccountNumberLast4',
        'withdraw_cycle'             => 'getWithdrawCycle',
        'receiver_withdraw_cycle'    => 'getReceiverWithdrawCycle',
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
        $this->container['receiver_acct_id']           = isset($data['receiver_acct_id']) ? $data['receiver_acct_id'] : null;
        $this->container['receiver_type']              = isset($data['receiver_type']) ? $data['receiver_type'] : null;
        $this->container['merchant_name']              = isset($data['merchant_name']) ? $data['merchant_name'] : null;
        $this->container['out_receiver_name']          = isset($data['out_receiver_name']) ? $data['out_receiver_name'] : null;
        $this->container['unified_social_credit_code'] = isset($data['unified_social_credit_code']) ? $data['unified_social_credit_code'] : null;
        $this->container['id_card_num_mask']           = isset($data['id_card_num_mask']) ? $data['id_card_num_mask'] : null;
        $this->container['id_card_num_md5']            = isset($data['id_card_num_md5']) ? $data['id_card_num_md5'] : null;
        $this->container['bank_name']                  = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['account_type']               = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['bank_account_name']          = isset($data['bank_account_name']) ? $data['bank_account_name'] : null;
        $this->container['bank_account_number_last4']  = isset($data['bank_account_number_last4']) ? $data['bank_account_number_last4'] : null;
        $this->container['withdraw_cycle']             = isset($data['withdraw_cycle']) ? $data['withdraw_cycle'] : null;
        $this->container['receiver_withdraw_cycle']    = isset($data['receiver_withdraw_cycle']) ? $data['receiver_withdraw_cycle'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['receiver_acct_id']) {
            $invalidProperties[] = "'receiver_acct_id' can't be null";
        }
        if (null === $this->container['receiver_type']) {
            $invalidProperties[] = "'receiver_type' can't be null";
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

        if (!is_null($this->container['out_receiver_name']) && (mb_strlen($this->container['out_receiver_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_receiver_name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['out_receiver_name']) && (mb_strlen($this->container['out_receiver_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_receiver_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['unified_social_credit_code']) && (mb_strlen($this->container['unified_social_credit_code']) > 18)) {
            $invalidProperties[] = "invalid value for 'unified_social_credit_code', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['unified_social_credit_code']) && (mb_strlen($this->container['unified_social_credit_code']) < 18)) {
            $invalidProperties[] = "invalid value for 'unified_social_credit_code', the character length must be bigger than or equal to 18.";
        }

        if (!is_null($this->container['id_card_num_mask']) && (mb_strlen($this->container['id_card_num_mask']) > 18)) {
            $invalidProperties[] = "invalid value for 'id_card_num_mask', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['id_card_num_mask']) && (mb_strlen($this->container['id_card_num_mask']) < 18)) {
            $invalidProperties[] = "invalid value for 'id_card_num_mask', the character length must be bigger than or equal to 18.";
        }

        if (!is_null($this->container['id_card_num_md5']) && (mb_strlen($this->container['id_card_num_md5']) > 32)) {
            $invalidProperties[] = "invalid value for 'id_card_num_md5', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['id_card_num_md5']) && (mb_strlen($this->container['id_card_num_md5']) < 32)) {
            $invalidProperties[] = "invalid value for 'id_card_num_md5', the character length must be bigger than or equal to 32.";
        }

        if (null === $this->container['bank_name']) {
            $invalidProperties[] = "'bank_name' can't be null";
        }
        if (null === $this->container['account_type']) {
            $invalidProperties[] = "'account_type' can't be null";
        }
        if (null === $this->container['bank_account_name']) {
            $invalidProperties[] = "'bank_account_name' can't be null";
        }
        if (null === $this->container['bank_account_number_last4']) {
            $invalidProperties[] = "'bank_account_number_last4' can't be null";
        }
        if (null === $this->container['withdraw_cycle']) {
            $invalidProperties[] = "'withdraw_cycle' can't be null";
        }
        if (null === $this->container['receiver_withdraw_cycle']) {
            $invalidProperties[] = "'receiver_withdraw_cycle' can't be null";
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
     * Gets receiver_type.
     *
     * @return \Entpay\Mse\Client\Model\ProfitAllocationReceiverTypeEnum
     */
    public function getReceiverType()
    {
        return $this->container['receiver_type'];
    }

    /**
     * Sets receiver_type.
     *
     * @param \Entpay\Mse\Client\Model\ProfitAllocationReceiverTypeEnum $receiver_type receiver_type
     *
     * @return self
     */
    public function setReceiverType($receiver_type)
    {
        $this->container['receiver_type'] = $receiver_type;

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
     * Gets out_receiver_name.
     *
     * @return string|null
     */
    public function getOutReceiverName()
    {
        return $this->container['out_receiver_name'];
    }

    /**
     * Sets out_receiver_name.
     *
     * @param string|null $out_receiver_name out_receiver_name
     *
     * @return self
     */
    public function setOutReceiverName($out_receiver_name)
    {
        $this->container['out_receiver_name'] = $out_receiver_name;

        return $this;
    }

    /**
     * Gets unified_social_credit_code.
     *
     * @return string|null
     */
    public function getUnifiedSocialCreditCode()
    {
        return $this->container['unified_social_credit_code'];
    }

    /**
     * Sets unified_social_credit_code.
     *
     * @param string|null $unified_social_credit_code unified_social_credit_code
     *
     * @return self
     */
    public function setUnifiedSocialCreditCode($unified_social_credit_code)
    {
        $this->container['unified_social_credit_code'] = $unified_social_credit_code;

        return $this;
    }

    /**
     * Gets id_card_num_mask.
     *
     * @return string|null
     */
    public function getIdCardNumMask()
    {
        return $this->container['id_card_num_mask'];
    }

    /**
     * Sets id_card_num_mask.
     *
     * @param string|null $id_card_num_mask id_card_num_mask
     *
     * @return self
     */
    public function setIdCardNumMask($id_card_num_mask)
    {
        $this->container['id_card_num_mask'] = $id_card_num_mask;

        return $this;
    }

    /**
     * Gets id_card_num_md5.
     *
     * @return string|null
     */
    public function getIdCardNumMd5()
    {
        return $this->container['id_card_num_md5'];
    }

    /**
     * Sets id_card_num_md5.
     *
     * @param string|null $id_card_num_md5 id_card_num_md5
     *
     * @return self
     */
    public function setIdCardNumMd5($id_card_num_md5)
    {
        $this->container['id_card_num_md5'] = $id_card_num_md5;

        return $this;
    }

    /**
     * Gets bank_name.
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name.
     *
     * @param string $bank_name bank_name
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets account_type.
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type.
     *
     * @param string $account_type account_type
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
     * @return string
     */
    public function getBankAccountName()
    {
        return $this->container['bank_account_name'];
    }

    /**
     * Sets bank_account_name.
     *
     * @param string $bank_account_name bank_account_name
     *
     * @return self
     */
    public function setBankAccountName($bank_account_name)
    {
        $this->container['bank_account_name'] = $bank_account_name;

        return $this;
    }

    /**
     * Gets bank_account_number_last4.
     *
     * @return string
     */
    public function getBankAccountNumberLast4()
    {
        return $this->container['bank_account_number_last4'];
    }

    /**
     * Sets bank_account_number_last4.
     *
     * @param string $bank_account_number_last4 bank_account_number_last4
     *
     * @return self
     */
    public function setBankAccountNumberLast4($bank_account_number_last4)
    {
        $this->container['bank_account_number_last4'] = $bank_account_number_last4;

        return $this;
    }

    /**
     * Gets withdraw_cycle.
     *
     * @return \Entpay\Mse\Client\Model\WithDrawCycle
     */
    public function getWithdrawCycle()
    {
        return $this->container['withdraw_cycle'];
    }

    /**
     * Sets withdraw_cycle.
     *
     * @param \Entpay\Mse\Client\Model\WithDrawCycle $withdraw_cycle withdraw_cycle
     *
     * @return self
     */
    public function setWithdrawCycle($withdraw_cycle)
    {
        $this->container['withdraw_cycle'] = $withdraw_cycle;

        return $this;
    }

    /**
     * Gets receiver_withdraw_cycle.
     *
     * @return \Entpay\Mse\Client\Model\WithDrawCycle
     */
    public function getReceiverWithdrawCycle()
    {
        return $this->container['receiver_withdraw_cycle'];
    }

    /**
     * Sets receiver_withdraw_cycle.
     *
     * @param \Entpay\Mse\Client\Model\WithDrawCycle $receiver_withdraw_cycle receiver_withdraw_cycle
     *
     * @return self
     */
    public function setReceiverWithdrawCycle($receiver_withdraw_cycle)
    {
        $this->container['receiver_withdraw_cycle'] = $receiver_withdraw_cycle;

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
