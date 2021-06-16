<?php

namespace Google\AdsApi\AdManager\v202102;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ImageOverlayCreative extends \Google\AdsApi\AdManager\v202102\BaseImageCreative
{

    /**
     * @var int[] $companionCreativeIds
     */
    protected $companionCreativeIds = null;

    /**
     * @var \Google\AdsApi\AdManager\v202102\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     */
    protected $trackingUrls = null;

    /**
     * @var string $lockedOrientation
     */
    protected $lockedOrientation = null;

    /**
     * @var string $customParameters
     */
    protected $customParameters = null;

    /**
     * @var int $duration
     */
    protected $duration = null;

    /**
     * @var string $vastPreviewUrl
     */
    protected $vastPreviewUrl = null;

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
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param boolean $overrideSize
     * @param \Google\AdsApi\AdManager\v202102\CreativeAsset $primaryImageAsset
     * @param int[] $companionCreativeIds
     * @param \Google\AdsApi\AdManager\v202102\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @param string $lockedOrientation
     * @param string $customParameters
     * @param int $duration
     * @param string $vastPreviewUrl
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $destinationUrl = null, $destinationUrlType = null, $overrideSize = null, $primaryImageAsset = null, array $companionCreativeIds = null, array $trackingUrls = null, $lockedOrientation = null, $customParameters = null, $duration = null, $vastPreviewUrl = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration, $destinationUrl, $destinationUrlType, $overrideSize, $primaryImageAsset);
      $this->companionCreativeIds = $companionCreativeIds;
      $this->trackingUrls = $trackingUrls;
      $this->lockedOrientation = $lockedOrientation;
      $this->customParameters = $customParameters;
      $this->duration = $duration;
      $this->vastPreviewUrl = $vastPreviewUrl;
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
     * @return \Google\AdsApi\AdManager\v202102\ImageOverlayCreative
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
     * @return \Google\AdsApi\AdManager\v202102\ImageOverlayCreative
     */
    public function setTrackingUrls(array $trackingUrls = null)
    {
      $this->trackingUrls = $trackingUrls;
      return $this;
    }

    /**
     * @return string
     */
    public function getLockedOrientation()
    {
      return $this->lockedOrientation;
    }

    /**
     * @param string $lockedOrientation
     * @return \Google\AdsApi\AdManager\v202102\ImageOverlayCreative
     */
    public function setLockedOrientation($lockedOrientation)
    {
      $this->lockedOrientation = $lockedOrientation;
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
     * @return \Google\AdsApi\AdManager\v202102\ImageOverlayCreative
     */
    public function setCustomParameters($customParameters)
    {
      $this->customParameters = $customParameters;
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
     * @return \Google\AdsApi\AdManager\v202102\ImageOverlayCreative
     */
    public function setDuration($duration)
    {
      $this->duration = $duration;
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
     * @return \Google\AdsApi\AdManager\v202102\ImageOverlayCreative
     */
    public function setVastPreviewUrl($vastPreviewUrl)
    {
      $this->vastPreviewUrl = $vastPreviewUrl;
      return $this;
    }

}
