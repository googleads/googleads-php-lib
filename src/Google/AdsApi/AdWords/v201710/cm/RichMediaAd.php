<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class RichMediaAd extends \Google\AdsApi\AdWords\v201710\cm\Ad
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Dimensions $dimensions
     */
    protected $dimensions = null;

    /**
     * @var string $snippet
     */
    protected $snippet = null;

    /**
     * @var string $impressionBeaconUrl
     */
    protected $impressionBeaconUrl = null;

    /**
     * @var int $adDuration
     */
    protected $adDuration = null;

    /**
     * @var int $certifiedVendorFormatId
     */
    protected $certifiedVendorFormatId = null;

    /**
     * @var string $sourceUrl
     */
    protected $sourceUrl = null;

    /**
     * @var string $richMediaAdType
     */
    protected $richMediaAdType = null;

    /**
     * @var string[] $adAttributes
     */
    protected $adAttributes = null;

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
     * @param string $name
     * @param \Google\AdsApi\AdWords\v201710\cm\Dimensions $dimensions
     * @param string $snippet
     * @param string $impressionBeaconUrl
     * @param int $adDuration
     * @param int $certifiedVendorFormatId
     * @param string $sourceUrl
     * @param string $richMediaAdType
     * @param string[] $adAttributes
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $AdType = null, $name = null, $dimensions = null, $snippet = null, $impressionBeaconUrl = null, $adDuration = null, $certifiedVendorFormatId = null, $sourceUrl = null, $richMediaAdType = null, array $adAttributes = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $urlCustomParameters, $urlData, $automated, $type, $devicePreference, $AdType);
      $this->name = $name;
      $this->dimensions = $dimensions;
      $this->snippet = $snippet;
      $this->impressionBeaconUrl = $impressionBeaconUrl;
      $this->adDuration = $adDuration;
      $this->certifiedVendorFormatId = $certifiedVendorFormatId;
      $this->sourceUrl = $sourceUrl;
      $this->richMediaAdType = $richMediaAdType;
      $this->adAttributes = $adAttributes;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\RichMediaAd
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Dimensions
     */
    public function getDimensions()
    {
      return $this->dimensions;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Dimensions $dimensions
     * @return \Google\AdsApi\AdWords\v201710\cm\RichMediaAd
     */
    public function setDimensions($dimensions)
    {
      $this->dimensions = $dimensions;
      return $this;
    }

    /**
     * @return string
     */
    public function getSnippet()
    {
      return $this->snippet;
    }

    /**
     * @param string $snippet
     * @return \Google\AdsApi\AdWords\v201710\cm\RichMediaAd
     */
    public function setSnippet($snippet)
    {
      $this->snippet = $snippet;
      return $this;
    }

    /**
     * @return string
     */
    public function getImpressionBeaconUrl()
    {
      return $this->impressionBeaconUrl;
    }

    /**
     * @param string $impressionBeaconUrl
     * @return \Google\AdsApi\AdWords\v201710\cm\RichMediaAd
     */
    public function setImpressionBeaconUrl($impressionBeaconUrl)
    {
      $this->impressionBeaconUrl = $impressionBeaconUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdDuration()
    {
      return $this->adDuration;
    }

    /**
     * @param int $adDuration
     * @return \Google\AdsApi\AdWords\v201710\cm\RichMediaAd
     */
    public function setAdDuration($adDuration)
    {
      $this->adDuration = $adDuration;
      return $this;
    }

    /**
     * @return int
     */
    public function getCertifiedVendorFormatId()
    {
      return $this->certifiedVendorFormatId;
    }

    /**
     * @param int $certifiedVendorFormatId
     * @return \Google\AdsApi\AdWords\v201710\cm\RichMediaAd
     */
    public function setCertifiedVendorFormatId($certifiedVendorFormatId)
    {
      $this->certifiedVendorFormatId = (!is_null($certifiedVendorFormatId) && PHP_INT_SIZE === 4)
          ? floatval($certifiedVendorFormatId) : $certifiedVendorFormatId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceUrl()
    {
      return $this->sourceUrl;
    }

    /**
     * @param string $sourceUrl
     * @return \Google\AdsApi\AdWords\v201710\cm\RichMediaAd
     */
    public function setSourceUrl($sourceUrl)
    {
      $this->sourceUrl = $sourceUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getRichMediaAdType()
    {
      return $this->richMediaAdType;
    }

    /**
     * @param string $richMediaAdType
     * @return \Google\AdsApi\AdWords\v201710\cm\RichMediaAd
     */
    public function setRichMediaAdType($richMediaAdType)
    {
      $this->richMediaAdType = $richMediaAdType;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAdAttributes()
    {
      return $this->adAttributes;
    }

    /**
     * @param string[] $adAttributes
     * @return \Google\AdsApi\AdWords\v201710\cm\RichMediaAd
     */
    public function setAdAttributes(array $adAttributes)
    {
      $this->adAttributes = $adAttributes;
      return $this;
    }

}
