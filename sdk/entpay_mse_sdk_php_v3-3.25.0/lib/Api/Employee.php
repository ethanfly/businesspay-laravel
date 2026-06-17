<?php
/**
 * Employee.
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
use Entpay\Mse\Client\Model\EmployeeApplyList;
use Entpay\Mse\Client\Model\ModelInterface;
use Entpay\Mse\Client\ObjectSerializer;
use JsonSerializable;

/**
 * Employee Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class Employee implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Employee';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'employee_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'employee_id' => null,
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
        'employee_id' => 'employee_id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
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
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
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
     * Gets employee_id.
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id.
     *
     * @param string|null $employee_id 员工ID
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

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
     * Create request for operation 'create'.
     *
     * @param \Entpay\Mse\Client\Model\EmployeeCreateParam $employee_create_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions     $request_options       (optional)
     *
     * @throws \InvalidArgumentException
     * @return Employee
     */
    public static function create($employee_create_param, $request_options = null)
    {
        $path = '/v3/mse-pay/employees';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $employee_create_param,
            Employee::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'delete'.
     *
     * @param string                                   $ent_id          (required)
     * @param string                                   $employee_id     (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return
     */
    public static function delete($ent_id, $employee_id, $request_options = null)
    {
        $path = sprintf('/v3/mse-pay/enterprises/%s/employees/%s', urlencode($ent_id), urlencode($employee_id));

        return EntpayClient::getDefaultClient()->doRequest(
            'DELETE',
            $path,
            null,
            null,
            $request_options
        );
    }

    /**
     * Create request for operation 'retrieveApplicationList'.
     *
     * @param \Entpay\Mse\Client\Model\RetrieveApplicationListGetParam $param           (optional)
     * @param \Entpay\Mse\Client\Config\RequestOptions                 $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return EmployeeApplyList
     */
    public static function retrieveApplicationList($param = null, $request_options = null)
    {
        $path = '/v3/mse-pay/employees-applications';
        if (null != $param) {
            $path = $path . '?' . http_build_query($param->container);
        }

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            EmployeeApplyList::class,
            $request_options
        );
    }
}
