<?php
/**
 * PrepaidAllocationBillTypeEnum.
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
 * PrepaidAllocationBillTypeEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class PrepaidAllocationBillTypeEnum
{
    /**
     * 预付卡分账账单汇总.
     */
    const PREPAID_ALLOCATION_ALL = 'PREPAID_ALLOCATION_ALL';

    /**
     * 预付卡分账分出账单.
     */
    const PREPAID_ALLOCATION_OUT = 'PREPAID_ALLOCATION_OUT';

    /**
     * 预付卡分账补差账单.
     */
    const PREPAID_ALLOCATION_SUPPLEMENT = 'PREPAID_ALLOCATION_SUPPLEMENT';

    /**
     * 预付卡分账转账账单.
     */
    const PREPAID_ALLOCATION_TRANSFER = 'PREPAID_ALLOCATION_TRANSFER';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PREPAID_ALLOCATION_ALL,
            self::PREPAID_ALLOCATION_OUT,
            self::PREPAID_ALLOCATION_SUPPLEMENT,
            self::PREPAID_ALLOCATION_TRANSFER,
        ];
    }
}
