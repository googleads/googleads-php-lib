<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getContentByStatementAndCustomTargetingValueResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201711\ContentPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201711\ContentPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201711\ContentPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201711\ContentPage $rval
     * @return \Google\AdsApi\AdManager\v201711\getContentByStatementAndCustomTargetingValueResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
