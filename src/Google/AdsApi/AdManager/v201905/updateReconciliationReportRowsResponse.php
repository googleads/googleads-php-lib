<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateReconciliationReportRowsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201905\ReconciliationReportRow[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201905\ReconciliationReportRow[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\ReconciliationReportRow[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\ReconciliationReportRow[]|null $rval
     * @return \Google\AdsApi\AdManager\v201905\updateReconciliationReportRowsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
