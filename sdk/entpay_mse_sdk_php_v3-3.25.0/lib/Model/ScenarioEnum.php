<?php
/**
 * ScenarioEnum.
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
 * ScenarioEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class ScenarioEnum
{
    /**
     * 技术服务商运营分账.
     */
    const PLATFORM_ALLOCATION = 'PLATFORM_ALLOCATION';

    /**
     * 平台利润分账.
     */
    const GROUP_ALLOCATION = 'GROUP_ALLOCATION';

    /**
     * 直连企业分账.
     */
    const ENTERPRISE_ALLOCATION = 'ENTERPRISE_ALLOCATION';

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
            self::ENTERPRISE_ALLOCATION,
            self::OTHER,
        ];
    }
}
