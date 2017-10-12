<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExpandedDynamicSearchAd extends \Google\AdsApi\AdWords\v201710\cm\Ad
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param int $id
     * @param string $url
     * @param string $displayUrl
     * @param string[] $finalUrls
     * @param string[] $finalMobileUrls
     * @param \Google\AdsApi\AdWords\v201710\cm\AppUrl[] $finalAppUrls
     * @param string $trackingUrlTemplate
     * @param \Google\AdsApi\AdWords\v201710\cm\CustomParameters $urlCustomParameters
     * @param \Google\AdsApi\AdWords\v201710\cm\UrlData[] $urlData
     * @param boolean $automated
     * @param string $type
     * @param int $devicePreference
     * @param string $AdType
     * @param string $description
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $AdType = null, $description = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $urlCustomParameters, $urlData, $automated, $type, $devicePreference, $AdType);
      $this->description = $description;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\ExpandedDynamicSearchAd
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
