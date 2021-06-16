<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getOrdersByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202105\OrderPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202105\OrderPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\OrderPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\OrderPage $rval
     * @return \Google\AdsApi\AdManager\v202105\getOrdersByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
