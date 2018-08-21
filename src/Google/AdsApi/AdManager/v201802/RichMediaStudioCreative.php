<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RichMediaStudioCreative extends \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
{

    /**
     * @var string $lockedOrientation
     */
    protected $lockedOrientation = null;

    /**
     * @var boolean $isInterstitial
     */
    protected $isInterstitial = null;

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
     * @param int $studioCreativeId
     * @param string $creativeFormat
     * @param string $artworkType
     * @param int $totalFileSize
     * @param string[] $adTagKeys
     * @param string[] $customKeyValues
     * @param string $surveyUrl
     * @param string $allImpressionsUrl
     * @param string $richMediaImpressionsUrl
     * @param string $backupImageImpressionsUrl
     * @param string $overrideCss
     * @param string $requiredFlashPluginVersion
     * @param int $duration
     * @param string $billingAttribute
     * @param \Google\AdsApi\AdManager\v201802\RichMediaStudioChildAssetProperty[] $richMediaStudioChildAssetProperties
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param string $lockedOrientation
     * @param boolean $isInterstitial
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $studioCreativeId = null, $creativeFormat = null, $artworkType = null, $totalFileSize = null, array $adTagKeys = null, array $customKeyValues = null, $surveyUrl = null, $allImpressionsUrl = null, $richMediaImpressionsUrl = null, $backupImageImpressionsUrl = null, $overrideCss = null, $requiredFlashPluginVersion = null, $duration = null, $billingAttribute = null, array $richMediaStudioChildAssetProperties = null, $sslScanResult = null, $sslManualOverride = null, $lockedOrientation = null, $isInterstitial = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $studioCreativeId, $creativeFormat, $artworkType, $totalFileSize, $adTagKeys, $customKeyValues, $surveyUrl, $allImpressionsUrl, $richMediaImpressionsUrl, $backupImageImpressionsUrl, $overrideCss, $requiredFlashPluginVersion, $duration, $billingAttribute, $richMediaStudioChildAssetProperties, $sslScanResult, $sslManualOverride);
      $this->lockedOrientation = $lockedOrientation;
      $this->isInterstitial = $isInterstitial;
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
     * @return \Google\AdsApi\AdManager\v201802\RichMediaStudioCreative
     */
    public function setLockedOrientation($lockedOrientation)
    {
      $this->lockedOrientation = $lockedOrientation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInterstitial()
    {
      return $this->isInterstitial;
    }

    /**
     * @param boolean $isInterstitial
     * @return \Google\AdsApi\AdManager\v201802\RichMediaStudioCreative
     */
    public function setIsInterstitial($isInterstitial)
    {
      $this->isInterstitial = $isInterstitial;
      return $this;
    }

}
