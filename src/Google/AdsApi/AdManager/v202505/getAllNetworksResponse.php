<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getAllNetworksResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202505\Network[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202505\Network[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\Network[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\Network[]|null $rval
     * @return \Google\AdsApi\AdManager\v202505\getAllNetworksResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
