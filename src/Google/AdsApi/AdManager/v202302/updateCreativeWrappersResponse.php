<?php

namespace Google\AdsApi\AdManager\v202302;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateCreativeWrappersResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202302\CreativeWrapper[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202302\CreativeWrapper[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202302\CreativeWrapper[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202302\CreativeWrapper[]|null $rval
     * @return \Google\AdsApi\AdManager\v202302\updateCreativeWrappersResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
