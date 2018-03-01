<?php

namespace Google\AdsApi\AdWords\v201802\billing;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getBillingAccountsResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\billing\BillingAccount[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\billing\BillingAccount[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\billing\BillingAccount[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\billing\BillingAccount[] $rval
     * @return \Google\AdsApi\AdWords\v201802\billing\getBillingAccountsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
