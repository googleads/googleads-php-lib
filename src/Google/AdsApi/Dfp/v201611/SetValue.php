<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SetValue extends \Google\AdsApi\Dfp\v201611\Value
{

    /**
     * @var \Google\AdsApi\Dfp\v201611\Value[] $values
     */
    protected $values = null;

    /**
     * @param \Google\AdsApi\Dfp\v201611\Value[] $values
     */
    public function __construct(array $values = null)
    {
      $this->values = $values;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\Value[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\Value[] $values
     * @return \Google\AdsApi\Dfp\v201611\SetValue
     */
    public function setValues(array $values)
    {
      $this->values = $values;
      return $this;
    }

}
