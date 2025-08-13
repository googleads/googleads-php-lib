<?php

namespace Google\AdsApi\AdManager\v202508;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateTargetingPresetsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202508\TargetingPreset[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202508\TargetingPreset[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202508\TargetingPreset[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202508\TargetingPreset[]|null $rval
     * @return \Google\AdsApi\AdManager\v202508\updateTargetingPresetsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
