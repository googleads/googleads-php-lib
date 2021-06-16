<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCreativesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202008\CreativePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202008\CreativePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202008\CreativePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202008\CreativePage $rval
     * @return \Google\AdsApi\AdManager\v202008\getCreativesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
