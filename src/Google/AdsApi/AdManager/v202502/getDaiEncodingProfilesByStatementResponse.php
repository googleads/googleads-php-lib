<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getDaiEncodingProfilesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\DaiEncodingProfilePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202502\DaiEncodingProfilePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\DaiEncodingProfilePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\DaiEncodingProfilePage $rval
     * @return \Google\AdsApi\AdManager\v202502\getDaiEncodingProfilesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
