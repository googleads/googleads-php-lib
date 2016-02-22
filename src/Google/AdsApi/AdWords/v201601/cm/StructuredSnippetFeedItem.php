<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class StructuredSnippetFeedItem extends \Google\AdsApi\AdWords\v201601\cm\ExtensionFeedItem
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
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItemDevicePreference $devicePreference
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItemScheduling $scheduling
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItemPolicyData[] $policyData
     * @param string $ExtensionFeedItemType
     * @param string $header
     * @param string[] $values
     */
    public function __construct($feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, array $policyData = null, $ExtensionFeedItemType = null, $header = null, array $values = null)
    {
      parent::__construct($feedId, $feedItemId, $status, $feedType, $startTime, $endTime, $devicePreference, $scheduling, $policyData, $ExtensionFeedItemType);
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
     * @return \Google\AdsApi\AdWords\v201601\cm\StructuredSnippetFeedItem
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
     * @return \Google\AdsApi\AdWords\v201601\cm\StructuredSnippetFeedItem
     */
    public function setValues(array $values)
    {
      $this->values = $values;
      return $this;
    }

}
