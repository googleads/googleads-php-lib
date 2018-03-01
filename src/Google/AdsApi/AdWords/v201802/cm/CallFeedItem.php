<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CallFeedItem extends \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
{

    /**
     * @var string $callPhoneNumber
     */
    protected $callPhoneNumber = null;

    /**
     * @var string $callCountryCode
     */
    protected $callCountryCode = null;

    /**
     * @var boolean $callTracking
     */
    protected $callTracking = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\CallConversionType $callConversionType
     */
    protected $callConversionType = null;

    /**
     * @var boolean $disableCallConversionTracking
     */
    protected $disableCallConversionTracking = null;

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
     * @param string $callPhoneNumber
     * @param string $callCountryCode
     * @param boolean $callTracking
     * @param \Google\AdsApi\AdWords\v201802\cm\CallConversionType $callConversionType
     * @param boolean $disableCallConversionTracking
     */
    public function __construct($feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $geoTargeting = null, $geoTargetingRestriction = null, array $policyData = null, $ExtensionFeedItemType = null, $callPhoneNumber = null, $callCountryCode = null, $callTracking = null, $callConversionType = null, $disableCallConversionTracking = null)
    {
      parent::__construct($feedId, $feedItemId, $status, $feedType, $startTime, $endTime, $devicePreference, $scheduling, $campaignTargeting, $adGroupTargeting, $keywordTargeting, $geoTargeting, $geoTargetingRestriction, $policyData, $ExtensionFeedItemType);
      $this->callPhoneNumber = $callPhoneNumber;
      $this->callCountryCode = $callCountryCode;
      $this->callTracking = $callTracking;
      $this->callConversionType = $callConversionType;
      $this->disableCallConversionTracking = $disableCallConversionTracking;
    }

    /**
     * @return string
     */
    public function getCallPhoneNumber()
    {
      return $this->callPhoneNumber;
    }

    /**
     * @param string $callPhoneNumber
     * @return \Google\AdsApi\AdWords\v201802\cm\CallFeedItem
     */
    public function setCallPhoneNumber($callPhoneNumber)
    {
      $this->callPhoneNumber = $callPhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCallCountryCode()
    {
      return $this->callCountryCode;
    }

    /**
     * @param string $callCountryCode
     * @return \Google\AdsApi\AdWords\v201802\cm\CallFeedItem
     */
    public function setCallCountryCode($callCountryCode)
    {
      $this->callCountryCode = $callCountryCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCallTracking()
    {
      return $this->callTracking;
    }

    /**
     * @param boolean $callTracking
     * @return \Google\AdsApi\AdWords\v201802\cm\CallFeedItem
     */
    public function setCallTracking($callTracking)
    {
      $this->callTracking = $callTracking;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\CallConversionType
     */
    public function getCallConversionType()
    {
      return $this->callConversionType;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\CallConversionType $callConversionType
     * @return \Google\AdsApi\AdWords\v201802\cm\CallFeedItem
     */
    public function setCallConversionType($callConversionType)
    {
      $this->callConversionType = $callConversionType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisableCallConversionTracking()
    {
      return $this->disableCallConversionTracking;
    }

    /**
     * @param boolean $disableCallConversionTracking
     * @return \Google\AdsApi\AdWords\v201802\cm\CallFeedItem
     */
    public function setDisableCallConversionTracking($disableCallConversionTracking)
    {
      $this->disableCallConversionTracking = $disableCallConversionTracking;
      return $this;
    }

}
