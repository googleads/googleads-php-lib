<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateDaiAuthenticationKeysResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202111\DaiAuthenticationKey[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202111\DaiAuthenticationKey[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202111\DaiAuthenticationKey[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202111\DaiAuthenticationKey[]|null $rval
     * @return \Google\AdsApi\AdManager\v202111\updateDaiAuthenticationKeysResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
