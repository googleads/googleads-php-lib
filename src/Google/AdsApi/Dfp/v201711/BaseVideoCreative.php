<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BaseVideoCreative extends \Google\AdsApi\Dfp\v201711\HasDestinationUrlCreative
{

    /**
     * @var int $duration
     */
    protected $duration = null;

    /**
     * @var boolean $allowDurationOverride
     */
    protected $allowDurationOverride = null;

    /**
     * @var \Google\AdsApi\Dfp\v201711\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     */
    protected $trackingUrls = null;

    /**
     * @var int[] $companionCreativeIds
     */
    protected $companionCreativeIds = null;

    /**
     * @var string $customParameters
     */
    protected $customParameters = null;

    /**
     * @var string $skippableAdType
     */
    protected $skippableAdType = null;

    /**
     * @var string $vastPreviewUrl
     */
    protected $vastPreviewUrl = null;

    /**
     * @var string $sslScanResult
     */
    protected $sslScanResult = null;

    /**
     * @var string $sslManualOverride
     */
    protected $sslManualOverride = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\Dfp\v201711\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param \Google\AdsApi\Dfp\v201711\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201711\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201711\BaseCustomFieldValue[] $customFieldValues
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param int $duration
     * @param boolean $allowDurationOverride
     * @param \Google\AdsApi\Dfp\v201711\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @param int[] $companionCreativeIds
     * @param string $customParameters
     * @param string $skippableAdType
     * @param string $vastPreviewUrl
     * @param string $sslScanResult
     * @param string $sslManualOverride
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, $duration = null, $allowDurationOverride = null, array $trackingUrls = null, array $companionCreativeIds = null, $customParameters = null, $skippableAdType = null, $vastPreviewUrl = null, $sslScanResult = null, $sslManualOverride = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType);
      $this->duration = $duration;
      $this->allowDurationOverride = $allowDurationOverride;
      $this->trackingUrls = $trackingUrls;
      $this->companionCreativeIds = $companionCreativeIds;
      $this->customParameters = $customParameters;
      $this->skippableAdType = $skippableAdType;
      $this->vastPreviewUrl = $vastPreviewUrl;
      $this->sslScanResult = $sslScanResult;
      $this->sslManualOverride = $sslManualOverride;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
      return $this->duration;
    }

    /**
     * @param int $duration
     * @return \Google\AdsApi\Dfp\v201711\BaseVideoCreative
     */
    public function setDuration($duration)
    {
      $this->duration = $duration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowDurationOverride()
    {
      return $this->allowDurationOverride;
    }

    /**
     * @param boolean $allowDurationOverride
     * @return \Google\AdsApi\Dfp\v201711\BaseVideoCreative
     */
    public function setAllowDurationOverride($allowDurationOverride)
    {
      $this->allowDurationOverride = $allowDurationOverride;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\ConversionEvent_TrackingUrlsMapEntry[]
     */
    public function getTrackingUrls()
    {
      return $this->trackingUrls;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @return \Google\AdsApi\Dfp\v201711\BaseVideoCreative
     */
    public function setTrackingUrls(array $trackingUrls)
    {
      $this->trackingUrls = $trackingUrls;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getCompanionCreativeIds()
    {
      return $this->companionCreativeIds;
    }

    /**
     * @param int[] $companionCreativeIds
     * @return \Google\AdsApi\Dfp\v201711\BaseVideoCreative
     */
    public function setCompanionCreativeIds(array $companionCreativeIds)
    {
      $this->companionCreativeIds = $companionCreativeIds;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomParameters()
    {
      return $this->customParameters;
    }

    /**
     * @param string $customParameters
     * @return \Google\AdsApi\Dfp\v201711\BaseVideoCreative
     */
    public function setCustomParameters($customParameters)
    {
      $this->customParameters = $customParameters;
      return $this;
    }

    /**
     * @return string
     */
    public function getSkippableAdType()
    {
      return $this->skippableAdType;
    }

    /**
     * @param string $skippableAdType
     * @return \Google\AdsApi\Dfp\v201711\BaseVideoCreative
     */
    public function setSkippableAdType($skippableAdType)
    {
      $this->skippableAdType = $skippableAdType;
      return $this;
    }

    /**
     * @return string
     */
    public function getVastPreviewUrl()
    {
      return $this->vastPreviewUrl;
    }

    /**
     * @param string $vastPreviewUrl
     * @return \Google\AdsApi\Dfp\v201711\BaseVideoCreative
     */
    public function setVastPreviewUrl($vastPreviewUrl)
    {
      $this->vastPreviewUrl = $vastPreviewUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getSslScanResult()
    {
      return $this->sslScanResult;
    }

    /**
     * @param string $sslScanResult
     * @return \Google\AdsApi\Dfp\v201711\BaseVideoCreative
     */
    public function setSslScanResult($sslScanResult)
    {
      $this->sslScanResult = $sslScanResult;
      return $this;
    }

    /**
     * @return string
     */
    public function getSslManualOverride()
    {
      return $this->sslManualOverride;
    }

    /**
     * @param string $sslManualOverride
     * @return \Google\AdsApi\Dfp\v201711\BaseVideoCreative
     */
    public function setSslManualOverride($sslManualOverride)
    {
      $this->sslManualOverride = $sslManualOverride;
      return $this;
    }

}
