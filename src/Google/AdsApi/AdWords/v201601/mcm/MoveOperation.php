<?php

namespace Google\AdsApi\AdWords\v201601\mcm;

class MoveOperation extends \Google\AdsApi\AdWords\v201601\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\mcm\ManagedCustomerLink $operand
     */
    protected $operand = null;

    /**
     * @var int $oldManagerCustomerId
     */
    protected $oldManagerCustomerId = null;

    /**
     * @param string $operator
     * @param string $operationType
     * @param \Google\AdsApi\AdWords\v201601\mcm\ManagedCustomerLink $operand
     * @param int $oldManagerCustomerId
     */
    public function __construct($operator = null, $operationType = null, $operand = null, $oldManagerCustomerId = null)
    {
      parent::__construct($operator, $operationType);
      $this->operand = $operand;
      $this->oldManagerCustomerId = $oldManagerCustomerId;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\mcm\ManagedCustomerLink
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\mcm\ManagedCustomerLink $operand
     * @return \Google\AdsApi\AdWords\v201601\mcm\MoveOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

    /**
     * @return int
     */
    public function getOldManagerCustomerId()
    {
      return $this->oldManagerCustomerId;
    }

    /**
     * @param int $oldManagerCustomerId
     * @return \Google\AdsApi\AdWords\v201601\mcm\MoveOperation
     */
    public function setOldManagerCustomerId($oldManagerCustomerId)
    {
      $this->oldManagerCustomerId = $oldManagerCustomerId;
      return $this;
    }

}
