<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TemplateAd extends \Google\AdsApi\AdWords\v201802\cm\Ad
{

    /**
     * @var int $templateId
     */
    protected $templateId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\AdUnionId $adUnionId
     */
    protected $adUnionId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\TemplateElement[] $templateElements
     */
    protected $templateElements = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Image $adAsImage
     */
    protected $adAsImage = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Dimensions $dimensions
     */
    protected $dimensions = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $duration
     */
    protected $duration = null;

    /**
     * @var int $originAdId
     */
    protected $originAdId = null;

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
     * @param int $templateId
     * @param \Google\AdsApi\AdWords\v201802\cm\AdUnionId $adUnionId
     * @param \Google\AdsApi\AdWords\v201802\cm\TemplateElement[] $templateElements
     * @param \Google\AdsApi\AdWords\v201802\cm\Image $adAsImage
     * @param \Google\AdsApi\AdWords\v201802\cm\Dimensions $dimensions
     * @param string $name
     * @param int $duration
     * @param int $originAdId
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $finalUrlSuffix = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $systemManagedEntitySource = null, $AdType = null, $templateId = null, $adUnionId = null, array $templateElements = null, $adAsImage = null, $dimensions = null, $name = null, $duration = null, $originAdId = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $finalUrlSuffix, $urlCustomParameters, $urlData, $automated, $type, $devicePreference, $systemManagedEntitySource, $AdType);
      $this->templateId = $templateId;
      $this->adUnionId = $adUnionId;
      $this->templateElements = $templateElements;
      $this->adAsImage = $adAsImage;
      $this->dimensions = $dimensions;
      $this->name = $name;
      $this->duration = $duration;
      $this->originAdId = $originAdId;
    }

    /**
     * @return int
     */
    public function getTemplateId()
    {
      return $this->templateId;
    }

    /**
     * @param int $templateId
     * @return \Google\AdsApi\AdWords\v201802\cm\TemplateAd
     */
    public function setTemplateId($templateId)
    {
      $this->templateId = (!is_null($templateId) && PHP_INT_SIZE === 4)
          ? floatval($templateId) : $templateId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\AdUnionId
     */
    public function getAdUnionId()
    {
      return $this->adUnionId;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\AdUnionId $adUnionId
     * @return \Google\AdsApi\AdWords\v201802\cm\TemplateAd
     */
    public function setAdUnionId($adUnionId)
    {
      $this->adUnionId = $adUnionId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\TemplateElement[]
     */
    public function getTemplateElements()
    {
      return $this->templateElements;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\TemplateElement[] $templateElements
     * @return \Google\AdsApi\AdWords\v201802\cm\TemplateAd
     */
    public function setTemplateElements(array $templateElements)
    {
      $this->templateElements = $templateElements;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Image
     */
    public function getAdAsImage()
    {
      return $this->adAsImage;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Image $adAsImage
     * @return \Google\AdsApi\AdWords\v201802\cm\TemplateAd
     */
    public function setAdAsImage($adAsImage)
    {
      $this->adAsImage = $adAsImage;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Dimensions
     */
    public function getDimensions()
    {
      return $this->dimensions;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Dimensions $dimensions
     * @return \Google\AdsApi\AdWords\v201802\cm\TemplateAd
     */
    public function setDimensions($dimensions)
    {
      $this->dimensions = $dimensions;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\TemplateAd
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
      return $this->duration;
    }

    /**
     * @param int $duration
     * @return \Google\AdsApi\AdWords\v201802\cm\TemplateAd
     */
    public function setDuration($duration)
    {
      $this->duration = $duration;
      return $this;
    }

    /**
     * @return int
     */
    public function getOriginAdId()
    {
      return $this->originAdId;
    }

    /**
     * @param int $originAdId
     * @return \Google\AdsApi\AdWords\v201802\cm\TemplateAd
     */
    public function setOriginAdId($originAdId)
    {
      $this->originAdId = (!is_null($originAdId) && PHP_INT_SIZE === 4)
          ? floatval($originAdId) : $originAdId;
      return $this;
    }

}
