<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RemoveAdUnitsFromPlacement extends \Google\AdsApi\Dfp\v201702\AdUnitAction
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
     * @return \Google\AdsApi\Dfp\v201702\RemoveAdUnitsFromPlacement
     */
    public function setPlacementId($placementId)
    {
      $this->placementId = (PHP_INT_SIZE === 4)
          ? floatval($placementId) : $placementId;
      return $this;
    }

}
