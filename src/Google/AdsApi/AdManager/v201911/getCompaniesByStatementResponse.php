<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCompaniesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\CompanyPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201911\CompanyPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\CompanyPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\CompanyPage $rval
     * @return \Google\AdsApi\AdManager\v201911\getCompaniesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
