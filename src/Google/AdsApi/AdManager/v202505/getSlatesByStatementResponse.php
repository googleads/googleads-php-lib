<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getSlatesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202505\SlatePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202505\SlatePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\SlatePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\SlatePage $rval
     * @return \Google\AdsApi\AdManager\v202505\getSlatesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
