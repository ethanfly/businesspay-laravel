<?php

namespace Ethanfly\BusinessPay\Tests;

use Entpay\Mse\Client\ApiException;
use Ethanfly\BusinessPay\Exceptions\BusinessPayException;

class ExceptionTest extends TestCase
{
    public function test_exception_wraps_api_exception()
    {
        $apiException = new ApiException('api error', 400, null, '/v3/test', '/v3/test/{id}', 'trace-123');
        $exception = BusinessPayException::fromApiException($apiException);

        $this->assertEquals('api error', $exception->getMessage());
        $this->assertEquals(400, $exception->getStatusCode());
        $this->assertEquals('trace-123', $exception->getTraceId());
        $this->assertSame($apiException, $exception->getApiException());
    }

    public function test_exception_without_api_exception()
    {
        $exception = new BusinessPayException('plain error', 500);

        $this->assertEquals('plain error', $exception->getMessage());
        $this->assertEquals(500, $exception->getCode());
        $this->assertNull($exception->getApiException());
    }
}
