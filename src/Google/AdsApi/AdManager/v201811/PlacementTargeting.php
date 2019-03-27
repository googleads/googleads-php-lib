<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PlacementTargeting
{

    /**
     * @var int[] $targetedPlacementIds
     */
    protected $targetedPlacementIds = null;

    /**
     * @param int[] $targetedPlacementIds
     */
    public function __construct(array $targetedPlacementIds = null)
    {
      $this->targetedPlacementIds = $targetedPlacementIds;
    }

    /**
     * @return int[]
     */
    public function getTargetedPlacementIds()
    {
      return $this->targetedPlacementIds;
    }

    /**
     * @param int[]|null $targetedPlacementIds
     * @return \Google\AdsApi\AdManager\v201811\PlacementTargeting
     */
    public function setTargetedPlacementIds(array $targetedPlacementIds = null)
    {
      $this->targetedPlacementIds = $targetedPlacementIds;
      return $this;
    }

}
