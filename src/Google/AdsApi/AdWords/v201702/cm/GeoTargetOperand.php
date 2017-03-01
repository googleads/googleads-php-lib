<?php

namespace Google\AdsApi\AdWords\v201702\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class GeoTargetOperand extends \Google\AdsApi\AdWords\v201702\cm\FunctionArgumentOperand
{

    /**
     * @var long[] $locations
     */
    protected $locations = null;

    /**
     * @param string $FunctionArgumentOperandType
     * @param long[] $locations
     */
    public function __construct($FunctionArgumentOperandType = null, array $locations = null)
    {
      parent::__construct($FunctionArgumentOperandType);
      $this->locations = $locations;
    }

    /**
     * @return long[]
     */
    public function getLocations()
    {
      return $this->locations;
    }

    /**
     * @param long[] $locations
     * @return \Google\AdsApi\AdWords\v201702\cm\GeoTargetOperand
     */
    public function setLocations(array $locations)
    {
      $this->locations = $locations;
      return $this;
    }

}
