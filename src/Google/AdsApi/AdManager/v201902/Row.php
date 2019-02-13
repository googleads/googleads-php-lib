<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Row
{

    /**
     * @var \Google\AdsApi\AdManager\v201902\Value[] $values
     */
    protected $values = null;

    /**
     * @param \Google\AdsApi\AdManager\v201902\Value[] $values
     */
    public function __construct(array $values = null)
    {
      $this->values = $values;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201902\Value[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201902\Value[] $values
     * @return \Google\AdsApi\AdManager\v201902\Row
     */
    public function setValues(array $values)
    {
      $this->values = $values;
      return $this;
    }

}
