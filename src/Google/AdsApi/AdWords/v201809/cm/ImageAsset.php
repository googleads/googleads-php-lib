<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ImageAsset extends \Google\AdsApi\AdWords\v201809\cm\Asset
{

    /**
     * @var string $imageData
     */
    protected $imageData = null;

    /**
     * @var int $imageFileSize
     */
    protected $imageFileSize = null;

    /**
     * @var string $imageMimeType
     */
    protected $imageMimeType = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\ImageDimensionInfo $fullSizeInfo
     */
    protected $fullSizeInfo = null;

    /**
     * @param int $assetId
     * @param string $assetName
     * @param string $assetSubtype
     * @param string $assetStatus
     * @param string $AssetType
     * @param string $imageData
     * @param int $imageFileSize
     * @param string $imageMimeType
     * @param \Google\AdsApi\AdWords\v201809\cm\ImageDimensionInfo $fullSizeInfo
     */
    public function __construct($assetId = null, $assetName = null, $assetSubtype = null, $assetStatus = null, $AssetType = null, $imageData = null, $imageFileSize = null, $imageMimeType = null, $fullSizeInfo = null)
    {
      parent::__construct($assetId, $assetName, $assetSubtype, $assetStatus, $AssetType);
      $this->imageData = $imageData;
      $this->imageFileSize = $imageFileSize;
      $this->imageMimeType = $imageMimeType;
      $this->fullSizeInfo = $fullSizeInfo;
    }

    /**
     * @return string
     */
    public function getImageData()
    {
      return $this->imageData;
    }

    /**
     * @param string $imageData
     * @return \Google\AdsApi\AdWords\v201809\cm\ImageAsset
     */
    public function setImageData($imageData)
    {
      $this->imageData = $imageData;
      return $this;
    }

    /**
     * @return int
     */
    public function getImageFileSize()
    {
      return $this->imageFileSize;
    }

    /**
     * @param int $imageFileSize
     * @return \Google\AdsApi\AdWords\v201809\cm\ImageAsset
     */
    public function setImageFileSize($imageFileSize)
    {
      $this->imageFileSize = (!is_null($imageFileSize) && PHP_INT_SIZE === 4)
          ? floatval($imageFileSize) : $imageFileSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageMimeType()
    {
      return $this->imageMimeType;
    }

    /**
     * @param string $imageMimeType
     * @return \Google\AdsApi\AdWords\v201809\cm\ImageAsset
     */
    public function setImageMimeType($imageMimeType)
    {
      $this->imageMimeType = $imageMimeType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\ImageDimensionInfo
     */
    public function getFullSizeInfo()
    {
      return $this->fullSizeInfo;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\ImageDimensionInfo $fullSizeInfo
     * @return \Google\AdsApi\AdWords\v201809\cm\ImageAsset
     */
    public function setFullSizeInfo($fullSizeInfo)
    {
      $this->fullSizeInfo = $fullSizeInfo;
      return $this;
    }

}
