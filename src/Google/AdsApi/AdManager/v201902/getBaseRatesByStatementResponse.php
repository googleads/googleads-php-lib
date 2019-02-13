<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getBaseRatesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201902\BaseRatePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201902\BaseRatePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201902\BaseRatePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201902\BaseRatePage $rval
     * @return \Google\AdsApi\AdManager\v201902\getBaseRatesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
