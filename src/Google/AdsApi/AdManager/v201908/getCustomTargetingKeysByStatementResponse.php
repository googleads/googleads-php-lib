<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCustomTargetingKeysByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201908\CustomTargetingKeyPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201908\CustomTargetingKeyPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\CustomTargetingKeyPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\CustomTargetingKeyPage $rval
     * @return \Google\AdsApi\AdManager\v201908\getCustomTargetingKeysByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
