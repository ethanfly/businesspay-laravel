<?php
/**
 * ProfitAllocationFlagEnum.
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
 * ProfitAllocationFlagEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class ProfitAllocationFlagEnum
{
    /**
     * 无需分账(默认无需分账).
     */
    const NO_PROFIT_ALLOCATION = 'NO_PROFIT_ALLOCATION';

    /**
     * 需要分账.
     */
    const API_PROFIT_ALLOCATION = 'API_PROFIT_ALLOCATION';

    /**
     * 自动分账.
     */
    const AUTO_PROFIT_ALLOCATION = 'AUTO_PROFIT_ALLOCATION';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_PROFIT_ALLOCATION,
            self::API_PROFIT_ALLOCATION,
            self::AUTO_PROFIT_ALLOCATION,
        ];
    }
}
