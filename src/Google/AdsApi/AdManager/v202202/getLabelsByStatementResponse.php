<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getLabelsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202202\LabelPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202202\LabelPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\LabelPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\LabelPage $rval
     * @return \Google\AdsApi\AdManager\v202202\getLabelsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
