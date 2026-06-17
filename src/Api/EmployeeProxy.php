<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\Employee;
use Entpay\Mse\Client\Model\EmployeeCreateParam;
use Entpay\Mse\Client\Model\RetrieveApplicationListGetParam;

class EmployeeProxy extends AbstractApiProxy
{
    protected $sdkClass = Employee::class;

    protected $paramMap = [
        'create' => EmployeeCreateParam::class,
        'retrieveApplicationList' => RetrieveApplicationListGetParam::class,
    ];

    /**
     * Create an employee.
     *
     * @param  array|\Entpay\Mse\Client\Model\EmployeeCreateParam  $param
     * @return \Entpay\Mse\Client\Api\Employee
     */
    public function create($param)
    {
        return $this->call('create', $param, EmployeeCreateParam::class);
    }

    /**
     * Delete an employee.
     *
     * @param  string  $entId
     * @param  string  $employeeId
     * @return mixed
     */
    public function delete($entId, $employeeId)
    {
        return $this->callWithoutParam('delete', [$entId, $employeeId]);
    }

    /**
     * Retrieve employee application list.
     *
     * @param  array|\Entpay\Mse\Client\Model\RetrieveApplicationListGetParam|null  $param
     * @return mixed
     */
    public function retrieveApplicationList($param = null)
    {
        return $this->call('retrieveApplicationList', $param, RetrieveApplicationListGetParam::class);
    }
}
