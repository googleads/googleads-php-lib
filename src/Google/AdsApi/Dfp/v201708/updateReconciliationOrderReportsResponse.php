<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateReconciliationOrderReportsResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\ReconciliationOrderReport[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\ReconciliationOrderReport[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\ReconciliationOrderReport[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\ReconciliationOrderReport[] $rval
     * @return \Google\AdsApi\Dfp\v201708\updateReconciliationOrderReportsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
