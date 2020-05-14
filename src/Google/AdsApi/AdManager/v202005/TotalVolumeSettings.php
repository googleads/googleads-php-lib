<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TotalVolumeSettings
{

    /**
     * @var int $adOpportunityCount
     */
    protected $adOpportunityCount = null;

    /**
     * @param int $adOpportunityCount
     */
    public function __construct($adOpportunityCount = null)
    {
      $this->adOpportunityCount = $adOpportunityCount;
    }

    /**
     * @return int
     */
    public function getAdOpportunityCount()
    {
      return $this->adOpportunityCount;
    }

    /**
     * @param int $adOpportunityCount
     * @return \Google\AdsApi\AdManager\v202005\TotalVolumeSettings
     */
    public function setAdOpportunityCount($adOpportunityCount)
    {
      $this->adOpportunityCount = (!is_null($adOpportunityCount) && PHP_INT_SIZE === 4)
          ? floatval($adOpportunityCount) : $adOpportunityCount;
      return $this;
    }

}
