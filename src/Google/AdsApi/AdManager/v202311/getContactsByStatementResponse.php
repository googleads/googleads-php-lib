<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getContactsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202311\ContactPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202311\ContactPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202311\ContactPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202311\ContactPage $rval
     * @return \Google\AdsApi\AdManager\v202311\getContactsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
