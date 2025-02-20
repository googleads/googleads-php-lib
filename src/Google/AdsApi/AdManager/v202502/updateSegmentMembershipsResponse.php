<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateSegmentMembershipsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\SegmentPopulationResponse $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202502\SegmentPopulationResponse $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\SegmentPopulationResponse
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\SegmentPopulationResponse $rval
     * @return \Google\AdsApi\AdManager\v202502\updateSegmentMembershipsResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
