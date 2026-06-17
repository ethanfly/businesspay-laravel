<?php
/**
 * ProfitAllocationAccountApplicationStatusEnum.
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
 * ProfitAllocationAccountApplicationStatusEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class ProfitAllocationAccountApplicationStatusEnum
{
    /**
     * 信息完善中.
     */
    const INFO_COMPLETING = 'INFO_COMPLETING';

    /**
     * 待确认.
     */
    const CONFIRMING = 'CONFIRMING';

    /**
     * 处理中.
     */
    const PROCESSING = 'PROCESSING';

    /**
     * 成功
     */
    const SUCCEEDED = 'SUCCEEDED';

    /**
     * 失败.
     */
    const FAILED = 'FAILED';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INFO_COMPLETING,
            self::CONFIRMING,
            self::PROCESSING,
            self::SUCCEEDED,
            self::FAILED,
        ];
    }
}
