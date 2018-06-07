<?php

namespace Google\AdsApi\AdWords\v201806\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomerPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomerPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomerPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomerPage $rval
     * @return \Google\AdsApi\AdWords\v201806\mcm\getResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
