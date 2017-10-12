<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DomainCategory extends \Google\AdsApi\AdWords\v201710\cm\DimensionProperties
{

    /**
     * @var string $category
     */
    protected $category = null;

    /**
     * @var float $coverage
     */
    protected $coverage = null;

    /**
     * @var string $domainName
     */
    protected $domainName = null;

    /**
     * @var string $isoLanguage
     */
    protected $isoLanguage = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Money $recommendedCpc
     */
    protected $recommendedCpc = null;

    /**
     * @var boolean $hasChild
     */
    protected $hasChild = null;

    /**
     * @var int $categoryRank
     */
    protected $categoryRank = null;

    /**
     * @param string $DataEntryType
     * @param \Google\AdsApi\AdWords\v201710\cm\LevelOfDetail $levelOfDetail
     * @param string $category
     * @param float $coverage
     * @param string $domainName
     * @param string $isoLanguage
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $recommendedCpc
     * @param boolean $hasChild
     * @param int $categoryRank
     */
    public function __construct($DataEntryType = null, $levelOfDetail = null, $category = null, $coverage = null, $domainName = null, $isoLanguage = null, $recommendedCpc = null, $hasChild = null, $categoryRank = null)
    {
      parent::__construct($DataEntryType, $levelOfDetail);
      $this->category = $category;
      $this->coverage = $coverage;
      $this->domainName = $domainName;
      $this->isoLanguage = $isoLanguage;
      $this->recommendedCpc = $recommendedCpc;
      $this->hasChild = $hasChild;
      $this->categoryRank = $categoryRank;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param string $category
     * @return \Google\AdsApi\AdWords\v201710\cm\DomainCategory
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return float
     */
    public function getCoverage()
    {
      return $this->coverage;
    }

    /**
     * @param float $coverage
     * @return \Google\AdsApi\AdWords\v201710\cm\DomainCategory
     */
    public function setCoverage($coverage)
    {
      $this->coverage = $coverage;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
      return $this->domainName;
    }

    /**
     * @param string $domainName
     * @return \Google\AdsApi\AdWords\v201710\cm\DomainCategory
     */
    public function setDomainName($domainName)
    {
      $this->domainName = $domainName;
      return $this;
    }

    /**
     * @return string
     */
    public function getIsoLanguage()
    {
      return $this->isoLanguage;
    }

    /**
     * @param string $isoLanguage
     * @return \Google\AdsApi\AdWords\v201710\cm\DomainCategory
     */
    public function setIsoLanguage($isoLanguage)
    {
      $this->isoLanguage = $isoLanguage;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Money
     */
    public function getRecommendedCpc()
    {
      return $this->recommendedCpc;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $recommendedCpc
     * @return \Google\AdsApi\AdWords\v201710\cm\DomainCategory
     */
    public function setRecommendedCpc($recommendedCpc)
    {
      $this->recommendedCpc = $recommendedCpc;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasChild()
    {
      return $this->hasChild;
    }

    /**
     * @param boolean $hasChild
     * @return \Google\AdsApi\AdWords\v201710\cm\DomainCategory
     */
    public function setHasChild($hasChild)
    {
      $this->hasChild = $hasChild;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryRank()
    {
      return $this->categoryRank;
    }

    /**
     * @param int $categoryRank
     * @return \Google\AdsApi\AdWords\v201710\cm\DomainCategory
     */
    public function setCategoryRank($categoryRank)
    {
      $this->categoryRank = $categoryRank;
      return $this;
    }

}
