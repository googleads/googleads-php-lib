<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getAudienceSegmentsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202202\AudienceSegmentPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202202\AudienceSegmentPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\AudienceSegmentPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\AudienceSegmentPage $rval
     * @return \Google\AdsApi\AdManager\v202202\getAudienceSegmentsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
