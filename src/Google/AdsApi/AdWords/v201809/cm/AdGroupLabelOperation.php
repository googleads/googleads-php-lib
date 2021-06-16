<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupLabelOperation extends \Google\AdsApi\AdWords\v201809\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\AdGroupLabel $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201809\cm\AdGroupLabel $operand
     */
    public function __construct($operator = null, $OperationType = null, $operand = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupLabel
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AdGroupLabel $operand
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupLabelOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
