<?php
/**
 * PrepaidScenarioEnum.
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
 * PrepaidScenarioEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class PrepaidScenarioEnum
{
    /**
     * 平台/技术服务商运营分账.
     */
    const PLATFORM_ALLOCATION = 'PLATFORM_ALLOCATION';

    /**
     * 集团公司/平台利润分账.
     */
    const GROUP_ALLOCATION = 'GROUP_ALLOCATION';

    /**
     * 交易消费场景.
     */
    const TRADE = 'TRADE';

    /**
     * 其他（默认值）.
     */
    const OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PLATFORM_ALLOCATION,
            self::GROUP_ALLOCATION,
            self::TRADE,
            self::OTHER,
        ];
    }
}
