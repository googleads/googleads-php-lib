<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExpandedDynamicSearchAd extends \Google\AdsApi\AdWords\v201809\cm\Ad
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $description2
     */
    protected $description2 = null;

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
     * @param string $description
     * @param string $description2
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $finalUrlSuffix = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $systemManagedEntitySource = null, $AdType = null, $description = null, $description2 = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $finalUrlSuffix, $urlCustomParameters, $urlData, $automated, $type, $devicePreference, $systemManagedEntitySource, $AdType);
      $this->description = $description;
      $this->description2 = $description2;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\ExpandedDynamicSearchAd
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription2()
    {
      return $this->description2;
    }

    /**
     * @param string $description2
     * @return \Google\AdsApi\AdWords\v201809\cm\ExpandedDynamicSearchAd
     */
    public function setDescription2($description2)
    {
      $this->description2 = $description2;
      return $this;
    }

}
