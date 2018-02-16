<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingCriteriaBreakdown
{

    /**
     * @var string $targetingDimension
     */
    protected $targetingDimension = null;

    /**
     * @var int $targetingCriteriaId
     */
    protected $targetingCriteriaId = null;

    /**
     * @var string $targetingCriteriaName
     */
    protected $targetingCriteriaName = null;

    /**
     * @var boolean $excluded
     */
    protected $excluded = null;

    /**
     * @var int $availableUnits
     */
    protected $availableUnits = null;

    /**
     * @var int $matchedUnits
     */
    protected $matchedUnits = null;

    /**
     * @param string $targetingDimension
     * @param int $targetingCriteriaId
     * @param string $targetingCriteriaName
     * @param boolean $excluded
     * @param int $availableUnits
     * @param int $matchedUnits
     */
    public function __construct($targetingDimension = null, $targetingCriteriaId = null, $targetingCriteriaName = null, $excluded = null, $availableUnits = null, $matchedUnits = null)
    {
      $this->targetingDimension = $targetingDimension;
      $this->targetingCriteriaId = $targetingCriteriaId;
      $this->targetingCriteriaName = $targetingCriteriaName;
      $this->excluded = $excluded;
      $this->availableUnits = $availableUnits;
      $this->matchedUnits = $matchedUnits;
    }

    /**
     * @return string
     */
    public function getTargetingDimension()
    {
      return $this->targetingDimension;
    }

    /**
     * @param string $targetingDimension
     * @return \Google\AdsApi\Dfp\v201711\TargetingCriteriaBreakdown
     */
    public function setTargetingDimension($targetingDimension)
    {
      $this->targetingDimension = $targetingDimension;
      return $this;
    }

    /**
     * @return int
     */
    public function getTargetingCriteriaId()
    {
      return $this->targetingCriteriaId;
    }

    /**
     * @param int $targetingCriteriaId
     * @return \Google\AdsApi\Dfp\v201711\TargetingCriteriaBreakdown
     */
    public function setTargetingCriteriaId($targetingCriteriaId)
    {
      $this->targetingCriteriaId = (!is_null($targetingCriteriaId) && PHP_INT_SIZE === 4)
          ? floatval($targetingCriteriaId) : $targetingCriteriaId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetingCriteriaName()
    {
      return $this->targetingCriteriaName;
    }

    /**
     * @param string $targetingCriteriaName
     * @return \Google\AdsApi\Dfp\v201711\TargetingCriteriaBreakdown
     */
    public function setTargetingCriteriaName($targetingCriteriaName)
    {
      $this->targetingCriteriaName = $targetingCriteriaName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcluded()
    {
      return $this->excluded;
    }

    /**
     * @param boolean $excluded
     * @return \Google\AdsApi\Dfp\v201711\TargetingCriteriaBreakdown
     */
    public function setExcluded($excluded)
    {
      $this->excluded = $excluded;
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
     * @return \Google\AdsApi\Dfp\v201711\TargetingCriteriaBreakdown
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
     * @return \Google\AdsApi\Dfp\v201711\TargetingCriteriaBreakdown
     */
    public function setMatchedUnits($matchedUnits)
    {
      $this->matchedUnits = (!is_null($matchedUnits) && PHP_INT_SIZE === 4)
          ? floatval($matchedUnits) : $matchedUnits;
      return $this;
    }

}
