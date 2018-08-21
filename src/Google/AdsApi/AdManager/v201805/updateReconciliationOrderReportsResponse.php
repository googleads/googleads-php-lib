<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateReconciliationOrderReportsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201805\ReconciliationOrderReport[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201805\ReconciliationOrderReport[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\ReconciliationOrderReport[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\ReconciliationOrderReport[] $rval
     * @return \Google\AdsApi\AdManager\v201805\updateReconciliationOrderReportsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
