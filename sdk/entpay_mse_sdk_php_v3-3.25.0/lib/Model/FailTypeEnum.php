<?php
/**
 * FailTypeEnum.
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
 * FailTypeEnum Class Doc Comment.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */
class FailTypeEnum
{
    /**
     * 分账关系已解除.
     */
    const NO_RELATION = 'NO_RELATION';

    /**
     * 分账权限已解除.
     */
    const NO_AUTH = 'NO_AUTH';

    /**
     * 高风险接收方.
     */
    const RECEIVER_HIGH_RISK = 'RECEIVER_HIGH_RISK';

    /**
     * 接收方已达收款限额.
     */
    const RECEIVER_OVER_LIMIT = 'RECEIVER_OVER_LIMIT';

    /**
     * 分出方账户异常.
     */
    const PAYER_ERROR = 'PAYER_ERROR';

    /**
     * 分账接收方账户异常.
     */
    const RECEIVER_ERROR = 'RECEIVER_ERROR';

    /**
     * Gets allowable values of the enum.
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_RELATION,
            self::NO_AUTH,
            self::RECEIVER_HIGH_RISK,
            self::RECEIVER_OVER_LIMIT,
            self::PAYER_ERROR,
            self::RECEIVER_ERROR,
        ];
    }
}
