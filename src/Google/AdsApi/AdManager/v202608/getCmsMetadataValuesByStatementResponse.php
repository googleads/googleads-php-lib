<?php

namespace Google\AdsApi\AdManager\v202608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCmsMetadataValuesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202608\CmsMetadataValuePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202608\CmsMetadataValuePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202608\CmsMetadataValuePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202608\CmsMetadataValuePage $rval
     * @return \Google\AdsApi\AdManager\v202608\getCmsMetadataValuesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
