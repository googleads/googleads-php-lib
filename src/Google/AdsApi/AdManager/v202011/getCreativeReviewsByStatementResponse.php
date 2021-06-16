<?php

namespace Google\AdsApi\AdManager\v202011;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCreativeReviewsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202011\CreativeReviewPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202011\CreativeReviewPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202011\CreativeReviewPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202011\CreativeReviewPage $rval
     * @return \Google\AdsApi\AdManager\v202011\getCreativeReviewsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
