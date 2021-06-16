<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getAllRolesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202105\Role[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202105\Role[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\Role[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\Role[]|null $rval
     * @return \Google\AdsApi\AdManager\v202105\getAllRolesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
