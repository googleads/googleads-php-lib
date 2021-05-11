<?php

namespace Google\AdsApi\AdManager\v202102;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VastRedirectCreative extends \Google\AdsApi\AdManager\v202102\Creative
{

    /**
     * @var string $vastXmlUrl
     */
    protected $vastXmlUrl = null;

    /**
     * @var string $vastRedirectType
     */
    protected $vastRedirectType = null;

    /**
     * @var int $duration
     */
    protected $duration = null;

    /**
     * @var int[] $companionCreativeIds
     */
    protected $companionCreativeIds = null;

    /**
     * @var \Google\AdsApi\AdManager\v202102\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     */
    protected $trackingUrls = null;

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
     * @var boolean $isAudio
     */
    protected $isAudio = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202102\Size $size
     * @param string $previewUrl
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v202102\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202102\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202102\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202102\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     * @param string $vastXmlUrl
     * @param string $vastRedirectType
     * @param int $duration
     * @param int[] $companionCreativeIds
     * @param \Google\AdsApi\AdManager\v202102\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @param string $vastPreviewUrl
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param boolean $isAudio
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $vastXmlUrl = null, $vastRedirectType = null, $duration = null, array $companionCreativeIds = null, array $trackingUrls = null, $vastPreviewUrl = null, $sslScanResult = null, $sslManualOverride = null, $isAudio = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration);
      $this->vastXmlUrl = $vastXmlUrl;
      $this->vastRedirectType = $vastRedirectType;
      $this->duration = $duration;
      $this->companionCreativeIds = $companionCreativeIds;
      $this->trackingUrls = $trackingUrls;
      $this->vastPreviewUrl = $vastPreviewUrl;
      $this->sslScanResult = $sslScanResult;
      $this->sslManualOverride = $sslManualOverride;
      $this->isAudio = $isAudio;
    }

    /**
     * @return string
     */
    public function getVastXmlUrl()
    {
      return $this->vastXmlUrl;
    }

    /**
     * @param string $vastXmlUrl
     * @return \Google\AdsApi\AdManager\v202102\VastRedirectCreative
     */
    public function setVastXmlUrl($vastXmlUrl)
    {
      $this->vastXmlUrl = $vastXmlUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getVastRedirectType()
    {
      return $this->vastRedirectType;
    }

    /**
     * @param string $vastRedirectType
     * @return \Google\AdsApi\AdManager\v202102\VastRedirectCreative
     */
    public function setVastRedirectType($vastRedirectType)
    {
      $this->vastRedirectType = $vastRedirectType;
      return $this;
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
     * @return \Google\AdsApi\AdManager\v202102\VastRedirectCreative
     */
    public function setDuration($duration)
    {
      $this->duration = $duration;
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
     * @param int[]|null $companionCreativeIds
     * @return \Google\AdsApi\AdManager\v202102\VastRedirectCreative
     */
    public function setCompanionCreativeIds(array $companionCreativeIds = null)
    {
      $this->companionCreativeIds = $companionCreativeIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202102\ConversionEvent_TrackingUrlsMapEntry[]
     */
    public function getTrackingUrls()
    {
      return $this->trackingUrls;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202102\ConversionEvent_TrackingUrlsMapEntry[]|null $trackingUrls
     * @return \Google\AdsApi\AdManager\v202102\VastRedirectCreative
     */
    public function setTrackingUrls(array $trackingUrls = null)
    {
      $this->trackingUrls = $trackingUrls;
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
     * @return \Google\AdsApi\AdManager\v202102\VastRedirectCreative
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
     * @return \Google\AdsApi\AdManager\v202102\VastRedirectCreative
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
     * @return \Google\AdsApi\AdManager\v202102\VastRedirectCreative
     */
    public function setSslManualOverride($sslManualOverride)
    {
      $this->sslManualOverride = $sslManualOverride;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAudio()
    {
      return $this->isAudio;
    }

    /**
     * @param boolean $isAudio
     * @return \Google\AdsApi\AdManager\v202102\VastRedirectCreative
     */
    public function setIsAudio($isAudio)
    {
      $this->isAudio = $isAudio;
      return $this;
    }

}
