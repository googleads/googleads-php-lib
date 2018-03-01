<?php

namespace Google\AdsApi\AdWords\v201802\billing;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BudgetOrderReturnValue extends \Google\AdsApi\AdWords\v201802\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\billing\BudgetOrder[] $value
     */
    protected $value = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201802\billing\BudgetOrder[] $value
     */
    public function __construct($ListReturnValueType = null, array $value = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\billing\BudgetOrder[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\billing\BudgetOrder[] $value
     * @return \Google\AdsApi\AdWords\v201802\billing\BudgetOrderReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
