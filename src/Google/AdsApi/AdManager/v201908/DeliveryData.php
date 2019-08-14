<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DeliveryData
{

    /**
     * @var int[] $units
     */
    protected $units = null;

    /**
     * @param int[] $units
     */
    public function __construct(array $units = null)
    {
      $this->units = $units;
    }

    /**
     * @return int[]
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param int[]|null $units
     * @return \Google\AdsApi\AdManager\v201908\DeliveryData
     */
    public function setUnits(array $units = null)
    {
      $this->units = $units;
      return $this;
    }

}
