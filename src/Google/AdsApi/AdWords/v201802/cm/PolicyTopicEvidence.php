<?php

namespace Google\AdsApi\AdWords\v201802\cm;


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
     * @param string $policyTopicEvidenceType
     * @param string[] $evidenceTextList
     */
    public function __construct($policyTopicEvidenceType = null, array $evidenceTextList = null)
    {
      $this->policyTopicEvidenceType = $policyTopicEvidenceType;
      $this->evidenceTextList = $evidenceTextList;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\PolicyTopicEvidence
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
     * @return \Google\AdsApi\AdWords\v201802\cm\PolicyTopicEvidence
     */
    public function setEvidenceTextList(array $evidenceTextList)
    {
      $this->evidenceTextList = $evidenceTextList;
      return $this;
    }

}
