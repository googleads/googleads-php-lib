<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getActivityGroupsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202108\ActivityGroupPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202108\ActivityGroupPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202108\ActivityGroupPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202108\ActivityGroupPage $rval
     * @return \Google\AdsApi\AdManager\v202108\getActivityGroupsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
