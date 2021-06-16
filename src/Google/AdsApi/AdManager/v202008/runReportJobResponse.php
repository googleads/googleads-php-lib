<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class runReportJobResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202008\ReportJob $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202008\ReportJob $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202008\ReportJob
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202008\ReportJob $rval
     * @return \Google\AdsApi\AdManager\v202008\runReportJobResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
