<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCreativeWrappersByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201908\CreativeWrapperPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201908\CreativeWrapperPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\CreativeWrapperPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\CreativeWrapperPage $rval
     * @return \Google\AdsApi\AdManager\v201908\getCreativeWrappersByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
