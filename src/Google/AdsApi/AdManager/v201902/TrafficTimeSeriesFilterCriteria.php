<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrafficTimeSeriesFilterCriteria
{

    /**
     * @var \Google\AdsApi\AdManager\v201902\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201902\AdUnitSize[] $adUnitSizes
     */
    protected $adUnitSizes = null;

    /**
     * @param \Google\AdsApi\AdManager\v201902\Targeting $targeting
     * @param \Google\AdsApi\AdManager\v201902\AdUnitSize[] $adUnitSizes
     */
    public function __construct($targeting = null, array $adUnitSizes = null)
    {
      $this->targeting = $targeting;
      $this->adUnitSizes = $adUnitSizes;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201902\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201902\Targeting $targeting
     * @return \Google\AdsApi\AdManager\v201902\TrafficTimeSeriesFilterCriteria
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201902\AdUnitSize[]
     */
    public function getAdUnitSizes()
    {
      return $this->adUnitSizes;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201902\AdUnitSize[] $adUnitSizes
     * @return \Google\AdsApi\AdManager\v201902\TrafficTimeSeriesFilterCriteria
     */
    public function setAdUnitSizes(array $adUnitSizes)
    {
      $this->adUnitSizes = $adUnitSizes;
      return $this;
    }

}
