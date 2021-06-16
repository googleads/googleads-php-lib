<?php

namespace Google\AdsApi\AdManager\v202011;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateAdUnitsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202011\AdUnit[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202011\AdUnit[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202011\AdUnit[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202011\AdUnit[]|null $rval
     * @return \Google\AdsApi\AdManager\v202011\updateAdUnitsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
