<?php

namespace Google\AdsApi\AdWords\v201809\billing;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class mutateResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\billing\BudgetOrderReturnValue $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\billing\BudgetOrderReturnValue $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\billing\BudgetOrderReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\billing\BudgetOrderReturnValue $rval
     * @return \Google\AdsApi\AdWords\v201809\billing\mutateResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
