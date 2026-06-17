<?php
/**
 * FrontCallbackUrl.
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
 * FrontCallbackUrl Class Doc Comment.
 *
 * @category Class
 * @description 前端回跳地址
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FrontCallbackUrl implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'FrontCallbackUrl';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'android_url'  => 'string',
        'ios_url'      => 'string',
        'h5_url'       => 'string',
        'mp_path'      => 'string',
        'mp_appid'     => 'string',
        'mp_username'  => 'string',
        'mp_urlscheme' => 'string',
        'pc_url'       => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'android_url'  => null,
        'ios_url'      => null,
        'h5_url'       => null,
        'mp_path'      => null,
        'mp_appid'     => null,
        'mp_username'  => null,
        'mp_urlscheme' => null,
        'pc_url'       => null,
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
        'android_url'  => 'android_url',
        'ios_url'      => 'ios_url',
        'h5_url'       => 'h5_url',
        'mp_path'      => 'mp_path',
        'mp_appid'     => 'mp_appid',
        'mp_username'  => 'mp_username',
        'mp_urlscheme' => 'mp_urlscheme',
        'pc_url'       => 'pc_url',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'android_url'  => 'setAndroidUrl',
        'ios_url'      => 'setIosUrl',
        'h5_url'       => 'setH5Url',
        'mp_path'      => 'setMpPath',
        'mp_appid'     => 'setMpAppid',
        'mp_username'  => 'setMpUsername',
        'mp_urlscheme' => 'setMpUrlscheme',
        'pc_url'       => 'setPcUrl',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'android_url'  => 'getAndroidUrl',
        'ios_url'      => 'getIosUrl',
        'h5_url'       => 'getH5Url',
        'mp_path'      => 'getMpPath',
        'mp_appid'     => 'getMpAppid',
        'mp_username'  => 'getMpUsername',
        'mp_urlscheme' => 'getMpUrlscheme',
        'pc_url'       => 'getPcUrl',
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
        $this->container['android_url']  = isset($data['android_url']) ? $data['android_url'] : null;
        $this->container['ios_url']      = isset($data['ios_url']) ? $data['ios_url'] : null;
        $this->container['h5_url']       = isset($data['h5_url']) ? $data['h5_url'] : null;
        $this->container['mp_path']      = isset($data['mp_path']) ? $data['mp_path'] : null;
        $this->container['mp_appid']     = isset($data['mp_appid']) ? $data['mp_appid'] : null;
        $this->container['mp_username']  = isset($data['mp_username']) ? $data['mp_username'] : null;
        $this->container['mp_urlscheme'] = isset($data['mp_urlscheme']) ? $data['mp_urlscheme'] : null;
        $this->container['pc_url']       = isset($data['pc_url']) ? $data['pc_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['android_url']) && (mb_strlen($this->container['android_url']) > 1024)) {
            $invalidProperties[] = "invalid value for 'android_url', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['android_url']) && (mb_strlen($this->container['android_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'android_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['android_url']) && !preg_match('/^([a-zA-Z][a-zA-Z0-9+\\-.]*):.*/', $this->container['android_url'])) {
            $invalidProperties[] = "invalid value for 'android_url', must be conform to the pattern /^([a-zA-Z][a-zA-Z0-9+\\-.]*):.*/.";
        }

        if (!is_null($this->container['ios_url']) && (mb_strlen($this->container['ios_url']) > 1024)) {
            $invalidProperties[] = "invalid value for 'ios_url', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['ios_url']) && (mb_strlen($this->container['ios_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'ios_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['ios_url']) && !preg_match('/^([a-zA-Z][a-zA-Z0-9+\\-.]*):.*/', $this->container['ios_url'])) {
            $invalidProperties[] = "invalid value for 'ios_url', must be conform to the pattern /^([a-zA-Z][a-zA-Z0-9+\\-.]*):.*/.";
        }

        if (!is_null($this->container['h5_url']) && (mb_strlen($this->container['h5_url']) > 1024)) {
            $invalidProperties[] = "invalid value for 'h5_url', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['h5_url']) && (mb_strlen($this->container['h5_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'h5_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['h5_url']) && !preg_match("/^(http|https):\/\/.*$/", $this->container['h5_url'])) {
            $invalidProperties[] = "invalid value for 'h5_url', must be conform to the pattern /^(http|https):\/\/.*$/.";
        }

        if (!is_null($this->container['mp_path']) && (mb_strlen($this->container['mp_path']) > 1024)) {
            $invalidProperties[] = "invalid value for 'mp_path', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['mp_path']) && (mb_strlen($this->container['mp_path']) < 1)) {
            $invalidProperties[] = "invalid value for 'mp_path', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['mp_appid']) && (mb_strlen($this->container['mp_appid']) > 64)) {
            $invalidProperties[] = "invalid value for 'mp_appid', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['mp_appid']) && (mb_strlen($this->container['mp_appid']) < 1)) {
            $invalidProperties[] = "invalid value for 'mp_appid', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['mp_username']) && (mb_strlen($this->container['mp_username']) > 64)) {
            $invalidProperties[] = "invalid value for 'mp_username', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['mp_username']) && (mb_strlen($this->container['mp_username']) < 1)) {
            $invalidProperties[] = "invalid value for 'mp_username', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['mp_urlscheme']) && (mb_strlen($this->container['mp_urlscheme']) > 64)) {
            $invalidProperties[] = "invalid value for 'mp_urlscheme', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['mp_urlscheme']) && (mb_strlen($this->container['mp_urlscheme']) < 1)) {
            $invalidProperties[] = "invalid value for 'mp_urlscheme', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['pc_url']) && (mb_strlen($this->container['pc_url']) > 1024)) {
            $invalidProperties[] = "invalid value for 'pc_url', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['pc_url']) && (mb_strlen($this->container['pc_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'pc_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['pc_url']) && !preg_match("/^(http|https):\/\/.*$/", $this->container['pc_url'])) {
            $invalidProperties[] = "invalid value for 'pc_url', must be conform to the pattern /^(http|https):\/\/.*$/.";
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
     * Gets android_url.
     *
     * @return string|null
     */
    public function getAndroidUrl()
    {
        return $this->container['android_url'];
    }

    /**
     * Sets android_url.
     *
     * @param string|null $android_url APP-Android 支付完成前端回跳url
     *
     * @return self
     */
    public function setAndroidUrl($android_url)
    {
        $this->container['android_url'] = $android_url;

        return $this;
    }

    /**
     * Gets ios_url.
     *
     * @return string|null
     */
    public function getIosUrl()
    {
        return $this->container['ios_url'];
    }

    /**
     * Sets ios_url.
     *
     * @param string|null $ios_url App-IOS 支付完成前端回跳url
     *
     * @return self
     */
    public function setIosUrl($ios_url)
    {
        $this->container['ios_url'] = $ios_url;

        return $this;
    }

    /**
     * Gets h5_url.
     *
     * @return string|null
     */
    public function getH5Url()
    {
        return $this->container['h5_url'];
    }

    /**
     * Sets h5_url.
     *
     * @param string|null $h5_url 微信h5页面回跳地址
     *
     * @return self
     */
    public function setH5Url($h5_url)
    {
        $this->container['h5_url'] = $h5_url;

        return $this;
    }

    /**
     * Gets mp_path.
     *
     * @return string|null
     */
    public function getMpPath()
    {
        return $this->container['mp_path'];
    }

    /**
     * Sets mp_path.
     *
     * @param string|null $mp_path Mp 支付完成前端回跳小程序路径
     *
     * @return self
     */
    public function setMpPath($mp_path)
    {
        $this->container['mp_path'] = $mp_path;

        return $this;
    }

    /**
     * Gets mp_appid.
     *
     * @return string|null
     */
    public function getMpAppid()
    {
        return $this->container['mp_appid'];
    }

    /**
     * Sets mp_appid.
     *
     * @param string|null $mp_appid Mp 支付完成前端回跳小程序appid
     *
     * @return self
     */
    public function setMpAppid($mp_appid)
    {
        $this->container['mp_appid'] = $mp_appid;

        return $this;
    }

    /**
     * Gets mp_username.
     *
     * @return string|null
     */
    public function getMpUsername()
    {
        return $this->container['mp_username'];
    }

    /**
     * Sets mp_username.
     *
     * @param string|null $mp_username Mp 支付完成前端回跳小程序原始id
     *
     * @return self
     */
    public function setMpUsername($mp_username)
    {
        $this->container['mp_username'] = $mp_username;

        return $this;
    }

    /**
     * Gets mp_urlscheme.
     *
     * @return string|null
     */
    public function getMpUrlscheme()
    {
        return $this->container['mp_urlscheme'];
    }

    /**
     * Sets mp_urlscheme.
     *
     * @param string|null $mp_urlscheme Mp 支付完成前端回跳小程序urlscheme
     *
     * @return self
     */
    public function setMpUrlscheme($mp_urlscheme)
    {
        $this->container['mp_urlscheme'] = $mp_urlscheme;

        return $this;
    }

    /**
     * Gets pc_url.
     *
     * @return string|null
     */
    public function getPcUrl()
    {
        return $this->container['pc_url'];
    }

    /**
     * Sets pc_url.
     *
     * @param string|null $pc_url pc页面回跳地址
     *
     * @return self
     */
    public function setPcUrl($pc_url)
    {
        $this->container['pc_url'] = $pc_url;

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
