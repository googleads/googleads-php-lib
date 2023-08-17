<?php

namespace Google\AdsApi\AdManager\v202302;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateLineItemCreativeAssociationsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202302\LineItemCreativeAssociation[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202302\LineItemCreativeAssociation[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202302\LineItemCreativeAssociation[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202302\LineItemCreativeAssociation[]|null $rval
     * @return \Google\AdsApi\AdManager\v202302\updateLineItemCreativeAssociationsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
