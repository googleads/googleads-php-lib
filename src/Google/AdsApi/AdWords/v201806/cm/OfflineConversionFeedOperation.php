<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OfflineConversionFeedOperation extends \Google\AdsApi\AdWords\v201806\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\OfflineConversionFeed $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201806\cm\OfflineConversionFeed $operand
     */
    public function __construct($operator = null, $OperationType = null, $operand = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\OfflineConversionFeed
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\OfflineConversionFeed $operand
     * @return \Google\AdsApi\AdWords\v201806\cm\OfflineConversionFeedOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
