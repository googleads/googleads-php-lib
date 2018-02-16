<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductTemplateBaseRate extends \Google\AdsApi\Dfp\v201708\BaseRate
{

    /**
     * @var int $productTemplateId
     */
    protected $productTemplateId = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\Money $rate
     */
    protected $rate = null;

    /**
     * @param int $rateCardId
     * @param int $id
     * @param int $productTemplateId
     * @param \Google\AdsApi\Dfp\v201708\Money $rate
     */
    public function __construct($rateCardId = null, $id = null, $productTemplateId = null, $rate = null)
    {
      parent::__construct($rateCardId, $id);
      $this->productTemplateId = $productTemplateId;
      $this->rate = $rate;
    }

    /**
     * @return int
     */
    public function getProductTemplateId()
    {
      return $this->productTemplateId;
    }

    /**
     * @param int $productTemplateId
     * @return \Google\AdsApi\Dfp\v201708\ProductTemplateBaseRate
     */
    public function setProductTemplateId($productTemplateId)
    {
      $this->productTemplateId = (!is_null($productTemplateId) && PHP_INT_SIZE === 4)
          ? floatval($productTemplateId) : $productTemplateId;
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
     * @return \Google\AdsApi\Dfp\v201708\ProductTemplateBaseRate
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

}
