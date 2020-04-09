<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getAgeRangeCriterionResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\AgeRange[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AgeRange[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\AgeRange[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AgeRange[] $rval
     * @return \Google\AdsApi\AdWords\v201809\cm\getAgeRangeCriterionResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
