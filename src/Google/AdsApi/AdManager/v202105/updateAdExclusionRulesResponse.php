<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateAdExclusionRulesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202105\AdExclusionRule[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202105\AdExclusionRule[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\AdExclusionRule[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\AdExclusionRule[]|null $rval
     * @return \Google\AdsApi\AdManager\v202105\updateAdExclusionRulesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
