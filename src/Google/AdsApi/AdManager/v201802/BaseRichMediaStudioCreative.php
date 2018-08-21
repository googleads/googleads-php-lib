<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BaseRichMediaStudioCreative extends \Google\AdsApi\AdManager\v201802\Creative
{

    /**
     * @var int $studioCreativeId
     */
    protected $studioCreativeId = null;

    /**
     * @var string $creativeFormat
     */
    protected $creativeFormat = null;

    /**
     * @var string $artworkType
     */
    protected $artworkType = null;

    /**
     * @var int $totalFileSize
     */
    protected $totalFileSize = null;

    /**
     * @var string[] $adTagKeys
     */
    protected $adTagKeys = null;

    /**
     * @var string[] $customKeyValues
     */
    protected $customKeyValues = null;

    /**
     * @var string $surveyUrl
     */
    protected $surveyUrl = null;

    /**
     * @var string $allImpressionsUrl
     */
    protected $allImpressionsUrl = null;

    /**
     * @var string $richMediaImpressionsUrl
     */
    protected $richMediaImpressionsUrl = null;

    /**
     * @var string $backupImageImpressionsUrl
     */
    protected $backupImageImpressionsUrl = null;

    /**
     * @var string $overrideCss
     */
    protected $overrideCss = null;

    /**
     * @var string $requiredFlashPluginVersion
     */
    protected $requiredFlashPluginVersion = null;

    /**
     * @var int $duration
     */
    protected $duration = null;

    /**
     * @var string $billingAttribute
     */
    protected $billingAttribute = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\RichMediaStudioChildAssetProperty[] $richMediaStudioChildAssetProperties
     */
    protected $richMediaStudioChildAssetProperties = null;

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
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $studioCreativeId = null, $creativeFormat = null, $artworkType = null, $totalFileSize = null, array $adTagKeys = null, array $customKeyValues = null, $surveyUrl = null, $allImpressionsUrl = null, $richMediaImpressionsUrl = null, $backupImageImpressionsUrl = null, $overrideCss = null, $requiredFlashPluginVersion = null, $duration = null, $billingAttribute = null, array $richMediaStudioChildAssetProperties = null, $sslScanResult = null, $sslManualOverride = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues);
      $this->studioCreativeId = $studioCreativeId;
      $this->creativeFormat = $creativeFormat;
      $this->artworkType = $artworkType;
      $this->totalFileSize = $totalFileSize;
      $this->adTagKeys = $adTagKeys;
      $this->customKeyValues = $customKeyValues;
      $this->surveyUrl = $surveyUrl;
      $this->allImpressionsUrl = $allImpressionsUrl;
      $this->richMediaImpressionsUrl = $richMediaImpressionsUrl;
      $this->backupImageImpressionsUrl = $backupImageImpressionsUrl;
      $this->overrideCss = $overrideCss;
      $this->requiredFlashPluginVersion = $requiredFlashPluginVersion;
      $this->duration = $duration;
      $this->billingAttribute = $billingAttribute;
      $this->richMediaStudioChildAssetProperties = $richMediaStudioChildAssetProperties;
      $this->sslScanResult = $sslScanResult;
      $this->sslManualOverride = $sslManualOverride;
    }

    /**
     * @return int
     */
    public function getStudioCreativeId()
    {
      return $this->studioCreativeId;
    }

    /**
     * @param int $studioCreativeId
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setStudioCreativeId($studioCreativeId)
    {
      $this->studioCreativeId = (!is_null($studioCreativeId) && PHP_INT_SIZE === 4)
          ? floatval($studioCreativeId) : $studioCreativeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreativeFormat()
    {
      return $this->creativeFormat;
    }

    /**
     * @param string $creativeFormat
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setCreativeFormat($creativeFormat)
    {
      $this->creativeFormat = $creativeFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getArtworkType()
    {
      return $this->artworkType;
    }

    /**
     * @param string $artworkType
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setArtworkType($artworkType)
    {
      $this->artworkType = $artworkType;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalFileSize()
    {
      return $this->totalFileSize;
    }

    /**
     * @param int $totalFileSize
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setTotalFileSize($totalFileSize)
    {
      $this->totalFileSize = (!is_null($totalFileSize) && PHP_INT_SIZE === 4)
          ? floatval($totalFileSize) : $totalFileSize;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAdTagKeys()
    {
      return $this->adTagKeys;
    }

    /**
     * @param string[] $adTagKeys
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setAdTagKeys(array $adTagKeys)
    {
      $this->adTagKeys = $adTagKeys;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getCustomKeyValues()
    {
      return $this->customKeyValues;
    }

    /**
     * @param string[] $customKeyValues
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setCustomKeyValues(array $customKeyValues)
    {
      $this->customKeyValues = $customKeyValues;
      return $this;
    }

    /**
     * @return string
     */
    public function getSurveyUrl()
    {
      return $this->surveyUrl;
    }

    /**
     * @param string $surveyUrl
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setSurveyUrl($surveyUrl)
    {
      $this->surveyUrl = $surveyUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllImpressionsUrl()
    {
      return $this->allImpressionsUrl;
    }

    /**
     * @param string $allImpressionsUrl
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setAllImpressionsUrl($allImpressionsUrl)
    {
      $this->allImpressionsUrl = $allImpressionsUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getRichMediaImpressionsUrl()
    {
      return $this->richMediaImpressionsUrl;
    }

    /**
     * @param string $richMediaImpressionsUrl
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setRichMediaImpressionsUrl($richMediaImpressionsUrl)
    {
      $this->richMediaImpressionsUrl = $richMediaImpressionsUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getBackupImageImpressionsUrl()
    {
      return $this->backupImageImpressionsUrl;
    }

    /**
     * @param string $backupImageImpressionsUrl
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setBackupImageImpressionsUrl($backupImageImpressionsUrl)
    {
      $this->backupImageImpressionsUrl = $backupImageImpressionsUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getOverrideCss()
    {
      return $this->overrideCss;
    }

    /**
     * @param string $overrideCss
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setOverrideCss($overrideCss)
    {
      $this->overrideCss = $overrideCss;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequiredFlashPluginVersion()
    {
      return $this->requiredFlashPluginVersion;
    }

    /**
     * @param string $requiredFlashPluginVersion
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setRequiredFlashPluginVersion($requiredFlashPluginVersion)
    {
      $this->requiredFlashPluginVersion = $requiredFlashPluginVersion;
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
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setDuration($duration)
    {
      $this->duration = $duration;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingAttribute()
    {
      return $this->billingAttribute;
    }

    /**
     * @param string $billingAttribute
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setBillingAttribute($billingAttribute)
    {
      $this->billingAttribute = $billingAttribute;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\RichMediaStudioChildAssetProperty[]
     */
    public function getRichMediaStudioChildAssetProperties()
    {
      return $this->richMediaStudioChildAssetProperties;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\RichMediaStudioChildAssetProperty[] $richMediaStudioChildAssetProperties
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setRichMediaStudioChildAssetProperties(array $richMediaStudioChildAssetProperties)
    {
      $this->richMediaStudioChildAssetProperties = $richMediaStudioChildAssetProperties;
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
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
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
     * @return \Google\AdsApi\AdManager\v201802\BaseRichMediaStudioCreative
     */
    public function setSslManualOverride($sslManualOverride)
    {
      $this->sslManualOverride = $sslManualOverride;
      return $this;
    }

}
