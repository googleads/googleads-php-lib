<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BaseFlashRedirectCreative extends \Google\AdsApi\AdManager\v201802\HasDestinationUrlCreative
{

    /**
     * @var string $flashUrl
     */
    protected $flashUrl = null;

    /**
     * @var string $fallbackUrl
     */
    protected $fallbackUrl = null;

    /**
     * @var string $fallbackPreviewUrl
     */
    protected $fallbackPreviewUrl = null;

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
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType);
      $this->flashUrl = $flashUrl;
      $this->fallbackUrl = $fallbackUrl;
      $this->fallbackPreviewUrl = $fallbackPreviewUrl;
      $this->sslScanResult = $sslScanResult;
      $this->sslManualOverride = $sslManualOverride;
    }

    /**
     * @return string
     */
    public function getFlashUrl()
    {
      return $this->flashUrl;
    }

    /**
     * @param string $flashUrl
     * @return \Google\AdsApi\AdManager\v201802\BaseFlashRedirectCreative
     */
    public function setFlashUrl($flashUrl)
    {
      $this->flashUrl = $flashUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getFallbackUrl()
    {
      return $this->fallbackUrl;
    }

    /**
     * @param string $fallbackUrl
     * @return \Google\AdsApi\AdManager\v201802\BaseFlashRedirectCreative
     */
    public function setFallbackUrl($fallbackUrl)
    {
      $this->fallbackUrl = $fallbackUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getFallbackPreviewUrl()
    {
      return $this->fallbackPreviewUrl;
    }

    /**
     * @param string $fallbackPreviewUrl
     * @return \Google\AdsApi\AdManager\v201802\BaseFlashRedirectCreative
     */
    public function setFallbackPreviewUrl($fallbackPreviewUrl)
    {
      $this->fallbackPreviewUrl = $fallbackPreviewUrl;
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
     * @return \Google\AdsApi\AdManager\v201802\BaseFlashRedirectCreative
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
     * @return \Google\AdsApi\AdManager\v201802\BaseFlashRedirectCreative
     */
    public function setSslManualOverride($sslManualOverride)
    {
      $this->sslManualOverride = $sslManualOverride;
      return $this;
    }

}
