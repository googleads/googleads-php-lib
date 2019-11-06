<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createContactsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\Contact[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201911\Contact[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\Contact[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\Contact[]|null $rval
     * @return \Google\AdsApi\AdManager\v201911\createContactsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
