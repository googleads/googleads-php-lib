<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateCustomFieldsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202202\CustomField[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202202\CustomField[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\CustomField[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\CustomField[]|null $rval
     * @return \Google\AdsApi\AdManager\v202202\updateCustomFieldsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
