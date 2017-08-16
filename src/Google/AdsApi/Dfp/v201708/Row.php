<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Row
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\Value[] $values
     */
    protected $values = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\Value[] $values
     */
    public function __construct(array $values = null)
    {
      $this->values = $values;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\Value[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\Value[] $values
     * @return \Google\AdsApi\Dfp\v201708\Row
     */
    public function setValues(array $values)
    {
      $this->values = $values;
      return $this;
    }

}
