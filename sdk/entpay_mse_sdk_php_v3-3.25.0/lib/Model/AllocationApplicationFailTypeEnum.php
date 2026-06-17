<?php
/**
 * AllocationApplicationFailTypeEnum.
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
 * AllocationApplicationFailTypeEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class AllocationApplicationFailTypeEnum
{
    /**
     * 银行审核拒绝.
     */
    const BANK_REJECTED = 'BANK_REJECTED';

    /**
     * 信息检查失败.
     */
    const INFO_CHECK_FAILED = 'INFO_CHECK_FAILED';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BANK_REJECTED,
            self::INFO_CHECK_FAILED,
        ];
    }
}
