<?php

namespace Google\AdsApi\AdManager\v202102;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createSitesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202102\Site[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202102\Site[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202102\Site[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202102\Site[]|null $rval
     * @return \Google\AdsApi\AdManager\v202102\createSitesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
