<?php

namespace Ethanfly\BusinessPay\Api;

use Entpay\Mse\Client\Api\FileUpload;
use Entpay\Mse\Client\Model\DepositBillFileUploadParam;

/**
 * 文件上传（File Upload）资源代理。
 *
 * 对应 SDK: Entpay\Mse\Client\Api\FileUpload
 * 文件参数 $file 为本地文件路径字符串，SDK 内部计算 sm3 并以 multipart 上传。
 */
class FileUploadProxy extends AbstractApiProxy
{
    protected $sdkClass = FileUpload::class;

    /**
     * 上传文件（通用）。
     *
     * @param  string  $file 本地文件路径
     * @return \Entpay\Mse\Client\Api\FileUpload
     */
    public function create($file)
    {
        return $this->callWithoutParam('create', [$file]);
    }

    /**
     * 上传充值账单文件。
     *
     * @param  string  $file 本地文件路径
     * @param  array|\Entpay\Mse\Client\Model\DepositBillFileUploadParam  $meta 元数据
     * @return \Entpay\Mse\Client\Api\FileUpload
     */
    public function depositCreate($file, $meta)
    {
        $meta = $this->account->normalizeParam($meta, DepositBillFileUploadParam::class);

        return $this->account->callSdk(function ($requestOptions) use ($file, $meta) {
            return call_user_func([FileUpload::class, 'depositCreate'], $file, $meta, $requestOptions);
        });
    }
}
