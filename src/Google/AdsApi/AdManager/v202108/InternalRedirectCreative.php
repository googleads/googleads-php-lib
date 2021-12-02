<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class InternalRedirectCreative extends \Google\AdsApi\AdManager\v202108\Creative
{

    /**
     * @var string $lockedOrientation
     */
    protected $lockedOrientation = null;

    /**
     * @var \Google\AdsApi\AdManager\v202108\Size $assetSize
     */
    protected $assetSize = null;

    /**
     * @var string $internalRedirectUrl
     */
    protected $internalRedirectUrl = null;

    /**
     * @var boolean $overrideSize
     */
    protected $overrideSize = null;

    /**
     * @var boolean $isInterstitial
     */
    protected $isInterstitial = null;

    /**
     * @var string $sslScanResult
     */
    protected $sslScanResult = null;

    /**
     * @var string $sslManualOverride
     */
    protected $sslManualOverride = null;

    /**
     * @var string[] $thirdPartyImpressionTrackingUrls
     */
    protected $thirdPartyImpressionTrackingUrls = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202108\Size $size
     * @param string $previewUrl
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v202108\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202108\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202108\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202108\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     * @param string $lockedOrientation
     * @param \Google\AdsApi\AdManager\v202108\Size $assetSize
     * @param string $internalRedirectUrl
     * @param boolean $overrideSize
     * @param boolean $isInterstitial
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param string[] $thirdPartyImpressionTrackingUrls
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $lockedOrientation = null, $assetSize = null, $internalRedirectUrl = null, $overrideSize = null, $isInterstitial = null, $sslScanResult = null, $sslManualOverride = null, array $thirdPartyImpressionTrackingUrls = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration);
      $this->lockedOrientation = $lockedOrientation;
      $this->assetSize = $assetSize;
      $this->internalRedirectUrl = $internalRedirectUrl;
      $this->overrideSize = $overrideSize;
      $this->isInterstitial = $isInterstitial;
      $this->sslScanResult = $sslScanResult;
      $this->sslManualOverride = $sslManualOverride;
      $this->thirdPartyImpressionTrackingUrls = $thirdPartyImpressionTrackingUrls;
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
     * @return \Google\AdsApi\AdManager\v202108\InternalRedirectCreative
     */
    public function setLockedOrientation($lockedOrientation)
    {
      $this->lockedOrientation = $lockedOrientation;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202108\Size
     */
    public function getAssetSize()
    {
      return $this->assetSize;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202108\Size $assetSize
     * @return \Google\AdsApi\AdManager\v202108\InternalRedirectCreative
     */
    public function setAssetSize($assetSize)
    {
      $this->assetSize = $assetSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalRedirectUrl()
    {
      return $this->internalRedirectUrl;
    }

    /**
     * @param string $internalRedirectUrl
     * @return \Google\AdsApi\AdManager\v202108\InternalRedirectCreative
     */
    public function setInternalRedirectUrl($internalRedirectUrl)
    {
      $this->internalRedirectUrl = $internalRedirectUrl;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideSize()
    {
      return $this->overrideSize;
    }

    /**
     * @param boolean $overrideSize
     * @return \Google\AdsApi\AdManager\v202108\InternalRedirectCreative
     */
    public function setOverrideSize($overrideSize)
    {
      $this->overrideSize = $overrideSize;
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
     * @return \Google\AdsApi\AdManager\v202108\InternalRedirectCreative
     */
    public function setIsInterstitial($isInterstitial)
    {
      $this->isInterstitial = $isInterstitial;
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
     * @return \Google\AdsApi\AdManager\v202108\InternalRedirectCreative
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
     * @return \Google\AdsApi\AdManager\v202108\InternalRedirectCreative
     */
    public function setSslManualOverride($sslManualOverride)
    {
      $this->sslManualOverride = $sslManualOverride;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getThirdPartyImpressionTrackingUrls()
    {
      return $this->thirdPartyImpressionTrackingUrls;
    }

    /**
     * @param string[]|null $thirdPartyImpressionTrackingUrls
     * @return \Google\AdsApi\AdManager\v202108\InternalRedirectCreative
     */
    public function setThirdPartyImpressionTrackingUrls(array $thirdPartyImpressionTrackingUrls = null)
    {
      $this->thirdPartyImpressionTrackingUrls = $thirdPartyImpressionTrackingUrls;
      return $this;
    }

}
