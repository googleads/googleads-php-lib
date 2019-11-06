<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createCreativeWrappersResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\CreativeWrapper[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201911\CreativeWrapper[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\CreativeWrapper[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\CreativeWrapper[]|null $rval
     * @return \Google\AdsApi\AdManager\v201911\createCreativeWrappersResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
