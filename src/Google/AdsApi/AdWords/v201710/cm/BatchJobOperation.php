<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BatchJobOperation extends \Google\AdsApi\AdWords\v201710\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\BatchJob $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201710\cm\BatchJob $operand
     */
    public function __construct($operator = null, $OperationType = null, $operand = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\BatchJob
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\BatchJob $operand
     * @return \Google\AdsApi\AdWords\v201710\cm\BatchJobOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
