<?php

namespace Google\AdsApi\Dfp\v201708;


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
     * @param int $minTargetAge
     * @param int $maxTargetAge
     * @param string $targetGender
     * @param string $provider
     * @param int $targetImpressionGoal
     */
    public function __construct($minTargetAge = null, $maxTargetAge = null, $targetGender = null, $provider = null, $targetImpressionGoal = null)
    {
      $this->minTargetAge = $minTargetAge;
      $this->maxTargetAge = $maxTargetAge;
      $this->targetGender = $targetGender;
      $this->provider = $provider;
      $this->targetImpressionGoal = $targetImpressionGoal;
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
     * @return \Google\AdsApi\Dfp\v201708\GrpSettings
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
     * @return \Google\AdsApi\Dfp\v201708\GrpSettings
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
     * @return \Google\AdsApi\Dfp\v201708\GrpSettings
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
     * @return \Google\AdsApi\Dfp\v201708\GrpSettings
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
     * @return \Google\AdsApi\Dfp\v201708\GrpSettings
     */
    public function setTargetImpressionGoal($targetImpressionGoal)
    {
      $this->targetImpressionGoal = (!is_null($targetImpressionGoal) && PHP_INT_SIZE === 4)
          ? floatval($targetImpressionGoal) : $targetImpressionGoal;
      return $this;
    }

}
