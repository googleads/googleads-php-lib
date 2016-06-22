<?php

namespace Google\AdsApi\AdWords\v201605\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BudgetSuggestionSelector
{

    /**
     * @var \Google\AdsApi\AdWords\v201605\cm\Criterion[] $criteria
     */
    protected $criteria = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @param \Google\AdsApi\AdWords\v201605\cm\Criterion[] $criteria
     * @param string $currencyCode
     */
    public function __construct(array $criteria = null, $currencyCode = null)
    {
      $this->criteria = $criteria;
      $this->currencyCode = $currencyCode;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201605\cm\Criterion[]
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201605\cm\Criterion[] $criteria
     * @return \Google\AdsApi\AdWords\v201605\express\BudgetSuggestionSelector
     */
    public function setCriteria(array $criteria)
    {
      $this->criteria = $criteria;
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
     * @return \Google\AdsApi\AdWords\v201605\express\BudgetSuggestionSelector
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

}
