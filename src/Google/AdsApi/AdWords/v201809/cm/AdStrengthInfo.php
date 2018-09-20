<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdStrengthInfo
{

    /**
     * @var string $adStrength
     */
    protected $adStrength = null;

    /**
     * @var string[] $actionItems
     */
    protected $actionItems = null;

    /**
     * @param string $adStrength
     * @param string[] $actionItems
     */
    public function __construct($adStrength = null, array $actionItems = null)
    {
      $this->adStrength = $adStrength;
      $this->actionItems = $actionItems;
    }

    /**
     * @return string
     */
    public function getAdStrength()
    {
      return $this->adStrength;
    }

    /**
     * @param string $adStrength
     * @return \Google\AdsApi\AdWords\v201809\cm\AdStrengthInfo
     */
    public function setAdStrength($adStrength)
    {
      $this->adStrength = $adStrength;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getActionItems()
    {
      return $this->actionItems;
    }

    /**
     * @param string[] $actionItems
     * @return \Google\AdsApi\AdWords\v201809\cm\AdStrengthInfo
     */
    public function setActionItems(array $actionItems)
    {
      $this->actionItems = $actionItems;
      return $this;
    }

}
