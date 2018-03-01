<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrackingSetting extends \Google\AdsApi\AdWords\v201802\cm\Setting
{

    /**
     * @var string $trackingUrl
     */
    protected $trackingUrl = null;

    /**
     * @param string $SettingType
     * @param string $trackingUrl
     */
    public function __construct($SettingType = null, $trackingUrl = null)
    {
      parent::__construct($SettingType);
      $this->trackingUrl = $trackingUrl;
    }

    /**
     * @return string
     */
    public function getTrackingUrl()
    {
      return $this->trackingUrl;
    }

    /**
     * @param string $trackingUrl
     * @return \Google\AdsApi\AdWords\v201802\cm\TrackingSetting
     */
    public function setTrackingUrl($trackingUrl)
    {
      $this->trackingUrl = $trackingUrl;
      return $this;
    }

}
