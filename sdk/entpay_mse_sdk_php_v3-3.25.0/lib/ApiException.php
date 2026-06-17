<?php
/**
 * ApiException.
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

namespace Entpay\Mse\Client;

use ArrayAccess;
use Entpay\Mse\Client\Model\ModelInterface;
use Exception;
use JsonSerializable;

/**
 * ApiException Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class ApiException extends Exception implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ApiException';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'status_code' => 'int',
        'error_msg'   => 'string',
        'trace_id'    => 'string',
        'uri'         => 'string',
        'uri_pattern' => 'string',
        'error'       => 'Entpay\Mse\Client\ApiError',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'status_code' => 'int32',
        'error_msg'   => null,
        'trace_id'    => null,
        'uri'         => null,
        'uri_pattern' => null,
        'error'       => null,
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
        'status_code' => 'status_code',
        'error_msg'   => 'error_msg',
        'trace_id'    => 'trace_id',
        'uri'         => 'uri',
        'uri_pattern' => 'uri_pattern',
        'error'       => 'error',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'status_code' => 'setStatusCode',
        'error_msg'   => 'setErrorMsg',
        'trace_id'    => 'setTraceId',
        'uri'         => 'setUri',
        'uri_pattern' => 'setUriPattern',
        'error'       => 'setError',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'status_code' => 'getStatusCode',
        'error_msg'   => 'getErrorMsg',
        'trace_id'    => 'getTraceId',
        'uri'         => 'getUri',
        'uri_pattern' => 'getUriPattern',
        'error'       => 'getError',
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
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct($message = '', $code = 0, $error = null, $uri = null, $uriPattern = null, $traceId = null)
    {
        parent::__construct($message, $code);
        $this->container['status_code'] = isset($code) ? $code : null;
        $this->container['error_msg']   = isset($message) ? $message : null;
        $this->container['error']       = isset($error) ? $error : null;
        $this->container['uri']         = isset($uri) ? $uri : null;
        $this->container['uri_pattern'] = isset($uriPattern) ? $uriPattern : null;
        $this->container['trace_id']    = isset($traceId) ? $traceId : null;
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
     * Gets status_code.
     *
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code.
     *
     * @param int|null $status_code 状态码
     *
     * @return self
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets error_msg.
     *
     * @return string|null
     */
    public function getErrorMsg()
    {
        return $this->container['error_msg'];
    }

    /**
     * Sets error_msg.
     *
     * @param string|null $error_msg 错误信息
     *
     * @return self
     */
    public function setErrorMsg($error_msg)
    {
        $this->container['error_msg'] = $error_msg;

        return $this;
    }

    /**
     * Gets trace_id.
     *
     * @return string|null
     */
    public function getTraceId()
    {
        return $this->container['trace_id'];
    }

    /**
     * Sets trace_id.
     *
     * @param string|null $trace_id 链路id
     *
     * @return self
     */
    public function setTraceId($trace_id)
    {
        $this->container['trace_id'] = $trace_id;

        return $this;
    }

    /**
     * Gets uri.
     *
     * @return string|null
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri.
     *
     * @param string|null $uri uri
     *
     * @return self
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets uri_pattern.
     *
     * @return string|null
     */
    public function getUriPattern()
    {
        return $this->container['uri_pattern'];
    }

    /**
     * Sets uri_pattern.
     *
     * @param string|null $uri uriPattern
     *
     * @return self
     */
    public function setUriPattern($uri_pattern)
    {
        $this->container['uri_pattern'] = $uri_pattern;

        return $this;
    }

    /**
     * Gets error.
     *
     * @return ApiError|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets uri.
     *
     * @param ApiError|null $error 错误
     *
     * @return self
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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
