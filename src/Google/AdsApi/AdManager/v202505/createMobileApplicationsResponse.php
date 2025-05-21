<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createMobileApplicationsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202505\MobileApplication[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202505\MobileApplication[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\MobileApplication[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\MobileApplication[]|null $rval
     * @return \Google\AdsApi\AdManager\v202505\createMobileApplicationsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
