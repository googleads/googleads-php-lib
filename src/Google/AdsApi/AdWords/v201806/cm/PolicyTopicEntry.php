<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PolicyTopicEntry
{

    /**
     * @var string $policyTopicEntryType
     */
    protected $policyTopicEntryType = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEvidence[] $policyTopicEvidences
     */
    protected $policyTopicEvidences = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\PolicyTopicConstraint[] $policyTopicConstraints
     */
    protected $policyTopicConstraints = null;

    /**
     * @var string $policyTopicId
     */
    protected $policyTopicId = null;

    /**
     * @var string $policyTopicName
     */
    protected $policyTopicName = null;

    /**
     * @var string $policyTopicHelpCenterUrl
     */
    protected $policyTopicHelpCenterUrl = null;

    /**
     * @param string $policyTopicEntryType
     * @param \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEvidence[] $policyTopicEvidences
     * @param \Google\AdsApi\AdWords\v201806\cm\PolicyTopicConstraint[] $policyTopicConstraints
     * @param string $policyTopicId
     * @param string $policyTopicName
     * @param string $policyTopicHelpCenterUrl
     */
    public function __construct($policyTopicEntryType = null, array $policyTopicEvidences = null, array $policyTopicConstraints = null, $policyTopicId = null, $policyTopicName = null, $policyTopicHelpCenterUrl = null)
    {
      $this->policyTopicEntryType = $policyTopicEntryType;
      $this->policyTopicEvidences = $policyTopicEvidences;
      $this->policyTopicConstraints = $policyTopicConstraints;
      $this->policyTopicId = $policyTopicId;
      $this->policyTopicName = $policyTopicName;
      $this->policyTopicHelpCenterUrl = $policyTopicHelpCenterUrl;
    }

    /**
     * @return string
     */
    public function getPolicyTopicEntryType()
    {
      return $this->policyTopicEntryType;
    }

    /**
     * @param string $policyTopicEntryType
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEntry
     */
    public function setPolicyTopicEntryType($policyTopicEntryType)
    {
      $this->policyTopicEntryType = $policyTopicEntryType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEvidence[]
     */
    public function getPolicyTopicEvidences()
    {
      return $this->policyTopicEvidences;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEvidence[] $policyTopicEvidences
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEntry
     */
    public function setPolicyTopicEvidences(array $policyTopicEvidences)
    {
      $this->policyTopicEvidences = $policyTopicEvidences;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicyTopicConstraint[]
     */
    public function getPolicyTopicConstraints()
    {
      return $this->policyTopicConstraints;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\PolicyTopicConstraint[] $policyTopicConstraints
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEntry
     */
    public function setPolicyTopicConstraints(array $policyTopicConstraints)
    {
      $this->policyTopicConstraints = $policyTopicConstraints;
      return $this;
    }

    /**
     * @return string
     */
    public function getPolicyTopicId()
    {
      return $this->policyTopicId;
    }

    /**
     * @param string $policyTopicId
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEntry
     */
    public function setPolicyTopicId($policyTopicId)
    {
      $this->policyTopicId = $policyTopicId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPolicyTopicName()
    {
      return $this->policyTopicName;
    }

    /**
     * @param string $policyTopicName
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEntry
     */
    public function setPolicyTopicName($policyTopicName)
    {
      $this->policyTopicName = $policyTopicName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPolicyTopicHelpCenterUrl()
    {
      return $this->policyTopicHelpCenterUrl;
    }

    /**
     * @param string $policyTopicHelpCenterUrl
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEntry
     */
    public function setPolicyTopicHelpCenterUrl($policyTopicHelpCenterUrl)
    {
      $this->policyTopicHelpCenterUrl = $policyTopicHelpCenterUrl;
      return $this;
    }

}
