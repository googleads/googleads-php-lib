<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class ComparableValue
{

    /**
     * @var string $ComparableValueType
     */
    protected $ComparableValueType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['ComparableValue.Type' => 'ComparableValueType'];

    /**
     * @param string $ComparableValueType
     */
    public function __construct($ComparableValueType = null)
    {
      $this->ComparableValueType = $ComparableValueType;
    }

    /**
     * @return string
     */
    public function getComparableValueType()
    {
      return $this->ComparableValueType;
    }

    /**
     * @param string $ComparableValueType
     * @return \Google\AdsApi\AdWords\v201802\cm\ComparableValue
     */
    public function setComparableValueType($ComparableValueType)
    {
      $this->ComparableValueType = $ComparableValueType;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\ComparableValue
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
