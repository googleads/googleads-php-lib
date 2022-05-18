<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class GrpSettings
{

    /**
     * @var int $minTargetAge
     */
    protected $minTargetAge = null;

    /**
     * @var int $maxTargetAge
     */
    protected $maxTargetAge = null;

    /**
     * @var string $targetGender
     */
    protected $targetGender = null;

    /**
     * @var string $provider
     */
    protected $provider = null;

    /**
     * @var int $targetImpressionGoal
     */
    protected $targetImpressionGoal = null;

    /**
     * @var int $inTargetRatioEstimateMilliPercent
     */
    protected $inTargetRatioEstimateMilliPercent = null;

    /**
     * @var string $nielsenCtvPacingType
     */
    protected $nielsenCtvPacingType = null;

    /**
     * @var string $pacingDeviceCategorizationType
     */
    protected $pacingDeviceCategorizationType = null;

    /**
     * @var boolean $applyTrueCoview
     */
    protected $applyTrueCoview = null;

    /**
     * @param int $minTargetAge
     * @param int $maxTargetAge
     * @param string $targetGender
     * @param string $provider
     * @param int $targetImpressionGoal
     * @param int $inTargetRatioEstimateMilliPercent
     * @param string $nielsenCtvPacingType
     * @param string $pacingDeviceCategorizationType
     * @param boolean $applyTrueCoview
     */
    public function __construct($minTargetAge = null, $maxTargetAge = null, $targetGender = null, $provider = null, $targetImpressionGoal = null, $inTargetRatioEstimateMilliPercent = null, $nielsenCtvPacingType = null, $pacingDeviceCategorizationType = null, $applyTrueCoview = null)
    {
      $this->minTargetAge = $minTargetAge;
      $this->maxTargetAge = $maxTargetAge;
      $this->targetGender = $targetGender;
      $this->provider = $provider;
      $this->targetImpressionGoal = $targetImpressionGoal;
      $this->inTargetRatioEstimateMilliPercent = $inTargetRatioEstimateMilliPercent;
      $this->nielsenCtvPacingType = $nielsenCtvPacingType;
      $this->pacingDeviceCategorizationType = $pacingDeviceCategorizationType;
      $this->applyTrueCoview = $applyTrueCoview;
    }

    /**
     * @return int
     */
    public function getMinTargetAge()
    {
      return $this->minTargetAge;
    }

    /**
     * @param int $minTargetAge
     * @return \Google\AdsApi\AdManager\v202205\GrpSettings
     */
    public function setMinTargetAge($minTargetAge)
    {
      $this->minTargetAge = (!is_null($minTargetAge) && PHP_INT_SIZE === 4)
          ? floatval($minTargetAge) : $minTargetAge;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxTargetAge()
    {
      return $this->maxTargetAge;
    }

    /**
     * @param int $maxTargetAge
     * @return \Google\AdsApi\AdManager\v202205\GrpSettings
     */
    public function setMaxTargetAge($maxTargetAge)
    {
      $this->maxTargetAge = (!is_null($maxTargetAge) && PHP_INT_SIZE === 4)
          ? floatval($maxTargetAge) : $maxTargetAge;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetGender()
    {
      return $this->targetGender;
    }

    /**
     * @param string $targetGender
     * @return \Google\AdsApi\AdManager\v202205\GrpSettings
     */
    public function setTargetGender($targetGender)
    {
      $this->targetGender = $targetGender;
      return $this;
    }

    /**
     * @return string
     */
    public function getProvider()
    {
      return $this->provider;
    }

    /**
     * @param string $provider
     * @return \Google\AdsApi\AdManager\v202205\GrpSettings
     */
    public function setProvider($provider)
    {
      $this->provider = $provider;
      return $this;
    }

    /**
     * @return int
     */
    public function getTargetImpressionGoal()
    {
      return $this->targetImpressionGoal;
    }

    /**
     * @param int $targetImpressionGoal
     * @return \Google\AdsApi\AdManager\v202205\GrpSettings
     */
    public function setTargetImpressionGoal($targetImpressionGoal)
    {
      $this->targetImpressionGoal = (!is_null($targetImpressionGoal) && PHP_INT_SIZE === 4)
          ? floatval($targetImpressionGoal) : $targetImpressionGoal;
      return $this;
    }

    /**
     * @return int
     */
    public function getInTargetRatioEstimateMilliPercent()
    {
      return $this->inTargetRatioEstimateMilliPercent;
    }

    /**
     * @param int $inTargetRatioEstimateMilliPercent
     * @return \Google\AdsApi\AdManager\v202205\GrpSettings
     */
    public function setInTargetRatioEstimateMilliPercent($inTargetRatioEstimateMilliPercent)
    {
      $this->inTargetRatioEstimateMilliPercent = (!is_null($inTargetRatioEstimateMilliPercent) && PHP_INT_SIZE === 4)
          ? floatval($inTargetRatioEstimateMilliPercent) : $inTargetRatioEstimateMilliPercent;
      return $this;
    }

    /**
     * @return string
     */
    public function getNielsenCtvPacingType()
    {
      return $this->nielsenCtvPacingType;
    }

    /**
     * @param string $nielsenCtvPacingType
     * @return \Google\AdsApi\AdManager\v202205\GrpSettings
     */
    public function setNielsenCtvPacingType($nielsenCtvPacingType)
    {
      $this->nielsenCtvPacingType = $nielsenCtvPacingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPacingDeviceCategorizationType()
    {
      return $this->pacingDeviceCategorizationType;
    }

    /**
     * @param string $pacingDeviceCategorizationType
     * @return \Google\AdsApi\AdManager\v202205\GrpSettings
     */
    public function setPacingDeviceCategorizationType($pacingDeviceCategorizationType)
    {
      $this->pacingDeviceCategorizationType = $pacingDeviceCategorizationType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplyTrueCoview()
    {
      return $this->applyTrueCoview;
    }

    /**
     * @param boolean $applyTrueCoview
     * @return \Google\AdsApi\AdManager\v202205\GrpSettings
     */
    public function setApplyTrueCoview($applyTrueCoview)
    {
      $this->applyTrueCoview = $applyTrueCoview;
      return $this;
    }

}
