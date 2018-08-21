<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Html5Creative extends \Google\AdsApi\AdManager\v201808\Creative
{

    /**
     * @var boolean $overrideSize
     */
    protected $overrideSize = null;

    /**
     * @var string[] $thirdPartyImpressionTrackingUrls
     */
    protected $thirdPartyImpressionTrackingUrls = null;

    /**
     * @var string $thirdPartyClickTrackingUrl
     */
    protected $thirdPartyClickTrackingUrl = null;

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
     * @var \Google\AdsApi\AdManager\v201808\CreativeAsset $html5Asset
     */
    protected $html5Asset = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201808\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param \Google\AdsApi\AdManager\v201808\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201808\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201808\BaseCustomFieldValue[] $customFieldValues
     * @param boolean $overrideSize
     * @param string[] $thirdPartyImpressionTrackingUrls
     * @param string $thirdPartyClickTrackingUrl
     * @param string $lockedOrientation
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param boolean $isSafeFrameCompatible
     * @param \Google\AdsApi\AdManager\v201808\CreativeAsset $html5Asset
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $overrideSize = null, array $thirdPartyImpressionTrackingUrls = null, $thirdPartyClickTrackingUrl = null, $lockedOrientation = null, $sslScanResult = null, $sslManualOverride = null, $isSafeFrameCompatible = null, $html5Asset = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues);
      $this->overrideSize = $overrideSize;
      $this->thirdPartyImpressionTrackingUrls = $thirdPartyImpressionTrackingUrls;
      $this->thirdPartyClickTrackingUrl = $thirdPartyClickTrackingUrl;
      $this->lockedOrientation = $lockedOrientation;
      $this->sslScanResult = $sslScanResult;
      $this->sslManualOverride = $sslManualOverride;
      $this->isSafeFrameCompatible = $isSafeFrameCompatible;
      $this->html5Asset = $html5Asset;
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
     * @return \Google\AdsApi\AdManager\v201808\Html5Creative
     */
    public function setOverrideSize($overrideSize)
    {
      $this->overrideSize = $overrideSize;
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
     * @return \Google\AdsApi\AdManager\v201808\Html5Creative
     */
    public function setThirdPartyImpressionTrackingUrls(array $thirdPartyImpressionTrackingUrls)
    {
      $this->thirdPartyImpressionTrackingUrls = $thirdPartyImpressionTrackingUrls;
      return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyClickTrackingUrl()
    {
      return $this->thirdPartyClickTrackingUrl;
    }

    /**
     * @param string $thirdPartyClickTrackingUrl
     * @return \Google\AdsApi\AdManager\v201808\Html5Creative
     */
    public function setThirdPartyClickTrackingUrl($thirdPartyClickTrackingUrl)
    {
      $this->thirdPartyClickTrackingUrl = $thirdPartyClickTrackingUrl;
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
     * @return \Google\AdsApi\AdManager\v201808\Html5Creative
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
     * @return \Google\AdsApi\AdManager\v201808\Html5Creative
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
     * @return \Google\AdsApi\AdManager\v201808\Html5Creative
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
     * @return \Google\AdsApi\AdManager\v201808\Html5Creative
     */
    public function setIsSafeFrameCompatible($isSafeFrameCompatible)
    {
      $this->isSafeFrameCompatible = $isSafeFrameCompatible;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\CreativeAsset
     */
    public function getHtml5Asset()
    {
      return $this->html5Asset;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\CreativeAsset $html5Asset
     * @return \Google\AdsApi\AdManager\v201808\Html5Creative
     */
    public function setHtml5Asset($html5Asset)
    {
      $this->html5Asset = $html5Asset;
      return $this;
    }

}
