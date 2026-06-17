<?php
/**
 * EmployeeApplyStatusEnum.
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

/**
 * EmployeeApplyStatusEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class EmployeeApplyStatusEnum
{
    /**
     * 初始化.
     */
    const INIT = 'INIT';

    /**
     * 已实名待审批.
     */
    const REAL_NAME_AUTHED = 'REAL_NAME_AUTHED';

    /**
     * 已审批.
     */
    const SUCCEEDED = 'SUCCEEDED';

    /**
     * 已删除.
     */
    const CLOSED = 'CLOSED';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INIT,
            self::REAL_NAME_AUTHED,
            self::SUCCEEDED,
            self::CLOSED,
        ];
    }
}
