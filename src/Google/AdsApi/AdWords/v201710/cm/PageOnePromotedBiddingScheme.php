<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PageOnePromotedBiddingScheme extends \Google\AdsApi\AdWords\v201710\cm\BiddingScheme
{

    /**
     * @var string $strategyGoal
     */
    protected $strategyGoal = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Money $bidCeiling
     */
    protected $bidCeiling = null;

    /**
     * @var float $bidModifier
     */
    protected $bidModifier = null;

    /**
     * @var boolean $bidChangesForRaisesOnly
     */
    protected $bidChangesForRaisesOnly = null;

    /**
     * @var boolean $raiseBidWhenBudgetConstrained
     */
    protected $raiseBidWhenBudgetConstrained = null;

    /**
     * @var boolean $raiseBidWhenLowQualityScore
     */
    protected $raiseBidWhenLowQualityScore = null;

    /**
     * @param string $BiddingSchemeType
     * @param string $strategyGoal
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $bidCeiling
     * @param float $bidModifier
     * @param boolean $bidChangesForRaisesOnly
     * @param boolean $raiseBidWhenBudgetConstrained
     * @param boolean $raiseBidWhenLowQualityScore
     */
    public function __construct($BiddingSchemeType = null, $strategyGoal = null, $bidCeiling = null, $bidModifier = null, $bidChangesForRaisesOnly = null, $raiseBidWhenBudgetConstrained = null, $raiseBidWhenLowQualityScore = null)
    {
      parent::__construct($BiddingSchemeType);
      $this->strategyGoal = $strategyGoal;
      $this->bidCeiling = $bidCeiling;
      $this->bidModifier = $bidModifier;
      $this->bidChangesForRaisesOnly = $bidChangesForRaisesOnly;
      $this->raiseBidWhenBudgetConstrained = $raiseBidWhenBudgetConstrained;
      $this->raiseBidWhenLowQualityScore = $raiseBidWhenLowQualityScore;
    }

    /**
     * @return string
     */
    public function getStrategyGoal()
    {
      return $this->strategyGoal;
    }

    /**
     * @param string $strategyGoal
     * @return \Google\AdsApi\AdWords\v201710\cm\PageOnePromotedBiddingScheme
     */
    public function setStrategyGoal($strategyGoal)
    {
      $this->strategyGoal = $strategyGoal;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Money
     */
    public function getBidCeiling()
    {
      return $this->bidCeiling;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $bidCeiling
     * @return \Google\AdsApi\AdWords\v201710\cm\PageOnePromotedBiddingScheme
     */
    public function setBidCeiling($bidCeiling)
    {
      $this->bidCeiling = $bidCeiling;
      return $this;
    }

    /**
     * @return float
     */
    public function getBidModifier()
    {
      return $this->bidModifier;
    }

    /**
     * @param float $bidModifier
     * @return \Google\AdsApi\AdWords\v201710\cm\PageOnePromotedBiddingScheme
     */
    public function setBidModifier($bidModifier)
    {
      $this->bidModifier = $bidModifier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBidChangesForRaisesOnly()
    {
      return $this->bidChangesForRaisesOnly;
    }

    /**
     * @param boolean $bidChangesForRaisesOnly
     * @return \Google\AdsApi\AdWords\v201710\cm\PageOnePromotedBiddingScheme
     */
    public function setBidChangesForRaisesOnly($bidChangesForRaisesOnly)
    {
      $this->bidChangesForRaisesOnly = $bidChangesForRaisesOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRaiseBidWhenBudgetConstrained()
    {
      return $this->raiseBidWhenBudgetConstrained;
    }

    /**
     * @param boolean $raiseBidWhenBudgetConstrained
     * @return \Google\AdsApi\AdWords\v201710\cm\PageOnePromotedBiddingScheme
     */
    public function setRaiseBidWhenBudgetConstrained($raiseBidWhenBudgetConstrained)
    {
      $this->raiseBidWhenBudgetConstrained = $raiseBidWhenBudgetConstrained;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRaiseBidWhenLowQualityScore()
    {
      return $this->raiseBidWhenLowQualityScore;
    }

    /**
     * @param boolean $raiseBidWhenLowQualityScore
     * @return \Google\AdsApi\AdWords\v201710\cm\PageOnePromotedBiddingScheme
     */
    public function setRaiseBidWhenLowQualityScore($raiseBidWhenLowQualityScore)
    {
      $this->raiseBidWhenLowQualityScore = $raiseBidWhenLowQualityScore;
      return $this;
    }

}
