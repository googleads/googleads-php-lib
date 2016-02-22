<?php

namespace Google\AdsApi\Dfp\v201511;

class SetTopBoxCreative extends \Google\AdsApi\Dfp\v201511\BaseVideoCreative
{

    /**
     * @var string $externalAssetId
     */
    protected $externalAssetId = null;

    /**
     * @var string $providerId
     */
    protected $providerId = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\Dfp\v201511\Size $size
     * @param string $previewUrl
     * @param string $policyViolations
     * @param \Google\AdsApi\Dfp\v201511\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201511\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201511\BaseCustomFieldValue[] $customFieldValues
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param int $duration
     * @param boolean $allowDurationOverride
     * @param \Google\AdsApi\Dfp\v201511\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @param long[] $companionCreativeIds
     * @param string $customParameters
     * @param string $vastPreviewUrl
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param string $externalAssetId
     * @param string $providerId
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, $duration = null, $allowDurationOverride = null, array $trackingUrls = null, array $companionCreativeIds = null, $customParameters = null, $vastPreviewUrl = null, $sslScanResult = null, $sslManualOverride = null, $externalAssetId = null, $providerId = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType, $duration, $allowDurationOverride, $trackingUrls, $companionCreativeIds, $customParameters, $vastPreviewUrl, $sslScanResult, $sslManualOverride);
      $this->externalAssetId = $externalAssetId;
      $this->providerId = $providerId;
    }

    /**
     * @return string
     */
    public function getExternalAssetId()
    {
      return $this->externalAssetId;
    }

    /**
     * @param string $externalAssetId
     * @return \Google\AdsApi\Dfp\v201511\SetTopBoxCreative
     */
    public function setExternalAssetId($externalAssetId)
    {
      $this->externalAssetId = $externalAssetId;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderId()
    {
      return $this->providerId;
    }

    /**
     * @param string $providerId
     * @return \Google\AdsApi\Dfp\v201511\SetTopBoxCreative
     */
    public function setProviderId($providerId)
    {
      $this->providerId = $providerId;
      return $this;
    }

}
