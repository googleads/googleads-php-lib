<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PriceTableRow
{

    /**
     * @var string $header
     */
    protected $header = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\UrlList $finalUrls
     */
    protected $finalUrls = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\UrlList $finalMobileUrls
     */
    protected $finalMobileUrls = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\MoneyWithCurrency $price
     */
    protected $price = null;

    /**
     * @var string $priceUnit
     */
    protected $priceUnit = null;

    /**
     * @param string $header
     * @param string $description
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $finalUrls
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $finalMobileUrls
     * @param \Google\AdsApi\AdWords\v201809\cm\MoneyWithCurrency $price
     * @param string $priceUnit
     */
    public function __construct($header = null, $description = null, $finalUrls = null, $finalMobileUrls = null, $price = null, $priceUnit = null)
    {
      $this->header = $header;
      $this->description = $description;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->price = $price;
      $this->priceUnit = $priceUnit;
    }

    /**
     * @return string
     */
    public function getHeader()
    {
      return $this->header;
    }

    /**
     * @param string $header
     * @return \Google\AdsApi\AdWords\v201809\cm\PriceTableRow
     */
    public function setHeader($header)
    {
      $this->header = $header;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\PriceTableRow
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\PriceTableRow
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
     * @return \Google\AdsApi\AdWords\v201809\cm\PriceTableRow
     */
    public function setFinalMobileUrls($finalMobileUrls)
    {
      $this->finalMobileUrls = $finalMobileUrls;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\MoneyWithCurrency
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\MoneyWithCurrency $price
     * @return \Google\AdsApi\AdWords\v201809\cm\PriceTableRow
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceUnit()
    {
      return $this->priceUnit;
    }

    /**
     * @param string $priceUnit
     * @return \Google\AdsApi\AdWords\v201809\cm\PriceTableRow
     */
    public function setPriceUnit($priceUnit)
    {
      $this->priceUnit = $priceUnit;
      return $this;
    }

}
