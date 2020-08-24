<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateDaiAuthenticationKeysResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202008\DaiAuthenticationKey[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202008\DaiAuthenticationKey[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202008\DaiAuthenticationKey[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202008\DaiAuthenticationKey[]|null $rval
     * @return \Google\AdsApi\AdManager\v202008\updateDaiAuthenticationKeysResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
