<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateTeamsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\Team[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202502\Team[] $rval
     */
    public function __construct(?array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\Team[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\Team[]|null $rval
     * @return \Google\AdsApi\AdManager\v202502\updateTeamsResponse
     */
    public function setRval(?array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
