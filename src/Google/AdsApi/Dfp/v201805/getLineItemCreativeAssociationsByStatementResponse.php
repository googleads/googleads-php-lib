<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getLineItemCreativeAssociationsByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201805\LineItemCreativeAssociationPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201805\LineItemCreativeAssociationPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201805\LineItemCreativeAssociationPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201805\LineItemCreativeAssociationPage $rval
     * @return \Google\AdsApi\Dfp\v201805\getLineItemCreativeAssociationsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
