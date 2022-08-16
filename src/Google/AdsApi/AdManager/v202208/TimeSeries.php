<?php

namespace Google\AdsApi\AdManager\v202208;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TimeSeries
{

    /**
     * @var \Google\AdsApi\AdManager\v202208\DateRange $timeSeriesDateRange
     */
    protected $timeSeriesDateRange = null;

    /**
     * @var int[] $values
     */
    protected $values = null;

    /**
     * @param \Google\AdsApi\AdManager\v202208\DateRange $timeSeriesDateRange
     * @param int[] $values
     */
    public function __construct($timeSeriesDateRange = null, array $values = null)
    {
      $this->timeSeriesDateRange = $timeSeriesDateRange;
      $this->values = $values;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202208\DateRange
     */
    public function getTimeSeriesDateRange()
    {
      return $this->timeSeriesDateRange;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202208\DateRange $timeSeriesDateRange
     * @return \Google\AdsApi\AdManager\v202208\TimeSeries
     */
    public function setTimeSeriesDateRange($timeSeriesDateRange)
    {
      $this->timeSeriesDateRange = $timeSeriesDateRange;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param int[]|null $values
     * @return \Google\AdsApi\AdManager\v202208\TimeSeries
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
