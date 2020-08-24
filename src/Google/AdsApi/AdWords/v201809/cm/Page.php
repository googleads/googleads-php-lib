<?php

namespace Google\AdsApi\AdWords\v201809\cm;


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
     * @var array $parameterMap
     */
    private $parameterMap = ['Page.Type' => 'PageType'];

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
     * @return \Google\AdsApi\AdWords\v201809\cm\Page
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
     * @return \Google\AdsApi\AdWords\v201809\cm\Page
     */
    public function setPageType($PageType)
    {
      $this->PageType = $PageType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201809\cm\Page
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
