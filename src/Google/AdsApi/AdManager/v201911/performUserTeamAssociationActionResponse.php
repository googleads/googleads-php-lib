<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class performUserTeamAssociationActionResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\UpdateResult $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201911\UpdateResult $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\UpdateResult
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\UpdateResult $rval
     * @return \Google\AdsApi\AdManager\v201911\performUserTeamAssociationActionResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
