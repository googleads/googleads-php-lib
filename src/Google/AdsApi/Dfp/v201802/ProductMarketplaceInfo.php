<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductMarketplaceInfo
{

    /**
     * @var string $adExchangeEnvironment
     */
    protected $adExchangeEnvironment = null;

    /**
     * @var string $additionalTerms
     */
    protected $additionalTerms = null;

    /**
     * @var string $additionalTermsSource
     */
    protected $additionalTermsSource = null;

    /**
     * @param string $adExchangeEnvironment
     * @param string $additionalTerms
     * @param string $additionalTermsSource
     */
    public function __construct($adExchangeEnvironment = null, $additionalTerms = null, $additionalTermsSource = null)
    {
      $this->adExchangeEnvironment = $adExchangeEnvironment;
      $this->additionalTerms = $additionalTerms;
      $this->additionalTermsSource = $additionalTermsSource;
    }

    /**
     * @return string
     */
    public function getAdExchangeEnvironment()
    {
      return $this->adExchangeEnvironment;
    }

    /**
     * @param string $adExchangeEnvironment
     * @return \Google\AdsApi\Dfp\v201802\ProductMarketplaceInfo
     */
    public function setAdExchangeEnvironment($adExchangeEnvironment)
    {
      $this->adExchangeEnvironment = $adExchangeEnvironment;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalTerms()
    {
      return $this->additionalTerms;
    }

    /**
     * @param string $additionalTerms
     * @return \Google\AdsApi\Dfp\v201802\ProductMarketplaceInfo
     */
    public function setAdditionalTerms($additionalTerms)
    {
      $this->additionalTerms = $additionalTerms;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalTermsSource()
    {
      return $this->additionalTermsSource;
    }

    /**
     * @param string $additionalTermsSource
     * @return \Google\AdsApi\Dfp\v201802\ProductMarketplaceInfo
     */
    public function setAdditionalTermsSource($additionalTermsSource)
    {
      $this->additionalTermsSource = $additionalTermsSource;
      return $this;
    }

}
