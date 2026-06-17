<?php

namespace Ethanfly\BusinessPay\Exceptions;

use Entpay\Mse\Client\ApiException;
use Exception;

class BusinessPayException extends Exception
{
    /**
     * @var ApiException|null
     */
    protected $apiException;

    /**
     * @var int|null
     */
    protected $statusCode;

    /**
     * @var string|null
     */
    protected $traceId;

    /**
     * @var string|null
     */
    protected $uri;

    /**
     * @var string|null
     */
    protected $uriPattern;

    public function __construct($message = '', $code = 0, ?ApiException $apiException = null, ?Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->apiException = $apiException;

        if ($apiException instanceof ApiException) {
            $this->statusCode = $apiException->getStatusCode();
            $this->traceId = $apiException->getTraceId();
            $this->uri = $apiException->getUri();
            $this->uriPattern = $apiException->getUriPattern();
            $this->code = $apiException->getCode() ?: $code;
            $this->message = $apiException->getMessage() ?: $message;
        }
    }

    public static function fromApiException(ApiException $e): self
    {
        return new self($e->getMessage(), $e->getCode(), $e);
    }

    /**
     * @return ApiException|null
     */
    public function getApiException()
    {
        return $this->apiException;
    }

    /**
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return string|null
     */
    public function getTraceId()
    {
        return $this->traceId;
    }

    /**
     * @return string|null
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return string|null
     */
    public function getUriPattern()
    {
        return $this->uriPattern;
    }
}
