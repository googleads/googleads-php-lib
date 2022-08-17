<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class performContentBundleActionResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202205\UpdateResult $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202205\UpdateResult $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202205\UpdateResult
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202205\UpdateResult $rval
     * @return \Google\AdsApi\AdManager\v202205\performContentBundleActionResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
