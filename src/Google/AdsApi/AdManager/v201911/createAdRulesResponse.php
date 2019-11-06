<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createAdRulesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\AdRule[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201911\AdRule[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\AdRule[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\AdRule[]|null $rval
     * @return \Google\AdsApi\AdManager\v201911\createAdRulesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
