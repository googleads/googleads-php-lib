<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class Operation
{

    /**
     * @var string $operator
     */
    protected $operator = null;

    /**
     * @var string $OperationType
     */
    protected $OperationType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['Operation.Type' => 'OperationType'];

    /**
     * @param string $operator
     * @param string $OperationType
     */
    public function __construct($operator = null, $OperationType = null)
    {
      $this->operator = $operator;
      $this->OperationType = $OperationType;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param string $operator
     * @return \Google\AdsApi\AdWords\v201710\cm\Operation
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperationType()
    {
      return $this->OperationType;
    }

    /**
     * @param string $OperationType
     * @return \Google\AdsApi\AdWords\v201710\cm\Operation
     */
    public function setOperationType($OperationType)
    {
      $this->OperationType = $OperationType;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\Operation
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
