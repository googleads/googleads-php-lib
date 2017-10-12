<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Selector
{

    /**
     * @var string[] $fields
     */
    protected $fields = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Predicate[] $predicates
     */
    protected $predicates = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\DateRange $dateRange
     */
    protected $dateRange = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\OrderBy[] $ordering
     */
    protected $ordering = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Paging $paging
     */
    protected $paging = null;

    /**
     * @param string[] $fields
     * @param \Google\AdsApi\AdWords\v201710\cm\Predicate[] $predicates
     * @param \Google\AdsApi\AdWords\v201710\cm\DateRange $dateRange
     * @param \Google\AdsApi\AdWords\v201710\cm\OrderBy[] $ordering
     * @param \Google\AdsApi\AdWords\v201710\cm\Paging $paging
     */
    public function __construct(array $fields = null, array $predicates = null, $dateRange = null, array $ordering = null, $paging = null)
    {
      $this->fields = $fields;
      $this->predicates = $predicates;
      $this->dateRange = $dateRange;
      $this->ordering = $ordering;
      $this->paging = $paging;
    }

    /**
     * @return string[]
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param string[] $fields
     * @return \Google\AdsApi\AdWords\v201710\cm\Selector
     */
    public function setFields(array $fields)
    {
      $this->fields = $fields;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Predicate[]
     */
    public function getPredicates()
    {
      return $this->predicates;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Predicate[] $predicates
     * @return \Google\AdsApi\AdWords\v201710\cm\Selector
     */
    public function setPredicates(array $predicates)
    {
      $this->predicates = $predicates;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\DateRange
     */
    public function getDateRange()
    {
      return $this->dateRange;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\DateRange $dateRange
     * @return \Google\AdsApi\AdWords\v201710\cm\Selector
     */
    public function setDateRange($dateRange)
    {
      $this->dateRange = $dateRange;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\OrderBy[]
     */
    public function getOrdering()
    {
      return $this->ordering;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\OrderBy[] $ordering
     * @return \Google\AdsApi\AdWords\v201710\cm\Selector
     */
    public function setOrdering(array $ordering)
    {
      $this->ordering = $ordering;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Paging $paging
     * @return \Google\AdsApi\AdWords\v201710\cm\Selector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
