<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class AdGroupCriterionOperation extends \Google\AdsApi\AdWords\v201601\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterion $operand
     */
    protected $operand = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\ExemptionRequest[] $exemptionRequests
     */
    protected $exemptionRequests = null;

    /**
     * @param string $operator
     * @param string $operationType
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterion $operand
     * @param \Google\AdsApi\AdWords\v201601\cm\ExemptionRequest[] $exemptionRequests
     */
    public function __construct($operator = null, $operationType = null, $operand = null, array $exemptionRequests = null)
    {
      parent::__construct($operator, $operationType);
      $this->operand = $operand;
      $this->exemptionRequests = $exemptionRequests;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterion
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterion $operand
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterionOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\ExemptionRequest[]
     */
    public function getExemptionRequests()
    {
      return $this->exemptionRequests;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\ExemptionRequest[] $exemptionRequests
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterionOperation
     */
    public function setExemptionRequests(array $exemptionRequests)
    {
      $this->exemptionRequests = $exemptionRequests;
      return $this;
    }

}
