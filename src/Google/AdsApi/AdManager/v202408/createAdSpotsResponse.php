<?php

namespace Google\AdsApi\AdManager\v202408;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createAdSpotsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202408\AdSpot[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202408\AdSpot[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202408\AdSpot[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202408\AdSpot[]|null $rval
     * @return \Google\AdsApi\AdManager\v202408\createAdSpotsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
