<?php
/**
 * BillTypeEnum.
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
 * BillTypeEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class BillTypeEnum
{
    /**
     * 平台支付账单.
     */
    const ALL = 'ALL';

    /**
     * 平台支付成功账单.
     */
    const SUCCEEDED = 'SUCCEEDED';

    /**
     * 平台支付退款账单.
     */
    const REFUND = 'REFUND';

    /**
     * 交易汇总账单.
     */
    const TRANS_ALL = 'TRANS_ALL';

    /**
     * 交易成功账单.
     */
    const TRANS_SUCCEEDED = 'TRANS_SUCCEEDED';

    /**
     * 交易退款账单.
     */
    const TRANS_REFUND = 'TRANS_REFUND';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL,
            self::SUCCEEDED,
            self::REFUND,
            self::TRANS_ALL,
            self::TRANS_SUCCEEDED,
            self::TRANS_REFUND,
        ];
    }
}
