<?php

namespace Google\AdsApi\AdManager\v202308;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getPlacementsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202308\PlacementPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202308\PlacementPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202308\PlacementPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202308\PlacementPage $rval
     * @return \Google\AdsApi\AdManager\v202308\getPlacementsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
