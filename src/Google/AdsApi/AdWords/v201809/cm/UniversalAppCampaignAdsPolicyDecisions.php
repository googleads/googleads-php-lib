<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UniversalAppCampaignAdsPolicyDecisions
{

    /**
     * @var string $universalAppCampaignAsset
     */
    protected $universalAppCampaignAsset = null;

    /**
     * @var string $assetId
     */
    protected $assetId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\PolicyTopicEntry[] $policyTopicEntries
     */
    protected $policyTopicEntries = null;

    /**
     * @param string $universalAppCampaignAsset
     * @param string $assetId
     * @param \Google\AdsApi\AdWords\v201809\cm\PolicyTopicEntry[] $policyTopicEntries
     */
    public function __construct($universalAppCampaignAsset = null, $assetId = null, array $policyTopicEntries = null)
    {
      $this->universalAppCampaignAsset = $universalAppCampaignAsset;
      $this->assetId = $assetId;
      $this->policyTopicEntries = $policyTopicEntries;
    }

    /**
     * @return string
     */
    public function getUniversalAppCampaignAsset()
    {
      return $this->universalAppCampaignAsset;
    }

    /**
     * @param string $universalAppCampaignAsset
     * @return \Google\AdsApi\AdWords\v201809\cm\UniversalAppCampaignAdsPolicyDecisions
     */
    public function setUniversalAppCampaignAsset($universalAppCampaignAsset)
    {
      $this->universalAppCampaignAsset = $universalAppCampaignAsset;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssetId()
    {
      return $this->assetId;
    }

    /**
     * @param string $assetId
     * @return \Google\AdsApi\AdWords\v201809\cm\UniversalAppCampaignAdsPolicyDecisions
     */
    public function setAssetId($assetId)
    {
      $this->assetId = $assetId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\PolicyTopicEntry[]
     */
    public function getPolicyTopicEntries()
    {
      return $this->policyTopicEntries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\PolicyTopicEntry[] $policyTopicEntries
     * @return \Google\AdsApi\AdWords\v201809\cm\UniversalAppCampaignAdsPolicyDecisions
     */
    public function setPolicyTopicEntries(array $policyTopicEntries)
    {
      $this->policyTopicEntries = $policyTopicEntries;
      return $this;
    }

}
