<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupCriterionOperation extends \Google\AdsApi\AdWords\v201809\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\AdGroupCriterion $operand
     */
    protected $operand = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\ExemptionRequest[] $exemptionRequests
     */
    protected $exemptionRequests = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201809\cm\AdGroupCriterion $operand
     * @param \Google\AdsApi\AdWords\v201809\cm\ExemptionRequest[] $exemptionRequests
     */
    public function __construct($operator = null, $OperationType = null, $operand = null, array $exemptionRequests = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
      $this->exemptionRequests = $exemptionRequests;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupCriterion
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AdGroupCriterion $operand
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\ExemptionRequest[]
     */
    public function getExemptionRequests()
    {
      return $this->exemptionRequests;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\ExemptionRequest[] $exemptionRequests
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionOperation
     */
    public function setExemptionRequests(array $exemptionRequests)
    {
      $this->exemptionRequests = $exemptionRequests;
      return $this;
    }

}
