<?php

namespace Google\AdsApi\AdWords\v201809\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RuleItem
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\rm\DateRuleItem $DateRuleItem
     */
    protected $DateRuleItem = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\rm\NumberRuleItem $NumberRuleItem
     */
    protected $NumberRuleItem = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\rm\StringRuleItem $StringRuleItem
     */
    protected $StringRuleItem = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\DateRuleItem $DateRuleItem
     * @param \Google\AdsApi\AdWords\v201809\rm\NumberRuleItem $NumberRuleItem
     * @param \Google\AdsApi\AdWords\v201809\rm\StringRuleItem $StringRuleItem
     */
    public function __construct($DateRuleItem = null, $NumberRuleItem = null, $StringRuleItem = null)
    {
      $this->DateRuleItem = $DateRuleItem;
      $this->NumberRuleItem = $NumberRuleItem;
      $this->StringRuleItem = $StringRuleItem;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\rm\DateRuleItem
     */
    public function getDateRuleItem()
    {
      return $this->DateRuleItem;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\DateRuleItem $DateRuleItem
     * @return \Google\AdsApi\AdWords\v201809\rm\RuleItem
     */
    public function setDateRuleItem($DateRuleItem)
    {
      $this->DateRuleItem = $DateRuleItem;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\rm\NumberRuleItem
     */
    public function getNumberRuleItem()
    {
      return $this->NumberRuleItem;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\NumberRuleItem $NumberRuleItem
     * @return \Google\AdsApi\AdWords\v201809\rm\RuleItem
     */
    public function setNumberRuleItem($NumberRuleItem)
    {
      $this->NumberRuleItem = $NumberRuleItem;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\rm\StringRuleItem
     */
    public function getStringRuleItem()
    {
      return $this->StringRuleItem;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\StringRuleItem $StringRuleItem
     * @return \Google\AdsApi\AdWords\v201809\rm\RuleItem
     */
    public function setStringRuleItem($StringRuleItem)
    {
      $this->StringRuleItem = $StringRuleItem;
      return $this;
    }

}
