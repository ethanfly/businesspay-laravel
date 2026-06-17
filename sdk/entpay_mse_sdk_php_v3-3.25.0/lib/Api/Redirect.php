<?php
/**
 * Redirect.
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
 * Redirect Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class Redirect implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Redirect';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'pc_web'        => '\Entpay\Mse\Client\Model\PcWeb',
        'pc_plugin'     => '\Entpay\Mse\Client\Model\PcPlugin',
        'wx_qrcode'     => '\Entpay\Mse\Client\Model\WxQrcode',
        'mini_program'  => '\Entpay\Mse\Client\Model\MiniProgram',
        'app_h5'        => '\Entpay\Mse\Client\Model\AppH5',
        'static_qrcode' => '\Entpay\Mse\Client\Model\StaticQrcode',
        'wx_h5'         => '\Entpay\Mse\Client\Model\WxH5',
        'wecom_h5'      => '\Entpay\Mse\Client\Model\WecomH5',
        'trans_h5'      => '\Entpay\Mse\Client\Model\TransH5',
        'pc_h5'         => '\Entpay\Mse\Client\Model\PcH5',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'pc_web'        => null,
        'pc_plugin'     => null,
        'wx_qrcode'     => null,
        'mini_program'  => null,
        'app_h5'        => null,
        'static_qrcode' => null,
        'wx_h5'         => null,
        'wecom_h5'      => null,
        'trans_h5'      => null,
        'pc_h5'         => null,
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
        'pc_web'        => 'pc_web',
        'pc_plugin'     => 'pc_plugin',
        'wx_qrcode'     => 'wx_qrcode',
        'mini_program'  => 'mini_program',
        'app_h5'        => 'app_h5',
        'static_qrcode' => 'static_qrcode',
        'wx_h5'         => 'wx_h5',
        'wecom_h5'      => 'wecom_h5',
        'trans_h5'      => 'trans_h5',
        'pc_h5'         => 'pc_h5',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'pc_web'        => 'setPcWeb',
        'pc_plugin'     => 'setPcPlugin',
        'wx_qrcode'     => 'setWxQrcode',
        'mini_program'  => 'setMiniProgram',
        'app_h5'        => 'setAppH5',
        'static_qrcode' => 'setStaticQrcode',
        'wx_h5'         => 'setWxH5',
        'wecom_h5'      => 'setWecomH5',
        'trans_h5'      => 'setTransH5',
        'pc_h5'         => 'setPcH5',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'pc_web'        => 'getPcWeb',
        'pc_plugin'     => 'getPcPlugin',
        'wx_qrcode'     => 'getWxQrcode',
        'mini_program'  => 'getMiniProgram',
        'app_h5'        => 'getAppH5',
        'static_qrcode' => 'getStaticQrcode',
        'wx_h5'         => 'getWxH5',
        'wecom_h5'      => 'getWecomH5',
        'trans_h5'      => 'getTransH5',
        'pc_h5'         => 'getPcH5',
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
        $this->container['pc_web']        = isset($data['pc_web']) ? $data['pc_web'] : null;
        $this->container['pc_plugin']     = isset($data['pc_plugin']) ? $data['pc_plugin'] : null;
        $this->container['wx_qrcode']     = isset($data['wx_qrcode']) ? $data['wx_qrcode'] : null;
        $this->container['mini_program']  = isset($data['mini_program']) ? $data['mini_program'] : null;
        $this->container['app_h5']        = isset($data['app_h5']) ? $data['app_h5'] : null;
        $this->container['static_qrcode'] = isset($data['static_qrcode']) ? $data['static_qrcode'] : null;
        $this->container['wx_h5']         = isset($data['wx_h5']) ? $data['wx_h5'] : null;
        $this->container['wecom_h5']      = isset($data['wecom_h5']) ? $data['wecom_h5'] : null;
        $this->container['trans_h5']      = isset($data['trans_h5']) ? $data['trans_h5'] : null;
        $this->container['pc_h5']         = isset($data['pc_h5']) ? $data['pc_h5'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['mini_program']) {
            $invalidProperties[] = "'mini_program' can't be null";
        }
        if (null === $this->container['app_h5']) {
            $invalidProperties[] = "'app_h5' can't be null";
        }
        if (null === $this->container['static_qrcode']) {
            $invalidProperties[] = "'static_qrcode' can't be null";
        }
        if (null === $this->container['wx_h5']) {
            $invalidProperties[] = "'wx_h5' can't be null";
        }
        if (null === $this->container['wecom_h5']) {
            $invalidProperties[] = "'wecom_h5' can't be null";
        }
        if (null === $this->container['pc_h5']) {
            $invalidProperties[] = "'pc_h5' can't be null";
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
     * Gets pc_web.
     *
     * @return \Entpay\Mse\Client\Model\PcWeb|null
     */
    public function getPcWeb()
    {
        return $this->container['pc_web'];
    }

    /**
     * Sets pc_web.
     *
     * @param \Entpay\Mse\Client\Model\PcWeb|null $pc_web pc_web
     *
     * @return self
     */
    public function setPcWeb($pc_web)
    {
        $this->container['pc_web'] = $pc_web;

        return $this;
    }

    /**
     * Gets pc_plugin.
     *
     * @return \Entpay\Mse\Client\Model\PcPlugin|null
     */
    public function getPcPlugin()
    {
        return $this->container['pc_plugin'];
    }

    /**
     * Sets pc_plugin.
     *
     * @param \Entpay\Mse\Client\Model\PcPlugin|null $pc_plugin pc_plugin
     *
     * @return self
     */
    public function setPcPlugin($pc_plugin)
    {
        $this->container['pc_plugin'] = $pc_plugin;

        return $this;
    }

    /**
     * Gets wx_qrcode.
     *
     * @return \Entpay\Mse\Client\Model\WxQrcode|null
     */
    public function getWxQrcode()
    {
        return $this->container['wx_qrcode'];
    }

    /**
     * Sets wx_qrcode.
     *
     * @param \Entpay\Mse\Client\Model\WxQrcode|null $wx_qrcode wx_qrcode
     *
     * @return self
     */
    public function setWxQrcode($wx_qrcode)
    {
        $this->container['wx_qrcode'] = $wx_qrcode;

        return $this;
    }

    /**
     * Gets mini_program.
     *
     * @return \Entpay\Mse\Client\Model\MiniProgram
     */
    public function getMiniProgram()
    {
        return $this->container['mini_program'];
    }

    /**
     * Sets mini_program.
     *
     * @param \Entpay\Mse\Client\Model\MiniProgram $mini_program mini_program
     *
     * @return self
     */
    public function setMiniProgram($mini_program)
    {
        $this->container['mini_program'] = $mini_program;

        return $this;
    }

    /**
     * Gets app_h5.
     *
     * @return \Entpay\Mse\Client\Model\AppH5
     */
    public function getAppH5()
    {
        return $this->container['app_h5'];
    }

    /**
     * Sets app_h5.
     *
     * @param \Entpay\Mse\Client\Model\AppH5 $app_h5 app_h5
     *
     * @return self
     */
    public function setAppH5($app_h5)
    {
        $this->container['app_h5'] = $app_h5;

        return $this;
    }

    /**
     * Gets static_qrcode.
     *
     * @return \Entpay\Mse\Client\Model\StaticQrcode
     */
    public function getStaticQrcode()
    {
        return $this->container['static_qrcode'];
    }

    /**
     * Sets static_qrcode.
     *
     * @param \Entpay\Mse\Client\Model\StaticQrcode $static_qrcode static_qrcode
     *
     * @return self
     */
    public function setStaticQrcode($static_qrcode)
    {
        $this->container['static_qrcode'] = $static_qrcode;

        return $this;
    }

    /**
     * Gets wx_h5.
     *
     * @return \Entpay\Mse\Client\Model\WxH5
     */
    public function getWxH5()
    {
        return $this->container['wx_h5'];
    }

    /**
     * Sets wx_h5.
     *
     * @param \Entpay\Mse\Client\Model\WxH5 $wx_h5 wx_h5
     *
     * @return self
     */
    public function setWxH5($wx_h5)
    {
        $this->container['wx_h5'] = $wx_h5;

        return $this;
    }

    /**
     * Gets wecom_h5.
     *
     * @return \Entpay\Mse\Client\Model\WecomH5
     */
    public function getWecomH5()
    {
        return $this->container['wecom_h5'];
    }

    /**
     * Sets wecom_h5.
     *
     * @param \Entpay\Mse\Client\Model\WecomH5 $wecom_h5 wecom_h5
     *
     * @return self
     */
    public function setWecomH5($wecom_h5)
    {
        $this->container['wecom_h5'] = $wecom_h5;

        return $this;
    }

    /**
     * Gets trans_h5.
     *
     * @return \Entpay\Mse\Client\Model\TransH5|null
     */
    public function getTransH5()
    {
        return $this->container['trans_h5'];
    }

    /**
     * Sets trans_h5.
     *
     * @param \Entpay\Mse\Client\Model\TransH5|null $trans_h5 trans_h5
     *
     * @return self
     */
    public function setTransH5($trans_h5)
    {
        $this->container['trans_h5'] = $trans_h5;

        return $this;
    }

    /**
     * Gets pc_h5.
     *
     * @return \Entpay\Mse\Client\Model\PcH5
     */
    public function getPcH5()
    {
        return $this->container['pc_h5'];
    }

    /**
     * Sets pc_h5.
     *
     * @param \Entpay\Mse\Client\Model\PcH5 $pc_h5 pc_h5
     *
     * @return self
     */
    public function setPcH5($pc_h5)
    {
        $this->container['pc_h5'] = $pc_h5;

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
     * @param \Entpay\Mse\Client\Model\RedirectParam   $redirect_param  (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return Redirect
     */
    public static function create($redirect_param, $request_options = null)
    {
        $path = '/v3/mse-pay/redirects';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $redirect_param,
            Redirect::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'createRechargeRedirect'.
     *
     * @param \Entpay\Mse\Client\Model\RechargeRedirectParam $recharge_redirect_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions       $request_options         (optional)
     *
     * @throws \InvalidArgumentException
     * @return Redirect
     */
    public static function createRechargeRedirect($recharge_redirect_param, $request_options = null)
    {
        $path = '/v3/mse-pay/prepaid-card/recharge/redirects';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $recharge_redirect_param,
            Redirect::class,
            $request_options
        );
    }
}
