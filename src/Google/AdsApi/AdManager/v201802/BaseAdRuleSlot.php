<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BaseAdRuleSlot
{

    /**
     * @var string $slotBehavior
     */
    protected $slotBehavior = null;

    /**
     * @var int $minVideoAdDuration
     */
    protected $minVideoAdDuration = null;

    /**
     * @var int $maxVideoAdDuration
     */
    protected $maxVideoAdDuration = null;

    /**
     * @var string $videoMidrollFrequencyType
     */
    protected $videoMidrollFrequencyType = null;

    /**
     * @var string $videoMidrollFrequency
     */
    protected $videoMidrollFrequency = null;

    /**
     * @var string $bumper
     */
    protected $bumper = null;

    /**
     * @var int $maxBumperDuration
     */
    protected $maxBumperDuration = null;

    /**
     * @var int $minPodDuration
     */
    protected $minPodDuration = null;

    /**
     * @var int $maxPodDuration
     */
    protected $maxPodDuration = null;

    /**
     * @var int $maxAdsInPod
     */
    protected $maxAdsInPod = null;

    /**
     * @param string $slotBehavior
     * @param int $minVideoAdDuration
     * @param int $maxVideoAdDuration
     * @param string $videoMidrollFrequencyType
     * @param string $videoMidrollFrequency
     * @param string $bumper
     * @param int $maxBumperDuration
     * @param int $minPodDuration
     * @param int $maxPodDuration
     * @param int $maxAdsInPod
     */
    public function __construct($slotBehavior = null, $minVideoAdDuration = null, $maxVideoAdDuration = null, $videoMidrollFrequencyType = null, $videoMidrollFrequency = null, $bumper = null, $maxBumperDuration = null, $minPodDuration = null, $maxPodDuration = null, $maxAdsInPod = null)
    {
      $this->slotBehavior = $slotBehavior;
      $this->minVideoAdDuration = $minVideoAdDuration;
      $this->maxVideoAdDuration = $maxVideoAdDuration;
      $this->videoMidrollFrequencyType = $videoMidrollFrequencyType;
      $this->videoMidrollFrequency = $videoMidrollFrequency;
      $this->bumper = $bumper;
      $this->maxBumperDuration = $maxBumperDuration;
      $this->minPodDuration = $minPodDuration;
      $this->maxPodDuration = $maxPodDuration;
      $this->maxAdsInPod = $maxAdsInPod;
    }

    /**
     * @return string
     */
    public function getSlotBehavior()
    {
      return $this->slotBehavior;
    }

    /**
     * @param string $slotBehavior
     * @return \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot
     */
    public function setSlotBehavior($slotBehavior)
    {
      $this->slotBehavior = $slotBehavior;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinVideoAdDuration()
    {
      return $this->minVideoAdDuration;
    }

    /**
     * @param int $minVideoAdDuration
     * @return \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot
     */
    public function setMinVideoAdDuration($minVideoAdDuration)
    {
      $this->minVideoAdDuration = (!is_null($minVideoAdDuration) && PHP_INT_SIZE === 4)
          ? floatval($minVideoAdDuration) : $minVideoAdDuration;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxVideoAdDuration()
    {
      return $this->maxVideoAdDuration;
    }

    /**
     * @param int $maxVideoAdDuration
     * @return \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot
     */
    public function setMaxVideoAdDuration($maxVideoAdDuration)
    {
      $this->maxVideoAdDuration = (!is_null($maxVideoAdDuration) && PHP_INT_SIZE === 4)
          ? floatval($maxVideoAdDuration) : $maxVideoAdDuration;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoMidrollFrequencyType()
    {
      return $this->videoMidrollFrequencyType;
    }

    /**
     * @param string $videoMidrollFrequencyType
     * @return \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot
     */
    public function setVideoMidrollFrequencyType($videoMidrollFrequencyType)
    {
      $this->videoMidrollFrequencyType = $videoMidrollFrequencyType;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoMidrollFrequency()
    {
      return $this->videoMidrollFrequency;
    }

    /**
     * @param string $videoMidrollFrequency
     * @return \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot
     */
    public function setVideoMidrollFrequency($videoMidrollFrequency)
    {
      $this->videoMidrollFrequency = $videoMidrollFrequency;
      return $this;
    }

    /**
     * @return string
     */
    public function getBumper()
    {
      return $this->bumper;
    }

    /**
     * @param string $bumper
     * @return \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot
     */
    public function setBumper($bumper)
    {
      $this->bumper = $bumper;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxBumperDuration()
    {
      return $this->maxBumperDuration;
    }

    /**
     * @param int $maxBumperDuration
     * @return \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot
     */
    public function setMaxBumperDuration($maxBumperDuration)
    {
      $this->maxBumperDuration = (!is_null($maxBumperDuration) && PHP_INT_SIZE === 4)
          ? floatval($maxBumperDuration) : $maxBumperDuration;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinPodDuration()
    {
      return $this->minPodDuration;
    }

    /**
     * @param int $minPodDuration
     * @return \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot
     */
    public function setMinPodDuration($minPodDuration)
    {
      $this->minPodDuration = (!is_null($minPodDuration) && PHP_INT_SIZE === 4)
          ? floatval($minPodDuration) : $minPodDuration;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxPodDuration()
    {
      return $this->maxPodDuration;
    }

    /**
     * @param int $maxPodDuration
     * @return \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot
     */
    public function setMaxPodDuration($maxPodDuration)
    {
      $this->maxPodDuration = (!is_null($maxPodDuration) && PHP_INT_SIZE === 4)
          ? floatval($maxPodDuration) : $maxPodDuration;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxAdsInPod()
    {
      return $this->maxAdsInPod;
    }

    /**
     * @param int $maxAdsInPod
     * @return \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot
     */
    public function setMaxAdsInPod($maxAdsInPod)
    {
      $this->maxAdsInPod = $maxAdsInPod;
      return $this;
    }

}
