<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateMobileApplicationsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202008\MobileApplication[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202008\MobileApplication[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202008\MobileApplication[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202008\MobileApplication[]|null $rval
     * @return \Google\AdsApi\AdManager\v202008\updateMobileApplicationsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
