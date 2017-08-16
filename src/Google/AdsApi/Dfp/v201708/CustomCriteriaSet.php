<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomCriteriaSet extends \Google\AdsApi\Dfp\v201708\CustomCriteriaNode
{

    /**
     * @var string $logicalOperator
     */
    protected $logicalOperator = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\CustomCriteriaNode[] $children
     */
    protected $children = null;

    /**
     * @param string $logicalOperator
     * @param \Google\AdsApi\Dfp\v201708\CustomCriteriaNode[] $children
     */
    public function __construct($logicalOperator = null, array $children = null)
    {
      $this->logicalOperator = $logicalOperator;
      $this->children = $children;
    }

    /**
     * @return string
     */
    public function getLogicalOperator()
    {
      return $this->logicalOperator;
    }

    /**
     * @param string $logicalOperator
     * @return \Google\AdsApi\Dfp\v201708\CustomCriteriaSet
     */
    public function setLogicalOperator($logicalOperator)
    {
      $this->logicalOperator = $logicalOperator;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\CustomCriteriaNode[]
     */
    public function getChildren()
    {
      return $this->children;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\CustomCriteriaNode[] $children
     * @return \Google\AdsApi\Dfp\v201708\CustomCriteriaSet
     */
    public function setChildren(array $children)
    {
      $this->children = $children;
      return $this;
    }

}
