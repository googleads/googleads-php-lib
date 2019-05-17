<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateReconciliationOrderReportsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201905\ReconciliationOrderReport[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201905\ReconciliationOrderReport[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\ReconciliationOrderReport[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\ReconciliationOrderReport[]|null $rval
     * @return \Google\AdsApi\AdManager\v201905\updateReconciliationOrderReportsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
