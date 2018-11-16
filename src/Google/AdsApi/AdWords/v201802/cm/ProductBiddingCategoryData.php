<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductBiddingCategoryData extends \Google\AdsApi\AdWords\v201802\cm\ConstantData
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategory $dimensionValue
     */
    protected $dimensionValue = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategory $parentDimensionValue
     */
    protected $parentDimensionValue = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\String_StringMapEntry[] $displayValue
     */
    protected $displayValue = null;

    /**
     * @param string $ConstantDataType
     * @param \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategory $dimensionValue
     * @param \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategory $parentDimensionValue
     * @param string $country
     * @param string $status
     * @param \Google\AdsApi\AdWords\v201802\cm\String_StringMapEntry[] $displayValue
     */
    public function __construct($ConstantDataType = null, $dimensionValue = null, $parentDimensionValue = null, $country = null, $status = null, array $displayValue = null)
    {
      parent::__construct($ConstantDataType);
      $this->dimensionValue = $dimensionValue;
      $this->parentDimensionValue = $parentDimensionValue;
      $this->country = $country;
      $this->status = $status;
      $this->displayValue = $displayValue;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategory
     */
    public function getDimensionValue()
    {
      return $this->dimensionValue;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategory $dimensionValue
     * @return \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategoryData
     */
    public function setDimensionValue($dimensionValue)
    {
      $this->dimensionValue = $dimensionValue;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategory
     */
    public function getParentDimensionValue()
    {
      return $this->parentDimensionValue;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategory $parentDimensionValue
     * @return \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategoryData
     */
    public function setParentDimensionValue($parentDimensionValue)
    {
      $this->parentDimensionValue = $parentDimensionValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategoryData
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategoryData
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\String_StringMapEntry[]
     */
    public function getDisplayValue()
    {
      return $this->displayValue;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\String_StringMapEntry[] $displayValue
     * @return \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategoryData
     */
    public function setDisplayValue(array $displayValue)
    {
      $this->displayValue = $displayValue;
      return $this;
    }

}
