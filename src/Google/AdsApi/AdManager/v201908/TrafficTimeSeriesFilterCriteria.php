<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrafficTimeSeriesFilterCriteria
{

    /**
     * @var \Google\AdsApi\AdManager\v201908\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\AdUnitSize[] $adUnitSizes
     */
    protected $adUnitSizes = null;

    /**
     * @param \Google\AdsApi\AdManager\v201908\Targeting $targeting
     * @param \Google\AdsApi\AdManager\v201908\AdUnitSize[] $adUnitSizes
     */
    public function __construct($targeting = null, array $adUnitSizes = null)
    {
      $this->targeting = $targeting;
      $this->adUnitSizes = $adUnitSizes;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\Targeting $targeting
     * @return \Google\AdsApi\AdManager\v201908\TrafficTimeSeriesFilterCriteria
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\AdUnitSize[]
     */
    public function getAdUnitSizes()
    {
      return $this->adUnitSizes;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\AdUnitSize[]|null $adUnitSizes
     * @return \Google\AdsApi\AdManager\v201908\TrafficTimeSeriesFilterCriteria
     */
    public function setAdUnitSizes(array $adUnitSizes = null)
    {
      $this->adUnitSizes = $adUnitSizes;
      return $this;
    }

}
