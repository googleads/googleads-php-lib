<?php

namespace Google\AdsApi\AdWords\v201601\cm;

abstract class Operation
{

    /**
     * @var string $operator
     */
    protected $operator = null;

    /**
     * @var string $operationType
     */
    protected $operationType = null;

    /**
     * @param string $operator
     * @param string $operationType
     */
    public function __construct($operator = null, $operationType = null)
    {
      $this->operator = $operator;
      $this->operationType = $operationType;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\Operation
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
      return $this->operationType;
    }

    /**
     * @param string $operationType
     * @return \Google\AdsApi\AdWords\v201601\cm\Operation
     */
    public function setOperationType($operationType)
    {
      $this->operationType = $operationType;
      return $this;
    }

}
