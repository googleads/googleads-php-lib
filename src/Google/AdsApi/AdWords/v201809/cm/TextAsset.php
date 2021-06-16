<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TextAsset extends \Google\AdsApi\AdWords\v201809\cm\Asset
{

    /**
     * @var string $assetText
     */
    protected $assetText = null;

    /**
     * @param int $assetId
     * @param string $assetName
     * @param string $assetSubtype
     * @param string $assetStatus
     * @param string $AssetType
     * @param string $assetText
     */
    public function __construct($assetId = null, $assetName = null, $assetSubtype = null, $assetStatus = null, $AssetType = null, $assetText = null)
    {
      parent::__construct($assetId, $assetName, $assetSubtype, $assetStatus, $AssetType);
      $this->assetText = $assetText;
    }

    /**
     * @return string
     */
    public function getAssetText()
    {
      return $this->assetText;
    }

    /**
     * @param string $assetText
     * @return \Google\AdsApi\AdWords\v201809\cm\TextAsset
     */
    public function setAssetText($assetText)
    {
      $this->assetText = $assetText;
      return $this;
    }

}
