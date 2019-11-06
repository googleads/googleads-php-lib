<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateUserTeamAssociationsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\UserTeamAssociation[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201911\UserTeamAssociation[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\UserTeamAssociation[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\UserTeamAssociation[]|null $rval
     * @return \Google\AdsApi\AdManager\v201911\updateUserTeamAssociationsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
