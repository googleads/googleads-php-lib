<?php

namespace Google\AdsApi\AdManager\v202402;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createOrdersResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202402\Order[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202402\Order[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202402\Order[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202402\Order[]|null $rval
     * @return \Google\AdsApi\AdManager\v202402\createOrdersResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
