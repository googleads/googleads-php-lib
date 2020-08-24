<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCustomFieldOptionResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202002\CustomFieldOption $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202002\CustomFieldOption $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\CustomFieldOption
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\CustomFieldOption $rval
     * @return \Google\AdsApi\AdManager\v202002\getCustomFieldOptionResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
