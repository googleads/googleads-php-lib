<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCustomTargetingValuesByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\CustomTargetingValuePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\CustomTargetingValuePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\CustomTargetingValuePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\CustomTargetingValuePage $rval
     * @return \Google\AdsApi\Dfp\v201708\getCustomTargetingValuesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
