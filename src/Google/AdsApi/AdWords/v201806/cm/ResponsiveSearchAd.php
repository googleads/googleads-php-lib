<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ResponsiveSearchAd extends \Google\AdsApi\AdWords\v201806\cm\Ad
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $headlines
     */
    protected $headlines = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $descriptions
     */
    protected $descriptions = null;

    /**
     * @var string $path1
     */
    protected $path1 = null;

    /**
     * @var string $path2
     */
    protected $path2 = null;

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
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $headlines
     * @param \Google\AdsApi\AdWords\v201806\cm\AssetLink[] $descriptions
     * @param string $path1
     * @param string $path2
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $finalUrlSuffix = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $systemManagedEntitySource = null, $AdType = null, array $headlines = null, array $descriptions = null, $path1 = null, $path2 = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $finalUrlSuffix, $urlCustomParameters, $urlData, $automated, $type, $devicePreference, $systemManagedEntitySource, $AdType);
      $this->headlines = $headlines;
      $this->descriptions = $descriptions;
      $this->path1 = $path1;
      $this->path2 = $path2;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\ResponsiveSearchAd
     */
    public function setHeadlines(array $headlines)
    {
      $this->headlines = $headlines;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\ResponsiveSearchAd
     */
    public function setDescriptions(array $descriptions)
    {
      $this->descriptions = $descriptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getPath1()
    {
      return $this->path1;
    }

    /**
     * @param string $path1
     * @return \Google\AdsApi\AdWords\v201806\cm\ResponsiveSearchAd
     */
    public function setPath1($path1)
    {
      $this->path1 = $path1;
      return $this;
    }

    /**
     * @return string
     */
    public function getPath2()
    {
      return $this->path2;
    }

    /**
     * @param string $path2
     * @return \Google\AdsApi\AdWords\v201806\cm\ResponsiveSearchAd
     */
    public function setPath2($path2)
    {
      $this->path2 = $path2;
      return $this;
    }

}
