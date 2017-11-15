<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Row
{

    /**
     * @var \Google\AdsApi\Dfp\v201711\Value[] $values
     */
    protected $values = null;

    /**
     * @param \Google\AdsApi\Dfp\v201711\Value[] $values
     */
    public function __construct(array $values = null)
    {
      $this->values = $values;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\Value[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\Value[] $values
     * @return \Google\AdsApi\Dfp\v201711\Row
     */
    public function setValues(array $values)
    {
      $this->values = $values;
      return $this;
    }

}
