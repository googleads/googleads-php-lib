<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class Page
{

    /**
     * @var int $totalNumEntries
     */
    protected $totalNumEntries = null;

    /**
     * @var string $PageType
     */
    protected $PageType = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     */
    public function __construct($totalNumEntries = null, $PageType = null)
    {
      $this->totalNumEntries = $totalNumEntries;
      $this->PageType = $PageType;
    }

    /**
     * @return int
     */
    public function getTotalNumEntries()
    {
      return $this->totalNumEntries;
    }

    /**
     * @param int $totalNumEntries
     * @return \Google\AdsApi\AdWords\v201605\cm\Page
     */
    public function setTotalNumEntries($totalNumEntries)
    {
      $this->totalNumEntries = $totalNumEntries;
      return $this;
    }

    /**
     * @return string
     */
    public function getPageType()
    {
      return $this->PageType;
    }

    /**
     * @param string $PageType
     * @return \Google\AdsApi\AdWords\v201605\cm\Page
     */
    public function setPageType($PageType)
    {
      $this->PageType = $PageType;
      return $this;
    }

}
