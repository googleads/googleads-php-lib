<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateReconciliationReportsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201905\ReconciliationReport[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201905\ReconciliationReport[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\ReconciliationReport[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\ReconciliationReport[]|null $rval
     * @return \Google\AdsApi\AdManager\v201905\updateReconciliationReportsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
