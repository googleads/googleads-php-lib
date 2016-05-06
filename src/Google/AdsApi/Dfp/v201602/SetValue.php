<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SetValue extends \Google\AdsApi\Dfp\v201602\Value
{

    /**
     * @var \Google\AdsApi\Dfp\v201602\Value[] $values
     */
    protected $values = null;

    /**
     * @param \Google\AdsApi\Dfp\v201602\Value[] $values
     */
    public function __construct(array $values = null)
    {
      $this->values = $values;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201602\Value[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201602\Value[] $values
     * @return \Google\AdsApi\Dfp\v201602\SetValue
     */
    public function setValues(array $values)
    {
      $this->values = $values;
      return $this;
    }

}
