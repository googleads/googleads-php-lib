<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateAdRulesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202311\AdRule[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202311\AdRule[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202311\AdRule[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202311\AdRule[]|null $rval
     * @return \Google\AdsApi\AdManager\v202311\updateAdRulesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
