<?php

namespace Entpay\Mse\Client\Config;

use Entpay\Mse\Client\ApiException;

class RequestOptions
{
    /**
     * 平台ID.
     */
    private $platformId;

    /**
     * 平台私钥.
     */
    private $platformPrivateKey;

    /**
     * 平台私钥证书序列号.
     */
    private $platformPrivateCertSerialNo;

    /**
     * 商企付公钥序列号.
     */
    private $tbepSerialNumber;

    /**
     * 商企付公钥.
     */
    private $tbepPublicKey;

    /**
     * 企业ID.
     */
    private $entId;

    /**
     * 企业私钥证书序列号.
     */
    private $enterpriseSerialNumber;

    /**
     * 企业私钥.
     */
    private $entPrivateKey;

    /**
     * 服务商模式下的被代理平台ID.
     */
    private $svrPlatformId;

    /**
     * 是否是SAAS模式.
     */
    private $isEntCertAuth;

    public static function getInstance()
    {
        return new RequestOptions();
    }

    public function initMultiPlatform($platformId, $platformPrivateKey, $platformPrivateCertSerialNo, $tbepSerialNumber, $tbepPublicKey)
    {
        if (empty($platformId) || empty($platformPrivateKey) || empty($platformPrivateCertSerialNo)
            || empty($tbepSerialNumber) || empty($tbepPublicKey)) {
            throw new ApiException('多平台参数设置错误', -1);
        }
        $this->platformId                  = $platformId;
        $this->platformPrivateKey          = $platformPrivateKey;
        $this->platformPrivateCertSerialNo = $platformPrivateCertSerialNo;
        $this->tbepSerialNumber            = $tbepSerialNumber;
        $this->tbepPublicKey               = $tbepPublicKey;

        return $this;
    }

    public function initOpenBank($entId, $enterpriseSerialNumber, $entPrivateKey)
    {
        if (empty($entId) || empty($enterpriseSerialNumber) || empty($entPrivateKey)) {
            throw new ApiException('SAAS参数设置错误', -1);
        }
        $this->entId                  = $entId;
        $this->enterpriseSerialNumber = $enterpriseSerialNumber;
        $this->entPrivateKey          = $entPrivateKey;

        return $this;
    }

    public function initSvrMode($svrPlatformId)
    {
        if (empty($svrPlatformId)) {
            throw new ApiException('服务商参数设置错误', -1);
        }
        $this->svrPlatformId = $svrPlatformId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlatformId()
    {
        return $this->platformId;
    }

    /**
     * @return mixed
     */
    public function getPlatformPrivateKey()
    {
        return $this->platformPrivateKey;
    }

    /**
     * @return mixed
     */
    public function getPlatformPrivateCertSerialNo()
    {
        return $this->platformPrivateCertSerialNo;
    }

    /**
     * @return mixed
     */
    public function getTbepSerialNumber()
    {
        return $this->tbepSerialNumber;
    }

    /**
     * @return mixed
     */
    public function getTbepPublicKey()
    {
        return $this->tbepPublicKey;
    }

    /**
     * @return mixed
     */
    public function getEntId()
    {
        return $this->entId;
    }

    /**
     * @return mixed
     */
    public function getEnterpriseSerialNumber()
    {
        return $this->enterpriseSerialNumber;
    }

    /**
     * @return mixed
     */
    public function getEntPrivateKey()
    {
        return $this->entPrivateKey;
    }

    /**
     * @return mixed
     */
    public function getSvrPlatformId()
    {
        return $this->svrPlatformId;
    }

    /**
     * @return bool
     */
    public function isEntCertAuth()
    {
        return $this->isEntCertAuth;
    }

    /**
     * @param bool $isEntCertAuth
     */
    public function setIsEntCertAuth($isEntCertAuth)
    {
        $this->isEntCertAuth = $isEntCertAuth;
    }
}
