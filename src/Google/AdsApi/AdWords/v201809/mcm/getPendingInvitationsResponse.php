<?php

namespace Google\AdsApi\AdWords\v201809\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getPendingInvitationsResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\mcm\PendingInvitation[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\mcm\PendingInvitation[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\mcm\PendingInvitation[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\mcm\PendingInvitation[] $rval
     * @return \Google\AdsApi\AdWords\v201809\mcm\getPendingInvitationsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
