<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class CriterionParameter
{

    /**
     * @var string $CriterionParameterType
     */
    protected $CriterionParameterType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['CriterionParameter.Type' => 'CriterionParameterType'];

    /**
     * @param string $CriterionParameterType
     */
    public function __construct($CriterionParameterType = null)
    {
      $this->CriterionParameterType = $CriterionParameterType;
    }

    /**
     * @return string
     */
    public function getCriterionParameterType()
    {
      return $this->CriterionParameterType;
    }

    /**
     * @param string $CriterionParameterType
     * @return \Google\AdsApi\AdWords\v201710\cm\CriterionParameter
     */
    public function setCriterionParameterType($CriterionParameterType)
    {
      $this->CriterionParameterType = $CriterionParameterType;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\CriterionParameter
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
