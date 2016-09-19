<?php

namespace Google\AdsApi\AdWords\v201607\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PromotionOperation extends \Google\AdsApi\AdWords\v201607\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201607\express\Promotion $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201607\express\Promotion $operand
     */
    public function __construct($operator = null, $OperationType = null, $operand = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\express\Promotion
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\express\Promotion $operand
     * @return \Google\AdsApi\AdWords\v201607\express\PromotionOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
