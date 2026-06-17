<?php
/**
 * ProfitAllocationReceiverTypeEnum.
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
 * ProfitAllocationReceiverTypeEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class ProfitAllocationReceiverTypeEnum
{
    /**
     * 企业.
     */
    const ENTERPRISE = 'ENTERPRISE';

    /**
     * 个体工商户.
     */
    const INDIVIDUAL = 'INDIVIDUAL';

    /**
     * 个人经营者.
     */
    const NATURAL_PERSON = 'NATURAL_PERSON';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ENTERPRISE,
            self::INDIVIDUAL,
            self::NATURAL_PERSON,
        ];
    }
}
