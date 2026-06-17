<?php
/**
 * EmployeeCreateParam.
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
 * EmployeeCreateParam Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EmployeeCreateParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'EmployeeCreateParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'out_request_no' => 'string',
        'ent_id'         => 'string',
        'role_name'      => 'string',
        'employee_info'  => '\Entpay\Mse\Client\Model\EmployeeInfo',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'out_request_no' => null,
        'ent_id'         => null,
        'role_name'      => null,
        'employee_info'  => 'encrypted|true',
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
        'out_request_no' => 'out_request_no',
        'ent_id'         => 'ent_id',
        'role_name'      => 'role_name',
        'employee_info'  => 'employee_info',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'out_request_no' => 'setOutRequestNo',
        'ent_id'         => 'setEntId',
        'role_name'      => 'setRoleName',
        'employee_info'  => 'setEmployeeInfo',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'out_request_no' => 'getOutRequestNo',
        'ent_id'         => 'getEntId',
        'role_name'      => 'getRoleName',
        'employee_info'  => 'getEmployeeInfo',
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
        $this->container['out_request_no'] = isset($data['out_request_no']) ? $data['out_request_no'] : null;
        $this->container['ent_id']         = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['role_name']      = isset($data['role_name']) ? $data['role_name'] : null;
        $this->container['employee_info']  = isset($data['employee_info']) ? $data['employee_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['out_request_no']) {
            $invalidProperties[] = "'out_request_no' can't be null";
        }
        if ((mb_strlen($this->container['out_request_no']) > 64)) {
            $invalidProperties[] = "invalid value for 'out_request_no', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['out_request_no']) < 1)) {
            $invalidProperties[] = "invalid value for 'out_request_no', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match('/^(\\w|-)+$/', $this->container['out_request_no'])) {
            $invalidProperties[] = "invalid value for 'out_request_no', must be conform to the pattern /^(\\w|-)+$/.";
        }

        if (null === $this->container['ent_id']) {
            $invalidProperties[] = "'ent_id' can't be null";
        }
        if ((mb_strlen($this->container['ent_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['ent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match('/^[0-9]*$/', $this->container['ent_id'])) {
            $invalidProperties[] = "invalid value for 'ent_id', must be conform to the pattern /^[0-9]*$/.";
        }

        if (null === $this->container['role_name']) {
            $invalidProperties[] = "'role_name' can't be null";
        }
        if ((mb_strlen($this->container['role_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'role_name', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['role_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'role_name', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match('/^[A-Z_]+$/', $this->container['role_name'])) {
            $invalidProperties[] = "invalid value for 'role_name', must be conform to the pattern /^[A-Z_]+$/.";
        }

        if (null === $this->container['employee_info']) {
            $invalidProperties[] = "'employee_info' can't be null";
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
     * Gets out_request_no.
     *
     * @return string
     */
    public function getOutRequestNo()
    {
        return $this->container['out_request_no'];
    }

    /**
     * Sets out_request_no.
     *
     * @param string $out_request_no 业务申请编号
     *
     * @return self
     */
    public function setOutRequestNo($out_request_no)
    {
        $this->container['out_request_no'] = $out_request_no;

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
     * @param string $ent_id 企业ID
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

        return $this;
    }

    /**
     * Gets role_name.
     *
     * @return string
     */
    public function getRoleName()
    {
        return $this->container['role_name'];
    }

    /**
     * Sets role_name.
     *
     * @param string $role_name 员工角色名
     *
     * @return self
     */
    public function setRoleName($role_name)
    {
        $this->container['role_name'] = $role_name;

        return $this;
    }

    /**
     * Gets employee_info.
     *
     * @return \Entpay\Mse\Client\Model\EmployeeInfo
     */
    public function getEmployeeInfo()
    {
        return $this->container['employee_info'];
    }

    /**
     * Sets employee_info.
     *
     * @param \Entpay\Mse\Client\Model\EmployeeInfo $employee_info employee_info
     *
     * @return self
     */
    public function setEmployeeInfo($employee_info)
    {
        $this->container['employee_info'] = $employee_info;

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
