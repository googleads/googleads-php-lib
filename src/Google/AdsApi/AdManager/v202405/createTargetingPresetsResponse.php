<?php

namespace Google\AdsApi\AdManager\v202405;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createTargetingPresetsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202405\TargetingPreset[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202405\TargetingPreset[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202405\TargetingPreset[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202405\TargetingPreset[]|null $rval
     * @return \Google\AdsApi\AdManager\v202405\createTargetingPresetsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
