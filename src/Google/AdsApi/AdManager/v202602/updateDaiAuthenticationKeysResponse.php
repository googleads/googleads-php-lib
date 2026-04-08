<?php

namespace Google\AdsApi\AdManager\v202602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateDaiAuthenticationKeysResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202602\DaiAuthenticationKey[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202602\DaiAuthenticationKey[] $rval
     */
    public function __construct(?array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202602\DaiAuthenticationKey[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202602\DaiAuthenticationKey[]|null $rval
     * @return \Google\AdsApi\AdManager\v202602\updateDaiAuthenticationKeysResponse
     */
    public function setRval(?array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
