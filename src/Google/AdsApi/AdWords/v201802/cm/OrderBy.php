<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderBy
{

    /**
     * @var string $field
     */
    protected $field = null;

    /**
     * @var string $sortOrder
     */
    protected $sortOrder = null;

    /**
     * @param string $field
     * @param string $sortOrder
     */
    public function __construct($field = null, $sortOrder = null)
    {
      $this->field = $field;
      $this->sortOrder = $sortOrder;
    }

    /**
     * @return string
     */
    public function getField()
    {
      return $this->field;
    }

    /**
     * @param string $field
     * @return \Google\AdsApi\AdWords\v201802\cm\OrderBy
     */
    public function setField($field)
    {
      $this->field = $field;
      return $this;
    }

    /**
     * @return string
     */
    public function getSortOrder()
    {
      return $this->sortOrder;
    }

    /**
     * @param string $sortOrder
     * @return \Google\AdsApi\AdWords\v201802\cm\OrderBy
     */
    public function setSortOrder($sortOrder)
    {
      $this->sortOrder = $sortOrder;
      return $this;
    }

}
