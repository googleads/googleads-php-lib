<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AssetLink
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\Asset $asset
     */
    protected $asset = null;

    /**
     * @var string $pinnedField
     */
    protected $pinnedField = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\AssetPolicySummaryInfo $assetPolicySummaryInfo
     */
    protected $assetPolicySummaryInfo = null;

    /**
     * @var string $assetPerformanceLabel
     */
    protected $assetPerformanceLabel = null;

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Asset $asset
     * @param string $pinnedField
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetPolicySummaryInfo $assetPolicySummaryInfo
     * @param string $assetPerformanceLabel
     */
    public function __construct($asset = null, $pinnedField = null, $assetPolicySummaryInfo = null, $assetPerformanceLabel = null)
    {
      $this->asset = $asset;
      $this->pinnedField = $pinnedField;
      $this->assetPolicySummaryInfo = $assetPolicySummaryInfo;
      $this->assetPerformanceLabel = $assetPerformanceLabel;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\Asset
     */
    public function getAsset()
    {
      return $this->asset;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Asset $asset
     * @return \Google\AdsApi\AdWords\v201806\cm\AssetLink
     */
    public function setAsset($asset)
    {
      $this->asset = $asset;
      return $this;
    }

    /**
     * @return string
     */
    public function getPinnedField()
    {
      return $this->pinnedField;
    }

    /**
     * @param string $pinnedField
     * @return \Google\AdsApi\AdWords\v201806\cm\AssetLink
     */
    public function setPinnedField($pinnedField)
    {
      $this->pinnedField = $pinnedField;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\AssetPolicySummaryInfo
     */
    public function getAssetPolicySummaryInfo()
    {
      return $this->assetPolicySummaryInfo;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetPolicySummaryInfo $assetPolicySummaryInfo
     * @return \Google\AdsApi\AdWords\v201806\cm\AssetLink
     */
    public function setAssetPolicySummaryInfo($assetPolicySummaryInfo)
    {
      $this->assetPolicySummaryInfo = $assetPolicySummaryInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssetPerformanceLabel()
    {
      return $this->assetPerformanceLabel;
    }

    /**
     * @param string $assetPerformanceLabel
     * @return \Google\AdsApi\AdWords\v201806\cm\AssetLink
     */
    public function setAssetPerformanceLabel($assetPerformanceLabel)
    {
      $this->assetPerformanceLabel = $assetPerformanceLabel;
      return $this;
    }

}
