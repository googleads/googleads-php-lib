<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FlashRedirectCreative extends \Google\AdsApi\Dfp\v201711\BaseFlashRedirectCreative
{

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
     * @param string $flashUrl
     * @param string $fallbackUrl
     * @param string $fallbackPreviewUrl
     * @param string $sslScanResult
     * @param string $sslManualOverride
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, $flashUrl = null, $fallbackUrl = null, $fallbackPreviewUrl = null, $sslScanResult = null, $sslManualOverride = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType, $flashUrl, $fallbackUrl, $fallbackPreviewUrl, $sslScanResult, $sslManualOverride);
    }

}
