<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PlacementTargeting
{

    /**
     * @var long[] $targetedPlacementIds
     */
    protected $targetedPlacementIds = null;

    /**
     * @param long[] $targetedPlacementIds
     */
    public function __construct(array $targetedPlacementIds = null)
    {
      $this->targetedPlacementIds = $targetedPlacementIds;
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
     * @return \Google\AdsApi\Dfp\v201602\PlacementTargeting
     */
    public function setTargetedPlacementIds(array $targetedPlacementIds)
    {
      $this->targetedPlacementIds = $targetedPlacementIds;
      return $this;
    }

}
