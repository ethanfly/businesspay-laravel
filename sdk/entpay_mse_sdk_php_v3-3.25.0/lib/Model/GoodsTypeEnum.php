<?php
/**
 * GoodsTypeEnum.
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
 * GoodsTypeEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class GoodsTypeEnum
{
    /**
     * 仅金条
     */
    const ONLY_GOLD = 'ONLY_GOLD';

    /**
     * 包含金条
     */
    const CONTAINS_GOLD = 'CONTAINS_GOLD';

    /**
     * 其他.
     */
    const OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONLY_GOLD,
            self::CONTAINS_GOLD,
            self::OTHER,
        ];
    }
}
