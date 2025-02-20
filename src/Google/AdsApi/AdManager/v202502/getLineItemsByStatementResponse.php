<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getLineItemsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\LineItemPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202502\LineItemPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\LineItemPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\LineItemPage $rval
     * @return \Google\AdsApi\AdManager\v202502\getLineItemsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
