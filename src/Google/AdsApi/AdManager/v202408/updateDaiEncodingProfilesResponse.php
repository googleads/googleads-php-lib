<?php

namespace Google\AdsApi\AdManager\v202408;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateDaiEncodingProfilesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202408\DaiEncodingProfile[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202408\DaiEncodingProfile[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202408\DaiEncodingProfile[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202408\DaiEncodingProfile[]|null $rval
     * @return \Google\AdsApi\AdManager\v202408\updateDaiEncodingProfilesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
