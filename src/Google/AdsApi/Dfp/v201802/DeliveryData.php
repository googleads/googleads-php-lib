<?php

namespace Google\AdsApi\Dfp\v201802;


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
     * @param int[] $units
     * @return \Google\AdsApi\Dfp\v201802\DeliveryData
     */
    public function setUnits(array $units)
    {
      $this->units = $units;
      return $this;
    }

}
