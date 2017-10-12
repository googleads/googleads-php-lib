<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerExclusionCriterionReturnValue extends \Google\AdsApi\AdWords\v201710\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\CustomerExclusionCriterion[] $value
     */
    protected $value = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201710\cm\CustomerExclusionCriterion[] $value
     */
    public function __construct($ListReturnValueType = null, array $value = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\CustomerExclusionCriterion[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\CustomerExclusionCriterion[] $value
     * @return \Google\AdsApi\AdWords\v201710\cm\CustomerExclusionCriterionReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
