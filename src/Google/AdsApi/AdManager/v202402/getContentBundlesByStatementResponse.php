<?php

namespace Google\AdsApi\AdManager\v202402;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getContentBundlesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202402\ContentBundlePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202402\ContentBundlePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202402\ContentBundlePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202402\ContentBundlePage $rval
     * @return \Google\AdsApi\AdManager\v202402\getContentBundlesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
