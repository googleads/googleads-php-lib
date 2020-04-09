<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SetValue extends \Google\AdsApi\AdManager\v202002\Value
{

    /**
     * @var \Google\AdsApi\AdManager\v202002\Value[] $values
     */
    protected $values = null;

    /**
     * @param \Google\AdsApi\AdManager\v202002\Value[] $values
     */
    public function __construct(array $values = null)
    {
      $this->values = $values;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\Value[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\Value[]|null $values
     * @return \Google\AdsApi\AdManager\v202002\SetValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
