<?php

namespace Google\AdsApi\AdManager\v202605;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createDaiAuthenticationKeysResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202605\DaiAuthenticationKey[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202605\DaiAuthenticationKey[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202605\DaiAuthenticationKey[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202605\DaiAuthenticationKey[]|null $rval
     * @return \Google\AdsApi\AdManager\v202605\createDaiAuthenticationKeysResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
