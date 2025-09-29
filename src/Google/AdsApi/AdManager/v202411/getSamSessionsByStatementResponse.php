<?php

namespace Google\AdsApi\AdManager\v202411;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getSamSessionsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202411\SamSession[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202411\SamSession[] $rval
     */
    public function __construct(?array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202411\SamSession[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202411\SamSession[]|null $rval
     * @return \Google\AdsApi\AdManager\v202411\getSamSessionsByStatementResponse
     */
    public function setRval(?array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
