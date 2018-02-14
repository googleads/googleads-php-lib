<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FrequencyCap
{

    /**
     * @var int $maxImpressions
     */
    protected $maxImpressions = null;

    /**
     * @var int $numTimeUnits
     */
    protected $numTimeUnits = null;

    /**
     * @var string $timeUnit
     */
    protected $timeUnit = null;

    /**
     * @param int $maxImpressions
     * @param int $numTimeUnits
     * @param string $timeUnit
     */
    public function __construct($maxImpressions = null, $numTimeUnits = null, $timeUnit = null)
    {
      $this->maxImpressions = $maxImpressions;
      $this->numTimeUnits = $numTimeUnits;
      $this->timeUnit = $timeUnit;
    }

    /**
     * @return int
     */
    public function getMaxImpressions()
    {
      return $this->maxImpressions;
    }

    /**
     * @param int $maxImpressions
     * @return \Google\AdsApi\Dfp\v201802\FrequencyCap
     */
    public function setMaxImpressions($maxImpressions)
    {
      $this->maxImpressions = $maxImpressions;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumTimeUnits()
    {
      return $this->numTimeUnits;
    }

    /**
     * @param int $numTimeUnits
     * @return \Google\AdsApi\Dfp\v201802\FrequencyCap
     */
    public function setNumTimeUnits($numTimeUnits)
    {
      $this->numTimeUnits = $numTimeUnits;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeUnit()
    {
      return $this->timeUnit;
    }

    /**
     * @param string $timeUnit
     * @return \Google\AdsApi\Dfp\v201802\FrequencyCap
     */
    public function setTimeUnit($timeUnit)
    {
      $this->timeUnit = $timeUnit;
      return $this;
    }

}
