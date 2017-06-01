<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignGroupPerformanceTargetOperation extends \Google\AdsApi\AdWords\v201705\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201705\cm\CampaignGroupPerformanceTarget $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201705\cm\CampaignGroupPerformanceTarget $operand
     */
    public function __construct($operator = null, $OperationType = null, $operand = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201705\cm\CampaignGroupPerformanceTarget
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201705\cm\CampaignGroupPerformanceTarget $operand
     * @return \Google\AdsApi\AdWords\v201705\cm\CampaignGroupPerformanceTargetOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
