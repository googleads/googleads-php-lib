<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UniversalAppAd extends \Google\AdsApi\AdWords\v201809\cm\Ad
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $headlines
     */
    protected $headlines = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $descriptions
     */
    protected $descriptions = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\AssetLink $mandatoryAdText
     */
    protected $mandatoryAdText = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $images
     */
    protected $images = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $videos
     */
    protected $videos = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $html5MediaBundles
     */
    protected $html5MediaBundles = null;

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
     * @param \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $headlines
     * @param \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $descriptions
     * @param \Google\AdsApi\AdWords\v201809\cm\AssetLink $mandatoryAdText
     * @param \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $images
     * @param \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $videos
     * @param \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $html5MediaBundles
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $finalUrlSuffix = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $systemManagedEntitySource = null, $AdType = null, array $headlines = null, array $descriptions = null, $mandatoryAdText = null, array $images = null, array $videos = null, array $html5MediaBundles = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $finalUrlSuffix, $urlCustomParameters, $urlData, $automated, $type, $devicePreference, $systemManagedEntitySource, $AdType);
      $this->headlines = $headlines;
      $this->descriptions = $descriptions;
      $this->mandatoryAdText = $mandatoryAdText;
      $this->images = $images;
      $this->videos = $videos;
      $this->html5MediaBundles = $html5MediaBundles;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\AssetLink[]
     */
    public function getHeadlines()
    {
      return $this->headlines;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $headlines
     * @return \Google\AdsApi\AdWords\v201809\cm\UniversalAppAd
     */
    public function setHeadlines(array $headlines)
    {
      $this->headlines = $headlines;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\AssetLink[]
     */
    public function getDescriptions()
    {
      return $this->descriptions;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $descriptions
     * @return \Google\AdsApi\AdWords\v201809\cm\UniversalAppAd
     */
    public function setDescriptions(array $descriptions)
    {
      $this->descriptions = $descriptions;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\AssetLink
     */
    public function getMandatoryAdText()
    {
      return $this->mandatoryAdText;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AssetLink $mandatoryAdText
     * @return \Google\AdsApi\AdWords\v201809\cm\UniversalAppAd
     */
    public function setMandatoryAdText($mandatoryAdText)
    {
      $this->mandatoryAdText = $mandatoryAdText;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\AssetLink[]
     */
    public function getImages()
    {
      return $this->images;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $images
     * @return \Google\AdsApi\AdWords\v201809\cm\UniversalAppAd
     */
    public function setImages(array $images)
    {
      $this->images = $images;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\AssetLink[]
     */
    public function getVideos()
    {
      return $this->videos;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $videos
     * @return \Google\AdsApi\AdWords\v201809\cm\UniversalAppAd
     */
    public function setVideos(array $videos)
    {
      $this->videos = $videos;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\AssetLink[]
     */
    public function getHtml5MediaBundles()
    {
      return $this->html5MediaBundles;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AssetLink[] $html5MediaBundles
     * @return \Google\AdsApi\AdWords\v201809\cm\UniversalAppAd
     */
    public function setHtml5MediaBundles(array $html5MediaBundles)
    {
      $this->html5MediaBundles = $html5MediaBundles;
      return $this;
    }

}
