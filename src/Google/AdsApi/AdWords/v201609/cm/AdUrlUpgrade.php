<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdUrlUpgrade
{

    /**
     * @var int $adId
     */
    protected $adId = null;

    /**
     * @var string $finalUrl
     */
    protected $finalUrl = null;

    /**
     * @var string $finalMobileUrl
     */
    protected $finalMobileUrl = null;

    /**
     * @var string $trackingUrlTemplate
     */
    protected $trackingUrlTemplate = null;

    /**
     * @param int $adId
     * @param string $finalUrl
     * @param string $finalMobileUrl
     * @param string $trackingUrlTemplate
     */
    public function __construct($adId = null, $finalUrl = null, $finalMobileUrl = null, $trackingUrlTemplate = null)
    {
      $this->adId = $adId;
      $this->finalUrl = $finalUrl;
      $this->finalMobileUrl = $finalMobileUrl;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
    }

    /**
     * @return int
     */
    public function getAdId()
    {
      return $this->adId;
    }

    /**
     * @param int $adId
     * @return \Google\AdsApi\AdWords\v201609\cm\AdUrlUpgrade
     */
    public function setAdId($adId)
    {
      $this->adId = (PHP_INT_SIZE === 4)
          ? floatval($adId) : $adId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFinalUrl()
    {
      return $this->finalUrl;
    }

    /**
     * @param string $finalUrl
     * @return \Google\AdsApi\AdWords\v201609\cm\AdUrlUpgrade
     */
    public function setFinalUrl($finalUrl)
    {
      $this->finalUrl = $finalUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getFinalMobileUrl()
    {
      return $this->finalMobileUrl;
    }

    /**
     * @param string $finalMobileUrl
     * @return \Google\AdsApi\AdWords\v201609\cm\AdUrlUpgrade
     */
    public function setFinalMobileUrl($finalMobileUrl)
    {
      $this->finalMobileUrl = $finalMobileUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingUrlTemplate()
    {
      return $this->trackingUrlTemplate;
    }

    /**
     * @param string $trackingUrlTemplate
     * @return \Google\AdsApi\AdWords\v201609\cm\AdUrlUpgrade
     */
    public function setTrackingUrlTemplate($trackingUrlTemplate)
    {
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      return $this;
    }

}
