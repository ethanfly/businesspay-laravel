<?php
/**
 * ProfitAllocationTradeTypeEnum.
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
 * ProfitAllocationTradeTypeEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class ProfitAllocationTradeTypeEnum
{
    /**
     * 虚拟服务款项.
     */
    const VIRTUAL_SERVICE = 'VIRTUAL_SERVICE';

    /**
     * 实物采购款项.
     */
    const PHYSICAL_PURCHASE = 'PHYSICAL_PURCHASE';

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
            self::VIRTUAL_SERVICE,
            self::PHYSICAL_PURCHASE,
            self::OTHER,
        ];
    }
}
