<?php

namespace Google\AdsApi\AdWords\v201710\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class SearchParameter
{

    /**
     * @var string $SearchParameterType
     */
    protected $SearchParameterType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['SearchParameter.Type' => 'SearchParameterType'];

    /**
     * @param string $SearchParameterType
     */
    public function __construct($SearchParameterType = null)
    {
      $this->SearchParameterType = $SearchParameterType;
    }

    /**
     * @return string
     */
    public function getSearchParameterType()
    {
      return $this->SearchParameterType;
    }

    /**
     * @param string $SearchParameterType
     * @return \Google\AdsApi\AdWords\v201710\o\SearchParameter
     */
    public function setSearchParameterType($SearchParameterType)
    {
      $this->SearchParameterType = $SearchParameterType;
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
     * @return \Google\AdsApi\AdWords\v201710\o\SearchParameter
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
