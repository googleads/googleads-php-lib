<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdOperation extends \Google\AdsApi\AdWords\v201809\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Ad $operand
     */
    protected $operand = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\ExemptionRequest[] $exemptionRequests
     */
    protected $exemptionRequests = null;

    /**
     * @var string[] $ignorablePolicyTopicIds
     */
    protected $ignorablePolicyTopicIds = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201809\cm\Ad $operand
     * @param \Google\AdsApi\AdWords\v201809\cm\ExemptionRequest[] $exemptionRequests
     * @param string[] $ignorablePolicyTopicIds
     */
    public function __construct($operator = null, $OperationType = null, $operand = null, array $exemptionRequests = null, array $ignorablePolicyTopicIds = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
      $this->exemptionRequests = $exemptionRequests;
      $this->ignorablePolicyTopicIds = $ignorablePolicyTopicIds;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Ad
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Ad $operand
     * @return \Google\AdsApi\AdWords\v201809\cm\AdOperation
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
     * @return \Google\AdsApi\AdWords\v201809\cm\AdOperation
     */
    public function setExemptionRequests(array $exemptionRequests)
    {
      $this->exemptionRequests = $exemptionRequests;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getIgnorablePolicyTopicIds()
    {
      return $this->ignorablePolicyTopicIds;
    }

    /**
     * @param string[] $ignorablePolicyTopicIds
     * @return \Google\AdsApi\AdWords\v201809\cm\AdOperation
     */
    public function setIgnorablePolicyTopicIds(array $ignorablePolicyTopicIds)
    {
      $this->ignorablePolicyTopicIds = $ignorablePolicyTopicIds;
      return $this;
    }

}
