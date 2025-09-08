<?php

namespace Google\AdsApi\AdManager\v202508;


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
     * @var \Google\AdsApi\AdManager\v202508\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var int $activeForecastAdjustmentCount
     */
    protected $activeForecastAdjustmentCount = null;

    /**
     * @var \Google\AdsApi\AdManager\v202508\DateTime $creationDateTime
     */
    protected $creationDateTime = null;

    /**
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202508\Targeting $targeting
     * @param int $activeForecastAdjustmentCount
     * @param \Google\AdsApi\AdManager\v202508\DateTime $creationDateTime
     */
    public function __construct($id = null, $name = null, $targeting = null, $activeForecastAdjustmentCount = null, $creationDateTime = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->targeting = $targeting;
      $this->activeForecastAdjustmentCount = $activeForecastAdjustmentCount;
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
     * @return \Google\AdsApi\AdManager\v202508\TrafficForecastSegment
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
     * @return \Google\AdsApi\AdManager\v202508\TrafficForecastSegment
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202508\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202508\Targeting $targeting
     * @return \Google\AdsApi\AdManager\v202508\TrafficForecastSegment
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

    /**
     * @return int
     */
    public function getActiveForecastAdjustmentCount()
    {
      return $this->activeForecastAdjustmentCount;
    }

    /**
     * @param int $activeForecastAdjustmentCount
     * @return \Google\AdsApi\AdManager\v202508\TrafficForecastSegment
     */
    public function setActiveForecastAdjustmentCount($activeForecastAdjustmentCount)
    {
      $this->activeForecastAdjustmentCount = $activeForecastAdjustmentCount;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202508\DateTime
     */
    public function getCreationDateTime()
    {
      return $this->creationDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202508\DateTime $creationDateTime
     * @return \Google\AdsApi\AdManager\v202508\TrafficForecastSegment
     */
    public function setCreationDateTime($creationDateTime)
    {
      $this->creationDateTime = $creationDateTime;
      return $this;
    }

}
