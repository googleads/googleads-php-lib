<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createPlacementsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202505\Placement[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202505\Placement[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\Placement[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\Placement[]|null $rval
     * @return \Google\AdsApi\AdManager\v202505\createPlacementsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
