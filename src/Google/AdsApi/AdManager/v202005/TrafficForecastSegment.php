<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrafficForecastSegment
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var int $forecastAdjustmentCount
     */
    protected $forecastAdjustmentCount = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\DateTime $creationDateTime
     */
    protected $creationDateTime = null;

    /**
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202005\Targeting $targeting
     * @param int $forecastAdjustmentCount
     * @param \Google\AdsApi\AdManager\v202005\DateTime $creationDateTime
     */
    public function __construct($id = null, $name = null, $targeting = null, $forecastAdjustmentCount = null, $creationDateTime = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->targeting = $targeting;
      $this->forecastAdjustmentCount = $forecastAdjustmentCount;
      $this->creationDateTime = $creationDateTime;
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
     * @return \Google\AdsApi\AdManager\v202005\TrafficForecastSegment
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
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
     * @return \Google\AdsApi\AdManager\v202005\TrafficForecastSegment
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\Targeting $targeting
     * @return \Google\AdsApi\AdManager\v202005\TrafficForecastSegment
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

    /**
     * @return int
     */
    public function getForecastAdjustmentCount()
    {
      return $this->forecastAdjustmentCount;
    }

    /**
     * @param int $forecastAdjustmentCount
     * @return \Google\AdsApi\AdManager\v202005\TrafficForecastSegment
     */
    public function setForecastAdjustmentCount($forecastAdjustmentCount)
    {
      $this->forecastAdjustmentCount = $forecastAdjustmentCount;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\DateTime
     */
    public function getCreationDateTime()
    {
      return $this->creationDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\DateTime $creationDateTime
     * @return \Google\AdsApi\AdManager\v202005\TrafficForecastSegment
     */
    public function setCreationDateTime($creationDateTime)
    {
      $this->creationDateTime = $creationDateTime;
      return $this;
    }

}
