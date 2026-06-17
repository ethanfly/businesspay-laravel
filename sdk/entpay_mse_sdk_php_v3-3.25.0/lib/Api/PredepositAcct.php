<?php
/**
 * PredepositAcct.
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
use Entpay\Mse\Client\Model\PredepositAcctRedirect;
use Entpay\Mse\Client\ObjectSerializer;
use JsonSerializable;

/**
 * PredepositAcct Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class PredepositAcct implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PredepositAcct';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'predeposit_acct_id' => 'string',
        'ent_id'             => 'string',
        'balance'            => 'int',
        'status'             => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'predeposit_acct_id' => null,
        'ent_id'             => null,
        'balance'            => 'int64',
        'status'             => null,
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
        'predeposit_acct_id' => 'predeposit_acct_id',
        'ent_id'             => 'ent_id',
        'balance'            => 'balance',
        'status'             => 'status',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'predeposit_acct_id' => 'setPredepositAcctId',
        'ent_id'             => 'setEntId',
        'balance'            => 'setBalance',
        'status'             => 'setStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'predeposit_acct_id' => 'getPredepositAcctId',
        'ent_id'             => 'getEntId',
        'balance'            => 'getBalance',
        'status'             => 'getStatus',
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

    const STATUS_NORMAL = 'NORMAL';
    const STATUS_FREEZE = 'FREEZE';

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
        $this->container['predeposit_acct_id'] = isset($data['predeposit_acct_id']) ? $data['predeposit_acct_id'] : null;
        $this->container['ent_id']             = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['balance']            = isset($data['balance']) ? $data['balance'] : null;
        $this->container['status']             = isset($data['status']) ? $data['status'] : null;
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
     * Gets predeposit_acct_id.
     *
     * @return string|null
     */
    public function getPredepositAcctId()
    {
        return $this->container['predeposit_acct_id'];
    }

    /**
     * Sets predeposit_acct_id.
     *
     * @param string|null $predeposit_acct_id predeposit_acct_id
     *
     * @return self
     */
    public function setPredepositAcctId($predeposit_acct_id)
    {
        $this->container['predeposit_acct_id'] = $predeposit_acct_id;

        return $this;
    }

    /**
     * Gets ent_id.
     *
     * @return string|null
     */
    public function getEntId()
    {
        return $this->container['ent_id'];
    }

    /**
     * Sets ent_id.
     *
     * @param string|null $ent_id 企业id
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

        return $this;
    }

    /**
     * Gets balance.
     *
     * @return int|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance.
     *
     * @param int|null $balance 余额
     *
     * @return self
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

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
     * @param string|null $status 账户状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Create request for operation 'createMpRecharge'.
     *
     * @param \Entpay\Mse\Client\Model\PredepositAcctRechargeMpParam $predeposit_acct_recharge_mp_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions               $request_options                   (optional)
     *
     * @throws \InvalidArgumentException
     * @return PredepositAcctRedirect
     */
    public static function createMpRecharge($predeposit_acct_recharge_mp_param, $request_options = null)
    {
        $path = '/v3/mse-pay/predeposit/recharge/mp-recharge';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $predeposit_acct_recharge_mp_param,
            PredepositAcctRedirect::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrievePredepositAcct'.
     *
     * @param \Entpay\Mse\Client\Model\RetrievePredepositAcctParam $retrieve_predeposit_acct_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions             $request_options                (optional)
     *
     * @throws \InvalidArgumentException
     * @return PredepositAcct
     */
    public static function retrievePredepositAcct($retrieve_predeposit_acct_param, $request_options = null)
    {
        $path = '/v3/mse-pay/predeposit/account';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $retrieve_predeposit_acct_param,
            PredepositAcct::class,
            $request_options
        );
    }
}
