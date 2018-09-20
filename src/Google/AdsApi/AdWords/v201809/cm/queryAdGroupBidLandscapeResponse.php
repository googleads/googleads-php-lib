<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class queryAdGroupBidLandscapeResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\AdGroupBidLandscapePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AdGroupBidLandscapePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupBidLandscapePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AdGroupBidLandscapePage $rval
     * @return \Google\AdsApi\AdWords\v201809\cm\queryAdGroupBidLandscapeResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
