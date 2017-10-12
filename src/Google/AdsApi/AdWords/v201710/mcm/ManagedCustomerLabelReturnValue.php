<?php

namespace Google\AdsApi\AdWords\v201710\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ManagedCustomerLabelReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerLabel[] $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerLabel[] $value
     */
    public function __construct(array $value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerLabel[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerLabel[] $value
     * @return \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerLabelReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
