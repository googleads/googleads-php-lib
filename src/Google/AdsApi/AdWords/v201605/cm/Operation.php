<?php

namespace Google\AdsApi\AdWords\v201605\cm;


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
     * @return \Google\AdsApi\AdWords\v201605\cm\Operation
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
     * @return \Google\AdsApi\AdWords\v201605\cm\Operation
     */
    public function setOperationType($OperationType)
    {
      $this->OperationType = $OperationType;
      return $this;
    }

}
