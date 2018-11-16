<?php

namespace Google\AdsApi\AdWords\v201802\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UserListOperation extends \Google\AdsApi\AdWords\v201802\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\rm\UserList $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201802\rm\UserList $operand
     */
    public function __construct($operator = null, $OperationType = null, $operand = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\rm\UserList
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\rm\UserList $operand
     * @return \Google\AdsApi\AdWords\v201802\rm\UserListOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
