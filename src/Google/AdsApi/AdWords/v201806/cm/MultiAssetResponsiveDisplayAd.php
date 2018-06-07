<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MultiAssetResponsiveDisplayAd extends \Google\AdsApi\AdWords\v201806\cm\Ad
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $marketingImages
     */
    protected $marketingImages = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $squareMarketingImages
     */
    protected $squareMarketingImages = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $logoImages
     */
    protected $logoImages = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $landscapeLogoImages
     */
    protected $landscapeLogoImages = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $headlines
     */
    protected $headlines = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\AssetLink $longHeadline
     */
    protected $longHeadline = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $descriptions
     */
    protected $descriptions = null;

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
     * @var string $dynamicSettingsPricePrefix
     */
    protected $dynamicSettingsPricePrefix = null;

    /**
     * @var string $dynamicSettingsPromoText
     */
    protected $dynamicSettingsPromoText = null;

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
     * @param \Google\AdsApi\AdWords\v201806\cm\AppUrl[] $finalAppUrls
     * @param string $trackingUrlTemplate
     * @param string $finalUrlSuffix
     * @param \Google\AdsApi\AdWords\v201806\cm\CustomParameters $urlCustomParameters
     * @param \Google\AdsApi\AdWords\v201806\cm\UrlData[] $urlData
     * @param boolean $automated
     * @param string $type
     * @param int $devicePreference
     * @param string $systemManagedEntitySource
     * @param string $AdType
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $marketingImages
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $squareMarketingImages
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $logoImages
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $landscapeLogoImages
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $headlines
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink $longHeadline
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $descriptions
     * @param string $businessName
     * @param string $mainColor
     * @param string $accentColor
     * @param boolean $allowFlexibleColor
     * @param string $callToActionText
     * @param string $dynamicSettingsPricePrefix
     * @param string $dynamicSettingsPromoText
     * @param string $formatSetting
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $finalUrlSuffix = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $systemManagedEntitySource = null, $AdType = null, array $marketingImages = null, array $squareMarketingImages = null, array $logoImages = null, array $landscapeLogoImages = null, array $headlines = null, $longHeadline = null, array $descriptions = null, $businessName = null, $mainColor = null, $accentColor = null, $allowFlexibleColor = null, $callToActionText = null, $dynamicSettingsPricePrefix = null, $dynamicSettingsPromoText = null, $formatSetting = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $finalUrlSuffix, $urlCustomParameters, $urlData, $automated, $type, $devicePreference, $systemManagedEntitySource, $AdType);
      $this->marketingImages = $marketingImages;
      $this->squareMarketingImages = $squareMarketingImages;
      $this->logoImages = $logoImages;
      $this->landscapeLogoImages = $landscapeLogoImages;
      $this->headlines = $headlines;
      $this->longHeadline = $longHeadline;
      $this->descriptions = $descriptions;
      $this->businessName = $businessName;
      $this->mainColor = $mainColor;
      $this->accentColor = $accentColor;
      $this->allowFlexibleColor = $allowFlexibleColor;
      $this->callToActionText = $callToActionText;
      $this->dynamicSettingsPricePrefix = $dynamicSettingsPricePrefix;
      $this->dynamicSettingsPromoText = $dynamicSettingsPromoText;
      $this->formatSetting = $formatSetting;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\AssetLink[]
     */
    public function getMarketingImages()
    {
      return $this->marketingImages;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $marketingImages
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
     */
    public function setMarketingImages(array $marketingImages)
    {
      $this->marketingImages = $marketingImages;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\AssetLink[]
     */
    public function getSquareMarketingImages()
    {
      return $this->squareMarketingImages;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $squareMarketingImages
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
     */
    public function setSquareMarketingImages(array $squareMarketingImages)
    {
      $this->squareMarketingImages = $squareMarketingImages;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\AssetLink[]
     */
    public function getLogoImages()
    {
      return $this->logoImages;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $logoImages
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
     */
    public function setLogoImages(array $logoImages)
    {
      $this->logoImages = $logoImages;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\AssetLink[]
     */
    public function getLandscapeLogoImages()
    {
      return $this->landscapeLogoImages;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $landscapeLogoImages
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
     */
    public function setLandscapeLogoImages(array $landscapeLogoImages)
    {
      $this->landscapeLogoImages = $landscapeLogoImages;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\AssetLink[]
     */
    public function getHeadlines()
    {
      return $this->headlines;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $headlines
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
     */
    public function setHeadlines(array $headlines)
    {
      $this->headlines = $headlines;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\AssetLink
     */
    public function getLongHeadline()
    {
      return $this->longHeadline;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink $longHeadline
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
     */
    public function setLongHeadline($longHeadline)
    {
      $this->longHeadline = $longHeadline;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\AssetLink[]
     */
    public function getDescriptions()
    {
      return $this->descriptions;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $descriptions
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
     */
    public function setDescriptions(array $descriptions)
    {
      $this->descriptions = $descriptions;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
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
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
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
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
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
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
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
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
     */
    public function setCallToActionText($callToActionText)
    {
      $this->callToActionText = $callToActionText;
      return $this;
    }

    /**
     * @return string
     */
    public function getDynamicSettingsPricePrefix()
    {
      return $this->dynamicSettingsPricePrefix;
    }

    /**
     * @param string $dynamicSettingsPricePrefix
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
     */
    public function setDynamicSettingsPricePrefix($dynamicSettingsPricePrefix)
    {
      $this->dynamicSettingsPricePrefix = $dynamicSettingsPricePrefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getDynamicSettingsPromoText()
    {
      return $this->dynamicSettingsPromoText;
    }

    /**
     * @param string $dynamicSettingsPromoText
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
     */
    public function setDynamicSettingsPromoText($dynamicSettingsPromoText)
    {
      $this->dynamicSettingsPromoText = $dynamicSettingsPromoText;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd
     */
    public function setFormatSetting($formatSetting)
    {
      $this->formatSetting = $formatSetting;
      return $this;
    }

}
