<?php

namespace Ethanfly\BusinessPay\Api;

use Ethanfly\BusinessPay\BusinessPayAccount;

abstract class AbstractApiProxy
{
    /**
     * @var BusinessPayAccount
     */
    protected $account;

    /**
     * SDK API class FQCN.
     *
     * @var string
     */
    protected $sdkClass;

    /**
     * Map of proxy method names to SDK method names.
     *
     * @var array<string, string>
     */
    protected $methodMap = [];

    /**
     * Map of proxy method names to parameter model FQCNs.
     *
     * @var array<string, string>
     */
    protected $paramMap = [];

    public function __construct(BusinessPayAccount $account)
    {
        $this->account = $account;
    }

    /**
     * Call any SDK method dynamically.
     *
     * @param  string  $name
     * @param  array  $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        $sdkMethod = $this->methodMap[$name] ?? $name;

        if (! method_exists($this->sdkClass, $sdkMethod)) {
            throw new \BadMethodCallException("Method [{$sdkMethod}] does not exist on SDK class [{$this->sdkClass}].");
        }

        if (isset($this->paramMap[$name]) && isset($arguments[0])) {
            $arguments[0] = $this->account->normalizeParam(
                $arguments[0],
                $this->paramMap[$name]
            );
        }

        return $this->account->callSdk(function ($requestOptions) use ($sdkMethod, $arguments) {
            $arguments[] = $requestOptions;

            return call_user_func_array([$this->sdkClass, $sdkMethod], $arguments);
        });
    }

    /**
     * Execute an SDK call with normalized parameter and explicit SDK method.
     *
     * @param  string  $sdkMethod
     * @param  mixed  $param
     * @param  string|null  $paramClass
     * @return mixed
     */
    protected function call($sdkMethod, $param = null, $paramClass = null, array $extraArgs = [])
    {
        if ($paramClass !== null && $param !== null) {
            $param = $this->account->normalizeParam($param, $paramClass);
        }

        return $this->account->callSdk(function ($requestOptions) use ($sdkMethod, $param, $extraArgs) {
            $args = $extraArgs;
            if ($param !== null) {
                array_unshift($args, $param);
            }
            $args[] = $requestOptions;

            return call_user_func_array([$this->sdkClass, $sdkMethod], $args);
        });
    }

    /**
     * Execute an SDK call that has no request body parameter.
     *
     * @param  string  $sdkMethod
     * @return mixed
     */
    protected function callWithoutParam($sdkMethod, array $pathArgs = [])
    {
        return $this->account->callSdk(function ($requestOptions) use ($sdkMethod, $pathArgs) {
            $pathArgs[] = $requestOptions;

            return call_user_func_array([$this->sdkClass, $sdkMethod], $pathArgs);
        });
    }
}
