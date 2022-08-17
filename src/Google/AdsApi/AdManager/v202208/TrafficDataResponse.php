<?php

namespace Google\AdsApi\AdManager\v202208;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrafficDataResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202208\TimeSeries $historicalTimeSeries
     */
    protected $historicalTimeSeries = null;

    /**
     * @var \Google\AdsApi\AdManager\v202208\TimeSeries $forecastedTimeSeries
     */
    protected $forecastedTimeSeries = null;

    /**
     * @var \Google\AdsApi\AdManager\v202208\TimeSeries $forecastedAssignedTimeSeries
     */
    protected $forecastedAssignedTimeSeries = null;

    /**
     * @var \Google\AdsApi\AdManager\v202208\DateRange $overallDateRange
     */
    protected $overallDateRange = null;

    /**
     * @param \Google\AdsApi\AdManager\v202208\TimeSeries $historicalTimeSeries
     * @param \Google\AdsApi\AdManager\v202208\TimeSeries $forecastedTimeSeries
     * @param \Google\AdsApi\AdManager\v202208\TimeSeries $forecastedAssignedTimeSeries
     * @param \Google\AdsApi\AdManager\v202208\DateRange $overallDateRange
     */
    public function __construct($historicalTimeSeries = null, $forecastedTimeSeries = null, $forecastedAssignedTimeSeries = null, $overallDateRange = null)
    {
      $this->historicalTimeSeries = $historicalTimeSeries;
      $this->forecastedTimeSeries = $forecastedTimeSeries;
      $this->forecastedAssignedTimeSeries = $forecastedAssignedTimeSeries;
      $this->overallDateRange = $overallDateRange;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202208\TimeSeries
     */
    public function getHistoricalTimeSeries()
    {
      return $this->historicalTimeSeries;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202208\TimeSeries $historicalTimeSeries
     * @return \Google\AdsApi\AdManager\v202208\TrafficDataResponse
     */
    public function setHistoricalTimeSeries($historicalTimeSeries)
    {
      $this->historicalTimeSeries = $historicalTimeSeries;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202208\TimeSeries
     */
    public function getForecastedTimeSeries()
    {
      return $this->forecastedTimeSeries;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202208\TimeSeries $forecastedTimeSeries
     * @return \Google\AdsApi\AdManager\v202208\TrafficDataResponse
     */
    public function setForecastedTimeSeries($forecastedTimeSeries)
    {
      $this->forecastedTimeSeries = $forecastedTimeSeries;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202208\TimeSeries
     */
    public function getForecastedAssignedTimeSeries()
    {
      return $this->forecastedAssignedTimeSeries;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202208\TimeSeries $forecastedAssignedTimeSeries
     * @return \Google\AdsApi\AdManager\v202208\TrafficDataResponse
     */
    public function setForecastedAssignedTimeSeries($forecastedAssignedTimeSeries)
    {
      $this->forecastedAssignedTimeSeries = $forecastedAssignedTimeSeries;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202208\DateRange
     */
    public function getOverallDateRange()
    {
      return $this->overallDateRange;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202208\DateRange $overallDateRange
     * @return \Google\AdsApi\AdManager\v202208\TrafficDataResponse
     */
    public function setOverallDateRange($overallDateRange)
    {
      $this->overallDateRange = $overallDateRange;
      return $this;
    }

}
