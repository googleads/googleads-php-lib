<?php

namespace Google\AdsApi\AdWords\v201809\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class mutateTokenResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\rm\CustomAffinityTokenReturnValue $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\CustomAffinityTokenReturnValue $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\rm\CustomAffinityTokenReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\CustomAffinityTokenReturnValue $rval
     * @return \Google\AdsApi\AdWords\v201809\rm\mutateTokenResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
