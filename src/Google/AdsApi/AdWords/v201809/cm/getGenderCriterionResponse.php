<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getGenderCriterionResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Gender[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Gender[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Gender[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Gender[] $rval
     * @return \Google\AdsApi\AdWords\v201809\cm\getGenderCriterionResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
