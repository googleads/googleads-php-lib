<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SharedCriterionReturnValue extends \Google\AdsApi\AdWords\v201705\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201705\cm\SharedCriterion[] $value
     */
    protected $value = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201705\cm\SharedCriterion[] $value
     */
    public function __construct($ListReturnValueType = null, array $value = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201705\cm\SharedCriterion[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201705\cm\SharedCriterion[] $value
     * @return \Google\AdsApi\AdWords\v201705\cm\SharedCriterionReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
