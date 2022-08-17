<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LiveStreamEvent
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\DateTime $creationDateTime
     */
    protected $creationDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var string $startDateTimeType
     */
    protected $startDateTimeType = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var boolean $unlimitedEndDateTime
     */
    protected $unlimitedEndDateTime = null;

    /**
     * @var int $totalEstimatedConcurrentUsers
     */
    protected $totalEstimatedConcurrentUsers = null;

    /**
     * @var string[] $contentUrls
     */
    protected $contentUrls = null;

    /**
     * @var string[] $adTags
     */
    protected $adTags = null;

    /**
     * @var string $assetKey
     */
    protected $assetKey = null;

    /**
     * @var int $slateCreativeId
     */
    protected $slateCreativeId = null;

    /**
     * @var int $dvrWindowSeconds
     */
    protected $dvrWindowSeconds = null;

    /**
     * @var boolean $enableDaiAuthenticationKeys
     */
    protected $enableDaiAuthenticationKeys = null;

    /**
     * @var string $adBreakFillType
     */
    protected $adBreakFillType = null;

    /**
     * @var string $underfillAdBreakFillType
     */
    protected $underfillAdBreakFillType = null;

    /**
     * @var int $adHolidayDuration
     */
    protected $adHolidayDuration = null;

    /**
     * @var boolean $enableMaxFillerDuration
     */
    protected $enableMaxFillerDuration = null;

    /**
     * @var int $maxFillerDuration
     */
    protected $maxFillerDuration = null;

    /**
     * @var boolean $enableDurationlessAdBreaks
     */
    protected $enableDurationlessAdBreaks = null;

    /**
     * @var int $defaultAdBreakDuration
     */
    protected $defaultAdBreakDuration = null;

    /**
     * @var int[] $streamCreateDaiAuthenticationKeyIds
     */
    protected $streamCreateDaiAuthenticationKeyIds = null;

    /**
     * @var int[] $sourceContentConfigurationIds
     */
    protected $sourceContentConfigurationIds = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\HlsSettings $hlsSettings
     */
    protected $hlsSettings = null;

    /**
     * @var boolean $enableAllowlistedIps
     */
    protected $enableAllowlistedIps = null;

    /**
     * @var string $dynamicAdInsertionType
     */
    protected $dynamicAdInsertionType = null;

    /**
     * @var boolean $enableRelativePlaylistDelivery
     */
    protected $enableRelativePlaylistDelivery = null;

    /**
     * @var string $streamingFormat
     */
    protected $streamingFormat = null;

    /**
     * @var boolean $prefetchEnabled
     */
    protected $prefetchEnabled = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\PrefetchSettings $prefetchSettings
     */
    protected $prefetchSettings = null;

    /**
     * @var boolean $enableForceCloseAdBreaks
     */
    protected $enableForceCloseAdBreaks = null;

    /**
     * @var boolean $enableShortSegmentDropping
     */
    protected $enableShortSegmentDropping = null;

    /**
     * @var string $customAssetKey
     */
    protected $customAssetKey = null;

    /**
     * @var int[] $daiEncodingProfileIds
     */
    protected $daiEncodingProfileIds = null;

    /**
     * @var int[] $segmentUrlAuthenticationKeyIds
     */
    protected $segmentUrlAuthenticationKeyIds = null;

    /**
     * @var string[] $adBreakMarkups
     */
    protected $adBreakMarkups = null;

    /**
     * @var boolean $adBreakMarkupTypesEnabled
     */
    protected $adBreakMarkupTypesEnabled = null;

    /**
     * @var string $adServingFormat
     */
    protected $adServingFormat = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $status
     * @param \Google\AdsApi\AdManager\v202202\DateTime $creationDateTime
     * @param \Google\AdsApi\AdManager\v202202\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202202\DateTime $startDateTime
     * @param string $startDateTimeType
     * @param \Google\AdsApi\AdManager\v202202\DateTime $endDateTime
     * @param boolean $unlimitedEndDateTime
     * @param int $totalEstimatedConcurrentUsers
     * @param string[] $contentUrls
     * @param string[] $adTags
     * @param string $assetKey
     * @param int $slateCreativeId
     * @param int $dvrWindowSeconds
     * @param boolean $enableDaiAuthenticationKeys
     * @param string $adBreakFillType
     * @param string $underfillAdBreakFillType
     * @param int $adHolidayDuration
     * @param boolean $enableMaxFillerDuration
     * @param int $maxFillerDuration
     * @param boolean $enableDurationlessAdBreaks
     * @param int $defaultAdBreakDuration
     * @param int[] $streamCreateDaiAuthenticationKeyIds
     * @param int[] $sourceContentConfigurationIds
     * @param \Google\AdsApi\AdManager\v202202\HlsSettings $hlsSettings
     * @param boolean $enableAllowlistedIps
     * @param string $dynamicAdInsertionType
     * @param boolean $enableRelativePlaylistDelivery
     * @param string $streamingFormat
     * @param boolean $prefetchEnabled
     * @param \Google\AdsApi\AdManager\v202202\PrefetchSettings $prefetchSettings
     * @param boolean $enableForceCloseAdBreaks
     * @param boolean $enableShortSegmentDropping
     * @param string $customAssetKey
     * @param int[] $daiEncodingProfileIds
     * @param int[] $segmentUrlAuthenticationKeyIds
     * @param string[] $adBreakMarkups
     * @param boolean $adBreakMarkupTypesEnabled
     * @param string $adServingFormat
     */
    public function __construct($id = null, $name = null, $status = null, $creationDateTime = null, $lastModifiedDateTime = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $unlimitedEndDateTime = null, $totalEstimatedConcurrentUsers = null, array $contentUrls = null, array $adTags = null, $assetKey = null, $slateCreativeId = null, $dvrWindowSeconds = null, $enableDaiAuthenticationKeys = null, $adBreakFillType = null, $underfillAdBreakFillType = null, $adHolidayDuration = null, $enableMaxFillerDuration = null, $maxFillerDuration = null, $enableDurationlessAdBreaks = null, $defaultAdBreakDuration = null, array $streamCreateDaiAuthenticationKeyIds = null, array $sourceContentConfigurationIds = null, $hlsSettings = null, $enableAllowlistedIps = null, $dynamicAdInsertionType = null, $enableRelativePlaylistDelivery = null, $streamingFormat = null, $prefetchEnabled = null, $prefetchSettings = null, $enableForceCloseAdBreaks = null, $enableShortSegmentDropping = null, $customAssetKey = null, array $daiEncodingProfileIds = null, array $segmentUrlAuthenticationKeyIds = null, array $adBreakMarkups = null, $adBreakMarkupTypesEnabled = null, $adServingFormat = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->creationDateTime = $creationDateTime;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->startDateTime = $startDateTime;
      $this->startDateTimeType = $startDateTimeType;
      $this->endDateTime = $endDateTime;
      $this->unlimitedEndDateTime = $unlimitedEndDateTime;
      $this->totalEstimatedConcurrentUsers = $totalEstimatedConcurrentUsers;
      $this->contentUrls = $contentUrls;
      $this->adTags = $adTags;
      $this->assetKey = $assetKey;
      $this->slateCreativeId = $slateCreativeId;
      $this->dvrWindowSeconds = $dvrWindowSeconds;
      $this->enableDaiAuthenticationKeys = $enableDaiAuthenticationKeys;
      $this->adBreakFillType = $adBreakFillType;
      $this->underfillAdBreakFillType = $underfillAdBreakFillType;
      $this->adHolidayDuration = $adHolidayDuration;
      $this->enableMaxFillerDuration = $enableMaxFillerDuration;
      $this->maxFillerDuration = $maxFillerDuration;
      $this->enableDurationlessAdBreaks = $enableDurationlessAdBreaks;
      $this->defaultAdBreakDuration = $defaultAdBreakDuration;
      $this->streamCreateDaiAuthenticationKeyIds = $streamCreateDaiAuthenticationKeyIds;
      $this->sourceContentConfigurationIds = $sourceContentConfigurationIds;
      $this->hlsSettings = $hlsSettings;
      $this->enableAllowlistedIps = $enableAllowlistedIps;
      $this->dynamicAdInsertionType = $dynamicAdInsertionType;
      $this->enableRelativePlaylistDelivery = $enableRelativePlaylistDelivery;
      $this->streamingFormat = $streamingFormat;
      $this->prefetchEnabled = $prefetchEnabled;
      $this->prefetchSettings = $prefetchSettings;
      $this->enableForceCloseAdBreaks = $enableForceCloseAdBreaks;
      $this->enableShortSegmentDropping = $enableShortSegmentDropping;
      $this->customAssetKey = $customAssetKey;
      $this->daiEncodingProfileIds = $daiEncodingProfileIds;
      $this->segmentUrlAuthenticationKeyIds = $segmentUrlAuthenticationKeyIds;
      $this->adBreakMarkups = $adBreakMarkups;
      $this->adBreakMarkupTypesEnabled = $adBreakMarkupTypesEnabled;
      $this->adServingFormat = $adServingFormat;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\DateTime
     */
    public function getCreationDateTime()
    {
      return $this->creationDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\DateTime $creationDateTime
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setCreationDateTime($creationDateTime)
    {
      $this->creationDateTime = $creationDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\DateTime $startDateTime
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDateTimeType()
    {
      return $this->startDateTimeType;
    }

    /**
     * @param string $startDateTimeType
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setStartDateTimeType($startDateTimeType)
    {
      $this->startDateTimeType = $startDateTimeType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\DateTime $endDateTime
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnlimitedEndDateTime()
    {
      return $this->unlimitedEndDateTime;
    }

    /**
     * @param boolean $unlimitedEndDateTime
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setUnlimitedEndDateTime($unlimitedEndDateTime)
    {
      $this->unlimitedEndDateTime = $unlimitedEndDateTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalEstimatedConcurrentUsers()
    {
      return $this->totalEstimatedConcurrentUsers;
    }

    /**
     * @param int $totalEstimatedConcurrentUsers
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setTotalEstimatedConcurrentUsers($totalEstimatedConcurrentUsers)
    {
      $this->totalEstimatedConcurrentUsers = (!is_null($totalEstimatedConcurrentUsers) && PHP_INT_SIZE === 4)
          ? floatval($totalEstimatedConcurrentUsers) : $totalEstimatedConcurrentUsers;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getContentUrls()
    {
      return $this->contentUrls;
    }

    /**
     * @param string[]|null $contentUrls
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setContentUrls(array $contentUrls = null)
    {
      $this->contentUrls = $contentUrls;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAdTags()
    {
      return $this->adTags;
    }

    /**
     * @param string[]|null $adTags
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setAdTags(array $adTags = null)
    {
      $this->adTags = $adTags;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssetKey()
    {
      return $this->assetKey;
    }

    /**
     * @param string $assetKey
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setAssetKey($assetKey)
    {
      $this->assetKey = $assetKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getSlateCreativeId()
    {
      return $this->slateCreativeId;
    }

    /**
     * @param int $slateCreativeId
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setSlateCreativeId($slateCreativeId)
    {
      $this->slateCreativeId = (!is_null($slateCreativeId) && PHP_INT_SIZE === 4)
          ? floatval($slateCreativeId) : $slateCreativeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDvrWindowSeconds()
    {
      return $this->dvrWindowSeconds;
    }

    /**
     * @param int $dvrWindowSeconds
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setDvrWindowSeconds($dvrWindowSeconds)
    {
      $this->dvrWindowSeconds = $dvrWindowSeconds;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableDaiAuthenticationKeys()
    {
      return $this->enableDaiAuthenticationKeys;
    }

    /**
     * @param boolean $enableDaiAuthenticationKeys
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setEnableDaiAuthenticationKeys($enableDaiAuthenticationKeys)
    {
      $this->enableDaiAuthenticationKeys = $enableDaiAuthenticationKeys;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdBreakFillType()
    {
      return $this->adBreakFillType;
    }

    /**
     * @param string $adBreakFillType
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setAdBreakFillType($adBreakFillType)
    {
      $this->adBreakFillType = $adBreakFillType;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnderfillAdBreakFillType()
    {
      return $this->underfillAdBreakFillType;
    }

    /**
     * @param string $underfillAdBreakFillType
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setUnderfillAdBreakFillType($underfillAdBreakFillType)
    {
      $this->underfillAdBreakFillType = $underfillAdBreakFillType;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdHolidayDuration()
    {
      return $this->adHolidayDuration;
    }

    /**
     * @param int $adHolidayDuration
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setAdHolidayDuration($adHolidayDuration)
    {
      $this->adHolidayDuration = (!is_null($adHolidayDuration) && PHP_INT_SIZE === 4)
          ? floatval($adHolidayDuration) : $adHolidayDuration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableMaxFillerDuration()
    {
      return $this->enableMaxFillerDuration;
    }

    /**
     * @param boolean $enableMaxFillerDuration
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setEnableMaxFillerDuration($enableMaxFillerDuration)
    {
      $this->enableMaxFillerDuration = $enableMaxFillerDuration;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxFillerDuration()
    {
      return $this->maxFillerDuration;
    }

    /**
     * @param int $maxFillerDuration
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setMaxFillerDuration($maxFillerDuration)
    {
      $this->maxFillerDuration = (!is_null($maxFillerDuration) && PHP_INT_SIZE === 4)
          ? floatval($maxFillerDuration) : $maxFillerDuration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableDurationlessAdBreaks()
    {
      return $this->enableDurationlessAdBreaks;
    }

    /**
     * @param boolean $enableDurationlessAdBreaks
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setEnableDurationlessAdBreaks($enableDurationlessAdBreaks)
    {
      $this->enableDurationlessAdBreaks = $enableDurationlessAdBreaks;
      return $this;
    }

    /**
     * @return int
     */
    public function getDefaultAdBreakDuration()
    {
      return $this->defaultAdBreakDuration;
    }

    /**
     * @param int $defaultAdBreakDuration
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setDefaultAdBreakDuration($defaultAdBreakDuration)
    {
      $this->defaultAdBreakDuration = (!is_null($defaultAdBreakDuration) && PHP_INT_SIZE === 4)
          ? floatval($defaultAdBreakDuration) : $defaultAdBreakDuration;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getStreamCreateDaiAuthenticationKeyIds()
    {
      return $this->streamCreateDaiAuthenticationKeyIds;
    }

    /**
     * @param int[]|null $streamCreateDaiAuthenticationKeyIds
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setStreamCreateDaiAuthenticationKeyIds(array $streamCreateDaiAuthenticationKeyIds = null)
    {
      $this->streamCreateDaiAuthenticationKeyIds = $streamCreateDaiAuthenticationKeyIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getSourceContentConfigurationIds()
    {
      return $this->sourceContentConfigurationIds;
    }

    /**
     * @param int[]|null $sourceContentConfigurationIds
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setSourceContentConfigurationIds(array $sourceContentConfigurationIds = null)
    {
      $this->sourceContentConfigurationIds = $sourceContentConfigurationIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\HlsSettings
     */
    public function getHlsSettings()
    {
      return $this->hlsSettings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\HlsSettings $hlsSettings
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setHlsSettings($hlsSettings)
    {
      $this->hlsSettings = $hlsSettings;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableAllowlistedIps()
    {
      return $this->enableAllowlistedIps;
    }

    /**
     * @param boolean $enableAllowlistedIps
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setEnableAllowlistedIps($enableAllowlistedIps)
    {
      $this->enableAllowlistedIps = $enableAllowlistedIps;
      return $this;
    }

    /**
     * @return string
     */
    public function getDynamicAdInsertionType()
    {
      return $this->dynamicAdInsertionType;
    }

    /**
     * @param string $dynamicAdInsertionType
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setDynamicAdInsertionType($dynamicAdInsertionType)
    {
      $this->dynamicAdInsertionType = $dynamicAdInsertionType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableRelativePlaylistDelivery()
    {
      return $this->enableRelativePlaylistDelivery;
    }

    /**
     * @param boolean $enableRelativePlaylistDelivery
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setEnableRelativePlaylistDelivery($enableRelativePlaylistDelivery)
    {
      $this->enableRelativePlaylistDelivery = $enableRelativePlaylistDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreamingFormat()
    {
      return $this->streamingFormat;
    }

    /**
     * @param string $streamingFormat
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setStreamingFormat($streamingFormat)
    {
      $this->streamingFormat = $streamingFormat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrefetchEnabled()
    {
      return $this->prefetchEnabled;
    }

    /**
     * @param boolean $prefetchEnabled
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setPrefetchEnabled($prefetchEnabled)
    {
      $this->prefetchEnabled = $prefetchEnabled;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\PrefetchSettings
     */
    public function getPrefetchSettings()
    {
      return $this->prefetchSettings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\PrefetchSettings $prefetchSettings
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setPrefetchSettings($prefetchSettings)
    {
      $this->prefetchSettings = $prefetchSettings;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableForceCloseAdBreaks()
    {
      return $this->enableForceCloseAdBreaks;
    }

    /**
     * @param boolean $enableForceCloseAdBreaks
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setEnableForceCloseAdBreaks($enableForceCloseAdBreaks)
    {
      $this->enableForceCloseAdBreaks = $enableForceCloseAdBreaks;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableShortSegmentDropping()
    {
      return $this->enableShortSegmentDropping;
    }

    /**
     * @param boolean $enableShortSegmentDropping
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setEnableShortSegmentDropping($enableShortSegmentDropping)
    {
      $this->enableShortSegmentDropping = $enableShortSegmentDropping;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomAssetKey()
    {
      return $this->customAssetKey;
    }

    /**
     * @param string $customAssetKey
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setCustomAssetKey($customAssetKey)
    {
      $this->customAssetKey = $customAssetKey;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getDaiEncodingProfileIds()
    {
      return $this->daiEncodingProfileIds;
    }

    /**
     * @param int[]|null $daiEncodingProfileIds
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setDaiEncodingProfileIds(array $daiEncodingProfileIds = null)
    {
      $this->daiEncodingProfileIds = $daiEncodingProfileIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getSegmentUrlAuthenticationKeyIds()
    {
      return $this->segmentUrlAuthenticationKeyIds;
    }

    /**
     * @param int[]|null $segmentUrlAuthenticationKeyIds
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setSegmentUrlAuthenticationKeyIds(array $segmentUrlAuthenticationKeyIds = null)
    {
      $this->segmentUrlAuthenticationKeyIds = $segmentUrlAuthenticationKeyIds;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAdBreakMarkups()
    {
      return $this->adBreakMarkups;
    }

    /**
     * @param string[]|null $adBreakMarkups
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setAdBreakMarkups(array $adBreakMarkups = null)
    {
      $this->adBreakMarkups = $adBreakMarkups;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdBreakMarkupTypesEnabled()
    {
      return $this->adBreakMarkupTypesEnabled;
    }

    /**
     * @param boolean $adBreakMarkupTypesEnabled
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setAdBreakMarkupTypesEnabled($adBreakMarkupTypesEnabled)
    {
      $this->adBreakMarkupTypesEnabled = $adBreakMarkupTypesEnabled;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdServingFormat()
    {
      return $this->adServingFormat;
    }

    /**
     * @param string $adServingFormat
     * @return \Google\AdsApi\AdManager\v202202\LiveStreamEvent
     */
    public function setAdServingFormat($adServingFormat)
    {
      $this->adServingFormat = $adServingFormat;
      return $this;
    }

}
