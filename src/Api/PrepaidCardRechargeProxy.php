<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\PrepaidCardRecharge;
use Entpay\Mse\Client\Model\RechargeCloseParam;
use Entpay\Mse\Client\Model\RechargeMpParam;

/**
 * 预付卡充值（Prepaid Card Recharge）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\PrepaidCardRecharge
 *
 * @method mixed createMpRecharge(array|\Entpay\Mse\Client\Model\RechargeMpParam $param) 小程序充值
 * @method mixed retrieve(string $rechargeId) 查询充值
 * @method mixed retrieveByOutRechargeId(string $entId, string $outRechargeId) 按平台单号查询充值
 */
class PrepaidCardRechargeProxy extends AbstractApiProxy
{
    protected $sdkClass = PrepaidCardRecharge::class;

    protected $paramMap = [
        'createMpRecharge' => RechargeMpParam::class,
    ];

    /**
     * 关闭充值订单。
     *
     * @param  string  $rechargeId
     * @param  array|\Entpay\Mse\Client\Model\RechargeCloseParam  $param
     * @return \Entpay\Mse\Client\Model\RechargeClose
     */
    public function close($rechargeId, $param)
    {
        $param = $this->account->normalizeParam($param, RechargeCloseParam::class);

        return $this->account->callSdk(function ($requestOptions) use ($rechargeId, $param) {
            return call_user_func([PrepaidCardRecharge::class, 'close'], $rechargeId, $param, $requestOptions);
        });
    }
}
