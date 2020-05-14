<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DailyVolumeSettings
{

    /**
     * @var int[] $adOpportunityCounts
     */
    protected $adOpportunityCounts = null;

    /**
     * @param int[] $adOpportunityCounts
     */
    public function __construct(array $adOpportunityCounts = null)
    {
      $this->adOpportunityCounts = $adOpportunityCounts;
    }

    /**
     * @return int[]
     */
    public function getAdOpportunityCounts()
    {
      return $this->adOpportunityCounts;
    }

    /**
     * @param int[]|null $adOpportunityCounts
     * @return \Google\AdsApi\AdManager\v202005\DailyVolumeSettings
     */
    public function setAdOpportunityCounts(array $adOpportunityCounts = null)
    {
      $this->adOpportunityCounts = $adOpportunityCounts;
      return $this;
    }

}
