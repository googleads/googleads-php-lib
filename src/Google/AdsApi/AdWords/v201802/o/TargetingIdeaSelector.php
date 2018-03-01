<?php

namespace Google\AdsApi\AdWords\v201802\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingIdeaSelector
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\o\SearchParameter[] $searchParameters
     */
    protected $searchParameters = null;

    /**
     * @var string $ideaType
     */
    protected $ideaType = null;

    /**
     * @var string $requestType
     */
    protected $requestType = null;

    /**
     * @var string[] $requestedAttributeTypes
     */
    protected $requestedAttributeTypes = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Paging $paging
     */
    protected $paging = null;

    /**
     * @var string $localeCode
     */
    protected $localeCode = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\o\SearchParameter[] $searchParameters
     * @param string $ideaType
     * @param string $requestType
     * @param string[] $requestedAttributeTypes
     * @param \Google\AdsApi\AdWords\v201802\cm\Paging $paging
     * @param string $localeCode
     * @param string $currencyCode
     */
    public function __construct(array $searchParameters = null, $ideaType = null, $requestType = null, array $requestedAttributeTypes = null, $paging = null, $localeCode = null, $currencyCode = null)
    {
      $this->searchParameters = $searchParameters;
      $this->ideaType = $ideaType;
      $this->requestType = $requestType;
      $this->requestedAttributeTypes = $requestedAttributeTypes;
      $this->paging = $paging;
      $this->localeCode = $localeCode;
      $this->currencyCode = $currencyCode;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\o\SearchParameter[]
     */
    public function getSearchParameters()
    {
      return $this->searchParameters;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\o\SearchParameter[] $searchParameters
     * @return \Google\AdsApi\AdWords\v201802\o\TargetingIdeaSelector
     */
    public function setSearchParameters(array $searchParameters)
    {
      $this->searchParameters = $searchParameters;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdeaType()
    {
      return $this->ideaType;
    }

    /**
     * @param string $ideaType
     * @return \Google\AdsApi\AdWords\v201802\o\TargetingIdeaSelector
     */
    public function setIdeaType($ideaType)
    {
      $this->ideaType = $ideaType;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
      return $this->requestType;
    }

    /**
     * @param string $requestType
     * @return \Google\AdsApi\AdWords\v201802\o\TargetingIdeaSelector
     */
    public function setRequestType($requestType)
    {
      $this->requestType = $requestType;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getRequestedAttributeTypes()
    {
      return $this->requestedAttributeTypes;
    }

    /**
     * @param string[] $requestedAttributeTypes
     * @return \Google\AdsApi\AdWords\v201802\o\TargetingIdeaSelector
     */
    public function setRequestedAttributeTypes(array $requestedAttributeTypes)
    {
      $this->requestedAttributeTypes = $requestedAttributeTypes;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Paging $paging
     * @return \Google\AdsApi\AdWords\v201802\o\TargetingIdeaSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocaleCode()
    {
      return $this->localeCode;
    }

    /**
     * @param string $localeCode
     * @return \Google\AdsApi\AdWords\v201802\o\TargetingIdeaSelector
     */
    public function setLocaleCode($localeCode)
    {
      $this->localeCode = $localeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return \Google\AdsApi\AdWords\v201802\o\TargetingIdeaSelector
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

}
