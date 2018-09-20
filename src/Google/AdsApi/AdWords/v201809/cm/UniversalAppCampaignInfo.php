<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UniversalAppCampaignInfo
{

    /**
     * @var string $biddingStrategyGoalType
     */
    protected $biddingStrategyGoalType = null;

    /**
     * @var string $appId
     */
    protected $appId = null;

    /**
     * @var string $appVendor
     */
    protected $appVendor = null;

    /**
     * @param string $biddingStrategyGoalType
     * @param string $appId
     * @param string $appVendor
     */
    public function __construct($biddingStrategyGoalType = null, $appId = null, $appVendor = null)
    {
      $this->biddingStrategyGoalType = $biddingStrategyGoalType;
      $this->appId = $appId;
      $this->appVendor = $appVendor;
    }

    /**
     * @return string
     */
    public function getBiddingStrategyGoalType()
    {
      return $this->biddingStrategyGoalType;
    }

    /**
     * @param string $biddingStrategyGoalType
     * @return \Google\AdsApi\AdWords\v201809\cm\UniversalAppCampaignInfo
     */
    public function setBiddingStrategyGoalType($biddingStrategyGoalType)
    {
      $this->biddingStrategyGoalType = $biddingStrategyGoalType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppId()
    {
      return $this->appId;
    }

    /**
     * @param string $appId
     * @return \Google\AdsApi\AdWords\v201809\cm\UniversalAppCampaignInfo
     */
    public function setAppId($appId)
    {
      $this->appId = $appId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppVendor()
    {
      return $this->appVendor;
    }

    /**
     * @param string $appVendor
     * @return \Google\AdsApi\AdWords\v201809\cm\UniversalAppCampaignInfo
     */
    public function setAppVendor($appVendor)
    {
      $this->appVendor = $appVendor;
      return $this;
    }

}
