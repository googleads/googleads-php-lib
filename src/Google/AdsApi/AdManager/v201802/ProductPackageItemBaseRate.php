<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductPackageItemBaseRate extends \Google\AdsApi\AdManager\v201802\BaseRate
{

    /**
     * @var int $productPackageItemId
     */
    protected $productPackageItemId = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\Money $rate
     */
    protected $rate = null;

    /**
     * @param int $rateCardId
     * @param int $id
     * @param int $productPackageItemId
     * @param \Google\AdsApi\AdManager\v201802\Money $rate
     */
    public function __construct($rateCardId = null, $id = null, $productPackageItemId = null, $rate = null)
    {
      parent::__construct($rateCardId, $id);
      $this->productPackageItemId = $productPackageItemId;
      $this->rate = $rate;
    }

    /**
     * @return int
     */
    public function getProductPackageItemId()
    {
      return $this->productPackageItemId;
    }

    /**
     * @param int $productPackageItemId
     * @return \Google\AdsApi\AdManager\v201802\ProductPackageItemBaseRate
     */
    public function setProductPackageItemId($productPackageItemId)
    {
      $this->productPackageItemId = (!is_null($productPackageItemId) && PHP_INT_SIZE === 4)
          ? floatval($productPackageItemId) : $productPackageItemId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\Money
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\Money $rate
     * @return \Google\AdsApi\AdManager\v201802\ProductPackageItemBaseRate
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

}
