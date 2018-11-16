<?php

namespace Google\AdsApi\AdWords\v201802\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CategoryProductsAndServicesSearchParameter extends \Google\AdsApi\AdWords\v201802\o\SearchParameter
{

    /**
     * @var int $categoryId
     */
    protected $categoryId = null;

    /**
     * @param string $SearchParameterType
     * @param int $categoryId
     */
    public function __construct($SearchParameterType = null, $categoryId = null)
    {
      parent::__construct($SearchParameterType);
      $this->categoryId = $categoryId;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
      return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return \Google\AdsApi\AdWords\v201802\o\CategoryProductsAndServicesSearchParameter
     */
    public function setCategoryId($categoryId)
    {
      $this->categoryId = $categoryId;
      return $this;
    }

}
