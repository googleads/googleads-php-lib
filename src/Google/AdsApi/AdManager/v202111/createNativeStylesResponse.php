<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createNativeStylesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202111\NativeStyle[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202111\NativeStyle[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202111\NativeStyle[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202111\NativeStyle[]|null $rval
     * @return \Google\AdsApi\AdManager\v202111\createNativeStylesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
