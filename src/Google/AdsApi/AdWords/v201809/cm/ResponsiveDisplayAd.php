<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ResponsiveDisplayAd extends \Google\AdsApi\AdWords\v201809\cm\Ad
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Image $marketingImage
     */
    protected $marketingImage = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Image $logoImage
     */
    protected $logoImage = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Image $squareMarketingImage
     */
    protected $squareMarketingImage = null;

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
     * @var string $mainColor
     */
    protected $mainColor = null;

    /**
     * @var string $accentColor
     */
    protected $accentColor = null;

    /**
     * @var boolean $allowFlexibleColor
     */
    protected $allowFlexibleColor = null;

    /**
     * @var string $callToActionText
     */
    protected $callToActionText = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\DynamicSettings $dynamicDisplayAdSettings
     */
    protected $dynamicDisplayAdSettings = null;

    /**
     * @var string $formatSetting
     */
    protected $formatSetting = null;

    /**
     * @param int $id
     * @param string $url
     * @param string $displayUrl
     * @param string[] $finalUrls
     * @param string[] $finalMobileUrls
     * @param \Google\AdsApi\AdWords\v201809\cm\AppUrl[] $finalAppUrls
     * @param string $trackingUrlTemplate
     * @param string $finalUrlSuffix
     * @param \Google\AdsApi\AdWords\v201809\cm\CustomParameters $urlCustomParameters
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlData[] $urlData
     * @param boolean $automated
     * @param string $type
     * @param int $devicePreference
     * @param string $systemManagedEntitySource
     * @param string $AdType
     * @param \Google\AdsApi\AdWords\v201809\cm\Image $marketingImage
     * @param \Google\AdsApi\AdWords\v201809\cm\Image $logoImage
     * @param \Google\AdsApi\AdWords\v201809\cm\Image $squareMarketingImage
     * @param string $shortHeadline
     * @param string $longHeadline
     * @param string $description
     * @param string $businessName
     * @param string $mainColor
     * @param string $accentColor
     * @param boolean $allowFlexibleColor
     * @param string $callToActionText
     * @param \Google\AdsApi\AdWords\v201809\cm\DynamicSettings $dynamicDisplayAdSettings
     * @param string $formatSetting
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $finalUrlSuffix = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $systemManagedEntitySource = null, $AdType = null, $marketingImage = null, $logoImage = null, $squareMarketingImage = null, $shortHeadline = null, $longHeadline = null, $description = null, $businessName = null, $mainColor = null, $accentColor = null, $allowFlexibleColor = null, $callToActionText = null, $dynamicDisplayAdSettings = null, $formatSetting = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $finalUrlSuffix, $urlCustomParameters, $urlData, $automated, $type, $devicePreference, $systemManagedEntitySource, $AdType);
      $this->marketingImage = $marketingImage;
      $this->logoImage = $logoImage;
      $this->squareMarketingImage = $squareMarketingImage;
      $this->shortHeadline = $shortHeadline;
      $this->longHeadline = $longHeadline;
      $this->description = $description;
      $this->businessName = $businessName;
      $this->mainColor = $mainColor;
      $this->accentColor = $accentColor;
      $this->allowFlexibleColor = $allowFlexibleColor;
      $this->callToActionText = $callToActionText;
      $this->dynamicDisplayAdSettings = $dynamicDisplayAdSettings;
      $this->formatSetting = $formatSetting;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Image
     */
    public function getMarketingImage()
    {
      return $this->marketingImage;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Image $marketingImage
     * @return \Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd
     */
    public function setMarketingImage($marketingImage)
    {
      $this->marketingImage = $marketingImage;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Image
     */
    public function getLogoImage()
    {
      return $this->logoImage;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Image $logoImage
     * @return \Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd
     */
    public function setLogoImage($logoImage)
    {
      $this->logoImage = $logoImage;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Image
     */
    public function getSquareMarketingImage()
    {
      return $this->squareMarketingImage;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Image $squareMarketingImage
     * @return \Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd
     */
    public function setSquareMarketingImage($squareMarketingImage)
    {
      $this->squareMarketingImage = $squareMarketingImage;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd
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
     * @return \Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd
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
     * @return \Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd
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
     * @return \Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd
     */
    public function setBusinessName($businessName)
    {
      $this->businessName = $businessName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMainColor()
    {
      return $this->mainColor;
    }

    /**
     * @param string $mainColor
     * @return \Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd
     */
    public function setMainColor($mainColor)
    {
      $this->mainColor = $mainColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccentColor()
    {
      return $this->accentColor;
    }

    /**
     * @param string $accentColor
     * @return \Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd
     */
    public function setAccentColor($accentColor)
    {
      $this->accentColor = $accentColor;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowFlexibleColor()
    {
      return $this->allowFlexibleColor;
    }

    /**
     * @param boolean $allowFlexibleColor
     * @return \Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd
     */
    public function setAllowFlexibleColor($allowFlexibleColor)
    {
      $this->allowFlexibleColor = $allowFlexibleColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getCallToActionText()
    {
      return $this->callToActionText;
    }

    /**
     * @param string $callToActionText
     * @return \Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd
     */
    public function setCallToActionText($callToActionText)
    {
      $this->callToActionText = $callToActionText;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\DynamicSettings
     */
    public function getDynamicDisplayAdSettings()
    {
      return $this->dynamicDisplayAdSettings;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\DynamicSettings $dynamicDisplayAdSettings
     * @return \Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd
     */
    public function setDynamicDisplayAdSettings($dynamicDisplayAdSettings)
    {
      $this->dynamicDisplayAdSettings = $dynamicDisplayAdSettings;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormatSetting()
    {
      return $this->formatSetting;
    }

    /**
     * @param string $formatSetting
     * @return \Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd
     */
    public function setFormatSetting($formatSetting)
    {
      $this->formatSetting = $formatSetting;
      return $this;
    }

}
