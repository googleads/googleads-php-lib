<?php

namespace Google\AdsApi\AdManager\v202408;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateProposalsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202408\Proposal[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202408\Proposal[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202408\Proposal[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202408\Proposal[]|null $rval
     * @return \Google\AdsApi\AdManager\v202408\updateProposalsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
