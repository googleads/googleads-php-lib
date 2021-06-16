<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCdnConfigurationsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202008\CdnConfigurationPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202008\CdnConfigurationPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202008\CdnConfigurationPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202008\CdnConfigurationPage $rval
     * @return \Google\AdsApi\AdManager\v202008\getCdnConfigurationsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
