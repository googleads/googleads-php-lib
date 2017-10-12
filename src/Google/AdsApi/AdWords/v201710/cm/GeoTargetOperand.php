<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class GeoTargetOperand extends \Google\AdsApi\AdWords\v201710\cm\FunctionArgumentOperand
{

    /**
     * @var int[] $locations
     */
    protected $locations = null;

    /**
     * @param string $FunctionArgumentOperandType
     * @param int[] $locations
     */
    public function __construct($FunctionArgumentOperandType = null, array $locations = null)
    {
      parent::__construct($FunctionArgumentOperandType);
      $this->locations = $locations;
    }

    /**
     * @return int[]
     */
    public function getLocations()
    {
      return $this->locations;
    }

    /**
     * @param int[] $locations
     * @return \Google\AdsApi\AdWords\v201710\cm\GeoTargetOperand
     */
    public function setLocations(array $locations)
    {
      $this->locations = $locations;
      return $this;
    }

}
