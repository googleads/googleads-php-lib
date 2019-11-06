<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createCustomTargetingKeysResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\CustomTargetingKey[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201911\CustomTargetingKey[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\CustomTargetingKey[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\CustomTargetingKey[]|null $rval
     * @return \Google\AdsApi\AdManager\v201911\createCustomTargetingKeysResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
