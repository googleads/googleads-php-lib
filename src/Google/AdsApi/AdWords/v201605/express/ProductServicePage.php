<?php

namespace Google\AdsApi\AdWords\v201605\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductServicePage extends \Google\AdsApi\AdWords\v201605\express\NoStatsPage
{

    /**
     * @var \Google\AdsApi\AdWords\v201605\express\ProductService[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201605\express\ProductService[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201605\express\ProductService[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201605\express\ProductService[] $entries
     * @return \Google\AdsApi\AdWords\v201605\express\ProductServicePage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
