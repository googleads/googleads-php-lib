<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AlternativeUnitTypeForecast
{

    /**
     * @var string $unitType
     */
    protected $unitType = null;

    /**
     * @var int $matchedUnits
     */
    protected $matchedUnits = null;

    /**
     * @var int $availableUnits
     */
    protected $availableUnits = null;

    /**
     * @var int $possibleUnits
     */
    protected $possibleUnits = null;

    /**
     * @param string $unitType
     * @param int $matchedUnits
     * @param int $availableUnits
     * @param int $possibleUnits
     */
    public function __construct($unitType = null, $matchedUnits = null, $availableUnits = null, $possibleUnits = null)
    {
      $this->unitType = $unitType;
      $this->matchedUnits = $matchedUnits;
      $this->availableUnits = $availableUnits;
      $this->possibleUnits = $possibleUnits;
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
     * @return \Google\AdsApi\AdManager\v201808\AlternativeUnitTypeForecast
     */
    public function setUnitType($unitType)
    {
      $this->unitType = $unitType;
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
     * @return \Google\AdsApi\AdManager\v201808\AlternativeUnitTypeForecast
     */
    public function setMatchedUnits($matchedUnits)
    {
      $this->matchedUnits = (!is_null($matchedUnits) && PHP_INT_SIZE === 4)
          ? floatval($matchedUnits) : $matchedUnits;
      return $this;
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
     * @return \Google\AdsApi\AdManager\v201808\AlternativeUnitTypeForecast
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
    public function getPossibleUnits()
    {
      return $this->possibleUnits;
    }

    /**
     * @param int $possibleUnits
     * @return \Google\AdsApi\AdManager\v201808\AlternativeUnitTypeForecast
     */
    public function setPossibleUnits($possibleUnits)
    {
      $this->possibleUnits = (!is_null($possibleUnits) && PHP_INT_SIZE === 4)
          ? floatval($possibleUnits) : $possibleUnits;
      return $this;
    }

}
