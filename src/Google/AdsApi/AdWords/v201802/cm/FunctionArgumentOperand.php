<?php

namespace Google\AdsApi\AdWords\v201802\cm;


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
     * @var array $parameterMap
     */
    private $parameterMap = ['FunctionArgumentOperand.Type' => 'FunctionArgumentOperandType'];

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
     * @return \Google\AdsApi\AdWords\v201802\cm\FunctionArgumentOperand
     */
    public function setFunctionArgumentOperandType($FunctionArgumentOperandType)
    {
      $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201802\cm\FunctionArgumentOperand
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
