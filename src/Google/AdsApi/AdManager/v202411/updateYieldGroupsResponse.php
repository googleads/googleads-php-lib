<?php

namespace Google\AdsApi\AdManager\v202411;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateYieldGroupsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202411\YieldGroup[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202411\YieldGroup[] $rval
     */
    public function __construct(?array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202411\YieldGroup[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202411\YieldGroup[]|null $rval
     * @return \Google\AdsApi\AdManager\v202411\updateYieldGroupsResponse
     */
    public function setRval(?array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
