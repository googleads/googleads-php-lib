<?php

namespace Google\AdsApi\AdManager\v202511;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getSamSessionsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202511\SamSession[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202511\SamSession[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202511\SamSession[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202511\SamSession[]|null $rval
     * @return \Google\AdsApi\AdManager\v202511\getSamSessionsByStatementResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
