<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomCreative extends \Google\AdsApi\Dfp\v201602\HasDestinationUrlCreative
{

    /**
     * @var string $htmlSnippet
     */
    protected $htmlSnippet = null;

    /**
     * @var \Google\AdsApi\Dfp\v201602\CustomCreativeAsset[] $customCreativeAssets
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
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\Dfp\v201602\Size $size
     * @param string $previewUrl
     * @param string $policyViolations
     * @param \Google\AdsApi\Dfp\v201602\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201602\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201602\BaseCustomFieldValue[] $customFieldValues
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param string $htmlSnippet
     * @param \Google\AdsApi\Dfp\v201602\CustomCreativeAsset[] $customCreativeAssets
     * @param boolean $isInterstitial
     * @param string $lockedOrientation
     * @param string $sslScanResult
     * @param string $sslManualOverride
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, $htmlSnippet = null, array $customCreativeAssets = null, $isInterstitial = null, $lockedOrientation = null, $sslScanResult = null, $sslManualOverride = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType);
      $this->htmlSnippet = $htmlSnippet;
      $this->customCreativeAssets = $customCreativeAssets;
      $this->isInterstitial = $isInterstitial;
      $this->lockedOrientation = $lockedOrientation;
      $this->sslScanResult = $sslScanResult;
      $this->sslManualOverride = $sslManualOverride;
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
     * @return \Google\AdsApi\Dfp\v201602\CustomCreative
     */
    public function setHtmlSnippet($htmlSnippet)
    {
      $this->htmlSnippet = $htmlSnippet;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201602\CustomCreativeAsset[]
     */
    public function getCustomCreativeAssets()
    {
      return $this->customCreativeAssets;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201602\CustomCreativeAsset[] $customCreativeAssets
     * @return \Google\AdsApi\Dfp\v201602\CustomCreative
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
     * @return \Google\AdsApi\Dfp\v201602\CustomCreative
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
     * @return \Google\AdsApi\Dfp\v201602\CustomCreative
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
     * @return \Google\AdsApi\Dfp\v201602\CustomCreative
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
     * @return \Google\AdsApi\Dfp\v201602\CustomCreative
     */
    public function setSslManualOverride($sslManualOverride)
    {
      $this->sslManualOverride = $sslManualOverride;
      return $this;
    }

}
