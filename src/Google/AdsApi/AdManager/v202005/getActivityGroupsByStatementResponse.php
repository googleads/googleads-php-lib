<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getActivityGroupsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202005\ActivityGroupPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202005\ActivityGroupPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\ActivityGroupPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\ActivityGroupPage $rval
     * @return \Google\AdsApi\AdManager\v202005\getActivityGroupsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
