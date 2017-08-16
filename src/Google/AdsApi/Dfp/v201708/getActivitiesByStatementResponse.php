<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getActivitiesByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\ActivityPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\ActivityPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\ActivityPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\ActivityPage $rval
     * @return \Google\AdsApi\Dfp\v201708\getActivitiesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
