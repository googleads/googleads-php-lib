<?php

namespace Google\AdsApi\AdWords\v201802\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class EstimateRequest
{

    /**
     * @var string $EstimateRequestType
     */
    protected $EstimateRequestType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['EstimateRequest.Type' => 'EstimateRequestType'];

    /**
     * @param string $EstimateRequestType
     */
    public function __construct($EstimateRequestType = null)
    {
      $this->EstimateRequestType = $EstimateRequestType;
    }

    /**
     * @return string
     */
    public function getEstimateRequestType()
    {
      return $this->EstimateRequestType;
    }

    /**
     * @param string $EstimateRequestType
     * @return \Google\AdsApi\AdWords\v201802\o\EstimateRequest
     */
    public function setEstimateRequestType($EstimateRequestType)
    {
      $this->EstimateRequestType = $EstimateRequestType;
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
     * @return \Google\AdsApi\AdWords\v201802\o\EstimateRequest
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
