<?php
/**
 * EntTypeEnum.
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
 * EntTypeEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class EntTypeEnum
{
    /**
     * ENTERPRISE.
     */
    const ENTERPRISE = 'ENTERPRISE';

    /**
     * INDIVIDUAL.
     */
    const INDIVIDUAL = 'INDIVIDUAL';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ENTERPRISE,
            self::INDIVIDUAL,
        ];
    }
}
