<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateCreativeSetResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\CreativeSet $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202502\CreativeSet $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\CreativeSet
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\CreativeSet $rval
     * @return \Google\AdsApi\AdManager\v202502\updateCreativeSetResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
