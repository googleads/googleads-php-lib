<?php

namespace Google\AdsApi\AdWords\v201605\cm;


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
     * @return \Google\AdsApi\AdWords\v201605\cm\ListReturnValue
     */
    public function setListReturnValueType($ListReturnValueType)
    {
      $this->ListReturnValueType = $ListReturnValueType;
      return $this;
    }

}
