<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastBreakdown
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\DateTime $startTime
     */
    protected $startTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202502\DateTime $endTime
     */
    protected $endTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202502\ForecastBreakdownEntry[] $breakdownEntries
     */
    protected $breakdownEntries = null;

    /**
     * @param \Google\AdsApi\AdManager\v202502\DateTime $startTime
     * @param \Google\AdsApi\AdManager\v202502\DateTime $endTime
     * @param \Google\AdsApi\AdManager\v202502\ForecastBreakdownEntry[] $breakdownEntries
     */
    public function __construct($startTime = null, $endTime = null, array $breakdownEntries = null)
    {
      $this->startTime = $startTime;
      $this->endTime = $endTime;
      $this->breakdownEntries = $breakdownEntries;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\DateTime
     */
    public function getStartTime()
    {
      return $this->startTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\DateTime $startTime
     * @return \Google\AdsApi\AdManager\v202502\ForecastBreakdown
     */
    public function setStartTime($startTime)
    {
      $this->startTime = $startTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\DateTime
     */
    public function getEndTime()
    {
      return $this->endTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\DateTime $endTime
     * @return \Google\AdsApi\AdManager\v202502\ForecastBreakdown
     */
    public function setEndTime($endTime)
    {
      $this->endTime = $endTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\ForecastBreakdownEntry[]
     */
    public function getBreakdownEntries()
    {
      return $this->breakdownEntries;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\ForecastBreakdownEntry[]|null $breakdownEntries
     * @return \Google\AdsApi\AdManager\v202502\ForecastBreakdown
     */
    public function setBreakdownEntries(array $breakdownEntries = null)
    {
      $this->breakdownEntries = $breakdownEntries;
      return $this;
    }

}
