<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrafficForecastAdjustmentSegment
{

    /**
     * @var string $basisType
     */
    protected $basisType = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\TimeSeries $adjustmentTimeSeries
     */
    protected $adjustmentTimeSeries = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\HistoricalAdjustment $historicalAdjustment
     */
    protected $historicalAdjustment = null;

    /**
     * @param string $basisType
     * @param \Google\AdsApi\AdManager\v201911\TimeSeries $adjustmentTimeSeries
     * @param \Google\AdsApi\AdManager\v201911\HistoricalAdjustment $historicalAdjustment
     */
    public function __construct($basisType = null, $adjustmentTimeSeries = null, $historicalAdjustment = null)
    {
      $this->basisType = $basisType;
      $this->adjustmentTimeSeries = $adjustmentTimeSeries;
      $this->historicalAdjustment = $historicalAdjustment;
    }

    /**
     * @return string
     */
    public function getBasisType()
    {
      return $this->basisType;
    }

    /**
     * @param string $basisType
     * @return \Google\AdsApi\AdManager\v201911\TrafficForecastAdjustmentSegment
     */
    public function setBasisType($basisType)
    {
      $this->basisType = $basisType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\TimeSeries
     */
    public function getAdjustmentTimeSeries()
    {
      return $this->adjustmentTimeSeries;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\TimeSeries $adjustmentTimeSeries
     * @return \Google\AdsApi\AdManager\v201911\TrafficForecastAdjustmentSegment
     */
    public function setAdjustmentTimeSeries($adjustmentTimeSeries)
    {
      $this->adjustmentTimeSeries = $adjustmentTimeSeries;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\HistoricalAdjustment
     */
    public function getHistoricalAdjustment()
    {
      return $this->historicalAdjustment;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\HistoricalAdjustment $historicalAdjustment
     * @return \Google\AdsApi\AdManager\v201911\TrafficForecastAdjustmentSegment
     */
    public function setHistoricalAdjustment($historicalAdjustment)
    {
      $this->historicalAdjustment = $historicalAdjustment;
      return $this;
    }

}
