<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createOrdersResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\Order[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201911\Order[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\Order[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\Order[]|null $rval
     * @return \Google\AdsApi\AdManager\v201911\createOrdersResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
