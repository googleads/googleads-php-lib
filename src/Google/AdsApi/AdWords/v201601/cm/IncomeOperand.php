<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class IncomeOperand extends \Google\AdsApi\AdWords\v201601\cm\FunctionArgumentOperand
{

    /**
     * @var string $tier
     */
    protected $tier = null;

    /**
     * @param string $FunctionArgumentOperandType
     * @param string $tier
     */
    public function __construct($FunctionArgumentOperandType = null, $tier = null)
    {
      parent::__construct($FunctionArgumentOperandType);
      $this->tier = $tier;
    }

    /**
     * @return string
     */
    public function getTier()
    {
      return $this->tier;
    }

    /**
     * @param string $tier
     * @return \Google\AdsApi\AdWords\v201601\cm\IncomeOperand
     */
    public function setTier($tier)
    {
      $this->tier = $tier;
      return $this;
    }

}
