<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UrlData
{

    /**
     * @var string $urlId
     */
    protected $urlId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\UrlList $finalUrls
     */
    protected $finalUrls = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\UrlList $finalMobileUrls
     */
    protected $finalMobileUrls = null;

    /**
     * @var string $trackingUrlTemplate
     */
    protected $trackingUrlTemplate = null;

    /**
     * @param string $urlId
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $finalUrls
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $finalMobileUrls
     * @param string $trackingUrlTemplate
     */
    public function __construct($urlId = null, $finalUrls = null, $finalMobileUrls = null, $trackingUrlTemplate = null)
    {
      $this->urlId = $urlId;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
    }

    /**
     * @return string
     */
    public function getUrlId()
    {
      return $this->urlId;
    }

    /**
     * @param string $urlId
     * @return \Google\AdsApi\AdWords\v201809\cm\UrlData
     */
    public function setUrlId($urlId)
    {
      $this->urlId = $urlId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\UrlList
     */
    public function getFinalUrls()
    {
      return $this->finalUrls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $finalUrls
     * @return \Google\AdsApi\AdWords\v201809\cm\UrlData
     */
    public function setFinalUrls($finalUrls)
    {
      $this->finalUrls = $finalUrls;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\UrlList
     */
    public function getFinalMobileUrls()
    {
      return $this->finalMobileUrls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $finalMobileUrls
     * @return \Google\AdsApi\AdWords\v201809\cm\UrlData
     */
    public function setFinalMobileUrls($finalMobileUrls)
    {
      $this->finalMobileUrls = $finalMobileUrls;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingUrlTemplate()
    {
      return $this->trackingUrlTemplate;
    }

    /**
     * @param string $trackingUrlTemplate
     * @return \Google\AdsApi\AdWords\v201809\cm\UrlData
     */
    public function setTrackingUrlTemplate($trackingUrlTemplate)
    {
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      return $this;
    }

}
