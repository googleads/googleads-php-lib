<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateAdSpotsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202205\AdSpot[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202205\AdSpot[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202205\AdSpot[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202205\AdSpot[]|null $rval
     * @return \Google\AdsApi\AdManager\v202205\updateAdSpotsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
