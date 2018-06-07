<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SharedSetOperation extends \Google\AdsApi\AdWords\v201806\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\SharedSet $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201806\cm\SharedSet $operand
     */
    public function __construct($operator = null, $OperationType = null, $operand = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\SharedSet
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\SharedSet $operand
     * @return \Google\AdsApi\AdWords\v201806\cm\SharedSetOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
