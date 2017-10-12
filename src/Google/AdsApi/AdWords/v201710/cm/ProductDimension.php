<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class ProductDimension
{

    /**
     * @var string $ProductDimensionType
     */
    protected $ProductDimensionType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['ProductDimension.Type' => 'ProductDimensionType'];

    /**
     * @param string $ProductDimensionType
     */
    public function __construct($ProductDimensionType = null)
    {
      $this->ProductDimensionType = $ProductDimensionType;
    }

    /**
     * @return string
     */
    public function getProductDimensionType()
    {
      return $this->ProductDimensionType;
    }

    /**
     * @param string $ProductDimensionType
     * @return \Google\AdsApi\AdWords\v201710\cm\ProductDimension
     */
    public function setProductDimensionType($ProductDimensionType)
    {
      $this->ProductDimensionType = $ProductDimensionType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201710\cm\ProductDimension
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
