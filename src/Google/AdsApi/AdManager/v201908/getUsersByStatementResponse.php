<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getUsersByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201908\UserPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201908\UserPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\UserPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\UserPage $rval
     * @return \Google\AdsApi\AdManager\v201908\getUsersByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
