<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class ListReturnValue
{

    /**
     * @var string $ListReturnValueType
     */
    protected $ListReturnValueType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['ListReturnValue.Type' => 'ListReturnValueType'];

    /**
     * @param string $ListReturnValueType
     */
    public function __construct($ListReturnValueType = null)
    {
      $this->ListReturnValueType = $ListReturnValueType;
    }

    /**
     * @return string
     */
    public function getListReturnValueType()
    {
      return $this->ListReturnValueType;
    }

    /**
     * @param string $ListReturnValueType
     * @return \Google\AdsApi\AdWords\v201809\cm\ListReturnValue
     */
    public function setListReturnValueType($ListReturnValueType)
    {
      $this->ListReturnValueType = $ListReturnValueType;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\ListReturnValue
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
