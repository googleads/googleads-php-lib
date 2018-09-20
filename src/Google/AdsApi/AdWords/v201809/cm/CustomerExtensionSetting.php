<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerExtensionSetting
{

    /**
     * @var string $extensionType
     */
    protected $extensionType = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\ExtensionSetting $extensionSetting
     */
    protected $extensionSetting = null;

    /**
     * @param string $extensionType
     * @param \Google\AdsApi\AdWords\v201809\cm\ExtensionSetting $extensionSetting
     */
    public function __construct($extensionType = null, $extensionSetting = null)
    {
      $this->extensionType = $extensionType;
      $this->extensionSetting = $extensionSetting;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\CustomerExtensionSetting
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
     * @return \Google\AdsApi\AdWords\v201809\cm\CustomerExtensionSetting
     */
    public function setExtensionSetting($extensionSetting)
    {
      $this->extensionSetting = $extensionSetting;
      return $this;
    }

}
