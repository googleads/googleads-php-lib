<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getSavedQueriesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202105\SavedQueryPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202105\SavedQueryPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\SavedQueryPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\SavedQueryPage $rval
     * @return \Google\AdsApi\AdManager\v202105\getSavedQueriesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
