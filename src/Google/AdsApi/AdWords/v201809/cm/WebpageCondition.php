<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class WebpageCondition
{

    /**
     * @var string $operand
     */
    protected $operand = null;

    /**
     * @var string $argument
     */
    protected $argument = null;

    /**
     * @var string $operator
     */
    protected $operator = null;

    /**
     * @param string $operand
     * @param string $argument
     * @param string $operator
     */
    public function __construct($operand = null, $argument = null, $operator = null)
    {
      $this->operand = $operand;
      $this->argument = $argument;
      $this->operator = $operator;
    }

    /**
     * @return string
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param string $operand
     * @return \Google\AdsApi\AdWords\v201809\cm\WebpageCondition
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

    /**
     * @return string
     */
    public function getArgument()
    {
      return $this->argument;
    }

    /**
     * @param string $argument
     * @return \Google\AdsApi\AdWords\v201809\cm\WebpageCondition
     */
    public function setArgument($argument)
    {
      $this->argument = $argument;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\WebpageCondition
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
