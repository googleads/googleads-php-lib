<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PolicyTopicEvidence
{

    /**
     * @var string $policyTopicEvidenceType
     */
    protected $policyTopicEvidenceType = null;

    /**
     * @var string[] $evidenceTextList
     */
    protected $evidenceTextList = null;

    /**
     * @var string[] $policyTopicEvidenceDestinationMismatchUrlTypes
     */
    protected $policyTopicEvidenceDestinationMismatchUrlTypes = null;

    /**
     * @param string $policyTopicEvidenceType
     * @param string[] $evidenceTextList
     * @param string[] $policyTopicEvidenceDestinationMismatchUrlTypes
     */
    public function __construct($policyTopicEvidenceType = null, array $evidenceTextList = null, array $policyTopicEvidenceDestinationMismatchUrlTypes = null)
    {
      $this->policyTopicEvidenceType = $policyTopicEvidenceType;
      $this->evidenceTextList = $evidenceTextList;
      $this->policyTopicEvidenceDestinationMismatchUrlTypes = $policyTopicEvidenceDestinationMismatchUrlTypes;
    }

    /**
     * @return string
     */
    public function getPolicyTopicEvidenceType()
    {
      return $this->policyTopicEvidenceType;
    }

    /**
     * @param string $policyTopicEvidenceType
     * @return \Google\AdsApi\AdWords\v201809\cm\PolicyTopicEvidence
     */
    public function setPolicyTopicEvidenceType($policyTopicEvidenceType)
    {
      $this->policyTopicEvidenceType = $policyTopicEvidenceType;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getEvidenceTextList()
    {
      return $this->evidenceTextList;
    }

    /**
     * @param string[] $evidenceTextList
     * @return \Google\AdsApi\AdWords\v201809\cm\PolicyTopicEvidence
     */
    public function setEvidenceTextList(array $evidenceTextList)
    {
      $this->evidenceTextList = $evidenceTextList;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getPolicyTopicEvidenceDestinationMismatchUrlTypes()
    {
      return $this->policyTopicEvidenceDestinationMismatchUrlTypes;
    }

    /**
     * @param string[] $policyTopicEvidenceDestinationMismatchUrlTypes
     * @return \Google\AdsApi\AdWords\v201809\cm\PolicyTopicEvidence
     */
    public function setPolicyTopicEvidenceDestinationMismatchUrlTypes(array $policyTopicEvidenceDestinationMismatchUrlTypes)
    {
      $this->policyTopicEvidenceDestinationMismatchUrlTypes = $policyTopicEvidenceDestinationMismatchUrlTypes;
      return $this;
    }

}
