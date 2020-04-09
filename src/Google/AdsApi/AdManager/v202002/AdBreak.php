<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdBreak
{

    /**
     * @var \Google\AdsApi\AdManager\v202002\AdResponse $rootAdResponse
     */
    protected $rootAdResponse = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\AdDecisionCreative[] $adDecisionCreatives
     */
    protected $adDecisionCreatives = null;

    /**
     * @var int $podNum
     */
    protected $podNum = null;

    /**
     * @var int $linearAbsolutePodNum
     */
    protected $linearAbsolutePodNum = null;

    /**
     * @var int $adBreakDurationMillis
     */
    protected $adBreakDurationMillis = null;

    /**
     * @var int $filledDurationMillis
     */
    protected $filledDurationMillis = null;

    /**
     * @var int $servedDurationMillis
     */
    protected $servedDurationMillis = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var int $startTimeOffsetMillis
     */
    protected $startTimeOffsetMillis = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\SamError $samError
     */
    protected $samError = null;

    /**
     * @var int $midrollIndex
     */
    protected $midrollIndex = null;

    /**
     * @var boolean $decisionedAds
     */
    protected $decisionedAds = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\TrackingEvent[] $trackingEvents
     */
    protected $trackingEvents = null;

    /**
     * @param \Google\AdsApi\AdManager\v202002\AdResponse $rootAdResponse
     * @param \Google\AdsApi\AdManager\v202002\AdDecisionCreative[] $adDecisionCreatives
     * @param int $podNum
     * @param int $linearAbsolutePodNum
     * @param int $adBreakDurationMillis
     * @param int $filledDurationMillis
     * @param int $servedDurationMillis
     * @param \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     * @param int $startTimeOffsetMillis
     * @param \Google\AdsApi\AdManager\v202002\SamError $samError
     * @param int $midrollIndex
     * @param boolean $decisionedAds
     * @param \Google\AdsApi\AdManager\v202002\TrackingEvent[] $trackingEvents
     */
    public function __construct($rootAdResponse = null, array $adDecisionCreatives = null, $podNum = null, $linearAbsolutePodNum = null, $adBreakDurationMillis = null, $filledDurationMillis = null, $servedDurationMillis = null, $startDateTime = null, $startTimeOffsetMillis = null, $samError = null, $midrollIndex = null, $decisionedAds = null, array $trackingEvents = null)
    {
      $this->rootAdResponse = $rootAdResponse;
      $this->adDecisionCreatives = $adDecisionCreatives;
      $this->podNum = $podNum;
      $this->linearAbsolutePodNum = $linearAbsolutePodNum;
      $this->adBreakDurationMillis = $adBreakDurationMillis;
      $this->filledDurationMillis = $filledDurationMillis;
      $this->servedDurationMillis = $servedDurationMillis;
      $this->startDateTime = $startDateTime;
      $this->startTimeOffsetMillis = $startTimeOffsetMillis;
      $this->samError = $samError;
      $this->midrollIndex = $midrollIndex;
      $this->decisionedAds = $decisionedAds;
      $this->trackingEvents = $trackingEvents;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\AdResponse
     */
    public function getRootAdResponse()
    {
      return $this->rootAdResponse;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\AdResponse $rootAdResponse
     * @return \Google\AdsApi\AdManager\v202002\AdBreak
     */
    public function setRootAdResponse($rootAdResponse)
    {
      $this->rootAdResponse = $rootAdResponse;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\AdDecisionCreative[]
     */
    public function getAdDecisionCreatives()
    {
      return $this->adDecisionCreatives;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\AdDecisionCreative[]|null $adDecisionCreatives
     * @return \Google\AdsApi\AdManager\v202002\AdBreak
     */
    public function setAdDecisionCreatives(array $adDecisionCreatives = null)
    {
      $this->adDecisionCreatives = $adDecisionCreatives;
      return $this;
    }

    /**
     * @return int
     */
    public function getPodNum()
    {
      return $this->podNum;
    }

    /**
     * @param int $podNum
     * @return \Google\AdsApi\AdManager\v202002\AdBreak
     */
    public function setPodNum($podNum)
    {
      $this->podNum = $podNum;
      return $this;
    }

    /**
     * @return int
     */
    public function getLinearAbsolutePodNum()
    {
      return $this->linearAbsolutePodNum;
    }

    /**
     * @param int $linearAbsolutePodNum
     * @return \Google\AdsApi\AdManager\v202002\AdBreak
     */
    public function setLinearAbsolutePodNum($linearAbsolutePodNum)
    {
      $this->linearAbsolutePodNum = $linearAbsolutePodNum;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdBreakDurationMillis()
    {
      return $this->adBreakDurationMillis;
    }

    /**
     * @param int $adBreakDurationMillis
     * @return \Google\AdsApi\AdManager\v202002\AdBreak
     */
    public function setAdBreakDurationMillis($adBreakDurationMillis)
    {
      $this->adBreakDurationMillis = (!is_null($adBreakDurationMillis) && PHP_INT_SIZE === 4)
          ? floatval($adBreakDurationMillis) : $adBreakDurationMillis;
      return $this;
    }

    /**
     * @return int
     */
    public function getFilledDurationMillis()
    {
      return $this->filledDurationMillis;
    }

    /**
     * @param int $filledDurationMillis
     * @return \Google\AdsApi\AdManager\v202002\AdBreak
     */
    public function setFilledDurationMillis($filledDurationMillis)
    {
      $this->filledDurationMillis = (!is_null($filledDurationMillis) && PHP_INT_SIZE === 4)
          ? floatval($filledDurationMillis) : $filledDurationMillis;
      return $this;
    }

    /**
     * @return int
     */
    public function getServedDurationMillis()
    {
      return $this->servedDurationMillis;
    }

    /**
     * @param int $servedDurationMillis
     * @return \Google\AdsApi\AdManager\v202002\AdBreak
     */
    public function setServedDurationMillis($servedDurationMillis)
    {
      $this->servedDurationMillis = (!is_null($servedDurationMillis) && PHP_INT_SIZE === 4)
          ? floatval($servedDurationMillis) : $servedDurationMillis;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     * @return \Google\AdsApi\AdManager\v202002\AdBreak
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartTimeOffsetMillis()
    {
      return $this->startTimeOffsetMillis;
    }

    /**
     * @param int $startTimeOffsetMillis
     * @return \Google\AdsApi\AdManager\v202002\AdBreak
     */
    public function setStartTimeOffsetMillis($startTimeOffsetMillis)
    {
      $this->startTimeOffsetMillis = (!is_null($startTimeOffsetMillis) && PHP_INT_SIZE === 4)
          ? floatval($startTimeOffsetMillis) : $startTimeOffsetMillis;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\SamError
     */
    public function getSamError()
    {
      return $this->samError;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\SamError $samError
     * @return \Google\AdsApi\AdManager\v202002\AdBreak
     */
    public function setSamError($samError)
    {
      $this->samError = $samError;
      return $this;
    }

    /**
     * @return int
     */
    public function getMidrollIndex()
    {
      return $this->midrollIndex;
    }

    /**
     * @param int $midrollIndex
     * @return \Google\AdsApi\AdManager\v202002\AdBreak
     */
    public function setMidrollIndex($midrollIndex)
    {
      $this->midrollIndex = $midrollIndex;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDecisionedAds()
    {
      return $this->decisionedAds;
    }

    /**
     * @param boolean $decisionedAds
     * @return \Google\AdsApi\AdManager\v202002\AdBreak
     */
    public function setDecisionedAds($decisionedAds)
    {
      $this->decisionedAds = $decisionedAds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\TrackingEvent[]
     */
    public function getTrackingEvents()
    {
      return $this->trackingEvents;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\TrackingEvent[]|null $trackingEvents
     * @return \Google\AdsApi\AdManager\v202002\AdBreak
     */
    public function setTrackingEvents(array $trackingEvents = null)
    {
      $this->trackingEvents = $trackingEvents;
      return $this;
    }

}
