<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Asset
{

    /**
     * @var int $assetId
     */
    protected $assetId = null;

    /**
     * @var string $assetName
     */
    protected $assetName = null;

    /**
     * @var string $assetSubtype
     */
    protected $assetSubtype = null;

    /**
     * @var string $assetStatus
     */
    protected $assetStatus = null;

    /**
     * @var string $AssetType
     */
    protected $AssetType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['Asset.Type' => 'AssetType'];

    /**
     * @param int $assetId
     * @param string $assetName
     * @param string $assetSubtype
     * @param string $assetStatus
     * @param string $AssetType
     */
    public function __construct($assetId = null, $assetName = null, $assetSubtype = null, $assetStatus = null, $AssetType = null)
    {
      $this->assetId = $assetId;
      $this->assetName = $assetName;
      $this->assetSubtype = $assetSubtype;
      $this->assetStatus = $assetStatus;
      $this->AssetType = $AssetType;
    }

    /**
     * @return int
     */
    public function getAssetId()
    {
      return $this->assetId;
    }

    /**
     * @param int $assetId
     * @return \Google\AdsApi\AdWords\v201806\cm\Asset
     */
    public function setAssetId($assetId)
    {
      $this->assetId = (!is_null($assetId) && PHP_INT_SIZE === 4)
          ? floatval($assetId) : $assetId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssetName()
    {
      return $this->assetName;
    }

    /**
     * @param string $assetName
     * @return \Google\AdsApi\AdWords\v201806\cm\Asset
     */
    public function setAssetName($assetName)
    {
      $this->assetName = $assetName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssetSubtype()
    {
      return $this->assetSubtype;
    }

    /**
     * @param string $assetSubtype
     * @return \Google\AdsApi\AdWords\v201806\cm\Asset
     */
    public function setAssetSubtype($assetSubtype)
    {
      $this->assetSubtype = $assetSubtype;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssetStatus()
    {
      return $this->assetStatus;
    }

    /**
     * @param string $assetStatus
     * @return \Google\AdsApi\AdWords\v201806\cm\Asset
     */
    public function setAssetStatus($assetStatus)
    {
      $this->assetStatus = $assetStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssetType()
    {
      return $this->AssetType;
    }

    /**
     * @param string $AssetType
     * @return \Google\AdsApi\AdWords\v201806\cm\Asset
     */
    public function setAssetType($AssetType)
    {
      $this->AssetType = $AssetType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201806\cm\Asset
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
