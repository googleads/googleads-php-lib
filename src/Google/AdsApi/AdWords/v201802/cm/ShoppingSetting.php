<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ShoppingSetting extends \Google\AdsApi\AdWords\v201802\cm\Setting
{

    /**
     * @var int $merchantId
     */
    protected $merchantId = null;

    /**
     * @var string $salesCountry
     */
    protected $salesCountry = null;

    /**
     * @var int $campaignPriority
     */
    protected $campaignPriority = null;

    /**
     * @var boolean $enableLocal
     */
    protected $enableLocal = null;

    /**
     * @var string $purchasePlatform
     */
    protected $purchasePlatform = null;

    /**
     * @param string $SettingType
     * @param int $merchantId
     * @param string $salesCountry
     * @param int $campaignPriority
     * @param boolean $enableLocal
     * @param string $purchasePlatform
     */
    public function __construct($SettingType = null, $merchantId = null, $salesCountry = null, $campaignPriority = null, $enableLocal = null, $purchasePlatform = null)
    {
      parent::__construct($SettingType);
      $this->merchantId = $merchantId;
      $this->salesCountry = $salesCountry;
      $this->campaignPriority = $campaignPriority;
      $this->enableLocal = $enableLocal;
      $this->purchasePlatform = $purchasePlatform;
    }

    /**
     * @return int
     */
    public function getMerchantId()
    {
      return $this->merchantId;
    }

    /**
     * @param int $merchantId
     * @return \Google\AdsApi\AdWords\v201802\cm\ShoppingSetting
     */
    public function setMerchantId($merchantId)
    {
      $this->merchantId = (!is_null($merchantId) && PHP_INT_SIZE === 4)
          ? floatval($merchantId) : $merchantId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesCountry()
    {
      return $this->salesCountry;
    }

    /**
     * @param string $salesCountry
     * @return \Google\AdsApi\AdWords\v201802\cm\ShoppingSetting
     */
    public function setSalesCountry($salesCountry)
    {
      $this->salesCountry = $salesCountry;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignPriority()
    {
      return $this->campaignPriority;
    }

    /**
     * @param int $campaignPriority
     * @return \Google\AdsApi\AdWords\v201802\cm\ShoppingSetting
     */
    public function setCampaignPriority($campaignPriority)
    {
      $this->campaignPriority = $campaignPriority;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableLocal()
    {
      return $this->enableLocal;
    }

    /**
     * @param boolean $enableLocal
     * @return \Google\AdsApi\AdWords\v201802\cm\ShoppingSetting
     */
    public function setEnableLocal($enableLocal)
    {
      $this->enableLocal = $enableLocal;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchasePlatform()
    {
      return $this->purchasePlatform;
    }

    /**
     * @param string $purchasePlatform
     * @return \Google\AdsApi\AdWords\v201802\cm\ShoppingSetting
     */
    public function setPurchasePlatform($purchasePlatform)
    {
      $this->purchasePlatform = $purchasePlatform;
      return $this;
    }

}
