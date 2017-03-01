<?php

namespace Google\AdsApi\AdWords\v201702\cm;


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
     * @var \Google\AdsApi\AdWords\v201702\cm\PolicyTopicEvidence[] $policyTopicEvidences
     */
    protected $policyTopicEvidences = null;

    /**
     * @var string $policyTopicId
     */
    protected $policyTopicId = null;

    /**
     * @var string $policyTopicName
     */
    protected $policyTopicName = null;

    /**
     * @param string $policyTopicEntryType
     * @param \Google\AdsApi\AdWords\v201702\cm\PolicyTopicEvidence[] $policyTopicEvidences
     * @param string $policyTopicId
     * @param string $policyTopicName
     */
    public function __construct($policyTopicEntryType = null, array $policyTopicEvidences = null, $policyTopicId = null, $policyTopicName = null)
    {
      $this->policyTopicEntryType = $policyTopicEntryType;
      $this->policyTopicEvidences = $policyTopicEvidences;
      $this->policyTopicId = $policyTopicId;
      $this->policyTopicName = $policyTopicName;
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
     * @return \Google\AdsApi\AdWords\v201702\cm\PolicyTopicEntry
     */
    public function setPolicyTopicEntryType($policyTopicEntryType)
    {
      $this->policyTopicEntryType = $policyTopicEntryType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201702\cm\PolicyTopicEvidence[]
     */
    public function getPolicyTopicEvidences()
    {
      return $this->policyTopicEvidences;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201702\cm\PolicyTopicEvidence[] $policyTopicEvidences
     * @return \Google\AdsApi\AdWords\v201702\cm\PolicyTopicEntry
     */
    public function setPolicyTopicEvidences(array $policyTopicEvidences)
    {
      $this->policyTopicEvidences = $policyTopicEvidences;
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
     * @return \Google\AdsApi\AdWords\v201702\cm\PolicyTopicEntry
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
     * @return \Google\AdsApi\AdWords\v201702\cm\PolicyTopicEntry
     */
    public function setPolicyTopicName($policyTopicName)
    {
      $this->policyTopicName = $policyTopicName;
      return $this;
    }

}
