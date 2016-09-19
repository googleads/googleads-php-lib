<?php

namespace Google\AdsApi\AdWords\v201607\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BudgetSuggestion
{

    /**
     * @var \Google\AdsApi\AdWords\v201607\cm\Money $cpc
     */
    protected $cpc = null;

    /**
     * @var \Google\AdsApi\AdWords\v201607\cm\Money $minCpc
     */
    protected $minCpc = null;

    /**
     * @var \Google\AdsApi\AdWords\v201607\cm\Money $maxCpc
     */
    protected $maxCpc = null;

    /**
     * @var \Google\AdsApi\AdWords\v201607\cm\Money $cpm
     */
    protected $cpm = null;

    /**
     * @var \Google\AdsApi\AdWords\v201607\cm\Money $suggestedBudget
     */
    protected $suggestedBudget = null;

    /**
     * @var \Google\AdsApi\AdWords\v201607\cm\Money $minBudget
     */
    protected $minBudget = null;

    /**
     * @var \Google\AdsApi\AdWords\v201607\cm\Money $maxBudget
     */
    protected $maxBudget = null;

    /**
     * @var int $impressions
     */
    protected $impressions = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @param \Google\AdsApi\AdWords\v201607\cm\Money $cpc
     * @param \Google\AdsApi\AdWords\v201607\cm\Money $minCpc
     * @param \Google\AdsApi\AdWords\v201607\cm\Money $maxCpc
     * @param \Google\AdsApi\AdWords\v201607\cm\Money $cpm
     * @param \Google\AdsApi\AdWords\v201607\cm\Money $suggestedBudget
     * @param \Google\AdsApi\AdWords\v201607\cm\Money $minBudget
     * @param \Google\AdsApi\AdWords\v201607\cm\Money $maxBudget
     * @param int $impressions
     * @param string $currencyCode
     */
    public function __construct($cpc = null, $minCpc = null, $maxCpc = null, $cpm = null, $suggestedBudget = null, $minBudget = null, $maxBudget = null, $impressions = null, $currencyCode = null)
    {
      $this->cpc = $cpc;
      $this->minCpc = $minCpc;
      $this->maxCpc = $maxCpc;
      $this->cpm = $cpm;
      $this->suggestedBudget = $suggestedBudget;
      $this->minBudget = $minBudget;
      $this->maxBudget = $maxBudget;
      $this->impressions = $impressions;
      $this->currencyCode = $currencyCode;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\cm\Money
     */
    public function getCpc()
    {
      return $this->cpc;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\cm\Money $cpc
     * @return \Google\AdsApi\AdWords\v201607\express\BudgetSuggestion
     */
    public function setCpc($cpc)
    {
      $this->cpc = $cpc;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\cm\Money
     */
    public function getMinCpc()
    {
      return $this->minCpc;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\cm\Money $minCpc
     * @return \Google\AdsApi\AdWords\v201607\express\BudgetSuggestion
     */
    public function setMinCpc($minCpc)
    {
      $this->minCpc = $minCpc;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\cm\Money
     */
    public function getMaxCpc()
    {
      return $this->maxCpc;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\cm\Money $maxCpc
     * @return \Google\AdsApi\AdWords\v201607\express\BudgetSuggestion
     */
    public function setMaxCpc($maxCpc)
    {
      $this->maxCpc = $maxCpc;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\cm\Money
     */
    public function getCpm()
    {
      return $this->cpm;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\cm\Money $cpm
     * @return \Google\AdsApi\AdWords\v201607\express\BudgetSuggestion
     */
    public function setCpm($cpm)
    {
      $this->cpm = $cpm;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\cm\Money
     */
    public function getSuggestedBudget()
    {
      return $this->suggestedBudget;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\cm\Money $suggestedBudget
     * @return \Google\AdsApi\AdWords\v201607\express\BudgetSuggestion
     */
    public function setSuggestedBudget($suggestedBudget)
    {
      $this->suggestedBudget = $suggestedBudget;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\cm\Money
     */
    public function getMinBudget()
    {
      return $this->minBudget;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\cm\Money $minBudget
     * @return \Google\AdsApi\AdWords\v201607\express\BudgetSuggestion
     */
    public function setMinBudget($minBudget)
    {
      $this->minBudget = $minBudget;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\cm\Money
     */
    public function getMaxBudget()
    {
      return $this->maxBudget;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\cm\Money $maxBudget
     * @return \Google\AdsApi\AdWords\v201607\express\BudgetSuggestion
     */
    public function setMaxBudget($maxBudget)
    {
      $this->maxBudget = $maxBudget;
      return $this;
    }

    /**
     * @return int
     */
    public function getImpressions()
    {
      return $this->impressions;
    }

    /**
     * @param int $impressions
     * @return \Google\AdsApi\AdWords\v201607\express\BudgetSuggestion
     */
    public function setImpressions($impressions)
    {
      $this->impressions = $impressions;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return \Google\AdsApi\AdWords\v201607\express\BudgetSuggestion
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

}
