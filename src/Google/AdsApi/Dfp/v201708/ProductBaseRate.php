<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductBaseRate extends \Google\AdsApi\Dfp\v201708\BaseRate
{

    /**
     * @var int $productId
     */
    protected $productId = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\Money $rate
     */
    protected $rate = null;

    /**
     * @param int $rateCardId
     * @param int $id
     * @param int $productId
     * @param \Google\AdsApi\Dfp\v201708\Money $rate
     */
    public function __construct($rateCardId = null, $id = null, $productId = null, $rate = null)
    {
      parent::__construct($rateCardId, $id);
      $this->productId = $productId;
      $this->rate = $rate;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
      return $this->productId;
    }

    /**
     * @param int $productId
     * @return \Google\AdsApi\Dfp\v201708\ProductBaseRate
     */
    public function setProductId($productId)
    {
      $this->productId = (!is_null($productId) && PHP_INT_SIZE === 4)
          ? floatval($productId) : $productId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\Money
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\Money $rate
     * @return \Google\AdsApi\Dfp\v201708\ProductBaseRate
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

}
