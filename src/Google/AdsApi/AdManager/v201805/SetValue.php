<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SetValue extends \Google\AdsApi\AdManager\v201805\Value
{

    /**
     * @var \Google\AdsApi\AdManager\v201805\Value[] $values
     */
    protected $values = null;

    /**
     * @param \Google\AdsApi\AdManager\v201805\Value[] $values
     */
    public function __construct(array $values = null)
    {
      $this->values = $values;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\Value[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\Value[] $values
     * @return \Google\AdsApi\AdManager\v201805\SetValue
     */
    public function setValues(array $values)
    {
      $this->values = $values;
      return $this;
    }

}
