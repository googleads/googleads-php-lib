<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CompanySettings
{

    /**
     * @var string $billingCap
     */
    protected $billingCap = null;

    /**
     * @var string $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var string $billingSource
     */
    protected $billingSource = null;

    /**
     * @var int $advertiserDiscount
     */
    protected $advertiserDiscount = null;

    /**
     * @var int $valueAddedTax
     */
    protected $valueAddedTax = null;

    /**
     * @var int $agencyCommission
     */
    protected $agencyCommission = null;

    /**
     * @param string $billingCap
     * @param string $billingSchedule
     * @param string $billingSource
     * @param int $advertiserDiscount
     * @param int $valueAddedTax
     * @param int $agencyCommission
     */
    public function __construct($billingCap = null, $billingSchedule = null, $billingSource = null, $advertiserDiscount = null, $valueAddedTax = null, $agencyCommission = null)
    {
      $this->billingCap = $billingCap;
      $this->billingSchedule = $billingSchedule;
      $this->billingSource = $billingSource;
      $this->advertiserDiscount = $advertiserDiscount;
      $this->valueAddedTax = $valueAddedTax;
      $this->agencyCommission = $agencyCommission;
    }

    /**
     * @return string
     */
    public function getBillingCap()
    {
      return $this->billingCap;
    }

    /**
     * @param string $billingCap
     * @return \Google\AdsApi\AdManager\v201805\CompanySettings
     */
    public function setBillingCap($billingCap)
    {
      $this->billingCap = $billingCap;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingSchedule()
    {
      return $this->billingSchedule;
    }

    /**
     * @param string $billingSchedule
     * @return \Google\AdsApi\AdManager\v201805\CompanySettings
     */
    public function setBillingSchedule($billingSchedule)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingSource()
    {
      return $this->billingSource;
    }

    /**
     * @param string $billingSource
     * @return \Google\AdsApi\AdManager\v201805\CompanySettings
     */
    public function setBillingSource($billingSource)
    {
      $this->billingSource = $billingSource;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserDiscount()
    {
      return $this->advertiserDiscount;
    }

    /**
     * @param int $advertiserDiscount
     * @return \Google\AdsApi\AdManager\v201805\CompanySettings
     */
    public function setAdvertiserDiscount($advertiserDiscount)
    {
      $this->advertiserDiscount = (!is_null($advertiserDiscount) && PHP_INT_SIZE === 4)
          ? floatval($advertiserDiscount) : $advertiserDiscount;
      return $this;
    }

    /**
     * @return int
     */
    public function getValueAddedTax()
    {
      return $this->valueAddedTax;
    }

    /**
     * @param int $valueAddedTax
     * @return \Google\AdsApi\AdManager\v201805\CompanySettings
     */
    public function setValueAddedTax($valueAddedTax)
    {
      $this->valueAddedTax = (!is_null($valueAddedTax) && PHP_INT_SIZE === 4)
          ? floatval($valueAddedTax) : $valueAddedTax;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgencyCommission()
    {
      return $this->agencyCommission;
    }

    /**
     * @param int $agencyCommission
     * @return \Google\AdsApi\AdManager\v201805\CompanySettings
     */
    public function setAgencyCommission($agencyCommission)
    {
      $this->agencyCommission = (!is_null($agencyCommission) && PHP_INT_SIZE === 4)
          ? floatval($agencyCommission) : $agencyCommission;
      return $this;
    }

}
