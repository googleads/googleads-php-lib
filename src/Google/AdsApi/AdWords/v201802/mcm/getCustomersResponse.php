<?php

namespace Google\AdsApi\AdWords\v201802\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCustomersResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\mcm\Customer[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\mcm\Customer[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\mcm\Customer[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\mcm\Customer[] $rval
     * @return \Google\AdsApi\AdWords\v201802\mcm\getCustomersResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
