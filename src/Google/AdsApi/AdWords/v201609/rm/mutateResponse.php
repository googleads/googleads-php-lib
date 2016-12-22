<?php

namespace Google\AdsApi\AdWords\v201609\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class mutateResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201609\rm\UserListReturnValue $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201609\rm\UserListReturnValue $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\rm\UserListReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\rm\UserListReturnValue $rval
     * @return \Google\AdsApi\AdWords\v201609\rm\mutateResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
