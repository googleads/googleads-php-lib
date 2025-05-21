<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createLineItemsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202505\LineItem[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202505\LineItem[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\LineItem[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\LineItem[]|null $rval
     * @return \Google\AdsApi\AdManager\v202505\createLineItemsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
