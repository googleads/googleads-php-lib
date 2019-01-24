<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class GrpDemographicBreakdown
{

    /**
     * @var int $availableUnits
     */
    protected $availableUnits = null;

    /**
     * @var int $matchedUnits
     */
    protected $matchedUnits = null;

    /**
     * @var string $unitType
     */
    protected $unitType = null;

    /**
     * @var string $gender
     */
    protected $gender = null;

    /**
     * @var string $age
     */
    protected $age = null;

    /**
     * @param int $availableUnits
     * @param int $matchedUnits
     * @param string $unitType
     * @param string $gender
     * @param string $age
     */
    public function __construct($availableUnits = null, $matchedUnits = null, $unitType = null, $gender = null, $age = null)
    {
      $this->availableUnits = $availableUnits;
      $this->matchedUnits = $matchedUnits;
      $this->unitType = $unitType;
      $this->gender = $gender;
      $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAvailableUnits()
    {
      return $this->availableUnits;
    }

    /**
     * @param int $availableUnits
     * @return \Google\AdsApi\AdManager\v201802\GrpDemographicBreakdown
     */
    public function setAvailableUnits($availableUnits)
    {
      $this->availableUnits = (!is_null($availableUnits) && PHP_INT_SIZE === 4)
          ? floatval($availableUnits) : $availableUnits;
      return $this;
    }

    /**
     * @return int
     */
    public function getMatchedUnits()
    {
      return $this->matchedUnits;
    }

    /**
     * @param int $matchedUnits
     * @return \Google\AdsApi\AdManager\v201802\GrpDemographicBreakdown
     */
    public function setMatchedUnits($matchedUnits)
    {
      $this->matchedUnits = (!is_null($matchedUnits) && PHP_INT_SIZE === 4)
          ? floatval($matchedUnits) : $matchedUnits;
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
     * @return \Google\AdsApi\AdManager\v201802\GrpDemographicBreakdown
     */
    public function setUnitType($unitType)
    {
      $this->unitType = $unitType;
      return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
      return $this->gender;
    }

    /**
     * @param string $gender
     * @return \Google\AdsApi\AdManager\v201802\GrpDemographicBreakdown
     */
    public function setGender($gender)
    {
      $this->gender = $gender;
      return $this;
    }

    /**
     * @return string
     */
    public function getAge()
    {
      return $this->age;
    }

    /**
     * @param string $age
     * @return \Google\AdsApi\AdManager\v201802\GrpDemographicBreakdown
     */
    public function setAge($age)
    {
      $this->age = $age;
      return $this;
    }

}
