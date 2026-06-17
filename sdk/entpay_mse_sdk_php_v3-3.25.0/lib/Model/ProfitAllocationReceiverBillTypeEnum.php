<?php
/**
 * ProfitAllocationReceiverBillTypeEnum.
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
 * ProfitAllocationReceiverBillTypeEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class ProfitAllocationReceiverBillTypeEnum
{
    /**
     * 分账接收方资金账单.
     */
    const RECEIVER_FUND_FLOW = 'RECEIVER_FUND_FLOW';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RECEIVER_FUND_FLOW,
        ];
    }
}
