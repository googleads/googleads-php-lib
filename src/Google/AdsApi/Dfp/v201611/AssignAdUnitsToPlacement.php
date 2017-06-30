<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AssignAdUnitsToPlacement extends \Google\AdsApi\Dfp\v201611\AdUnitAction
{

    /**
     * @var int $placementId
     */
    protected $placementId = null;

    /**
     * @param int $placementId
     */
    public function __construct($placementId = null)
    {
      $this->placementId = $placementId;
    }

    /**
     * @return int
     */
    public function getPlacementId()
    {
      return $this->placementId;
    }

    /**
     * @param int $placementId
     * @return \Google\AdsApi\Dfp\v201611\AssignAdUnitsToPlacement
     */
    public function setPlacementId($placementId)
    {
      $this->placementId = (PHP_INT_SIZE === 4)
          ? floatval($placementId) : $placementId;
      return $this;
    }

}
