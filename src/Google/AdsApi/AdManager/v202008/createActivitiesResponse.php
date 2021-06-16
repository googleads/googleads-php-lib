<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createActivitiesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202008\Activity[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202008\Activity[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202008\Activity[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202008\Activity[]|null $rval
     * @return \Google\AdsApi\AdManager\v202008\createActivitiesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
