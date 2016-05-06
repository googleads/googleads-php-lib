<?php

namespace Google\AdsApi\AdWords\v201603\cm;


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
     * @return \Google\AdsApi\AdWords\v201603\cm\CriterionParameter
     */
    public function setCriterionParameterType($CriterionParameterType)
    {
      $this->CriterionParameterType = $CriterionParameterType;
      return $this;
    }

}
