<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PlacesOfInterestOperand extends \Google\AdsApi\AdWords\v201809\cm\FunctionArgumentOperand
{

    /**
     * @var string $category
     */
    protected $category = null;

    /**
     * @param string $FunctionArgumentOperandType
     * @param string $category
     */
    public function __construct($FunctionArgumentOperandType = null, $category = null)
    {
      parent::__construct($FunctionArgumentOperandType);
      $this->category = $category;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\PlacesOfInterestOperand
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

}
