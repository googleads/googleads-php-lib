<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ImageAd extends \Google\AdsApi\AdWords\v201802\cm\Ad
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Image $image
     */
    protected $image = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $adToCopyImageFrom
     */
    protected $adToCopyImageFrom = null;

    /**
     * @param int $id
     * @param string $url
     * @param string $displayUrl
     * @param string[] $finalUrls
     * @param string[] $finalMobileUrls
     * @param \Google\AdsApi\AdWords\v201802\cm\AppUrl[] $finalAppUrls
     * @param string $trackingUrlTemplate
     * @param string $finalUrlSuffix
     * @param \Google\AdsApi\AdWords\v201802\cm\CustomParameters $urlCustomParameters
     * @param \Google\AdsApi\AdWords\v201802\cm\UrlData[] $urlData
     * @param boolean $automated
     * @param string $type
     * @param int $devicePreference
     * @param string $systemManagedEntitySource
     * @param string $AdType
     * @param \Google\AdsApi\AdWords\v201802\cm\Image $image
     * @param string $name
     * @param int $adToCopyImageFrom
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $finalUrlSuffix = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $systemManagedEntitySource = null, $AdType = null, $image = null, $name = null, $adToCopyImageFrom = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $finalUrlSuffix, $urlCustomParameters, $urlData, $automated, $type, $devicePreference, $systemManagedEntitySource, $AdType);
      $this->image = $image;
      $this->name = $name;
      $this->adToCopyImageFrom = $adToCopyImageFrom;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Image
     */
    public function getImage()
    {
      return $this->image;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Image $image
     * @return \Google\AdsApi\AdWords\v201802\cm\ImageAd
     */
    public function setImage($image)
    {
      $this->image = $image;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdWords\v201802\cm\ImageAd
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdToCopyImageFrom()
    {
      return $this->adToCopyImageFrom;
    }

    /**
     * @param int $adToCopyImageFrom
     * @return \Google\AdsApi\AdWords\v201802\cm\ImageAd
     */
    public function setAdToCopyImageFrom($adToCopyImageFrom)
    {
      $this->adToCopyImageFrom = (!is_null($adToCopyImageFrom) && PHP_INT_SIZE === 4)
          ? floatval($adToCopyImageFrom) : $adToCopyImageFrom;
      return $this;
    }

}
