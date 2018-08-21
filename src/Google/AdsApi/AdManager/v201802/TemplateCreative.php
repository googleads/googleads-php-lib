<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TemplateCreative extends \Google\AdsApi\AdManager\v201802\Creative
{

    /**
     * @var int $creativeTemplateId
     */
    protected $creativeTemplateId = null;

    /**
     * @var boolean $isInterstitial
     */
    protected $isInterstitial = null;

    /**
     * @var boolean $isNativeEligible
     */
    protected $isNativeEligible = null;

    /**
     * @var boolean $isSafeFrameCompatible
     */
    protected $isSafeFrameCompatible = null;

    /**
     * @var string $destinationUrl
     */
    protected $destinationUrl = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\BaseCreativeTemplateVariableValue[] $creativeTemplateVariableValues
     */
    protected $creativeTemplateVariableValues = null;

    /**
     * @var string $sslScanResult
     */
    protected $sslScanResult = null;

    /**
     * @var string $sslManualOverride
     */
    protected $sslManualOverride = null;

    /**
     * @var string $lockedOrientation
     */
    protected $lockedOrientation = null;

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
     * @param int $creativeTemplateId
     * @param boolean $isInterstitial
     * @param boolean $isNativeEligible
     * @param boolean $isSafeFrameCompatible
     * @param string $destinationUrl
     * @param \Google\AdsApi\AdManager\v201802\BaseCreativeTemplateVariableValue[] $creativeTemplateVariableValues
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param string $lockedOrientation
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $creativeTemplateId = null, $isInterstitial = null, $isNativeEligible = null, $isSafeFrameCompatible = null, $destinationUrl = null, array $creativeTemplateVariableValues = null, $sslScanResult = null, $sslManualOverride = null, $lockedOrientation = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues);
      $this->creativeTemplateId = $creativeTemplateId;
      $this->isInterstitial = $isInterstitial;
      $this->isNativeEligible = $isNativeEligible;
      $this->isSafeFrameCompatible = $isSafeFrameCompatible;
      $this->destinationUrl = $destinationUrl;
      $this->creativeTemplateVariableValues = $creativeTemplateVariableValues;
      $this->sslScanResult = $sslScanResult;
      $this->sslManualOverride = $sslManualOverride;
      $this->lockedOrientation = $lockedOrientation;
    }

    /**
     * @return int
     */
    public function getCreativeTemplateId()
    {
      return $this->creativeTemplateId;
    }

    /**
     * @param int $creativeTemplateId
     * @return \Google\AdsApi\AdManager\v201802\TemplateCreative
     */
    public function setCreativeTemplateId($creativeTemplateId)
    {
      $this->creativeTemplateId = (!is_null($creativeTemplateId) && PHP_INT_SIZE === 4)
          ? floatval($creativeTemplateId) : $creativeTemplateId;
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
     * @return \Google\AdsApi\AdManager\v201802\TemplateCreative
     */
    public function setIsInterstitial($isInterstitial)
    {
      $this->isInterstitial = $isInterstitial;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNativeEligible()
    {
      return $this->isNativeEligible;
    }

    /**
     * @param boolean $isNativeEligible
     * @return \Google\AdsApi\AdManager\v201802\TemplateCreative
     */
    public function setIsNativeEligible($isNativeEligible)
    {
      $this->isNativeEligible = $isNativeEligible;
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
     * @return \Google\AdsApi\AdManager\v201802\TemplateCreative
     */
    public function setIsSafeFrameCompatible($isSafeFrameCompatible)
    {
      $this->isSafeFrameCompatible = $isSafeFrameCompatible;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationUrl()
    {
      return $this->destinationUrl;
    }

    /**
     * @param string $destinationUrl
     * @return \Google\AdsApi\AdManager\v201802\TemplateCreative
     */
    public function setDestinationUrl($destinationUrl)
    {
      $this->destinationUrl = $destinationUrl;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\BaseCreativeTemplateVariableValue[]
     */
    public function getCreativeTemplateVariableValues()
    {
      return $this->creativeTemplateVariableValues;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\BaseCreativeTemplateVariableValue[] $creativeTemplateVariableValues
     * @return \Google\AdsApi\AdManager\v201802\TemplateCreative
     */
    public function setCreativeTemplateVariableValues(array $creativeTemplateVariableValues)
    {
      $this->creativeTemplateVariableValues = $creativeTemplateVariableValues;
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
     * @return \Google\AdsApi\AdManager\v201802\TemplateCreative
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
     * @return \Google\AdsApi\AdManager\v201802\TemplateCreative
     */
    public function setSslManualOverride($sslManualOverride)
    {
      $this->sslManualOverride = $sslManualOverride;
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
     * @return \Google\AdsApi\AdManager\v201802\TemplateCreative
     */
    public function setLockedOrientation($lockedOrientation)
    {
      $this->lockedOrientation = $lockedOrientation;
      return $this;
    }

}
