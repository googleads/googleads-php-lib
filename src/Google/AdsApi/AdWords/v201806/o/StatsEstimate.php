<?php

namespace Google\AdsApi\AdWords\v201806\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class StatsEstimate
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\Money $averageCpc
     */
    protected $averageCpc = null;

    /**
     * @var float $averagePosition
     */
    protected $averagePosition = null;

    /**
     * @var float $clickThroughRate
     */
    protected $clickThroughRate = null;

    /**
     * @var float $clicksPerDay
     */
    protected $clicksPerDay = null;

    /**
     * @var float $impressionsPerDay
     */
    protected $impressionsPerDay = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\Money $totalCost
     */
    protected $totalCost = null;

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Money $averageCpc
     * @param float $averagePosition
     * @param float $clickThroughRate
     * @param float $clicksPerDay
     * @param float $impressionsPerDay
     * @param \Google\AdsApi\AdWords\v201806\cm\Money $totalCost
     */
    public function __construct($averageCpc = null, $averagePosition = null, $clickThroughRate = null, $clicksPerDay = null, $impressionsPerDay = null, $totalCost = null)
    {
      $this->averageCpc = $averageCpc;
      $this->averagePosition = $averagePosition;
      $this->clickThroughRate = $clickThroughRate;
      $this->clicksPerDay = $clicksPerDay;
      $this->impressionsPerDay = $impressionsPerDay;
      $this->totalCost = $totalCost;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\Money
     */
    public function getAverageCpc()
    {
      return $this->averageCpc;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Money $averageCpc
     * @return \Google\AdsApi\AdWords\v201806\o\StatsEstimate
     */
    public function setAverageCpc($averageCpc)
    {
      $this->averageCpc = $averageCpc;
      return $this;
    }

    /**
     * @return float
     */
    public function getAveragePosition()
    {
      return $this->averagePosition;
    }

    /**
     * @param float $averagePosition
     * @return \Google\AdsApi\AdWords\v201806\o\StatsEstimate
     */
    public function setAveragePosition($averagePosition)
    {
      $this->averagePosition = $averagePosition;
      return $this;
    }

    /**
     * @return float
     */
    public function getClickThroughRate()
    {
      return $this->clickThroughRate;
    }

    /**
     * @param float $clickThroughRate
     * @return \Google\AdsApi\AdWords\v201806\o\StatsEstimate
     */
    public function setClickThroughRate($clickThroughRate)
    {
      $this->clickThroughRate = $clickThroughRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getClicksPerDay()
    {
      return $this->clicksPerDay;
    }

    /**
     * @param float $clicksPerDay
     * @return \Google\AdsApi\AdWords\v201806\o\StatsEstimate
     */
    public function setClicksPerDay($clicksPerDay)
    {
      $this->clicksPerDay = $clicksPerDay;
      return $this;
    }

    /**
     * @return float
     */
    public function getImpressionsPerDay()
    {
      return $this->impressionsPerDay;
    }

    /**
     * @param float $impressionsPerDay
     * @return \Google\AdsApi\AdWords\v201806\o\StatsEstimate
     */
    public function setImpressionsPerDay($impressionsPerDay)
    {
      $this->impressionsPerDay = $impressionsPerDay;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\Money
     */
    public function getTotalCost()
    {
      return $this->totalCost;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Money $totalCost
     * @return \Google\AdsApi\AdWords\v201806\o\StatsEstimate
     */
    public function setTotalCost($totalCost)
    {
      $this->totalCost = $totalCost;
      return $this;
    }

}
