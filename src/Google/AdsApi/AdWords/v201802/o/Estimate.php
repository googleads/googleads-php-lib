<?php

namespace Google\AdsApi\AdWords\v201802\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Estimate
{

    /**
     * @var string $EstimateType
     */
    protected $EstimateType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['Estimate.Type' => 'EstimateType'];

    /**
     * @param string $EstimateType
     */
    public function __construct($EstimateType = null)
    {
      $this->EstimateType = $EstimateType;
    }

    /**
     * @return string
     */
    public function getEstimateType()
    {
      return $this->EstimateType;
    }

    /**
     * @param string $EstimateType
     * @return \Google\AdsApi\AdWords\v201802\o\Estimate
     */
    public function setEstimateType($EstimateType)
    {
      $this->EstimateType = $EstimateType;
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
     * @return \Google\AdsApi\AdWords\v201802\o\Estimate
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
