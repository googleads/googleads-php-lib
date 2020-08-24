<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class selectResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\ResultSet $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201911\ResultSet $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\ResultSet
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\ResultSet $rval
     * @return \Google\AdsApi\AdManager\v201911\selectResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
