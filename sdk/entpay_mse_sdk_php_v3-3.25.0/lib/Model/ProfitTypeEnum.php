<?php
/**
 * ProfitTypeEnum.
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
 * ProfitTypeEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class ProfitTypeEnum
{
    /**
     * 分账账单汇总.
     */
    const PROFITALLOCATION_ALL = 'PROFITALLOCATION_ALL';

    /**
     * 分账分出账单.
     */
    const PROFITALLOCATION_OUT = 'PROFITALLOCATION_OUT';

    /**
     * 分账完结账单.
     */
    const PROFITALLOCATION_FINISH = 'PROFITALLOCATION_FINISH';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROFITALLOCATION_ALL,
            self::PROFITALLOCATION_OUT,
            self::PROFITALLOCATION_FINISH,
        ];
    }
}
