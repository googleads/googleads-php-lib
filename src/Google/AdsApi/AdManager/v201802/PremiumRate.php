<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PremiumRate
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $rateCardId
     */
    protected $rateCardId = null;

    /**
     * @var string $pricingMethod
     */
    protected $pricingMethod = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\PremiumFeature $premiumFeature
     */
    protected $premiumFeature = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\PremiumRateValue[] $premiumRateValues
     */
    protected $premiumRateValues = null;

    /**
     * @param int $id
     * @param int $rateCardId
     * @param string $pricingMethod
     * @param \Google\AdsApi\AdManager\v201802\PremiumFeature $premiumFeature
     * @param \Google\AdsApi\AdManager\v201802\PremiumRateValue[] $premiumRateValues
     */
    public function __construct($id = null, $rateCardId = null, $pricingMethod = null, $premiumFeature = null, array $premiumRateValues = null)
    {
      $this->id = $id;
      $this->rateCardId = $rateCardId;
      $this->pricingMethod = $pricingMethod;
      $this->premiumFeature = $premiumFeature;
      $this->premiumRateValues = $premiumRateValues;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdManager\v201802\PremiumRate
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getRateCardId()
    {
      return $this->rateCardId;
    }

    /**
     * @param int $rateCardId
     * @return \Google\AdsApi\AdManager\v201802\PremiumRate
     */
    public function setRateCardId($rateCardId)
    {
      $this->rateCardId = (!is_null($rateCardId) && PHP_INT_SIZE === 4)
          ? floatval($rateCardId) : $rateCardId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPricingMethod()
    {
      return $this->pricingMethod;
    }

    /**
     * @param string $pricingMethod
     * @return \Google\AdsApi\AdManager\v201802\PremiumRate
     */
    public function setPricingMethod($pricingMethod)
    {
      $this->pricingMethod = $pricingMethod;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\PremiumFeature
     */
    public function getPremiumFeature()
    {
      return $this->premiumFeature;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\PremiumFeature $premiumFeature
     * @return \Google\AdsApi\AdManager\v201802\PremiumRate
     */
    public function setPremiumFeature($premiumFeature)
    {
      $this->premiumFeature = $premiumFeature;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\PremiumRateValue[]
     */
    public function getPremiumRateValues()
    {
      return $this->premiumRateValues;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\PremiumRateValue[] $premiumRateValues
     * @return \Google\AdsApi\AdManager\v201802\PremiumRate
     */
    public function setPremiumRateValues(array $premiumRateValues)
    {
      $this->premiumRateValues = $premiumRateValues;
      return $this;
    }

}
