<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LocationExtensionOperand extends \Google\AdsApi\AdWords\v201809\cm\FunctionArgumentOperand
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\ConstantOperand $radius
     */
    protected $radius = null;

    /**
     * @var int $locationId
     */
    protected $locationId = null;

    /**
     * @param string $FunctionArgumentOperandType
     * @param \Google\AdsApi\AdWords\v201809\cm\ConstantOperand $radius
     * @param int $locationId
     */
    public function __construct($FunctionArgumentOperandType = null, $radius = null, $locationId = null)
    {
      parent::__construct($FunctionArgumentOperandType);
      $this->radius = $radius;
      $this->locationId = $locationId;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\ConstantOperand
     */
    public function getRadius()
    {
      return $this->radius;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\ConstantOperand $radius
     * @return \Google\AdsApi\AdWords\v201809\cm\LocationExtensionOperand
     */
    public function setRadius($radius)
    {
      $this->radius = $radius;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationId()
    {
      return $this->locationId;
    }

    /**
     * @param int $locationId
     * @return \Google\AdsApi\AdWords\v201809\cm\LocationExtensionOperand
     */
    public function setLocationId($locationId)
    {
      $this->locationId = (!is_null($locationId) && PHP_INT_SIZE === 4)
          ? floatval($locationId) : $locationId;
      return $this;
    }

}
