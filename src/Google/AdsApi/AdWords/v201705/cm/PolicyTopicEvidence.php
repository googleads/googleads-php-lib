<?php

namespace Google\AdsApi\AdWords\v201705\cm;


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
     * @var string $evidenceText
     */
    protected $evidenceText = null;

    /**
     * @param string $policyTopicEvidenceType
     * @param string $evidenceText
     */
    public function __construct($policyTopicEvidenceType = null, $evidenceText = null)
    {
      $this->policyTopicEvidenceType = $policyTopicEvidenceType;
      $this->evidenceText = $evidenceText;
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
     * @return \Google\AdsApi\AdWords\v201705\cm\PolicyTopicEvidence
     */
    public function setPolicyTopicEvidenceType($policyTopicEvidenceType)
    {
      $this->policyTopicEvidenceType = $policyTopicEvidenceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getEvidenceText()
    {
      return $this->evidenceText;
    }

    /**
     * @param string $evidenceText
     * @return \Google\AdsApi\AdWords\v201705\cm\PolicyTopicEvidence
     */
    public function setEvidenceText($evidenceText)
    {
      $this->evidenceText = $evidenceText;
      return $this;
    }

}
