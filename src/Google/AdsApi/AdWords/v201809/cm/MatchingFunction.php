<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MatchingFunction
{

    /**
     * @var string $operator
     */
    protected $operator = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\FunctionArgumentOperand[] $lhsOperand
     */
    protected $lhsOperand = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\FunctionArgumentOperand[] $rhsOperand
     */
    protected $rhsOperand = null;

    /**
     * @var string $functionString
     */
    protected $functionString = null;

    /**
     * @param string $operator
     * @param \Google\AdsApi\AdWords\v201809\cm\FunctionArgumentOperand[] $lhsOperand
     * @param \Google\AdsApi\AdWords\v201809\cm\FunctionArgumentOperand[] $rhsOperand
     * @param string $functionString
     */
    public function __construct($operator = null, array $lhsOperand = null, array $rhsOperand = null, $functionString = null)
    {
      $this->operator = $operator;
      $this->lhsOperand = $lhsOperand;
      $this->rhsOperand = $rhsOperand;
      $this->functionString = $functionString;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\MatchingFunction
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\FunctionArgumentOperand[]
     */
    public function getLhsOperand()
    {
      return $this->lhsOperand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\FunctionArgumentOperand[] $lhsOperand
     * @return \Google\AdsApi\AdWords\v201809\cm\MatchingFunction
     */
    public function setLhsOperand(array $lhsOperand)
    {
      $this->lhsOperand = $lhsOperand;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\FunctionArgumentOperand[]
     */
    public function getRhsOperand()
    {
      return $this->rhsOperand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\FunctionArgumentOperand[] $rhsOperand
     * @return \Google\AdsApi\AdWords\v201809\cm\MatchingFunction
     */
    public function setRhsOperand(array $rhsOperand)
    {
      $this->rhsOperand = $rhsOperand;
      return $this;
    }

    /**
     * @return string
     */
    public function getFunctionString()
    {
      return $this->functionString;
    }

    /**
     * @param string $functionString
     * @return \Google\AdsApi\AdWords\v201809\cm\MatchingFunction
     */
    public function setFunctionString($functionString)
    {
      $this->functionString = $functionString;
      return $this;
    }

}
