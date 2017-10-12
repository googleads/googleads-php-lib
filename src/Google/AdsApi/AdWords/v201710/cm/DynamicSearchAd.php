<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DynamicSearchAd extends \Google\AdsApi\AdWords\v201710\cm\Ad
{

    /**
     * @var string $description1
     */
    protected $description1 = null;

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
     * @param \Google\AdsApi\AdWords\v201710\cm\AppUrl[] $finalAppUrls
     * @param string $trackingUrlTemplate
     * @param \Google\AdsApi\AdWords\v201710\cm\CustomParameters $urlCustomParameters
     * @param \Google\AdsApi\AdWords\v201710\cm\UrlData[] $urlData
     * @param boolean $automated
     * @param string $type
     * @param int $devicePreference
     * @param string $AdType
     * @param string $description1
     * @param string $description2
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $AdType = null, $description1 = null, $description2 = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $urlCustomParameters, $urlData, $automated, $type, $devicePreference, $AdType);
      $this->description1 = $description1;
      $this->description2 = $description2;
    }

    /**
     * @return string
     */
    public function getDescription1()
    {
      return $this->description1;
    }

    /**
     * @param string $description1
     * @return \Google\AdsApi\AdWords\v201710\cm\DynamicSearchAd
     */
    public function setDescription1($description1)
    {
      $this->description1 = $description1;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\DynamicSearchAd
     */
    public function setDescription2($description2)
    {
      $this->description2 = $description2;
      return $this;
    }

}
