<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductType extends \Google\AdsApi\AdWords\v201806\cm\ProductDimension
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $ProductDimensionType
     * @param string $type
     * @param string $value
     */
    public function __construct($ProductDimensionType = null, $type = null, $value = null)
    {
      parent::__construct($ProductDimensionType);
      $this->type = $type;
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\AdWords\v201806\cm\ProductType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Google\AdsApi\AdWords\v201806\cm\ProductType
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
