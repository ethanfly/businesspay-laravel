<?php
/**
 * AssignPayTypeEnum.
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
 * AssignPayTypeEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class AssignPayTypeEnum
{
    /**
     * 个人付款.
     */
    const INDIVIDUAL = 'INDIVIDUAL';

    /**
     * 企业付款.
     */
    const ENTERPRISE = 'ENTERPRISE';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INDIVIDUAL,
            self::ENTERPRISE,
        ];
    }
}
