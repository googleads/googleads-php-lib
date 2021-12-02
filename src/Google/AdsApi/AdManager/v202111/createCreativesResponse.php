<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createCreativesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202111\Creative[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202111\Creative[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202111\Creative[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202111\Creative[]|null $rval
     * @return \Google\AdsApi\AdManager\v202111\createCreativesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
