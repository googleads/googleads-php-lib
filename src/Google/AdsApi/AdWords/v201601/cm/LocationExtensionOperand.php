<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class LocationExtensionOperand extends \Google\AdsApi\AdWords\v201601\cm\FunctionArgumentOperand
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\ConstantOperand $radius
     */
    protected $radius = null;

    /**
     * @var int $locationId
     */
    protected $locationId = null;

    /**
     * @param string $FunctionArgumentOperandType
     * @param \Google\AdsApi\AdWords\v201601\cm\ConstantOperand $radius
     * @param int $locationId
     */
    public function __construct($FunctionArgumentOperandType = null, $radius = null, $locationId = null)
    {
      parent::__construct($FunctionArgumentOperandType);
      $this->radius = $radius;
      $this->locationId = $locationId;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\ConstantOperand
     */
    public function getRadius()
    {
      return $this->radius;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\ConstantOperand $radius
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationExtensionOperand
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
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationExtensionOperand
     */
    public function setLocationId($locationId)
    {
      $this->locationId = $locationId;
      return $this;
    }

}
