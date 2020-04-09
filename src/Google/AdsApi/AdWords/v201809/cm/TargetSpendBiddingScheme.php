<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetSpendBiddingScheme extends \Google\AdsApi\AdWords\v201809\cm\BiddingScheme
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Money $bidCeiling
     */
    protected $bidCeiling = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Money $spendTarget
     */
    protected $spendTarget = null;

    /**
     * @param string $BiddingSchemeType
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $bidCeiling
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $spendTarget
     */
    public function __construct($BiddingSchemeType = null, $bidCeiling = null, $spendTarget = null)
    {
      parent::__construct($BiddingSchemeType);
      $this->bidCeiling = $bidCeiling;
      $this->spendTarget = $spendTarget;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Money
     */
    public function getBidCeiling()
    {
      return $this->bidCeiling;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $bidCeiling
     * @return \Google\AdsApi\AdWords\v201809\cm\TargetSpendBiddingScheme
     */
    public function setBidCeiling($bidCeiling)
    {
      $this->bidCeiling = $bidCeiling;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Money
     */
    public function getSpendTarget()
    {
      return $this->spendTarget;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $spendTarget
     * @return \Google\AdsApi\AdWords\v201809\cm\TargetSpendBiddingScheme
     */
    public function setSpendTarget($spendTarget)
    {
      $this->spendTarget = $spendTarget;
      return $this;
    }

}
