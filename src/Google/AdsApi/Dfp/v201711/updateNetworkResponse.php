<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateNetworkResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201711\Network $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201711\Network $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\Network
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\Network $rval
     * @return \Google\AdsApi\Dfp\v201711\updateNetworkResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
