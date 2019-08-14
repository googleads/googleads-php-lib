<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateUserTeamAssociationsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201908\UserTeamAssociation[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201908\UserTeamAssociation[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\UserTeamAssociation[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\UserTeamAssociation[]|null $rval
     * @return \Google\AdsApi\AdManager\v201908\updateUserTeamAssociationsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
