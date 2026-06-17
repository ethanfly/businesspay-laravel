<?php
/**
 * WithdrawAccountTypeEnum.
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
 * WithdrawAccountTypeEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class WithdrawAccountTypeEnum
{
    const PAYEE_ACCOUNT = 'PAYEE_ACCOUNT';

    const RECEIVER_ACCOUNT = 'RECEIVER_ACCOUNT';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PAYEE_ACCOUNT,
            self::RECEIVER_ACCOUNT,
        ];
    }
}
