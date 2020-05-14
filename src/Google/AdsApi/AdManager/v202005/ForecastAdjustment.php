<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastAdjustment
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $trafficForecastSegmentId
     */
    protected $trafficForecastSegmentId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\DateRange $dateRange
     */
    protected $dateRange = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $volumeType
     */
    protected $volumeType = null;

    /**
     * @var boolean $allowAdjustingForecastAboveRecommendedLimit
     */
    protected $allowAdjustingForecastAboveRecommendedLimit = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\DailyVolumeSettings $dailyVolumeSettings
     */
    protected $dailyVolumeSettings = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\TotalVolumeSettings $totalVolumeSettings
     */
    protected $totalVolumeSettings = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\HistoricalBasisVolumeSettings $historicalBasisVolumeSettings
     */
    protected $historicalBasisVolumeSettings = null;

    /**
     * @var int[] $calculatedDailyAdOpportunityCounts
     */
    protected $calculatedDailyAdOpportunityCounts = null;

    /**
     * @param int $id
     * @param int $trafficForecastSegmentId
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202005\DateRange $dateRange
     * @param string $status
     * @param string $volumeType
     * @param boolean $allowAdjustingForecastAboveRecommendedLimit
     * @param \Google\AdsApi\AdManager\v202005\DailyVolumeSettings $dailyVolumeSettings
     * @param \Google\AdsApi\AdManager\v202005\TotalVolumeSettings $totalVolumeSettings
     * @param \Google\AdsApi\AdManager\v202005\HistoricalBasisVolumeSettings $historicalBasisVolumeSettings
     * @param int[] $calculatedDailyAdOpportunityCounts
     */
    public function __construct($id = null, $trafficForecastSegmentId = null, $name = null, $dateRange = null, $status = null, $volumeType = null, $allowAdjustingForecastAboveRecommendedLimit = null, $dailyVolumeSettings = null, $totalVolumeSettings = null, $historicalBasisVolumeSettings = null, array $calculatedDailyAdOpportunityCounts = null)
    {
      $this->id = $id;
      $this->trafficForecastSegmentId = $trafficForecastSegmentId;
      $this->name = $name;
      $this->dateRange = $dateRange;
      $this->status = $status;
      $this->volumeType = $volumeType;
      $this->allowAdjustingForecastAboveRecommendedLimit = $allowAdjustingForecastAboveRecommendedLimit;
      $this->dailyVolumeSettings = $dailyVolumeSettings;
      $this->totalVolumeSettings = $totalVolumeSettings;
      $this->historicalBasisVolumeSettings = $historicalBasisVolumeSettings;
      $this->calculatedDailyAdOpportunityCounts = $calculatedDailyAdOpportunityCounts;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdManager\v202005\ForecastAdjustment
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getTrafficForecastSegmentId()
    {
      return $this->trafficForecastSegmentId;
    }

    /**
     * @param int $trafficForecastSegmentId
     * @return \Google\AdsApi\AdManager\v202005\ForecastAdjustment
     */
    public function setTrafficForecastSegmentId($trafficForecastSegmentId)
    {
      $this->trafficForecastSegmentId = (!is_null($trafficForecastSegmentId) && PHP_INT_SIZE === 4)
          ? floatval($trafficForecastSegmentId) : $trafficForecastSegmentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdManager\v202005\ForecastAdjustment
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\DateRange
     */
    public function getDateRange()
    {
      return $this->dateRange;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\DateRange $dateRange
     * @return \Google\AdsApi\AdManager\v202005\ForecastAdjustment
     */
    public function setDateRange($dateRange)
    {
      $this->dateRange = $dateRange;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdManager\v202005\ForecastAdjustment
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getVolumeType()
    {
      return $this->volumeType;
    }

    /**
     * @param string $volumeType
     * @return \Google\AdsApi\AdManager\v202005\ForecastAdjustment
     */
    public function setVolumeType($volumeType)
    {
      $this->volumeType = $volumeType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowAdjustingForecastAboveRecommendedLimit()
    {
      return $this->allowAdjustingForecastAboveRecommendedLimit;
    }

    /**
     * @param boolean $allowAdjustingForecastAboveRecommendedLimit
     * @return \Google\AdsApi\AdManager\v202005\ForecastAdjustment
     */
    public function setAllowAdjustingForecastAboveRecommendedLimit($allowAdjustingForecastAboveRecommendedLimit)
    {
      $this->allowAdjustingForecastAboveRecommendedLimit = $allowAdjustingForecastAboveRecommendedLimit;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\DailyVolumeSettings
     */
    public function getDailyVolumeSettings()
    {
      return $this->dailyVolumeSettings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\DailyVolumeSettings $dailyVolumeSettings
     * @return \Google\AdsApi\AdManager\v202005\ForecastAdjustment
     */
    public function setDailyVolumeSettings($dailyVolumeSettings)
    {
      $this->dailyVolumeSettings = $dailyVolumeSettings;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\TotalVolumeSettings
     */
    public function getTotalVolumeSettings()
    {
      return $this->totalVolumeSettings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\TotalVolumeSettings $totalVolumeSettings
     * @return \Google\AdsApi\AdManager\v202005\ForecastAdjustment
     */
    public function setTotalVolumeSettings($totalVolumeSettings)
    {
      $this->totalVolumeSettings = $totalVolumeSettings;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\HistoricalBasisVolumeSettings
     */
    public function getHistoricalBasisVolumeSettings()
    {
      return $this->historicalBasisVolumeSettings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\HistoricalBasisVolumeSettings $historicalBasisVolumeSettings
     * @return \Google\AdsApi\AdManager\v202005\ForecastAdjustment
     */
    public function setHistoricalBasisVolumeSettings($historicalBasisVolumeSettings)
    {
      $this->historicalBasisVolumeSettings = $historicalBasisVolumeSettings;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getCalculatedDailyAdOpportunityCounts()
    {
      return $this->calculatedDailyAdOpportunityCounts;
    }

    /**
     * @param int[]|null $calculatedDailyAdOpportunityCounts
     * @return \Google\AdsApi\AdManager\v202005\ForecastAdjustment
     */
    public function setCalculatedDailyAdOpportunityCounts(array $calculatedDailyAdOpportunityCounts = null)
    {
      $this->calculatedDailyAdOpportunityCounts = $calculatedDailyAdOpportunityCounts;
      return $this;
    }

}
