<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class performCompanyActionResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202202\UpdateResult $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202202\UpdateResult $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\UpdateResult
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\UpdateResult $rval
     * @return \Google\AdsApi\AdManager\v202202\performCompanyActionResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
