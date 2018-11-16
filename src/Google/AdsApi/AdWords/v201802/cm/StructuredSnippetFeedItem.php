<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class StructuredSnippetFeedItem extends \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
{

    /**
     * @var string $header
     */
    protected $header = null;

    /**
     * @var string[] $values
     */
    protected $values = null;

    /**
     * @param int $feedId
     * @param int $feedItemId
     * @param string $status
     * @param string $feedType
     * @param string $startTime
     * @param string $endTime
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemDevicePreference $devicePreference
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemScheduling $scheduling
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemCampaignTargeting $campaignTargeting
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemAdGroupTargeting $adGroupTargeting
     * @param \Google\AdsApi\AdWords\v201802\cm\Keyword $keywordTargeting
     * @param \Google\AdsApi\AdWords\v201802\cm\Location $geoTargeting
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemGeoRestriction $geoTargetingRestriction
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemPolicyData[] $policyData
     * @param string $ExtensionFeedItemType
     * @param string $header
     * @param string[] $values
     */
    public function __construct($feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $geoTargeting = null, $geoTargetingRestriction = null, array $policyData = null, $ExtensionFeedItemType = null, $header = null, array $values = null)
    {
      parent::__construct($feedId, $feedItemId, $status, $feedType, $startTime, $endTime, $devicePreference, $scheduling, $campaignTargeting, $adGroupTargeting, $keywordTargeting, $geoTargeting, $geoTargetingRestriction, $policyData, $ExtensionFeedItemType);
      $this->header = $header;
      $this->values = $values;
    }

    /**
     * @return string
     */
    public function getHeader()
    {
      return $this->header;
    }

    /**
     * @param string $header
     * @return \Google\AdsApi\AdWords\v201802\cm\StructuredSnippetFeedItem
     */
    public function setHeader($header)
    {
      $this->header = $header;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param string[] $values
     * @return \Google\AdsApi\AdWords\v201802\cm\StructuredSnippetFeedItem
     */
    public function setValues(array $values)
    {
      $this->values = $values;
      return $this;
    }

}
