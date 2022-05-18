<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createMakegoodsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202205\ProposalLineItem[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202205\ProposalLineItem[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202205\ProposalLineItem[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202205\ProposalLineItem[]|null $rval
     * @return \Google\AdsApi\AdManager\v202205\createMakegoodsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
