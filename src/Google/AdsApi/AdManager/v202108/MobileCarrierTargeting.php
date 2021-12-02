<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileCarrierTargeting
{

    /**
     * @var boolean $isTargeted
     */
    protected $isTargeted = null;

    /**
     * @var \Google\AdsApi\AdManager\v202108\Technology[] $mobileCarriers
     */
    protected $mobileCarriers = null;

    /**
     * @param boolean $isTargeted
     * @param \Google\AdsApi\AdManager\v202108\Technology[] $mobileCarriers
     */
    public function __construct($isTargeted = null, array $mobileCarriers = null)
    {
      $this->isTargeted = $isTargeted;
      $this->mobileCarriers = $mobileCarriers;
    }

    /**
     * @return boolean
     */
    public function getIsTargeted()
    {
      return $this->isTargeted;
    }

    /**
     * @param boolean $isTargeted
     * @return \Google\AdsApi\AdManager\v202108\MobileCarrierTargeting
     */
    public function setIsTargeted($isTargeted)
    {
      $this->isTargeted = $isTargeted;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202108\Technology[]
     */
    public function getMobileCarriers()
    {
      return $this->mobileCarriers;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202108\Technology[]|null $mobileCarriers
     * @return \Google\AdsApi\AdManager\v202108\MobileCarrierTargeting
     */
    public function setMobileCarriers(array $mobileCarriers = null)
    {
      $this->mobileCarriers = $mobileCarriers;
      return $this;
    }

}
