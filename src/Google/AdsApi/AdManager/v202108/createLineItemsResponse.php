<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createLineItemsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202108\LineItem[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202108\LineItem[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202108\LineItem[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202108\LineItem[]|null $rval
     * @return \Google\AdsApi\AdManager\v202108\createLineItemsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
