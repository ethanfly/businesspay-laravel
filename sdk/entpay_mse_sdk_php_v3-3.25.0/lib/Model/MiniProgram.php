<?php
/**
 * MiniProgram.
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
 * MiniProgram Class Doc Comment.
 *
 * @category Class
 * @description 小程序跳转参数
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MiniProgram implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'MiniProgram';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'mp_appid'    => 'string',
        'mp_path'     => 'string',
        'mp_username' => 'string',
        'mp_version'  => 'string',
        'expire_time' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'mp_appid'    => null,
        'mp_path'     => null,
        'mp_username' => null,
        'mp_version'  => null,
        'expire_time' => 'date-time',
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
        'mp_appid'    => 'mp_appid',
        'mp_path'     => 'mp_path',
        'mp_username' => 'mp_username',
        'mp_version'  => 'mp_version',
        'expire_time' => 'expire_time',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'mp_appid'    => 'setMpAppid',
        'mp_path'     => 'setMpPath',
        'mp_username' => 'setMpUsername',
        'mp_version'  => 'setMpVersion',
        'expire_time' => 'setExpireTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'mp_appid'    => 'getMpAppid',
        'mp_path'     => 'getMpPath',
        'mp_username' => 'getMpUsername',
        'mp_version'  => 'getMpVersion',
        'expire_time' => 'getExpireTime',
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
        $this->container['mp_appid']    = isset($data['mp_appid']) ? $data['mp_appid'] : null;
        $this->container['mp_path']     = isset($data['mp_path']) ? $data['mp_path'] : null;
        $this->container['mp_username'] = isset($data['mp_username']) ? $data['mp_username'] : null;
        $this->container['mp_version']  = isset($data['mp_version']) ? $data['mp_version'] : null;
        $this->container['expire_time'] = isset($data['expire_time']) ? $data['expire_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['mp_appid']) {
            $invalidProperties[] = "'mp_appid' can't be null";
        }
        if ((mb_strlen($this->container['mp_appid']) > 256)) {
            $invalidProperties[] = "invalid value for 'mp_appid', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['mp_appid']) < 1)) {
            $invalidProperties[] = "invalid value for 'mp_appid', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['mp_path']) {
            $invalidProperties[] = "'mp_path' can't be null";
        }
        if ((mb_strlen($this->container['mp_path']) > 1024)) {
            $invalidProperties[] = "invalid value for 'mp_path', the character length must be smaller than or equal to 1024.";
        }

        if ((mb_strlen($this->container['mp_path']) < 1)) {
            $invalidProperties[] = "invalid value for 'mp_path', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['mp_username']) {
            $invalidProperties[] = "'mp_username' can't be null";
        }
        if ((mb_strlen($this->container['mp_username']) > 256)) {
            $invalidProperties[] = "invalid value for 'mp_username', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['mp_username']) < 1)) {
            $invalidProperties[] = "invalid value for 'mp_username', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['mp_version']) {
            $invalidProperties[] = "'mp_version' can't be null";
        }
        if ((mb_strlen($this->container['mp_version']) > 64)) {
            $invalidProperties[] = "invalid value for 'mp_version', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['mp_version']) < 1)) {
            $invalidProperties[] = "invalid value for 'mp_version', the character length must be bigger than or equal to 1.";
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
     * Gets mp_appid.
     *
     * @return string
     */
    public function getMpAppid()
    {
        return $this->container['mp_appid'];
    }

    /**
     * Sets mp_appid.
     *
     * @param string $mp_appid 小程序appid
     *
     * @return self
     */
    public function setMpAppid($mp_appid)
    {
        $this->container['mp_appid'] = $mp_appid;

        return $this;
    }

    /**
     * Gets mp_path.
     *
     * @return string
     */
    public function getMpPath()
    {
        return $this->container['mp_path'];
    }

    /**
     * Sets mp_path.
     *
     * @param string $mp_path 小程序路径
     *
     * @return self
     */
    public function setMpPath($mp_path)
    {
        $this->container['mp_path'] = $mp_path;

        return $this;
    }

    /**
     * Gets mp_username.
     *
     * @return string
     */
    public function getMpUsername()
    {
        return $this->container['mp_username'];
    }

    /**
     * Sets mp_username.
     *
     * @param string $mp_username 小程序原始id
     *
     * @return self
     */
    public function setMpUsername($mp_username)
    {
        $this->container['mp_username'] = $mp_username;

        return $this;
    }

    /**
     * Gets mp_version.
     *
     * @return string
     */
    public function getMpVersion()
    {
        return $this->container['mp_version'];
    }

    /**
     * Sets mp_version.
     *
     * @param string $mp_version 小程序版本
     *
     * @return self
     */
    public function setMpVersion($mp_version)
    {
        $this->container['mp_version'] = $mp_version;

        return $this;
    }

    /**
     * Gets expire_time.
     *
     * @return \DateTime|null
     */
    public function getExpireTime()
    {
        return $this->container['expire_time'];
    }

    /**
     * Sets expire_time.
     *
     * @param \DateTime|null $expire_time 跳转凭证过期时间
     *
     * @return self
     */
    public function setExpireTime($expire_time)
    {
        $this->container['expire_time'] = $expire_time;

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
