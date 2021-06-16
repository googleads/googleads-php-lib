<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createTeamsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202008\Team[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202008\Team[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202008\Team[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202008\Team[]|null $rval
     * @return \Google\AdsApi\AdManager\v202008\createTeamsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
