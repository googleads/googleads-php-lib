<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CalloutFeedItem extends \Google\AdsApi\AdWords\v201601\cm\ExtensionFeedItem
{

    /**
     * @var string $calloutText
     */
    protected $calloutText = null;

    /**
     * @param int $feedId
     * @param int $feedItemId
     * @param string $status
     * @param string $feedType
     * @param string $startTime
     * @param string $endTime
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItemDevicePreference $devicePreference
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItemScheduling $scheduling
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItemPolicyData[] $policyData
     * @param string $ExtensionFeedItemType
     * @param string $calloutText
     */
    public function __construct($feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, array $policyData = null, $ExtensionFeedItemType = null, $calloutText = null)
    {
      parent::__construct($feedId, $feedItemId, $status, $feedType, $startTime, $endTime, $devicePreference, $scheduling, $policyData, $ExtensionFeedItemType);
      $this->calloutText = $calloutText;
    }

    /**
     * @return string
     */
    public function getCalloutText()
    {
      return $this->calloutText;
    }

    /**
     * @param string $calloutText
     * @return \Google\AdsApi\AdWords\v201601\cm\CalloutFeedItem
     */
    public function setCalloutText($calloutText)
    {
      $this->calloutText = $calloutText;
      return $this;
    }

}
