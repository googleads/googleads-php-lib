<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getDefaultThirdPartyDataDeclarationResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202111\ThirdPartyDataDeclaration $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202111\ThirdPartyDataDeclaration $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202111\ThirdPartyDataDeclaration
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202111\ThirdPartyDataDeclaration $rval
     * @return \Google\AdsApi\AdManager\v202111\getDefaultThirdPartyDataDeclarationResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
