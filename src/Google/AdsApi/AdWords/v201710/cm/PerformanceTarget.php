<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PerformanceTarget
{

    /**
     * @var string $volumeGoalType
     */
    protected $volumeGoalType = null;

    /**
     * @var int $volumeTargetValue
     */
    protected $volumeTargetValue = null;

    /**
     * @var string $efficiencyTargetType
     */
    protected $efficiencyTargetType = null;

    /**
     * @var float $efficiencyTargetValue
     */
    protected $efficiencyTargetValue = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Money $spendTarget
     */
    protected $spendTarget = null;

    /**
     * @var string $spendTargetType
     */
    protected $spendTargetType = null;

    /**
     * @var string $forecastStatus
     */
    protected $forecastStatus = null;

    /**
     * @var boolean $hasPromotedSuggestions
     */
    protected $hasPromotedSuggestions = null;

    /**
     * @var string $startDate
     */
    protected $startDate = null;

    /**
     * @var string $endDate
     */
    protected $endDate = null;

    /**
     * @param string $volumeGoalType
     * @param int $volumeTargetValue
     * @param string $efficiencyTargetType
     * @param float $efficiencyTargetValue
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $spendTarget
     * @param string $spendTargetType
     * @param string $forecastStatus
     * @param boolean $hasPromotedSuggestions
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct($volumeGoalType = null, $volumeTargetValue = null, $efficiencyTargetType = null, $efficiencyTargetValue = null, $spendTarget = null, $spendTargetType = null, $forecastStatus = null, $hasPromotedSuggestions = null, $startDate = null, $endDate = null)
    {
      $this->volumeGoalType = $volumeGoalType;
      $this->volumeTargetValue = $volumeTargetValue;
      $this->efficiencyTargetType = $efficiencyTargetType;
      $this->efficiencyTargetValue = $efficiencyTargetValue;
      $this->spendTarget = $spendTarget;
      $this->spendTargetType = $spendTargetType;
      $this->forecastStatus = $forecastStatus;
      $this->hasPromotedSuggestions = $hasPromotedSuggestions;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getVolumeGoalType()
    {
      return $this->volumeGoalType;
    }

    /**
     * @param string $volumeGoalType
     * @return \Google\AdsApi\AdWords\v201710\cm\PerformanceTarget
     */
    public function setVolumeGoalType($volumeGoalType)
    {
      $this->volumeGoalType = $volumeGoalType;
      return $this;
    }

    /**
     * @return int
     */
    public function getVolumeTargetValue()
    {
      return $this->volumeTargetValue;
    }

    /**
     * @param int $volumeTargetValue
     * @return \Google\AdsApi\AdWords\v201710\cm\PerformanceTarget
     */
    public function setVolumeTargetValue($volumeTargetValue)
    {
      $this->volumeTargetValue = (!is_null($volumeTargetValue) && PHP_INT_SIZE === 4)
          ? floatval($volumeTargetValue) : $volumeTargetValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getEfficiencyTargetType()
    {
      return $this->efficiencyTargetType;
    }

    /**
     * @param string $efficiencyTargetType
     * @return \Google\AdsApi\AdWords\v201710\cm\PerformanceTarget
     */
    public function setEfficiencyTargetType($efficiencyTargetType)
    {
      $this->efficiencyTargetType = $efficiencyTargetType;
      return $this;
    }

    /**
     * @return float
     */
    public function getEfficiencyTargetValue()
    {
      return $this->efficiencyTargetValue;
    }

    /**
     * @param float $efficiencyTargetValue
     * @return \Google\AdsApi\AdWords\v201710\cm\PerformanceTarget
     */
    public function setEfficiencyTargetValue($efficiencyTargetValue)
    {
      $this->efficiencyTargetValue = $efficiencyTargetValue;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Money
     */
    public function getSpendTarget()
    {
      return $this->spendTarget;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $spendTarget
     * @return \Google\AdsApi\AdWords\v201710\cm\PerformanceTarget
     */
    public function setSpendTarget($spendTarget)
    {
      $this->spendTarget = $spendTarget;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpendTargetType()
    {
      return $this->spendTargetType;
    }

    /**
     * @param string $spendTargetType
     * @return \Google\AdsApi\AdWords\v201710\cm\PerformanceTarget
     */
    public function setSpendTargetType($spendTargetType)
    {
      $this->spendTargetType = $spendTargetType;
      return $this;
    }

    /**
     * @return string
     */
    public function getForecastStatus()
    {
      return $this->forecastStatus;
    }

    /**
     * @param string $forecastStatus
     * @return \Google\AdsApi\AdWords\v201710\cm\PerformanceTarget
     */
    public function setForecastStatus($forecastStatus)
    {
      $this->forecastStatus = $forecastStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasPromotedSuggestions()
    {
      return $this->hasPromotedSuggestions;
    }

    /**
     * @param boolean $hasPromotedSuggestions
     * @return \Google\AdsApi\AdWords\v201710\cm\PerformanceTarget
     */
    public function setHasPromotedSuggestions($hasPromotedSuggestions)
    {
      $this->hasPromotedSuggestions = $hasPromotedSuggestions;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return \Google\AdsApi\AdWords\v201710\cm\PerformanceTarget
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param string $endDate
     * @return \Google\AdsApi\AdWords\v201710\cm\PerformanceTarget
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

}
