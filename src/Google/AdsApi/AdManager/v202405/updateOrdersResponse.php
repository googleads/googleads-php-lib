<?php

namespace Google\AdsApi\AdManager\v202405;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateOrdersResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202405\Order[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202405\Order[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202405\Order[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202405\Order[]|null $rval
     * @return \Google\AdsApi\AdManager\v202405\updateOrdersResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
