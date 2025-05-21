<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getLineItemsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202505\LineItemPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202505\LineItemPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\LineItemPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\LineItemPage $rval
     * @return \Google\AdsApi\AdManager\v202505\getLineItemsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
