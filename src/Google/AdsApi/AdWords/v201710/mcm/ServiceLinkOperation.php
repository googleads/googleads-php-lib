<?php

namespace Google\AdsApi\AdWords\v201710\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ServiceLinkOperation extends \Google\AdsApi\AdWords\v201710\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\mcm\ServiceLink $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201710\mcm\ServiceLink $operand
     */
    public function __construct($operator = null, $OperationType = null, $operand = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\mcm\ServiceLink
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\mcm\ServiceLink $operand
     * @return \Google\AdsApi\AdWords\v201710\mcm\ServiceLinkOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
