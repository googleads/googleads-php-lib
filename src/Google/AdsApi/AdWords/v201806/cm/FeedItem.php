<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedItem
{

    /**
     * @var int $feedId
     */
    protected $feedId = null;

    /**
     * @var int $feedItemId
     */
    protected $feedItemId = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $startTime
     */
    protected $startTime = null;

    /**
     * @var string $endTime
     */
    protected $endTime = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\FeedItemAttributeValue[] $attributeValues
     */
    protected $attributeValues = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\FeedItemPolicySummary[] $policySummaries
     */
    protected $policySummaries = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\FeedItemGeoRestriction $geoTargetingRestriction
     */
    protected $geoTargetingRestriction = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\CustomParameters $urlCustomParameters
     */
    protected $urlCustomParameters = null;

    /**
     * @param int $feedId
     * @param int $feedItemId
     * @param string $status
     * @param string $startTime
     * @param string $endTime
     * @param \Google\AdsApi\AdWords\v201806\cm\FeedItemAttributeValue[] $attributeValues
     * @param \Google\AdsApi\AdWords\v201806\cm\FeedItemPolicySummary[] $policySummaries
     * @param \Google\AdsApi\AdWords\v201806\cm\FeedItemGeoRestriction $geoTargetingRestriction
     * @param \Google\AdsApi\AdWords\v201806\cm\CustomParameters $urlCustomParameters
     */
    public function __construct($feedId = null, $feedItemId = null, $status = null, $startTime = null, $endTime = null, array $attributeValues = null, array $policySummaries = null, $geoTargetingRestriction = null, $urlCustomParameters = null)
    {
      $this->feedId = $feedId;
      $this->feedItemId = $feedItemId;
      $this->status = $status;
      $this->startTime = $startTime;
      $this->endTime = $endTime;
      $this->attributeValues = $attributeValues;
      $this->policySummaries = $policySummaries;
      $this->geoTargetingRestriction = $geoTargetingRestriction;
      $this->urlCustomParameters = $urlCustomParameters;
    }

    /**
     * @return int
     */
    public function getFeedId()
    {
      return $this->feedId;
    }

    /**
     * @param int $feedId
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItem
     */
    public function setFeedId($feedId)
    {
      $this->feedId = (!is_null($feedId) && PHP_INT_SIZE === 4)
          ? floatval($feedId) : $feedId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedItemId()
    {
      return $this->feedItemId;
    }

    /**
     * @param int $feedItemId
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItem
     */
    public function setFeedItemId($feedItemId)
    {
      $this->feedItemId = (!is_null($feedItemId) && PHP_INT_SIZE === 4)
          ? floatval($feedItemId) : $feedItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItem
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
      return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItem
     */
    public function setStartTime($startTime)
    {
      $this->startTime = $startTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
      return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItem
     */
    public function setEndTime($endTime)
    {
      $this->endTime = $endTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItemAttributeValue[]
     */
    public function getAttributeValues()
    {
      return $this->attributeValues;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\FeedItemAttributeValue[] $attributeValues
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItem
     */
    public function setAttributeValues(array $attributeValues)
    {
      $this->attributeValues = $attributeValues;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItemPolicySummary[]
     */
    public function getPolicySummaries()
    {
      return $this->policySummaries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\FeedItemPolicySummary[] $policySummaries
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItem
     */
    public function setPolicySummaries(array $policySummaries)
    {
      $this->policySummaries = $policySummaries;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItemGeoRestriction
     */
    public function getGeoTargetingRestriction()
    {
      return $this->geoTargetingRestriction;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\FeedItemGeoRestriction $geoTargetingRestriction
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItem
     */
    public function setGeoTargetingRestriction($geoTargetingRestriction)
    {
      $this->geoTargetingRestriction = $geoTargetingRestriction;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\CustomParameters
     */
    public function getUrlCustomParameters()
    {
      return $this->urlCustomParameters;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\CustomParameters $urlCustomParameters
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItem
     */
    public function setUrlCustomParameters($urlCustomParameters)
    {
      $this->urlCustomParameters = $urlCustomParameters;
      return $this;
    }

}
