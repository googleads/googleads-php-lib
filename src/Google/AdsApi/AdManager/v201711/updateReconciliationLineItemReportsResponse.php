<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateReconciliationLineItemReportsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201711\ReconciliationLineItemReport[] $rval
     * @return \Google\AdsApi\AdManager\v201711\updateReconciliationLineItemReportsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
