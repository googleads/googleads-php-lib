<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCustomFieldOptionResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\CustomFieldOption $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202502\CustomFieldOption $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\CustomFieldOption
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\CustomFieldOption $rval
     * @return \Google\AdsApi\AdManager\v202502\getCustomFieldOptionResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
