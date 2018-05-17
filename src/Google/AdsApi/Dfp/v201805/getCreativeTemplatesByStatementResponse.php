<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCreativeTemplatesByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201805\CreativeTemplatePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201805\CreativeTemplatePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201805\CreativeTemplatePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201805\CreativeTemplatePage $rval
     * @return \Google\AdsApi\Dfp\v201805\getCreativeTemplatesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
