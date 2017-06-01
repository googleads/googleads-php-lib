<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class FunctionArgumentOperand
{

    /**
     * @var string $FunctionArgumentOperandType
     */
    protected $FunctionArgumentOperandType = null;

    /**
     * @param string $FunctionArgumentOperandType
     */
    public function __construct($FunctionArgumentOperandType = null)
    {
      $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }

    /**
     * @return string
     */
    public function getFunctionArgumentOperandType()
    {
      return $this->FunctionArgumentOperandType;
    }

    /**
     * @param string $FunctionArgumentOperandType
     * @return \Google\AdsApi\AdWords\v201705\cm\FunctionArgumentOperand
     */
    public function setFunctionArgumentOperandType($FunctionArgumentOperandType)
    {
      $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
      return $this;
    }

}
