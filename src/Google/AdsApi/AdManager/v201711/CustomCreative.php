<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomCreative extends \Google\AdsApi\AdManager\v201711\HasDestinationUrlCreative
{

    /**
     * @var string $htmlSnippet
     */
    protected $htmlSnippet = null;

    /**
     * @var \Google\AdsApi\AdManager\v201711\CustomCreativeAsset[] $customCreativeAssets
     */
    protected $customCreativeAssets = null;

    /**
     * @var boolean $isInterstitial
     */
    protected $isInterstitial = null;

    /**
     * @var string $lockedOrientation
     */
    protected $lockedOrientation = null;

    /**
     * @var string $sslScanResult
     */
    protected $sslScanResult = null;

    /**
     * @var string $sslManualOverride
     */
    protected $sslManualOverride = null;

    /**
     * @var boolean $isSafeFrameCompatible
     */
    protected $isSafeFrameCompatible = null;

    /**
     * @var string[] $thirdPartyImpressionTrackingUrls
     */
    protected $thirdPartyImpressionTrackingUrls = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201711\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param \Google\AdsApi\AdManager\v201711\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201711\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201711\BaseCustomFieldValue[] $customFieldValues
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param string $htmlSnippet
     * @param \Google\AdsApi\AdManager\v201711\CustomCreativeAsset[] $customCreativeAssets
     * @param boolean $isInterstitial
     * @param string $lockedOrientation
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param boolean $isSafeFrameCompatible
     * @param string[] $thirdPartyImpressionTrackingUrls
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, $htmlSnippet = null, array $customCreativeAssets = null, $isInterstitial = null, $lockedOrientation = null, $sslScanResult = null, $sslManualOverride = null, $isSafeFrameCompatible = null, array $thirdPartyImpressionTrackingUrls = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType);
      $this->htmlSnippet = $htmlSnippet;
      $this->customCreativeAssets = $customCreativeAssets;
      $this->isInterstitial = $isInterstitial;
      $this->lockedOrientation = $lockedOrientation;
      $this->sslScanResult = $sslScanResult;
      $this->sslManualOverride = $sslManualOverride;
      $this->isSafeFrameCompatible = $isSafeFrameCompatible;
      $this->thirdPartyImpressionTrackingUrls = $thirdPartyImpressionTrackingUrls;
    }

    /**
     * @return string
     */
    public function getHtmlSnippet()
    {
      return $this->htmlSnippet;
    }

    /**
     * @param string $htmlSnippet
     * @return \Google\AdsApi\AdManager\v201711\CustomCreative
     */
    public function setHtmlSnippet($htmlSnippet)
    {
      $this->htmlSnippet = $htmlSnippet;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201711\CustomCreativeAsset[]
     */
    public function getCustomCreativeAssets()
    {
      return $this->customCreativeAssets;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201711\CustomCreativeAsset[] $customCreativeAssets
     * @return \Google\AdsApi\AdManager\v201711\CustomCreative
     */
    public function setCustomCreativeAssets(array $customCreativeAssets)
    {
      $this->customCreativeAssets = $customCreativeAssets;
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
     * @return \Google\AdsApi\AdManager\v201711\CustomCreative
     */
    public function setIsInterstitial($isInterstitial)
    {
      $this->isInterstitial = $isInterstitial;
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
     * @return \Google\AdsApi\AdManager\v201711\CustomCreative
     */
    public function setLockedOrientation($lockedOrientation)
    {
      $this->lockedOrientation = $lockedOrientation;
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
     * @return \Google\AdsApi\AdManager\v201711\CustomCreative
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
     * @return \Google\AdsApi\AdManager\v201711\CustomCreative
     */
    public function setSslManualOverride($sslManualOverride)
    {
      $this->sslManualOverride = $sslManualOverride;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSafeFrameCompatible()
    {
      return $this->isSafeFrameCompatible;
    }

    /**
     * @param boolean $isSafeFrameCompatible
     * @return \Google\AdsApi\AdManager\v201711\CustomCreative
     */
    public function setIsSafeFrameCompatible($isSafeFrameCompatible)
    {
      $this->isSafeFrameCompatible = $isSafeFrameCompatible;
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
     * @param string[] $thirdPartyImpressionTrackingUrls
     * @return \Google\AdsApi\AdManager\v201711\CustomCreative
     */
    public function setThirdPartyImpressionTrackingUrls(array $thirdPartyImpressionTrackingUrls)
    {
      $this->thirdPartyImpressionTrackingUrls = $thirdPartyImpressionTrackingUrls;
      return $this;
    }

}
