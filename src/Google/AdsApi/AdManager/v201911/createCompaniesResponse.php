<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createCompaniesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\Company[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201911\Company[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\Company[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\Company[]|null $rval
     * @return \Google\AdsApi\AdManager\v201911\createCompaniesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
