<?php

namespace Google\AdsApi\AdManager\v202508;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getYieldPartnersResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202508\YieldPartner[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202508\YieldPartner[] $rval
     */
    public function __construct(?array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202508\YieldPartner[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202508\YieldPartner[]|null $rval
     * @return \Google\AdsApi\AdManager\v202508\getYieldPartnersResponse
     */
    public function setRval(?array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
