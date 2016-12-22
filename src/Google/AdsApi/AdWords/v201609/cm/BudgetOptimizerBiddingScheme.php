<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BudgetOptimizerBiddingScheme extends \Google\AdsApi\AdWords\v201609\cm\BiddingScheme
{

    /**
     * @var \Google\AdsApi\AdWords\v201609\cm\Money $bidCeiling
     */
    protected $bidCeiling = null;

    /**
     * @var boolean $enhancedCpcEnabled
     */
    protected $enhancedCpcEnabled = null;

    /**
     * @param string $BiddingSchemeType
     * @param \Google\AdsApi\AdWords\v201609\cm\Money $bidCeiling
     * @param boolean $enhancedCpcEnabled
     */
    public function __construct($BiddingSchemeType = null, $bidCeiling = null, $enhancedCpcEnabled = null)
    {
      parent::__construct($BiddingSchemeType);
      $this->bidCeiling = $bidCeiling;
      $this->enhancedCpcEnabled = $enhancedCpcEnabled;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\cm\Money
     */
    public function getBidCeiling()
    {
      return $this->bidCeiling;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\cm\Money $bidCeiling
     * @return \Google\AdsApi\AdWords\v201609\cm\BudgetOptimizerBiddingScheme
     */
    public function setBidCeiling($bidCeiling)
    {
      $this->bidCeiling = $bidCeiling;
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
     * @return \Google\AdsApi\AdWords\v201609\cm\BudgetOptimizerBiddingScheme
     */
    public function setEnhancedCpcEnabled($enhancedCpcEnabled)
    {
      $this->enhancedCpcEnabled = $enhancedCpcEnabled;
      return $this;
    }

}
