<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateCustomTargetingKeysResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\CustomTargetingKey[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202502\CustomTargetingKey[] $rval
     */
    public function __construct(?array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\CustomTargetingKey[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\CustomTargetingKey[]|null $rval
     * @return \Google\AdsApi\AdManager\v202502\updateCustomTargetingKeysResponse
     */
    public function setRval(?array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
