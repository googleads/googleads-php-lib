<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FunctionOperand extends \Google\AdsApi\AdWords\v201806\cm\FunctionArgumentOperand
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\MatchingFunction $value
     */
    protected $value = null;

    /**
     * @param string $FunctionArgumentOperandType
     * @param \Google\AdsApi\AdWords\v201806\cm\MatchingFunction $value
     */
    public function __construct($FunctionArgumentOperandType = null, $value = null)
    {
      parent::__construct($FunctionArgumentOperandType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\MatchingFunction
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\MatchingFunction $value
     * @return \Google\AdsApi\AdWords\v201806\cm\FunctionOperand
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
