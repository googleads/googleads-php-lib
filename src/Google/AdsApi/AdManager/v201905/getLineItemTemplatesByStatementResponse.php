<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getLineItemTemplatesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201905\LineItemTemplatePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201905\LineItemTemplatePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\LineItemTemplatePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\LineItemTemplatePage $rval
     * @return \Google\AdsApi\AdManager\v201905\getLineItemTemplatesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
