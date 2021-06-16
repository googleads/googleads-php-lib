<?php

namespace Google\AdsApi\AdManager\v202102;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateCustomFieldsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202102\CustomField[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202102\CustomField[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202102\CustomField[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202102\CustomField[]|null $rval
     * @return \Google\AdsApi\AdManager\v202102\updateCustomFieldsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
