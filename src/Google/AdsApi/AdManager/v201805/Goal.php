<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Goal
{

    /**
     * @var string $goalType
     */
    protected $goalType = null;

    /**
     * @var string $unitType
     */
    protected $unitType = null;

    /**
     * @var int $units
     */
    protected $units = null;

    /**
     * @param string $goalType
     * @param string $unitType
     * @param int $units
     */
    public function __construct($goalType = null, $unitType = null, $units = null)
    {
      $this->goalType = $goalType;
      $this->unitType = $unitType;
      $this->units = $units;
    }

    /**
     * @return string
     */
    public function getGoalType()
    {
      return $this->goalType;
    }

    /**
     * @param string $goalType
     * @return \Google\AdsApi\AdManager\v201805\Goal
     */
    public function setGoalType($goalType)
    {
      $this->goalType = $goalType;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitType()
    {
      return $this->unitType;
    }

    /**
     * @param string $unitType
     * @return \Google\AdsApi\AdManager\v201805\Goal
     */
    public function setUnitType($unitType)
    {
      $this->unitType = $unitType;
      return $this;
    }

    /**
     * @return int
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param int $units
     * @return \Google\AdsApi\AdManager\v201805\Goal
     */
    public function setUnits($units)
    {
      $this->units = (!is_null($units) && PHP_INT_SIZE === 4)
          ? floatval($units) : $units;
      return $this;
    }

}
