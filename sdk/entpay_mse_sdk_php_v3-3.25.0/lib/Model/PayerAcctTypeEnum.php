<?php
/**
 * PayerAcctTypeEnum.
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
 * PayerAcctTypeEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class PayerAcctTypeEnum
{
    /**
     * 个人账户.
     */
    const INDIVIDUAL = 'INDIVIDUAL';

    /**
     * 企业账户.
     */
    const ENTERPRISE = 'ENTERPRISE';

    /**
     * 微资金.
     */
    const BALANCE_PAY = 'BALANCE_PAY';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INDIVIDUAL,
            self::ENTERPRISE,
            self::BALANCE_PAY,
        ];
    }
}
