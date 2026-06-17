<?php
/**
 * ProfitAllocationFeeContributorEnum.
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
 * ProfitAllocationFeeContributorEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class ProfitAllocationFeeContributorEnum
{
    /**
     * 收款商户承担.
     */
    const PAYEE_AFFORD = 'PAYEE_AFFORD';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PAYEE_AFFORD,
        ];
    }
}
