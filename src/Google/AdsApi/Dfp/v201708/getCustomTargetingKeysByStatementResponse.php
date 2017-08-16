<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCustomTargetingKeysByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\CustomTargetingKeyPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\CustomTargetingKeyPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\CustomTargetingKeyPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\CustomTargetingKeyPage $rval
     * @return \Google\AdsApi\Dfp\v201708\getCustomTargetingKeysByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
