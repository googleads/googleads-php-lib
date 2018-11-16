<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupAdOperation extends \Google\AdsApi\AdWords\v201802\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\AdGroupAd $operand
     */
    protected $operand = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\ExemptionRequest[] $exemptionRequests
     */
    protected $exemptionRequests = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201802\cm\AdGroupAd $operand
     * @param \Google\AdsApi\AdWords\v201802\cm\ExemptionRequest[] $exemptionRequests
     */
    public function __construct($operator = null, $OperationType = null, $operand = null, array $exemptionRequests = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
      $this->exemptionRequests = $exemptionRequests;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\AdGroupAd
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\AdGroupAd $operand
     * @return \Google\AdsApi\AdWords\v201802\cm\AdGroupAdOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\ExemptionRequest[]
     */
    public function getExemptionRequests()
    {
      return $this->exemptionRequests;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\ExemptionRequest[] $exemptionRequests
     * @return \Google\AdsApi\AdWords\v201802\cm\AdGroupAdOperation
     */
    public function setExemptionRequests(array $exemptionRequests)
    {
      $this->exemptionRequests = $exemptionRequests;
      return $this;
    }

}
