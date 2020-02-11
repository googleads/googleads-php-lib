<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class HistoricalAdjustment
{

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateRange $targetDateRange
     */
    protected $targetDateRange = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateRange $referenceDateRange
     */
    protected $referenceDateRange = null;

    /**
     * @var int $milliPercentMultiplier
     */
    protected $milliPercentMultiplier = null;

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateRange $targetDateRange
     * @param \Google\AdsApi\AdManager\v202002\DateRange $referenceDateRange
     * @param int $milliPercentMultiplier
     */
    public function __construct($targetDateRange = null, $referenceDateRange = null, $milliPercentMultiplier = null)
    {
      $this->targetDateRange = $targetDateRange;
      $this->referenceDateRange = $referenceDateRange;
      $this->milliPercentMultiplier = $milliPercentMultiplier;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateRange
     */
    public function getTargetDateRange()
    {
      return $this->targetDateRange;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateRange $targetDateRange
     * @return \Google\AdsApi\AdManager\v202002\HistoricalAdjustment
     */
    public function setTargetDateRange($targetDateRange)
    {
      $this->targetDateRange = $targetDateRange;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateRange
     */
    public function getReferenceDateRange()
    {
      return $this->referenceDateRange;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateRange $referenceDateRange
     * @return \Google\AdsApi\AdManager\v202002\HistoricalAdjustment
     */
    public function setReferenceDateRange($referenceDateRange)
    {
      $this->referenceDateRange = $referenceDateRange;
      return $this;
    }

    /**
     * @return int
     */
    public function getMilliPercentMultiplier()
    {
      return $this->milliPercentMultiplier;
    }

    /**
     * @param int $milliPercentMultiplier
     * @return \Google\AdsApi\AdManager\v202002\HistoricalAdjustment
     */
    public function setMilliPercentMultiplier($milliPercentMultiplier)
    {
      $this->milliPercentMultiplier = (!is_null($milliPercentMultiplier) && PHP_INT_SIZE === 4)
          ? floatval($milliPercentMultiplier) : $milliPercentMultiplier;
      return $this;
    }

}
