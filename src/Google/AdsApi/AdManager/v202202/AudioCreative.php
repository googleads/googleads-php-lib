<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AudioCreative extends \Google\AdsApi\AdManager\v202202\BaseAudioCreative
{

    /**
     * @var string $audioSourceUrl
     */
    protected $audioSourceUrl = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202202\Size $size
     * @param string $previewUrl
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v202202\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202202\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202202\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202202\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param int $duration
     * @param boolean $allowDurationOverride
     * @param \Google\AdsApi\AdManager\v202202\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @param int[] $companionCreativeIds
     * @param string $customParameters
     * @param string $adId
     * @param string $adIdType
     * @param string $skippableAdType
     * @param string $vastPreviewUrl
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param string $audioSourceUrl
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $destinationUrl = null, $destinationUrlType = null, $duration = null, $allowDurationOverride = null, array $trackingUrls = null, array $companionCreativeIds = null, $customParameters = null, $adId = null, $adIdType = null, $skippableAdType = null, $vastPreviewUrl = null, $sslScanResult = null, $sslManualOverride = null, $audioSourceUrl = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration, $destinationUrl, $destinationUrlType, $duration, $allowDurationOverride, $trackingUrls, $companionCreativeIds, $customParameters, $adId, $adIdType, $skippableAdType, $vastPreviewUrl, $sslScanResult, $sslManualOverride);
      $this->audioSourceUrl = $audioSourceUrl;
    }

    /**
     * @return string
     */
    public function getAudioSourceUrl()
    {
      return $this->audioSourceUrl;
    }

    /**
     * @param string $audioSourceUrl
     * @return \Google\AdsApi\AdManager\v202202\AudioCreative
     */
    public function setAudioSourceUrl($audioSourceUrl)
    {
      $this->audioSourceUrl = $audioSourceUrl;
      return $this;
    }

}
