<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class HistoricalBasisVolumeSettings
{

    /**
     * @var boolean $useParentTrafficForecastSegmentTargeting
     */
    protected $useParentTrafficForecastSegmentTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202105\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202105\DateRange $historicalDateRange
     */
    protected $historicalDateRange = null;

    /**
     * @var int $multiplierMilliPercent
     */
    protected $multiplierMilliPercent = null;

    /**
     * @param boolean $useParentTrafficForecastSegmentTargeting
     * @param \Google\AdsApi\AdManager\v202105\Targeting $targeting
     * @param \Google\AdsApi\AdManager\v202105\DateRange $historicalDateRange
     * @param int $multiplierMilliPercent
     */
    public function __construct($useParentTrafficForecastSegmentTargeting = null, $targeting = null, $historicalDateRange = null, $multiplierMilliPercent = null)
    {
      $this->useParentTrafficForecastSegmentTargeting = $useParentTrafficForecastSegmentTargeting;
      $this->targeting = $targeting;
      $this->historicalDateRange = $historicalDateRange;
      $this->multiplierMilliPercent = $multiplierMilliPercent;
    }

    /**
     * @return boolean
     */
    public function getUseParentTrafficForecastSegmentTargeting()
    {
      return $this->useParentTrafficForecastSegmentTargeting;
    }

    /**
     * @param boolean $useParentTrafficForecastSegmentTargeting
     * @return \Google\AdsApi\AdManager\v202105\HistoricalBasisVolumeSettings
     */
    public function setUseParentTrafficForecastSegmentTargeting($useParentTrafficForecastSegmentTargeting)
    {
      $this->useParentTrafficForecastSegmentTargeting = $useParentTrafficForecastSegmentTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\Targeting $targeting
     * @return \Google\AdsApi\AdManager\v202105\HistoricalBasisVolumeSettings
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\DateRange
     */
    public function getHistoricalDateRange()
    {
      return $this->historicalDateRange;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\DateRange $historicalDateRange
     * @return \Google\AdsApi\AdManager\v202105\HistoricalBasisVolumeSettings
     */
    public function setHistoricalDateRange($historicalDateRange)
    {
      $this->historicalDateRange = $historicalDateRange;
      return $this;
    }

    /**
     * @return int
     */
    public function getMultiplierMilliPercent()
    {
      return $this->multiplierMilliPercent;
    }

    /**
     * @param int $multiplierMilliPercent
     * @return \Google\AdsApi\AdManager\v202105\HistoricalBasisVolumeSettings
     */
    public function setMultiplierMilliPercent($multiplierMilliPercent)
    {
      $this->multiplierMilliPercent = (!is_null($multiplierMilliPercent) && PHP_INT_SIZE === 4)
          ? floatval($multiplierMilliPercent) : $multiplierMilliPercent;
      return $this;
    }

}
