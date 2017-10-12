<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetOutrankShareBiddingScheme extends \Google\AdsApi\AdWords\v201710\cm\BiddingScheme
{

    /**
     * @var int $targetOutrankShare
     */
    protected $targetOutrankShare = null;

    /**
     * @var string $competitorDomain
     */
    protected $competitorDomain = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Money $maxCpcBidCeiling
     */
    protected $maxCpcBidCeiling = null;

    /**
     * @var boolean $bidChangesForRaisesOnly
     */
    protected $bidChangesForRaisesOnly = null;

    /**
     * @var boolean $raiseBidWhenLowQualityScore
     */
    protected $raiseBidWhenLowQualityScore = null;

    /**
     * @param string $BiddingSchemeType
     * @param int $targetOutrankShare
     * @param string $competitorDomain
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $maxCpcBidCeiling
     * @param boolean $bidChangesForRaisesOnly
     * @param boolean $raiseBidWhenLowQualityScore
     */
    public function __construct($BiddingSchemeType = null, $targetOutrankShare = null, $competitorDomain = null, $maxCpcBidCeiling = null, $bidChangesForRaisesOnly = null, $raiseBidWhenLowQualityScore = null)
    {
      parent::__construct($BiddingSchemeType);
      $this->targetOutrankShare = $targetOutrankShare;
      $this->competitorDomain = $competitorDomain;
      $this->maxCpcBidCeiling = $maxCpcBidCeiling;
      $this->bidChangesForRaisesOnly = $bidChangesForRaisesOnly;
      $this->raiseBidWhenLowQualityScore = $raiseBidWhenLowQualityScore;
    }

    /**
     * @return int
     */
    public function getTargetOutrankShare()
    {
      return $this->targetOutrankShare;
    }

    /**
     * @param int $targetOutrankShare
     * @return \Google\AdsApi\AdWords\v201710\cm\TargetOutrankShareBiddingScheme
     */
    public function setTargetOutrankShare($targetOutrankShare)
    {
      $this->targetOutrankShare = $targetOutrankShare;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompetitorDomain()
    {
      return $this->competitorDomain;
    }

    /**
     * @param string $competitorDomain
     * @return \Google\AdsApi\AdWords\v201710\cm\TargetOutrankShareBiddingScheme
     */
    public function setCompetitorDomain($competitorDomain)
    {
      $this->competitorDomain = $competitorDomain;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Money
     */
    public function getMaxCpcBidCeiling()
    {
      return $this->maxCpcBidCeiling;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $maxCpcBidCeiling
     * @return \Google\AdsApi\AdWords\v201710\cm\TargetOutrankShareBiddingScheme
     */
    public function setMaxCpcBidCeiling($maxCpcBidCeiling)
    {
      $this->maxCpcBidCeiling = $maxCpcBidCeiling;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\TargetOutrankShareBiddingScheme
     */
    public function setBidChangesForRaisesOnly($bidChangesForRaisesOnly)
    {
      $this->bidChangesForRaisesOnly = $bidChangesForRaisesOnly;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\TargetOutrankShareBiddingScheme
     */
    public function setRaiseBidWhenLowQualityScore($raiseBidWhenLowQualityScore)
    {
      $this->raiseBidWhenLowQualityScore = $raiseBidWhenLowQualityScore;
      return $this;
    }

}
