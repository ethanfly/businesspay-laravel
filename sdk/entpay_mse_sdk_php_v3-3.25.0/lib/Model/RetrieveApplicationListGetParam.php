<?php
/**
 * RetrieveApplicationListGetParam.
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
 * RetrieveApplicationListGetParam Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RetrieveApplicationListGetParam implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'RetrieveApplicationListGetParam';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'role_name_list' => 'string[]',
        'ent_id'         => 'string',
        'status_list'    => 'string[]',
        'page_no'        => 'int',
        'page_size'      => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'role_name_list' => null,
        'ent_id'         => null,
        'status_list'    => null,
        'page_no'        => 'int32',
        'page_size'      => 'int32',
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
        'role_name_list' => 'role_name_list',
        'ent_id'         => 'ent_id',
        'status_list'    => 'status_list',
        'page_no'        => 'page_no',
        'page_size'      => 'page_size',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'role_name_list' => 'setRoleNameList',
        'ent_id'         => 'setEntId',
        'status_list'    => 'setStatusList',
        'page_no'        => 'setPageNo',
        'page_size'      => 'setPageSize',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'role_name_list' => 'getRoleNameList',
        'ent_id'         => 'getEntId',
        'status_list'    => 'getStatusList',
        'page_no'        => 'getPageNo',
        'page_size'      => 'getPageSize',
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
        $this->container['role_name_list'] = isset($data['role_name_list']) ? $data['role_name_list'] : null;
        $this->container['ent_id']         = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['status_list']    = isset($data['status_list']) ? $data['status_list'] : null;
        $this->container['page_no']        = isset($data['page_no']) ? $data['page_no'] : null;
        $this->container['page_size']      = isset($data['page_size']) ? $data['page_size'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['ent_id']) && (mb_strlen($this->container['ent_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['ent_id']) && (mb_strlen($this->container['ent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['ent_id']) && !preg_match('/^[0-9]*$/', $this->container['ent_id'])) {
            $invalidProperties[] = "invalid value for 'ent_id', must be conform to the pattern /^[0-9]*$/.";
        }

        if (!is_null($this->container['page_no']) && ($this->container['page_no'] < 1)) {
            $invalidProperties[] = "invalid value for 'page_no', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['page_size']) && ($this->container['page_size'] > 50)) {
            $invalidProperties[] = "invalid value for 'page_size', must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['page_size']) && ($this->container['page_size'] < 1)) {
            $invalidProperties[] = "invalid value for 'page_size', must be bigger than or equal to 1.";
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
     * Gets role_name_list.
     *
     * @return string[]|null
     */
    public function getRoleNameList()
    {
        return $this->container['role_name_list'];
    }

    /**
     * Sets role_name_list.
     *
     * @param string[]|null $role_name_list 角色名列表
     *
     * @return self
     */
    public function setRoleNameList($role_name_list)
    {
        $this->container['role_name_list'] = $role_name_list;

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
     * @param string|null $ent_id 企业ID
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

        return $this;
    }

    /**
     * Gets status_list.
     *
     * @return string[]|null
     */
    public function getStatusList()
    {
        return $this->container['status_list'];
    }

    /**
     * Sets status_list.
     *
     * @param string[]|null $status_list 申请状态列表
     *
     * @return self
     */
    public function setStatusList($status_list)
    {
        $this->container['status_list'] = $status_list;

        return $this;
    }

    /**
     * Gets page_no.
     *
     * @return int|null
     */
    public function getPageNo()
    {
        return $this->container['page_no'];
    }

    /**
     * Sets page_no.
     *
     * @param int|null $page_no page_no
     *
     * @return self
     */
    public function setPageNo($page_no)
    {
        $this->container['page_no'] = $page_no;

        return $this;
    }

    /**
     * Gets page_size.
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size.
     *
     * @param int|null $page_size page_size
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

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
