<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetSpendBiddingScheme extends \Google\AdsApi\AdWords\v201710\cm\BiddingScheme
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Money $bidCeiling
     */
    protected $bidCeiling = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Money $spendTarget
     */
    protected $spendTarget = null;

    /**
     * @var boolean $enhancedCpcEnabled
     */
    protected $enhancedCpcEnabled = null;

    /**
     * @param string $BiddingSchemeType
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $bidCeiling
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $spendTarget
     * @param boolean $enhancedCpcEnabled
     */
    public function __construct($BiddingSchemeType = null, $bidCeiling = null, $spendTarget = null, $enhancedCpcEnabled = null)
    {
      parent::__construct($BiddingSchemeType);
      $this->bidCeiling = $bidCeiling;
      $this->spendTarget = $spendTarget;
      $this->enhancedCpcEnabled = $enhancedCpcEnabled;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\TargetSpendBiddingScheme
     */
    public function setBidCeiling($bidCeiling)
    {
      $this->bidCeiling = $bidCeiling;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Money
     */
    public function getSpendTarget()
    {
      return $this->spendTarget;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $spendTarget
     * @return \Google\AdsApi\AdWords\v201710\cm\TargetSpendBiddingScheme
     */
    public function setSpendTarget($spendTarget)
    {
      $this->spendTarget = $spendTarget;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnhancedCpcEnabled()
    {
      return $this->enhancedCpcEnabled;
    }

    /**
     * @param boolean $enhancedCpcEnabled
     * @return \Google\AdsApi\AdWords\v201710\cm\TargetSpendBiddingScheme
     */
    public function setEnhancedCpcEnabled($enhancedCpcEnabled)
    {
      $this->enhancedCpcEnabled = $enhancedCpcEnabled;
      return $this;
    }

}
