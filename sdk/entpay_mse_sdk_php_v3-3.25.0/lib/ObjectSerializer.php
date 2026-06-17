<?php
/**
 * ObjectSerializer.
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

use Entpay\Mse\Client\Model\ModelInterface;
use Entpay\Mse\Client\Utils\EncryptFormat;
use Entpay\Mse\Client\Utils\Sm4;

/**
 * ObjectSerializer Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class ObjectSerializer
{
    /** @var string */
    private static $dateTimeFormat = 'Y-m-d\TH:i:sP';

    /**
     * Change the date format.
     *
     * @param string $format the new date format to use
     */
    public static function setDateTimeFormat($format)
    {
        self::$dateTimeFormat = $format;
    }

    /**
     * Serialize data.
     *
     * @param mixed  $data   the data to serialize
     * @param string $format the format of the OpenAPITools type of the data
     *
     * @return scalar|object|array|null serialized form of $data
     */
    public static function sanitizeForSerialization($data, $encrypt = null, $format = null, $encryptFlag = 'true')
    {
        if ('encrypted|false' == $format && 'true' == $encryptFlag) {
            if (is_object($data) || is_array($data)) {
                $encryptFlag = 'false';
                $data        = json_encode(self::sanitizeForSerialization($data, null, null, $encryptFlag));
            }
            if (null == $encrypt) {
                $encrypt = EncryptFormat::newInstance();
            }
            if (!$encrypt->isEncrypt()) {
                $encrypt->randomKeyIv();
            }
            $sm4 = new Sm4($encrypt->getKey());

            return base64_encode($sm4->enDataCbc($data, $encrypt->getIv()));
        }

        if ($data instanceof \DateTime) {
            return ('date' === $format) ? $data->format('Y-m-d') : $data->format(self::$dateTimeFormat);
        }

        if (is_array($data)) {
            foreach ($data as $property => $value) {
                $data[$property] = self::sanitizeForSerialization($value, $encrypt, $format, $encryptFlag);
            }

            return $data;
        }

        if (is_object($data)) {
            $values = [];
            if ($data instanceof ModelInterface) {
                $formats = $data::openAPIFormats();
                foreach ($data::openAPITypes() as $property => $openAPIType) {
                    $getter = $data::getters()[$property];
                    $value  = $data->$getter();
                    if (null !== $value && !in_array($openAPIType, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
                        $callable = [$openAPIType, 'getAllowableEnumValues'];
                        if (is_callable($callable)) {
                            /** array $callable */
                            $allowedEnumTypes = $callable();
                            if (!in_array($value, $allowedEnumTypes, true)) {
                                $imploded = implode("', '", $allowedEnumTypes);

                                throw new \InvalidArgumentException("Invalid value for enum '$openAPIType', must be one of: '$imploded'");
                            }
                        }
                    }
                    if (null !== $value) {
                        $values[$data::attributeMap()[$property]] = self::sanitizeForSerialization($value, $encrypt, $formats[$property], $encryptFlag);
                    }
                }
            } else {
                foreach ($data as $property => $value) {
                    $values[$property] = self::sanitizeForSerialization($value, $encrypt, $format, $encryptFlag);
                }
            }

            return (object) $values;
        }

        return (string) $data;
    }

    /**
     * Sanitize filename by removing path.
     * e.g. ../../sun.gif becomes sun.gif.
     *
     * @param string $filename filename to be sanitized
     *
     * @return string the sanitized filename
     */
    public static function sanitizeFilename($filename)
    {
        if (preg_match("/.*[\/\\\\](.*)$/", $filename, $match)) {
            return $match[1];
        }

        return $filename;
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the path, by url-encoding.
     *
     * @param string $value a string which will be part of the path
     *
     * @return string the serialized object
     */
    public static function toPathValue($value)
    {
        return rawurlencode(self::toString($value));
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the query, by imploding comma-separated if it's an object.
     * If it's a string, pass through unchanged. It will be url-encoded
     * later.
     *
     * @param string[]|string|\DateTime $object an object to be serialized to a string
     *
     * @return string the serialized object
     */
    public static function toQueryValue($object)
    {
        if (is_array($object)) {
            return implode(',', $object);
        }

        return self::toString($object);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the header. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601.
     *
     * @param string $value a string which will be part of the header
     *
     * @return string the header string
     */
    public static function toHeaderValue($value)
    {
        $callable = [$value, 'toHeaderValue'];
        if (is_callable($callable)) {
            return $callable();
        }

        return self::toString($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the http body (form parameter). If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601.
     *
     * @param string|\SplFileObject $value the value of the form parameter
     *
     * @return string the form string
     */
    public static function toFormValue($value)
    {
        if ($value instanceof \SplFileObject) {
            return $value->getRealPath();
        }

        return self::toString($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the parameter. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     * If it's a boolean, convert it to "true" or "false".
     *
     * @param string|bool|\DateTime $value the value of the parameter
     *
     * @return string the header string
     */
    public static function toString($value)
    {
        if ($value instanceof \DateTime) { // datetime in ISO8601 format
            return $value->format(self::$dateTimeFormat);
        } elseif (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        return $value;
    }

    /**
     * Serialize an array to a string.
     *
     * @param array  $collection                 collection to serialize to a string
     * @param string $style                      the format use for serialization (csv,
     *                                           ssv, tsv, pipes, multi)
     * @param bool   $allowCollectionFormatMulti allow collection format to be a multidimensional array
     *
     * @return string
     */
    public static function serializeCollection(array $collection, $style, $allowCollectionFormatMulti = false)
    {
        if ($allowCollectionFormatMulti && ('multi' === $style)) {
            // http_build_query() almost does the job for us. We just
            // need to fix the result of multidimensional arrays.
            return preg_replace('/%5B[0-9]+%5D=/', '=', http_build_query($collection, '', '&'));
        }
        switch ($style) {
            case 'pipeDelimited':
            case 'pipes':
                return implode('|', $collection);

            case 'tsv':
                return implode("\t", $collection);

            case 'spaceDelimited':
            case 'ssv':
                return implode(' ', $collection);

            case 'simple':
            case 'csv':
                // Deliberate fall through. CSV is default format.
            default:
                return implode(',', $collection);
        }
    }

    /**
     * Deserialize a JSON string into an object.
     *
     * @param mixed  $data  object or primitive to be deserialized
     * @param string $class class name is passed as a string
     *
     * @return object|array|null a single or an array of $class instances
     */
    public static function deserialize($data, $class, $decryptFormat, $decryptFlag = 'true')
    {
        if (null === $data) {
            return null;
        }

        if (0 === strcasecmp(substr($class, -2), '[]')) {
            $data = is_string($data) ? json_decode($data) : $data;

            if (!is_array($data)) {
                throw new \InvalidArgumentException("Invalid array '$class'");
            }

            $subClass = substr($class, 0, -2);
            $values   = [];
            foreach ($data as $key => $value) {
                $values[] = self::deserialize($value, $subClass, $decryptFormat, $decryptFlag);
            }

            return $values;
        }

        if (preg_match('/^(array<|map\[)/', $class)) { // for associative array e.g. array<string,int>
            $data = is_string($data) ? json_decode($data) : $data;
            settype($data, 'array');
            $inner        = substr($class, 4, -1);
            $deserialized = [];
            if (false !== strrpos($inner, ',')) {
                $subClass_array = explode(',', $inner, 2);
                $subClass       = $subClass_array[1];
                foreach ($data as $key => $value) {
                    $deserialized[$key] = self::deserialize($value, $subClass, $decryptFormat, $decryptFlag);
                }
            }

            return $deserialized;
        }

        if ('object' === $class) {
            settype($data, 'array');

            return $data;
        }

        if ('\DateTime' === $class) {
            // Some API's return an invalid, empty string as a
            // date-time property. DateTime::__construct() will return
            // the current time for empty input which is probably not
            // what is meant. The invalid empty string is probably to
            // be interpreted as a missing field/value. Let's handle
            // this graceful.
            if (!empty($data)) {
                try {
                    return new \DateTime($data);
                } catch (\Exception $exception) {
                    // Some API's return a date-time with too high nanosecond
                    // precision for php's DateTime to handle. This conversion
                    // (string -> unix timestamp -> DateTime) is a workaround
                    // for the problem.
                    return (new \DateTime())->setTimestamp(strtotime($data));
                }
            } else {
                return null;
            }
        }

        /* @psalm-suppress ParadoxicalCondition */
        if (in_array($class, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
            settype($data, $class);

            return $data;
        }

        if (method_exists($class, 'getAllowableEnumValues')) {
            if (!in_array($data, $class::getAllowableEnumValues(), true)) {
                $imploded = implode("', '", $class::getAllowableEnumValues());

                throw new \InvalidArgumentException("Invalid value for enum '$class', must be one of: '$imploded'");
            }

            return $data;
        }
        $data = is_string($data) ? json_decode($data) : $data;
        // If a discriminator is defined and points to a valid subclass, use it.
        $discriminator = $class::DISCRIMINATOR;
        if (!empty($discriminator) && isset($data->{$discriminator}) && is_string($data->{$discriminator})) {
            $subclass = '\Entpay\Mse\Client\Model\\' . $data->{$discriminator};
            if (is_subclass_of($subclass, $class)) {
                $class = $subclass;
            }
        }

        /** @var ModelInterface $instance */
        $instance = new $class();
        foreach ($instance::openAPITypes() as $property => $type) {
            $propertySetter = $instance::setters()[$property];

            if (!isset($propertySetter) || !isset($data->{$instance::attributeMap()[$property]})) {
                continue;
            }

            if (isset($data->{$instance::attributeMap()[$property]})) {
                $propertyValue = $data->{$instance::attributeMap()[$property]};
                $decrypt       = $instance::openAPIFormats()[$property];
                if ('decrypted|false' == $decrypt && null != $decryptFormat && 'true' == $decryptFlag) {
                    $sm4       = new Sm4($decryptFormat->getKey());
                    $plainText = $sm4->deDataCbc(base64_decode($propertyValue), $decryptFormat->getIv());
                    if ('string' != $type) {
                        $propertyValue = json_decode($plainText);
                        $decryptFlag   = 'false';
                    } else {
                        $propertyValue = $plainText;
                    }
                }
                $instance->$propertySetter(self::deserialize($propertyValue, $type, $decryptFormat, $decryptFlag));
            }
        }

        return $instance;
    }
}
