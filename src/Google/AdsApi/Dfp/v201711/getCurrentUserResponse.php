<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCurrentUserResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201711\User $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201711\User $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\User
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\User $rval
     * @return \Google\AdsApi\Dfp\v201711\getCurrentUserResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
