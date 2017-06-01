<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ResponsiveDisplayAd extends \Google\AdsApi\AdWords\v201705\cm\Ad
{

    /**
     * @var \Google\AdsApi\AdWords\v201705\cm\Image $marketingImage
     */
    protected $marketingImage = null;

    /**
     * @var \Google\AdsApi\AdWords\v201705\cm\Image $logoImage
     */
    protected $logoImage = null;

    /**
     * @var string $shortHeadline
     */
    protected $shortHeadline = null;

    /**
     * @var string $longHeadline
     */
    protected $longHeadline = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $businessName
     */
    protected $businessName = null;

    /**
     * @param int $id
     * @param string $url
     * @param string $displayUrl
     * @param string[] $finalUrls
     * @param string[] $finalMobileUrls
     * @param \Google\AdsApi\AdWords\v201705\cm\AppUrl[] $finalAppUrls
     * @param string $trackingUrlTemplate
     * @param \Google\AdsApi\AdWords\v201705\cm\CustomParameters $urlCustomParameters
     * @param \Google\AdsApi\AdWords\v201705\cm\UrlData[] $urlData
     * @param string $type
     * @param int $devicePreference
     * @param string $AdType
     * @param \Google\AdsApi\AdWords\v201705\cm\Image $marketingImage
     * @param \Google\AdsApi\AdWords\v201705\cm\Image $logoImage
     * @param string $shortHeadline
     * @param string $longHeadline
     * @param string $description
     * @param string $businessName
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, array $urlData = null, $type = null, $devicePreference = null, $AdType = null, $marketingImage = null, $logoImage = null, $shortHeadline = null, $longHeadline = null, $description = null, $businessName = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $urlCustomParameters, $urlData, $type, $devicePreference, $AdType);
      $this->marketingImage = $marketingImage;
      $this->logoImage = $logoImage;
      $this->shortHeadline = $shortHeadline;
      $this->longHeadline = $longHeadline;
      $this->description = $description;
      $this->businessName = $businessName;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201705\cm\Image
     */
    public function getMarketingImage()
    {
      return $this->marketingImage;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201705\cm\Image $marketingImage
     * @return \Google\AdsApi\AdWords\v201705\cm\ResponsiveDisplayAd
     */
    public function setMarketingImage($marketingImage)
    {
      $this->marketingImage = $marketingImage;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201705\cm\Image
     */
    public function getLogoImage()
    {
      return $this->logoImage;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201705\cm\Image $logoImage
     * @return \Google\AdsApi\AdWords\v201705\cm\ResponsiveDisplayAd
     */
    public function setLogoImage($logoImage)
    {
      $this->logoImage = $logoImage;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortHeadline()
    {
      return $this->shortHeadline;
    }

    /**
     * @param string $shortHeadline
     * @return \Google\AdsApi\AdWords\v201705\cm\ResponsiveDisplayAd
     */
    public function setShortHeadline($shortHeadline)
    {
      $this->shortHeadline = $shortHeadline;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongHeadline()
    {
      return $this->longHeadline;
    }

    /**
     * @param string $longHeadline
     * @return \Google\AdsApi\AdWords\v201705\cm\ResponsiveDisplayAd
     */
    public function setLongHeadline($longHeadline)
    {
      $this->longHeadline = $longHeadline;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\AdWords\v201705\cm\ResponsiveDisplayAd
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getBusinessName()
    {
      return $this->businessName;
    }

    /**
     * @param string $businessName
     * @return \Google\AdsApi\AdWords\v201705\cm\ResponsiveDisplayAd
     */
    public function setBusinessName($businessName)
    {
      $this->businessName = $businessName;
      return $this;
    }

}
