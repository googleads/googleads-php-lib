<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCriterionBidLandscapeResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\CriterionBidLandscapePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\CriterionBidLandscapePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\CriterionBidLandscapePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\CriterionBidLandscapePage $rval
     * @return \Google\AdsApi\AdWords\v201710\cm\getCriterionBidLandscapeResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
