<?php

namespace Google\AdsApi\AdManager\v202411;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateLineItemCreativeAssociationsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202411\LineItemCreativeAssociation[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202411\LineItemCreativeAssociation[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202411\LineItemCreativeAssociation[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202411\LineItemCreativeAssociation[]|null $rval
     * @return \Google\AdsApi\AdManager\v202411\updateLineItemCreativeAssociationsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}