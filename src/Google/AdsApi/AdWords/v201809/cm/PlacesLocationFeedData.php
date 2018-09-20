<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PlacesLocationFeedData extends \Google\AdsApi\AdWords\v201809\cm\SystemFeedGenerationData
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\OAuthInfo $oAuthInfo
     */
    protected $oAuthInfo = null;

    /**
     * @var string $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var string $businessAccountIdentifier
     */
    protected $businessAccountIdentifier = null;

    /**
     * @var string $businessNameFilter
     */
    protected $businessNameFilter = null;

    /**
     * @var string[] $categoryFilters
     */
    protected $categoryFilters = null;

    /**
     * @var string[] $labelFilters
     */
    protected $labelFilters = null;

    /**
     * @param string $SystemFeedGenerationDataType
     * @param \Google\AdsApi\AdWords\v201809\cm\OAuthInfo $oAuthInfo
     * @param string $emailAddress
     * @param string $businessAccountIdentifier
     * @param string $businessNameFilter
     * @param string[] $categoryFilters
     * @param string[] $labelFilters
     */
    public function __construct($SystemFeedGenerationDataType = null, $oAuthInfo = null, $emailAddress = null, $businessAccountIdentifier = null, $businessNameFilter = null, array $categoryFilters = null, array $labelFilters = null)
    {
      parent::__construct($SystemFeedGenerationDataType);
      $this->oAuthInfo = $oAuthInfo;
      $this->emailAddress = $emailAddress;
      $this->businessAccountIdentifier = $businessAccountIdentifier;
      $this->businessNameFilter = $businessNameFilter;
      $this->categoryFilters = $categoryFilters;
      $this->labelFilters = $labelFilters;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\OAuthInfo
     */
    public function getOAuthInfo()
    {
      return $this->oAuthInfo;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\OAuthInfo $oAuthInfo
     * @return \Google\AdsApi\AdWords\v201809\cm\PlacesLocationFeedData
     */
    public function setOAuthInfo($oAuthInfo)
    {
      $this->oAuthInfo = $oAuthInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
      return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return \Google\AdsApi\AdWords\v201809\cm\PlacesLocationFeedData
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getBusinessAccountIdentifier()
    {
      return $this->businessAccountIdentifier;
    }

    /**
     * @param string $businessAccountIdentifier
     * @return \Google\AdsApi\AdWords\v201809\cm\PlacesLocationFeedData
     */
    public function setBusinessAccountIdentifier($businessAccountIdentifier)
    {
      $this->businessAccountIdentifier = $businessAccountIdentifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getBusinessNameFilter()
    {
      return $this->businessNameFilter;
    }

    /**
     * @param string $businessNameFilter
     * @return \Google\AdsApi\AdWords\v201809\cm\PlacesLocationFeedData
     */
    public function setBusinessNameFilter($businessNameFilter)
    {
      $this->businessNameFilter = $businessNameFilter;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getCategoryFilters()
    {
      return $this->categoryFilters;
    }

    /**
     * @param string[] $categoryFilters
     * @return \Google\AdsApi\AdWords\v201809\cm\PlacesLocationFeedData
     */
    public function setCategoryFilters(array $categoryFilters)
    {
      $this->categoryFilters = $categoryFilters;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getLabelFilters()
    {
      return $this->labelFilters;
    }

    /**
     * @param string[] $labelFilters
     * @return \Google\AdsApi\AdWords\v201809\cm\PlacesLocationFeedData
     */
    public function setLabelFilters(array $labelFilters)
    {
      $this->labelFilters = $labelFilters;
      return $this;
    }

}
