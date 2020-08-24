<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCarrierCriterionResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Carrier[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Carrier[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Carrier[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Carrier[] $rval
     * @return \Google\AdsApi\AdWords\v201809\cm\getCarrierCriterionResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
