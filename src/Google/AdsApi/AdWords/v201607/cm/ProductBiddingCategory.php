<?php

namespace Google\AdsApi\AdWords\v201607\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductBiddingCategory extends \Google\AdsApi\AdWords\v201607\cm\ProductDimension
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var int $value
     */
    protected $value = null;

    /**
     * @param string $ProductDimensionType
     * @param string $type
     * @param int $value
     */
    public function __construct($ProductDimensionType = null, $type = null, $value = null)
    {
      parent::__construct($ProductDimensionType);
      $this->type = $type;
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\AdWords\v201607\cm\ProductBiddingCategory
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param int $value
     * @return \Google\AdsApi\AdWords\v201607\cm\ProductBiddingCategory
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
