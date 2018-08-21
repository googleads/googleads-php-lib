<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class InventoryTargeting
{

    /**
     * @var \Google\AdsApi\AdManager\v201802\AdUnitTargeting[] $targetedAdUnits
     */
    protected $targetedAdUnits = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\AdUnitTargeting[] $excludedAdUnits
     */
    protected $excludedAdUnits = null;

    /**
     * @var int[] $targetedPlacementIds
     */
    protected $targetedPlacementIds = null;

    /**
     * @param \Google\AdsApi\AdManager\v201802\AdUnitTargeting[] $targetedAdUnits
     * @param \Google\AdsApi\AdManager\v201802\AdUnitTargeting[] $excludedAdUnits
     * @param int[] $targetedPlacementIds
     */
    public function __construct(array $targetedAdUnits = null, array $excludedAdUnits = null, array $targetedPlacementIds = null)
    {
      $this->targetedAdUnits = $targetedAdUnits;
      $this->excludedAdUnits = $excludedAdUnits;
      $this->targetedPlacementIds = $targetedPlacementIds;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\AdUnitTargeting[]
     */
    public function getTargetedAdUnits()
    {
      return $this->targetedAdUnits;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\AdUnitTargeting[] $targetedAdUnits
     * @return \Google\AdsApi\AdManager\v201802\InventoryTargeting
     */
    public function setTargetedAdUnits(array $targetedAdUnits)
    {
      $this->targetedAdUnits = $targetedAdUnits;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\AdUnitTargeting[]
     */
    public function getExcludedAdUnits()
    {
      return $this->excludedAdUnits;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\AdUnitTargeting[] $excludedAdUnits
     * @return \Google\AdsApi\AdManager\v201802\InventoryTargeting
     */
    public function setExcludedAdUnits(array $excludedAdUnits)
    {
      $this->excludedAdUnits = $excludedAdUnits;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getTargetedPlacementIds()
    {
      return $this->targetedPlacementIds;
    }

    /**
     * @param int[] $targetedPlacementIds
     * @return \Google\AdsApi\AdManager\v201802\InventoryTargeting
     */
    public function setTargetedPlacementIds(array $targetedPlacementIds)
    {
      $this->targetedPlacementIds = $targetedPlacementIds;
      return $this;
    }

}
