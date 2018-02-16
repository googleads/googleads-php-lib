<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LocationCriterion
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Location $location
     */
    protected $location = null;

    /**
     * @var string $canonicalName
     */
    protected $canonicalName = null;

    /**
     * @var int $reach
     */
    protected $reach = null;

    /**
     * @var string $locale
     */
    protected $locale = null;

    /**
     * @var string $searchTerm
     */
    protected $searchTerm = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Location $location
     * @param string $canonicalName
     * @param int $reach
     * @param string $locale
     * @param string $searchTerm
     * @param string $countryCode
     */
    public function __construct($location = null, $canonicalName = null, $reach = null, $locale = null, $searchTerm = null, $countryCode = null)
    {
      $this->location = $location;
      $this->canonicalName = $canonicalName;
      $this->reach = $reach;
      $this->locale = $locale;
      $this->searchTerm = $searchTerm;
      $this->countryCode = $countryCode;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Location
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Location $location
     * @return \Google\AdsApi\AdWords\v201710\cm\LocationCriterion
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return string
     */
    public function getCanonicalName()
    {
      return $this->canonicalName;
    }

    /**
     * @param string $canonicalName
     * @return \Google\AdsApi\AdWords\v201710\cm\LocationCriterion
     */
    public function setCanonicalName($canonicalName)
    {
      $this->canonicalName = $canonicalName;
      return $this;
    }

    /**
     * @return int
     */
    public function getReach()
    {
      return $this->reach;
    }

    /**
     * @param int $reach
     * @return \Google\AdsApi\AdWords\v201710\cm\LocationCriterion
     */
    public function setReach($reach)
    {
      $this->reach = (!is_null($reach) && PHP_INT_SIZE === 4)
          ? floatval($reach) : $reach;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
      return $this->locale;
    }

    /**
     * @param string $locale
     * @return \Google\AdsApi\AdWords\v201710\cm\LocationCriterion
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchTerm()
    {
      return $this->searchTerm;
    }

    /**
     * @param string $searchTerm
     * @return \Google\AdsApi\AdWords\v201710\cm\LocationCriterion
     */
    public function setSearchTerm($searchTerm)
    {
      $this->searchTerm = $searchTerm;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return \Google\AdsApi\AdWords\v201710\cm\LocationCriterion
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

}
