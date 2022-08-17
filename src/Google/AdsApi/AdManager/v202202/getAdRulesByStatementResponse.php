<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getAdRulesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202202\AdRulePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202202\AdRulePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\AdRulePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\AdRulePage $rval
     * @return \Google\AdsApi\AdManager\v202202\getAdRulesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
