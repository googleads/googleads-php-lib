<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BiddingStrategyConfiguration
{

    /**
     * @var int $biddingStrategyId
     */
    protected $biddingStrategyId = null;

    /**
     * @var string $biddingStrategyName
     */
    protected $biddingStrategyName = null;

    /**
     * @var string $biddingStrategyType
     */
    protected $biddingStrategyType = null;

    /**
     * @var string $biddingStrategySource
     */
    protected $biddingStrategySource = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\BiddingScheme $biddingScheme
     */
    protected $biddingScheme = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Bids[] $bids
     */
    protected $bids = null;

    /**
     * @var float $targetRoasOverride
     */
    protected $targetRoasOverride = null;

    /**
     * @param int $biddingStrategyId
     * @param string $biddingStrategyName
     * @param string $biddingStrategyType
     * @param string $biddingStrategySource
     * @param \Google\AdsApi\AdWords\v201809\cm\BiddingScheme $biddingScheme
     * @param \Google\AdsApi\AdWords\v201809\cm\Bids[] $bids
     * @param float $targetRoasOverride
     */
    public function __construct($biddingStrategyId = null, $biddingStrategyName = null, $biddingStrategyType = null, $biddingStrategySource = null, $biddingScheme = null, array $bids = null, $targetRoasOverride = null)
    {
      $this->biddingStrategyId = $biddingStrategyId;
      $this->biddingStrategyName = $biddingStrategyName;
      $this->biddingStrategyType = $biddingStrategyType;
      $this->biddingStrategySource = $biddingStrategySource;
      $this->biddingScheme = $biddingScheme;
      $this->bids = $bids;
      $this->targetRoasOverride = $targetRoasOverride;
    }

    /**
     * @return int
     */
    public function getBiddingStrategyId()
    {
      return $this->biddingStrategyId;
    }

    /**
     * @param int $biddingStrategyId
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration
     */
    public function setBiddingStrategyId($biddingStrategyId)
    {
      $this->biddingStrategyId = (!is_null($biddingStrategyId) && PHP_INT_SIZE === 4)
          ? floatval($biddingStrategyId) : $biddingStrategyId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBiddingStrategyName()
    {
      return $this->biddingStrategyName;
    }

    /**
     * @param string $biddingStrategyName
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration
     */
    public function setBiddingStrategyName($biddingStrategyName)
    {
      $this->biddingStrategyName = $biddingStrategyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBiddingStrategyType()
    {
      return $this->biddingStrategyType;
    }

    /**
     * @param string $biddingStrategyType
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration
     */
    public function setBiddingStrategyType($biddingStrategyType)
    {
      $this->biddingStrategyType = $biddingStrategyType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBiddingStrategySource()
    {
      return $this->biddingStrategySource;
    }

    /**
     * @param string $biddingStrategySource
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration
     */
    public function setBiddingStrategySource($biddingStrategySource)
    {
      $this->biddingStrategySource = $biddingStrategySource;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddingScheme
     */
    public function getBiddingScheme()
    {
      return $this->biddingScheme;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\BiddingScheme $biddingScheme
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration
     */
    public function setBiddingScheme($biddingScheme)
    {
      $this->biddingScheme = $biddingScheme;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Bids[]
     */
    public function getBids()
    {
      return $this->bids;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Bids[] $bids
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration
     */
    public function setBids(array $bids)
    {
      $this->bids = $bids;
      return $this;
    }

    /**
     * @return float
     */
    public function getTargetRoasOverride()
    {
      return $this->targetRoasOverride;
    }

    /**
     * @param float $targetRoasOverride
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration
     */
    public function setTargetRoasOverride($targetRoasOverride)
    {
      $this->targetRoasOverride = $targetRoasOverride;
      return $this;
    }

}
