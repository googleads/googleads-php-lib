<?php

namespace Google\AdsApi\AdWords\v201609\cm;


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
     * @return \Google\AdsApi\AdWords\v201609\cm\ComparableValue
     */
    public function setComparableValueType($ComparableValueType)
    {
      $this->ComparableValueType = $ComparableValueType;
      return $this;
    }

}
