<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class BiddingStrategyOperation extends \Google\AdsApi\AdWords\v201601\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\SharedBiddingStrategy $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $operationType
     * @param \Google\AdsApi\AdWords\v201601\cm\SharedBiddingStrategy $operand
     */
    public function __construct($operator = null, $operationType = null, $operand = null)
    {
      parent::__construct($operator, $operationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\SharedBiddingStrategy
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\SharedBiddingStrategy $operand
     * @return \Google\AdsApi\AdWords\v201601\cm\BiddingStrategyOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
