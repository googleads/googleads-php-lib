<?php

namespace Google\AdsApi\AdManager\v202602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateCustomFieldOptionsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202602\CustomFieldOption[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202602\CustomFieldOption[] $rval
     */
    public function __construct(?array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202602\CustomFieldOption[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202602\CustomFieldOption[]|null $rval
     * @return \Google\AdsApi\AdManager\v202602\updateCustomFieldOptionsResponse
     */
    public function setRval(?array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
