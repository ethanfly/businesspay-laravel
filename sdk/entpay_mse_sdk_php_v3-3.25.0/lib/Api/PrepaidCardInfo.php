<?php
/**
 * PrepaidCardInfo.
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
use Entpay\Mse\Client\ObjectSerializer;
use JsonSerializable;

/**
 * PrepaidCardInfo Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class PrepaidCardInfo implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PrepaidCardInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'mse_prepaid_card_id' => 'string',
        'out_prepaid_card_id' => 'string',
        'ent_id'              => 'string',
        'user_type'           => 'string',
        'status'              => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'mse_prepaid_card_id' => null,
        'out_prepaid_card_id' => null,
        'ent_id'              => null,
        'user_type'           => null,
        'status'              => null,
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
        'mse_prepaid_card_id' => 'mse_prepaid_card_id',
        'out_prepaid_card_id' => 'out_prepaid_card_id',
        'ent_id'              => 'ent_id',
        'user_type'           => 'user_type',
        'status'              => 'status',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'mse_prepaid_card_id' => 'setMsePrepaidCardId',
        'out_prepaid_card_id' => 'setOutPrepaidCardId',
        'ent_id'              => 'setEntId',
        'user_type'           => 'setUserType',
        'status'              => 'setStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'mse_prepaid_card_id' => 'getMsePrepaidCardId',
        'out_prepaid_card_id' => 'getOutPrepaidCardId',
        'ent_id'              => 'getEntId',
        'user_type'           => 'getUserType',
        'status'              => 'getStatus',
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

    const USER_TYPE_INDIVIDUAL = 'INDIVIDUAL';
    const USER_TYPE_ENTERPRISE = 'ENTERPRISE';
    const STATUS_INIT          = 'INIT';
    const STATUS_FREEZE        = 'FREEZE';
    const STATUS_ACTIVE        = 'ACTIVE';

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
        $this->container['mse_prepaid_card_id'] = isset($data['mse_prepaid_card_id']) ? $data['mse_prepaid_card_id'] : null;
        $this->container['out_prepaid_card_id'] = isset($data['out_prepaid_card_id']) ? $data['out_prepaid_card_id'] : null;
        $this->container['ent_id']              = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['user_type']           = isset($data['user_type']) ? $data['user_type'] : null;
        $this->container['status']              = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        if (null === $this->container['ent_id']) {
            $invalidProperties[] = "'ent_id' can't be null";
        }
        if ((mb_strlen($this->container['ent_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['ent_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be bigger than or equal to 10.";
        }

        if (null === $this->container['user_type']) {
            $invalidProperties[] = "'user_type' can't be null";
        }
        if (null === $this->container['status']) {
            $invalidProperties[] = "'status' can't be null";
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
     * @param string $mse_prepaid_card_id 预付卡微企付绑定Id
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
     * @param string $out_prepaid_card_id 外部预付卡Id
     *
     * @return self
     */
    public function setOutPrepaidCardId($out_prepaid_card_id)
    {
        $this->container['out_prepaid_card_id'] = $out_prepaid_card_id;

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
     * @param string $ent_id 企业Id
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

        return $this;
    }

    /**
     * Gets user_type.
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->container['user_type'];
    }

    /**
     * Sets user_type.
     *
     * @param string $user_type 用户类型
     *
     * @return self
     */
    public function setUserType($user_type)
    {
        $this->container['user_type'] = $user_type;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string $status 预付卡状态
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
     * Create request for operation 'register'.
     *
     * @param \Entpay\Mse\Client\Model\PrepaidCardRegisterParam $prepaid_card_register_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions          $request_options             (optional)
     *
     * @throws \InvalidArgumentException
     * @return PrepaidCardInfo
     */
    public static function register($prepaid_card_register_param, $request_options = null)
    {
        $path = '/v3/mse-pay/prepaid-card/register';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $prepaid_card_register_param,
            PrepaidCardInfo::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieve'.
     *
     * @param string                                   $ent_id              (required)
     * @param string                                   $out_prepaid_card_id (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options     (optional)
     *
     * @throws \InvalidArgumentException
     * @return PrepaidCardInfo
     */
    public static function retrieve($ent_id, $out_prepaid_card_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/prepaid-card/card-info/%s/%s', urlencode($ent_id), urlencode($out_prepaid_card_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            PrepaidCardInfo::class,
            $request_options
        );
    }
}
