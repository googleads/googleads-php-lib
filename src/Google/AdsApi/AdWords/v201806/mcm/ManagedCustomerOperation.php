<?php

namespace Google\AdsApi\AdWords\v201806\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ManagedCustomerOperation extends \Google\AdsApi\AdWords\v201806\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer $operand
     */
    protected $operand = null;

    /**
     * @var string $inviteeEmail
     */
    protected $inviteeEmail = null;

    /**
     * @var string $inviteeRole
     */
    protected $inviteeRole = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer $operand
     * @param string $inviteeEmail
     * @param string $inviteeRole
     */
    public function __construct($operator = null, $OperationType = null, $operand = null, $inviteeEmail = null, $inviteeRole = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
      $this->inviteeEmail = $inviteeEmail;
      $this->inviteeRole = $inviteeRole;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer $operand
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomerOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

    /**
     * @return string
     */
    public function getInviteeEmail()
    {
      return $this->inviteeEmail;
    }

    /**
     * @param string $inviteeEmail
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomerOperation
     */
    public function setInviteeEmail($inviteeEmail)
    {
      $this->inviteeEmail = $inviteeEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getInviteeRole()
    {
      return $this->inviteeRole;
    }

    /**
     * @param string $inviteeRole
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomerOperation
     */
    public function setInviteeRole($inviteeRole)
    {
      $this->inviteeRole = $inviteeRole;
      return $this;
    }

}
