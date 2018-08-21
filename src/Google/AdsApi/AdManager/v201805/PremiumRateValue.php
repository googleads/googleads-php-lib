<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PremiumRateValue
{

    /**
     * @var int $premiumRateId
     */
    protected $premiumRateId = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\PremiumFeature $premiumFeature
     */
    protected $premiumFeature = null;

    /**
     * @var string $rateType
     */
    protected $rateType = null;

    /**
     * @var string $adjustmentType
     */
    protected $adjustmentType = null;

    /**
     * @var int $adjustmentSize
     */
    protected $adjustmentSize = null;

    /**
     * @param int $premiumRateId
     * @param \Google\AdsApi\AdManager\v201805\PremiumFeature $premiumFeature
     * @param string $rateType
     * @param string $adjustmentType
     * @param int $adjustmentSize
     */
    public function __construct($premiumRateId = null, $premiumFeature = null, $rateType = null, $adjustmentType = null, $adjustmentSize = null)
    {
      $this->premiumRateId = $premiumRateId;
      $this->premiumFeature = $premiumFeature;
      $this->rateType = $rateType;
      $this->adjustmentType = $adjustmentType;
      $this->adjustmentSize = $adjustmentSize;
    }

    /**
     * @return int
     */
    public function getPremiumRateId()
    {
      return $this->premiumRateId;
    }

    /**
     * @param int $premiumRateId
     * @return \Google\AdsApi\AdManager\v201805\PremiumRateValue
     */
    public function setPremiumRateId($premiumRateId)
    {
      $this->premiumRateId = (!is_null($premiumRateId) && PHP_INT_SIZE === 4)
          ? floatval($premiumRateId) : $premiumRateId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\PremiumFeature
     */
    public function getPremiumFeature()
    {
      return $this->premiumFeature;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\PremiumFeature $premiumFeature
     * @return \Google\AdsApi\AdManager\v201805\PremiumRateValue
     */
    public function setPremiumFeature($premiumFeature)
    {
      $this->premiumFeature = $premiumFeature;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateType()
    {
      return $this->rateType;
    }

    /**
     * @param string $rateType
     * @return \Google\AdsApi\AdManager\v201805\PremiumRateValue
     */
    public function setRateType($rateType)
    {
      $this->rateType = $rateType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdjustmentType()
    {
      return $this->adjustmentType;
    }

    /**
     * @param string $adjustmentType
     * @return \Google\AdsApi\AdManager\v201805\PremiumRateValue
     */
    public function setAdjustmentType($adjustmentType)
    {
      $this->adjustmentType = $adjustmentType;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdjustmentSize()
    {
      return $this->adjustmentSize;
    }

    /**
     * @param int $adjustmentSize
     * @return \Google\AdsApi\AdManager\v201805\PremiumRateValue
     */
    public function setAdjustmentSize($adjustmentSize)
    {
      $this->adjustmentSize = (!is_null($adjustmentSize) && PHP_INT_SIZE === 4)
          ? floatval($adjustmentSize) : $adjustmentSize;
      return $this;
    }

}
