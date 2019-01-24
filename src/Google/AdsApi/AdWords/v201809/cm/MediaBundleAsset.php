<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MediaBundleAsset extends \Google\AdsApi\AdWords\v201809\cm\Asset
{

    /**
     * @var string $mediaBundleData
     */
    protected $mediaBundleData = null;

    /**
     * @param int $assetId
     * @param string $assetName
     * @param string $assetSubtype
     * @param string $assetStatus
     * @param string $AssetType
     * @param string $mediaBundleData
     */
    public function __construct($assetId = null, $assetName = null, $assetSubtype = null, $assetStatus = null, $AssetType = null, $mediaBundleData = null)
    {
      parent::__construct($assetId, $assetName, $assetSubtype, $assetStatus, $AssetType);
      $this->mediaBundleData = $mediaBundleData;
    }

    /**
     * @return string
     */
    public function getMediaBundleData()
    {
      return $this->mediaBundleData;
    }

    /**
     * @param string $mediaBundleData
     * @return \Google\AdsApi\AdWords\v201809\cm\MediaBundleAsset
     */
    public function setMediaBundleData($mediaBundleData)
    {
      $this->mediaBundleData = $mediaBundleData;
      return $this;
    }

}
