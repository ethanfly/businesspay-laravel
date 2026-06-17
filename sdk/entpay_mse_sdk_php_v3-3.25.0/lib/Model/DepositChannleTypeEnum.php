<?php
/**
 * DepositChannleTypeEnum.
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
 * DepositChannleTypeEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class DepositChannleTypeEnum
{
    /**
     * 微信
     */
    const WX = 'WX';

    /**
     * 支付宝.
     */
    const ALIPAY = 'ALIPAY';

    /**
     * 美团.
     */
    const MEITUAN = 'MEITUAN';

    /**
     * 饿了么.
     */
    const ELE = 'ELE';

    /**
     * 未知渠道.
     */
    const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WX,
            self::ALIPAY,
            self::MEITUAN,
            self::ELE,
            self::UNKNOWN,
        ];
    }
}
