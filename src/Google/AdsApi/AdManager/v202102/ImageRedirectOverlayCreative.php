<?php

namespace Google\AdsApi\AdManager\v202102;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ImageRedirectOverlayCreative extends \Google\AdsApi\AdManager\v202102\BaseImageRedirectCreative
{

    /**
     * @var \Google\AdsApi\AdManager\v202102\Size $assetSize
     */
    protected $assetSize = null;

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
     * @var string $customParameters
     */
    protected $customParameters = null;

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
     * @param string $imageUrl
     * @param \Google\AdsApi\AdManager\v202102\Size $assetSize
     * @param int $duration
     * @param int[] $companionCreativeIds
     * @param \Google\AdsApi\AdManager\v202102\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @param string $customParameters
     * @param string $vastPreviewUrl
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $destinationUrl = null, $destinationUrlType = null, $imageUrl = null, $assetSize = null, $duration = null, array $companionCreativeIds = null, array $trackingUrls = null, $customParameters = null, $vastPreviewUrl = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration, $destinationUrl, $destinationUrlType, $imageUrl);
      $this->assetSize = $assetSize;
      $this->duration = $duration;
      $this->companionCreativeIds = $companionCreativeIds;
      $this->trackingUrls = $trackingUrls;
      $this->customParameters = $customParameters;
      $this->vastPreviewUrl = $vastPreviewUrl;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202102\Size
     */
    public function getAssetSize()
    {
      return $this->assetSize;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202102\Size $assetSize
     * @return \Google\AdsApi\AdManager\v202102\ImageRedirectOverlayCreative
     */
    public function setAssetSize($assetSize)
    {
      $this->assetSize = $assetSize;
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
     * @return \Google\AdsApi\AdManager\v202102\ImageRedirectOverlayCreative
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
     * @return \Google\AdsApi\AdManager\v202102\ImageRedirectOverlayCreative
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
     * @return \Google\AdsApi\AdManager\v202102\ImageRedirectOverlayCreative
     */
    public function setTrackingUrls(array $trackingUrls = null)
    {
      $this->trackingUrls = $trackingUrls;
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
     * @return \Google\AdsApi\AdManager\v202102\ImageRedirectOverlayCreative
     */
    public function setCustomParameters($customParameters)
    {
      $this->customParameters = $customParameters;
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
     * @return \Google\AdsApi\AdManager\v202102\ImageRedirectOverlayCreative
     */
    public function setVastPreviewUrl($vastPreviewUrl)
    {
      $this->vastPreviewUrl = $vastPreviewUrl;
      return $this;
    }

}
