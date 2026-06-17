<?php
/**
 * BillDownload.
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
use Entpay\Mse\Client\Model\FileDownloadResponse;
use Entpay\Mse\Client\Model\ModelInterface;
use Entpay\Mse\Client\ObjectSerializer;
use JsonSerializable;

/**
 * BillDownload Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class BillDownload implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'BillDownload';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'hash_type'    => 'string',
        'hash_value'   => 'string',
        'download_url' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'hash_type'    => null,
        'hash_value'   => null,
        'download_url' => null,
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
        'hash_type'    => 'hash_type',
        'hash_value'   => 'hash_value',
        'download_url' => 'download_url',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'hash_type'    => 'setHashType',
        'hash_value'   => 'setHashValue',
        'download_url' => 'setDownloadUrl',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'hash_type'    => 'getHashType',
        'hash_value'   => 'getHashValue',
        'download_url' => 'getDownloadUrl',
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
        $this->container['hash_type']    = isset($data['hash_type']) ? $data['hash_type'] : null;
        $this->container['hash_value']   = isset($data['hash_value']) ? $data['hash_value'] : null;
        $this->container['download_url'] = isset($data['download_url']) ? $data['download_url'] : null;
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
     * Gets hash_type.
     *
     * @return string|null
     */
    public function getHashType()
    {
        return $this->container['hash_type'];
    }

    /**
     * Sets hash_type.
     *
     * @param string|null $hash_type hash_type
     *
     * @return self
     */
    public function setHashType($hash_type)
    {
        $this->container['hash_type'] = $hash_type;

        return $this;
    }

    /**
     * Gets hash_value.
     *
     * @return string|null
     */
    public function getHashValue()
    {
        return $this->container['hash_value'];
    }

    /**
     * Sets hash_value.
     *
     * @param string|null $hash_value hash_value
     *
     * @return self
     */
    public function setHashValue($hash_value)
    {
        $this->container['hash_value'] = $hash_value;

        return $this;
    }

    /**
     * Gets download_url.
     *
     * @return string|null
     */
    public function getDownloadUrl()
    {
        return $this->container['download_url'];
    }

    /**
     * Sets download_url.
     *
     * @param string|null $download_url download_url
     *
     * @return self
     */
    public function setDownloadUrl($download_url)
    {
        $this->container['download_url'] = $download_url;

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
     * @param \Entpay\Mse\Client\Model\BillDownloadParam $bill_download_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions   $request_options     (optional)
     *
     * @throws \InvalidArgumentException
     * @return BillDownload
     */
    public static function create($bill_download_param, $request_options = null)
    {
        $path = '/v3/mse-pay/bill-downloads';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $bill_download_param,
            BillDownload::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'createProfitAllocation'.
     *
     * @param \Entpay\Mse\Client\Model\ProfitBillDownloadParam $profit_bill_download_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions         $request_options            (optional)
     *
     * @throws \InvalidArgumentException
     * @return BillDownload
     */
    public static function createProfitAllocation($profit_bill_download_param, $request_options = null)
    {
        $path = '/v3/mse-pay/bill-downloads/profit-allocations';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $profit_bill_download_param,
            BillDownload::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'createProfitAllocationReceiver'.
     *
     * @param \Entpay\Mse\Client\Model\ProfitAllocationReceiverBillDownloadParam $profit_allocation_receiver_bill_download_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions                           $request_options                                (optional)
     *
     * @throws \InvalidArgumentException
     * @return BillDownload
     */
    public static function createProfitAllocationReceiver($profit_allocation_receiver_bill_download_param, $request_options = null)
    {
        $path = '/v3/mse-pay/bill-downloads/profit-allocations-receiver';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $profit_allocation_receiver_bill_download_param,
            BillDownload::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'createTradeAllocation'.
     *
     * @param \Entpay\Mse\Client\Model\PrepaidCardAllocationBillDownloadParam $prepaid_card_allocation_bill_download_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions                        $request_options                             (optional)
     *
     * @throws \InvalidArgumentException
     * @return BillDownload
     */
    public static function createTradeAllocation($prepaid_card_allocation_bill_download_param, $request_options = null)
    {
        $path = '/v3/mse-pay/bill-downloads/prepaid-card/trade-allocations';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $prepaid_card_allocation_bill_download_param,
            BillDownload::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'createTrans'.
     *
     * @param \Entpay\Mse\Client\Model\TransBillDownloadParam $trans_bill_download_param (required)
     * @param \Entpay\Mse\Client\Config\RequestOptions        $request_options           (optional)
     *
     * @throws \InvalidArgumentException
     * @return BillDownload
     */
    public static function createTrans($trans_bill_download_param, $request_options = null)
    {
        $path = '/v3/mse-pay/bill-downloads/trans';

        return EntpayClient::getDefaultClient()->doRequest(
            'POST',
            $path,
            $trans_bill_download_param,
            BillDownload::class,
            $request_options
        );
    }

    /**
     * Create request for operation 'download'.
     *
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return FileDownloadResponse
     */
    public function download($request_options = null)
    {
        $path = substr($this->getDownloadUrl(), strpos($this->getDownloadUrl(), '/v3'));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            FileDownloadResponse::class,
            $request_options,
            true
        );
    }

    /**
     * Create request for operation 'downloadProfitAllocation'.
     *
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return FileDownloadResponse
     */
    public function downloadProfitAllocation($request_options = null)
    {
        $path = substr($this->getDownloadUrl(), strpos($this->getDownloadUrl(), '/v3'));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            FileDownloadResponse::class,
            $request_options,
            true
        );
    }

    /**
     * Create request for operation 'downloadProfitAllocationReceiver'.
     *
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return FileDownloadResponse
     */
    public function downloadProfitAllocationReceiver($request_options = null)
    {
        $path = substr($this->getDownloadUrl(), strpos($this->getDownloadUrl(), '/v3'));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            FileDownloadResponse::class,
            $request_options,
            true
        );
    }

    /**
     * Create request for operation 'downloadTradeAllocation'.
     *
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return FileDownloadResponse
     */
    public function downloadTradeAllocation($request_options = null)
    {
        $path = substr($this->getDownloadUrl(), strpos($this->getDownloadUrl(), '/v3'));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            FileDownloadResponse::class,
            $request_options,
            true
        );
    }

    /**
     * Create request for operation 'downloadTrans'.
     *
     * @param \Entpay\Mse\Client\Config\RequestOptions $request_options (optional)
     *
     * @throws \InvalidArgumentException
     * @return FileDownloadResponse
     */
    public function downloadTrans($request_options = null)
    {
        $path = substr($this->getDownloadUrl(), strpos($this->getDownloadUrl(), '/v3'));

        return EntpayClient::getDefaultClient()->doRequest(
            'GET',
            $path,
            null,
            FileDownloadResponse::class,
            $request_options,
            true
        );
    }
}
