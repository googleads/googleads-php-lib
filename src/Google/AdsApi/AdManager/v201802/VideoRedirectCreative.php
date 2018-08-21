<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VideoRedirectCreative extends \Google\AdsApi\AdManager\v201802\BaseVideoCreative
{

    /**
     * @var \Google\AdsApi\AdManager\v201802\VideoRedirectAsset[] $videoAssets
     */
    protected $videoAssets = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\VideoRedirectAsset $mezzanineFile
     */
    protected $mezzanineFile = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201802\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param \Google\AdsApi\AdManager\v201802\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201802\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201802\BaseCustomFieldValue[] $customFieldValues
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param int $duration
     * @param boolean $allowDurationOverride
     * @param \Google\AdsApi\AdManager\v201802\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @param int[] $companionCreativeIds
     * @param string $customParameters
     * @param string $skippableAdType
     * @param string $vastPreviewUrl
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param \Google\AdsApi\AdManager\v201802\VideoRedirectAsset[] $videoAssets
     * @param \Google\AdsApi\AdManager\v201802\VideoRedirectAsset $mezzanineFile
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, $duration = null, $allowDurationOverride = null, array $trackingUrls = null, array $companionCreativeIds = null, $customParameters = null, $skippableAdType = null, $vastPreviewUrl = null, $sslScanResult = null, $sslManualOverride = null, array $videoAssets = null, $mezzanineFile = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType, $duration, $allowDurationOverride, $trackingUrls, $companionCreativeIds, $customParameters, $skippableAdType, $vastPreviewUrl, $sslScanResult, $sslManualOverride);
      $this->videoAssets = $videoAssets;
      $this->mezzanineFile = $mezzanineFile;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\VideoRedirectAsset[]
     */
    public function getVideoAssets()
    {
      return $this->videoAssets;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\VideoRedirectAsset[] $videoAssets
     * @return \Google\AdsApi\AdManager\v201802\VideoRedirectCreative
     */
    public function setVideoAssets(array $videoAssets)
    {
      $this->videoAssets = $videoAssets;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\VideoRedirectAsset
     */
    public function getMezzanineFile()
    {
      return $this->mezzanineFile;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\VideoRedirectAsset $mezzanineFile
     * @return \Google\AdsApi\AdManager\v201802\VideoRedirectCreative
     */
    public function setMezzanineFile($mezzanineFile)
    {
      $this->mezzanineFile = $mezzanineFile;
      return $this;
    }

}
