<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class FunctionOperand extends \Google\AdsApi\AdWords\v201601\cm\FunctionArgumentOperand
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\MatchingFunction $value
     */
    protected $value = null;

    /**
     * @param string $FunctionArgumentOperandType
     * @param \Google\AdsApi\AdWords\v201601\cm\MatchingFunction $value
     */
    public function __construct($FunctionArgumentOperandType = null, $value = null)
    {
      parent::__construct($FunctionArgumentOperandType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\MatchingFunction
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\MatchingFunction $value
     * @return \Google\AdsApi\AdWords\v201601\cm\FunctionOperand
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
