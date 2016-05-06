<?php

namespace Google\AdsApi\AdWords\v201603\o;


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
     * @return \Google\AdsApi\AdWords\v201603\o\SearchParameter
     */
    public function setSearchParameterType($SearchParameterType)
    {
      $this->SearchParameterType = $SearchParameterType;
      return $this;
    }

}
