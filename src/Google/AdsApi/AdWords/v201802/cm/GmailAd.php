<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class GmailAd extends \Google\AdsApi\AdWords\v201802\cm\Ad
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\GmailTeaser $teaser
     */
    protected $teaser = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Image $headerImage
     */
    protected $headerImage = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Image $marketingImage
     */
    protected $marketingImage = null;

    /**
     * @var string $marketingImageHeadline
     */
    protected $marketingImageHeadline = null;

    /**
     * @var string $marketingImageDescription
     */
    protected $marketingImageDescription = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\DisplayCallToAction $marketingImageDisplayCallToAction
     */
    protected $marketingImageDisplayCallToAction = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\ProductImage[] $productImages
     */
    protected $productImages = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Video[] $productVideoList
     */
    protected $productVideoList = null;

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
     * @param \Google\AdsApi\AdWords\v201802\cm\GmailTeaser $teaser
     * @param \Google\AdsApi\AdWords\v201802\cm\Image $headerImage
     * @param \Google\AdsApi\AdWords\v201802\cm\Image $marketingImage
     * @param string $marketingImageHeadline
     * @param string $marketingImageDescription
     * @param \Google\AdsApi\AdWords\v201802\cm\DisplayCallToAction $marketingImageDisplayCallToAction
     * @param \Google\AdsApi\AdWords\v201802\cm\ProductImage[] $productImages
     * @param \Google\AdsApi\AdWords\v201802\cm\Video[] $productVideoList
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $finalUrlSuffix = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $systemManagedEntitySource = null, $AdType = null, $teaser = null, $headerImage = null, $marketingImage = null, $marketingImageHeadline = null, $marketingImageDescription = null, $marketingImageDisplayCallToAction = null, array $productImages = null, array $productVideoList = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $finalUrlSuffix, $urlCustomParameters, $urlData, $automated, $type, $devicePreference, $systemManagedEntitySource, $AdType);
      $this->teaser = $teaser;
      $this->headerImage = $headerImage;
      $this->marketingImage = $marketingImage;
      $this->marketingImageHeadline = $marketingImageHeadline;
      $this->marketingImageDescription = $marketingImageDescription;
      $this->marketingImageDisplayCallToAction = $marketingImageDisplayCallToAction;
      $this->productImages = $productImages;
      $this->productVideoList = $productVideoList;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\GmailTeaser
     */
    public function getTeaser()
    {
      return $this->teaser;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\GmailTeaser $teaser
     * @return \Google\AdsApi\AdWords\v201802\cm\GmailAd
     */
    public function setTeaser($teaser)
    {
      $this->teaser = $teaser;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Image
     */
    public function getHeaderImage()
    {
      return $this->headerImage;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Image $headerImage
     * @return \Google\AdsApi\AdWords\v201802\cm\GmailAd
     */
    public function setHeaderImage($headerImage)
    {
      $this->headerImage = $headerImage;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Image
     */
    public function getMarketingImage()
    {
      return $this->marketingImage;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Image $marketingImage
     * @return \Google\AdsApi\AdWords\v201802\cm\GmailAd
     */
    public function setMarketingImage($marketingImage)
    {
      $this->marketingImage = $marketingImage;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarketingImageHeadline()
    {
      return $this->marketingImageHeadline;
    }

    /**
     * @param string $marketingImageHeadline
     * @return \Google\AdsApi\AdWords\v201802\cm\GmailAd
     */
    public function setMarketingImageHeadline($marketingImageHeadline)
    {
      $this->marketingImageHeadline = $marketingImageHeadline;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarketingImageDescription()
    {
      return $this->marketingImageDescription;
    }

    /**
     * @param string $marketingImageDescription
     * @return \Google\AdsApi\AdWords\v201802\cm\GmailAd
     */
    public function setMarketingImageDescription($marketingImageDescription)
    {
      $this->marketingImageDescription = $marketingImageDescription;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\DisplayCallToAction
     */
    public function getMarketingImageDisplayCallToAction()
    {
      return $this->marketingImageDisplayCallToAction;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\DisplayCallToAction $marketingImageDisplayCallToAction
     * @return \Google\AdsApi\AdWords\v201802\cm\GmailAd
     */
    public function setMarketingImageDisplayCallToAction($marketingImageDisplayCallToAction)
    {
      $this->marketingImageDisplayCallToAction = $marketingImageDisplayCallToAction;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\ProductImage[]
     */
    public function getProductImages()
    {
      return $this->productImages;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\ProductImage[] $productImages
     * @return \Google\AdsApi\AdWords\v201802\cm\GmailAd
     */
    public function setProductImages(array $productImages)
    {
      $this->productImages = $productImages;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Video[]
     */
    public function getProductVideoList()
    {
      return $this->productVideoList;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Video[] $productVideoList
     * @return \Google\AdsApi\AdWords\v201802\cm\GmailAd
     */
    public function setProductVideoList(array $productVideoList)
    {
      $this->productVideoList = $productVideoList;
      return $this;
    }

}
