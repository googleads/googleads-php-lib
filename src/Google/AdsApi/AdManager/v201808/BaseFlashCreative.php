<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BaseFlashCreative extends \Google\AdsApi\AdManager\v201808\HasDestinationUrlCreative
{

    /**
     * @var boolean $overrideSize
     */
    protected $overrideSize = null;

    /**
     * @var boolean $clickTagRequired
     */
    protected $clickTagRequired = null;

    /**
     * @var string $sslScanResult
     */
    protected $sslScanResult = null;

    /**
     * @var string $sslManualOverride
     */
    protected $sslManualOverride = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\CreativeAsset $flashAsset
     */
    protected $flashAsset = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\CreativeAsset $fallbackImageAsset
     */
    protected $fallbackImageAsset = null;

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
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param boolean $overrideSize
     * @param boolean $clickTagRequired
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param \Google\AdsApi\AdManager\v201808\CreativeAsset $flashAsset
     * @param \Google\AdsApi\AdManager\v201808\CreativeAsset $fallbackImageAsset
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, $overrideSize = null, $clickTagRequired = null, $sslScanResult = null, $sslManualOverride = null, $flashAsset = null, $fallbackImageAsset = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType);
      $this->overrideSize = $overrideSize;
      $this->clickTagRequired = $clickTagRequired;
      $this->sslScanResult = $sslScanResult;
      $this->sslManualOverride = $sslManualOverride;
      $this->flashAsset = $flashAsset;
      $this->fallbackImageAsset = $fallbackImageAsset;
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
     * @return \Google\AdsApi\AdManager\v201808\BaseFlashCreative
     */
    public function setOverrideSize($overrideSize)
    {
      $this->overrideSize = $overrideSize;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClickTagRequired()
    {
      return $this->clickTagRequired;
    }

    /**
     * @param boolean $clickTagRequired
     * @return \Google\AdsApi\AdManager\v201808\BaseFlashCreative
     */
    public function setClickTagRequired($clickTagRequired)
    {
      $this->clickTagRequired = $clickTagRequired;
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
     * @return \Google\AdsApi\AdManager\v201808\BaseFlashCreative
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
     * @return \Google\AdsApi\AdManager\v201808\BaseFlashCreative
     */
    public function setSslManualOverride($sslManualOverride)
    {
      $this->sslManualOverride = $sslManualOverride;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\CreativeAsset
     */
    public function getFlashAsset()
    {
      return $this->flashAsset;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\CreativeAsset $flashAsset
     * @return \Google\AdsApi\AdManager\v201808\BaseFlashCreative
     */
    public function setFlashAsset($flashAsset)
    {
      $this->flashAsset = $flashAsset;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\CreativeAsset
     */
    public function getFallbackImageAsset()
    {
      return $this->fallbackImageAsset;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\CreativeAsset $fallbackImageAsset
     * @return \Google\AdsApi\AdManager\v201808\BaseFlashCreative
     */
    public function setFallbackImageAsset($fallbackImageAsset)
    {
      $this->fallbackImageAsset = $fallbackImageAsset;
      return $this;
    }

}
