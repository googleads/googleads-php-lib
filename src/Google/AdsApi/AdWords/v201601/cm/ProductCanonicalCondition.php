<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class ProductCanonicalCondition extends \Google\AdsApi\AdWords\v201601\cm\ProductDimension
{

    /**
     * @var string $condition
     */
    protected $condition = null;

    /**
     * @param string $ProductDimensionType
     * @param string $condition
     */
    public function __construct($ProductDimensionType = null, $condition = null)
    {
      parent::__construct($ProductDimensionType);
      $this->condition = $condition;
    }

    /**
     * @return string
     */
    public function getCondition()
    {
      return $this->condition;
    }

    /**
     * @param string $condition
     * @return \Google\AdsApi\AdWords\v201601\cm\ProductCanonicalCondition
     */
    public function setCondition($condition)
    {
      $this->condition = $condition;
      return $this;
    }

}
