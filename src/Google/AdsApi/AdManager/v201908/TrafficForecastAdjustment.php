<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrafficForecastAdjustment
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\TrafficTimeSeriesFilterCriteria $filterCriteria
     */
    protected $filterCriteria = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\TrafficForecastAdjustmentSegment[] $forecastAdjustmentSegments
     */
    protected $forecastAdjustmentSegments = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @param int $id
     * @param \Google\AdsApi\AdManager\v201908\TrafficTimeSeriesFilterCriteria $filterCriteria
     * @param \Google\AdsApi\AdManager\v201908\TrafficForecastAdjustmentSegment[] $forecastAdjustmentSegments
     * @param \Google\AdsApi\AdManager\v201908\DateTime $lastModifiedDateTime
     */
    public function __construct($id = null, $filterCriteria = null, array $forecastAdjustmentSegments = null, $lastModifiedDateTime = null)
    {
      $this->id = $id;
      $this->filterCriteria = $filterCriteria;
      $this->forecastAdjustmentSegments = $forecastAdjustmentSegments;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
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
     * @return \Google\AdsApi\AdManager\v201908\TrafficForecastAdjustment
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\TrafficTimeSeriesFilterCriteria
     */
    public function getFilterCriteria()
    {
      return $this->filterCriteria;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\TrafficTimeSeriesFilterCriteria $filterCriteria
     * @return \Google\AdsApi\AdManager\v201908\TrafficForecastAdjustment
     */
    public function setFilterCriteria($filterCriteria)
    {
      $this->filterCriteria = $filterCriteria;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\TrafficForecastAdjustmentSegment[]
     */
    public function getForecastAdjustmentSegments()
    {
      return $this->forecastAdjustmentSegments;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\TrafficForecastAdjustmentSegment[]|null $forecastAdjustmentSegments
     * @return \Google\AdsApi\AdManager\v201908\TrafficForecastAdjustment
     */
    public function setForecastAdjustmentSegments(array $forecastAdjustmentSegments = null)
    {
      $this->forecastAdjustmentSegments = $forecastAdjustmentSegments;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v201908\TrafficForecastAdjustment
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

}
