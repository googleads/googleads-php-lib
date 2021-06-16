<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createProposalsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202105\Proposal[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202105\Proposal[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\Proposal[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\Proposal[]|null $rval
     * @return \Google\AdsApi\AdManager\v202105\createProposalsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
