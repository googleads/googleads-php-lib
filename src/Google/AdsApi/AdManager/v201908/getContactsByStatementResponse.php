<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getContactsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201908\ContactPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201908\ContactPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\ContactPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\ContactPage $rval
     * @return \Google\AdsApi\AdManager\v201908\getContactsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
