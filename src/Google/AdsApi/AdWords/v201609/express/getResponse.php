<?php

namespace Google\AdsApi\AdWords\v201609\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201609\express\BudgetSuggestion $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201609\express\BudgetSuggestion $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\express\BudgetSuggestion
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\express\BudgetSuggestion $rval
     * @return \Google\AdsApi\AdWords\v201609\express\getResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
