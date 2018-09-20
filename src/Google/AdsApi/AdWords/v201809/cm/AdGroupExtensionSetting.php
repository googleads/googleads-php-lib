<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupExtensionSetting
{

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var string $extensionType
     */
    protected $extensionType = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\ExtensionSetting $extensionSetting
     */
    protected $extensionSetting = null;

    /**
     * @param int $adGroupId
     * @param string $extensionType
     * @param \Google\AdsApi\AdWords\v201809\cm\ExtensionSetting $extensionSetting
     */
    public function __construct($adGroupId = null, $extensionType = null, $extensionSetting = null)
    {
      $this->adGroupId = $adGroupId;
      $this->extensionType = $extensionType;
      $this->extensionSetting = $extensionSetting;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupExtensionSetting
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = (!is_null($adGroupId) && PHP_INT_SIZE === 4)
          ? floatval($adGroupId) : $adGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtensionType()
    {
      return $this->extensionType;
    }

    /**
     * @param string $extensionType
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupExtensionSetting
     */
    public function setExtensionType($extensionType)
    {
      $this->extensionType = $extensionType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\ExtensionSetting
     */
    public function getExtensionSetting()
    {
      return $this->extensionSetting;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\ExtensionSetting $extensionSetting
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupExtensionSetting
     */
    public function setExtensionSetting($extensionSetting)
    {
      $this->extensionSetting = $extensionSetting;
      return $this;
    }

}
