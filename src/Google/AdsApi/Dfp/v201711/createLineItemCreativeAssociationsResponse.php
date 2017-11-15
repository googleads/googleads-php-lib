<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createLineItemCreativeAssociationsResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201711\LineItemCreativeAssociation[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201711\LineItemCreativeAssociation[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\LineItemCreativeAssociation[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\LineItemCreativeAssociation[] $rval
     * @return \Google\AdsApi\Dfp\v201711\createLineItemCreativeAssociationsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
