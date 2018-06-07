<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignExtensionSetting
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var string $extensionType
     */
    protected $extensionType = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\ExtensionSetting $extensionSetting
     */
    protected $extensionSetting = null;

    /**
     * @param int $campaignId
     * @param string $extensionType
     * @param \Google\AdsApi\AdWords\v201806\cm\ExtensionSetting $extensionSetting
     */
    public function __construct($campaignId = null, $extensionType = null, $extensionSetting = null)
    {
      $this->campaignId = $campaignId;
      $this->extensionType = $extensionType;
      $this->extensionSetting = $extensionSetting;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignExtensionSetting
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = (!is_null($campaignId) && PHP_INT_SIZE === 4)
          ? floatval($campaignId) : $campaignId;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignExtensionSetting
     */
    public function setExtensionType($extensionType)
    {
      $this->extensionType = $extensionType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\ExtensionSetting
     */
    public function getExtensionSetting()
    {
      return $this->extensionSetting;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\ExtensionSetting $extensionSetting
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignExtensionSetting
     */
    public function setExtensionSetting($extensionSetting)
    {
      $this->extensionSetting = $extensionSetting;
      return $this;
    }

}
