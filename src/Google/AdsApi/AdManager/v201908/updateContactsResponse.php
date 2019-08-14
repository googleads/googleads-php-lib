<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateContactsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201908\Contact[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201908\Contact[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\Contact[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\Contact[]|null $rval
     * @return \Google\AdsApi\AdManager\v201908\updateContactsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
