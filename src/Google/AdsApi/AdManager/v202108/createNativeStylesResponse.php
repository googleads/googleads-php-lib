<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createNativeStylesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202108\NativeStyle[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202108\NativeStyle[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202108\NativeStyle[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202108\NativeStyle[]|null $rval
     * @return \Google\AdsApi\AdManager\v202108\createNativeStylesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
