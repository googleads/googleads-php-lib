<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class InventoryTargeting
{

    /**
     * @var \Google\AdsApi\Dfp\v201602\AdUnitTargeting[] $targetedAdUnits
     */
    protected $targetedAdUnits = null;

    /**
     * @var \Google\AdsApi\Dfp\v201602\AdUnitTargeting[] $excludedAdUnits
     */
    protected $excludedAdUnits = null;

    /**
     * @var long[] $targetedPlacementIds
     */
    protected $targetedPlacementIds = null;

    /**
     * @param \Google\AdsApi\Dfp\v201602\AdUnitTargeting[] $targetedAdUnits
     * @param \Google\AdsApi\Dfp\v201602\AdUnitTargeting[] $excludedAdUnits
     * @param long[] $targetedPlacementIds
     */
    public function __construct(array $targetedAdUnits = null, array $excludedAdUnits = null, array $targetedPlacementIds = null)
    {
      $this->targetedAdUnits = $targetedAdUnits;
      $this->excludedAdUnits = $excludedAdUnits;
      $this->targetedPlacementIds = $targetedPlacementIds;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201602\AdUnitTargeting[]
     */
    public function getTargetedAdUnits()
    {
      return $this->targetedAdUnits;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201602\AdUnitTargeting[] $targetedAdUnits
     * @return \Google\AdsApi\Dfp\v201602\InventoryTargeting
     */
    public function setTargetedAdUnits(array $targetedAdUnits)
    {
      $this->targetedAdUnits = $targetedAdUnits;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201602\AdUnitTargeting[]
     */
    public function getExcludedAdUnits()
    {
      return $this->excludedAdUnits;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201602\AdUnitTargeting[] $excludedAdUnits
     * @return \Google\AdsApi\Dfp\v201602\InventoryTargeting
     */
    public function setExcludedAdUnits(array $excludedAdUnits)
    {
      $this->excludedAdUnits = $excludedAdUnits;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getTargetedPlacementIds()
    {
      return $this->targetedPlacementIds;
    }

    /**
     * @param long[] $targetedPlacementIds
     * @return \Google\AdsApi\Dfp\v201602\InventoryTargeting
     */
    public function setTargetedPlacementIds(array $targetedPlacementIds)
    {
      $this->targetedPlacementIds = $targetedPlacementIds;
      return $this;
    }

}
