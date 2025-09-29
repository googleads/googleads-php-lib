<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateCustomTargetingValuesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202505\CustomTargetingValue[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202505\CustomTargetingValue[] $rval
     */
    public function __construct(?array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\CustomTargetingValue[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\CustomTargetingValue[]|null $rval
     * @return \Google\AdsApi\AdManager\v202505\updateCustomTargetingValuesResponse
     */
    public function setRval(?array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
