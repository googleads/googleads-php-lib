<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getLineItemTemplatesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202111\LineItemTemplatePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202111\LineItemTemplatePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202111\LineItemTemplatePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202111\LineItemTemplatePage $rval
     * @return \Google\AdsApi\AdManager\v202111\getLineItemTemplatesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
