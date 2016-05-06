<?php

namespace Google\AdsApi\AdWords\v201603\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExpressBusinessOperation extends \Google\AdsApi\AdWords\v201603\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201603\express\ExpressBusiness $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201603\express\ExpressBusiness $operand
     */
    public function __construct($operator = null, $OperationType = null, $operand = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201603\express\ExpressBusiness
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201603\express\ExpressBusiness $operand
     * @return \Google\AdsApi\AdWords\v201603\express\ExpressBusinessOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
