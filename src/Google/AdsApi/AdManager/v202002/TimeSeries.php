<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TimeSeries
{

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateRange $timeSeriesDateRange
     */
    protected $timeSeriesDateRange = null;

    /**
     * @var int[] $timeSeriesValues
     */
    protected $timeSeriesValues = null;

    /**
     * @var string $valuePeriodType
     */
    protected $valuePeriodType = null;

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateRange $timeSeriesDateRange
     * @param int[] $timeSeriesValues
     * @param string $valuePeriodType
     */
    public function __construct($timeSeriesDateRange = null, array $timeSeriesValues = null, $valuePeriodType = null)
    {
      $this->timeSeriesDateRange = $timeSeriesDateRange;
      $this->timeSeriesValues = $timeSeriesValues;
      $this->valuePeriodType = $valuePeriodType;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateRange
     */
    public function getTimeSeriesDateRange()
    {
      return $this->timeSeriesDateRange;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateRange $timeSeriesDateRange
     * @return \Google\AdsApi\AdManager\v202002\TimeSeries
     */
    public function setTimeSeriesDateRange($timeSeriesDateRange)
    {
      $this->timeSeriesDateRange = $timeSeriesDateRange;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getTimeSeriesValues()
    {
      return $this->timeSeriesValues;
    }

    /**
     * @param int[]|null $timeSeriesValues
     * @return \Google\AdsApi\AdManager\v202002\TimeSeries
     */
    public function setTimeSeriesValues(array $timeSeriesValues = null)
    {
      $this->timeSeriesValues = $timeSeriesValues;
      return $this;
    }

    /**
     * @return string
     */
    public function getValuePeriodType()
    {
      return $this->valuePeriodType;
    }

    /**
     * @param string $valuePeriodType
     * @return \Google\AdsApi\AdManager\v202002\TimeSeries
     */
    public function setValuePeriodType($valuePeriodType)
    {
      $this->valuePeriodType = $valuePeriodType;
      return $this;
    }

}
