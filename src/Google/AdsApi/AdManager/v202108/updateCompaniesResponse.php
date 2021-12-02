<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateCompaniesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202108\Company[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202108\Company[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202108\Company[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202108\Company[]|null $rval
     * @return \Google\AdsApi\AdManager\v202108\updateCompaniesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
