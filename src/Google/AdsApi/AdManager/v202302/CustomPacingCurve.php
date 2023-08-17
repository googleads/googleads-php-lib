<?php

namespace Google\AdsApi\AdManager\v202302;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomPacingCurve
{

    /**
     * @var string $customPacingGoalUnit
     */
    protected $customPacingGoalUnit = null;

    /**
     * @var \Google\AdsApi\AdManager\v202302\CustomPacingGoal[] $customPacingGoals
     */
    protected $customPacingGoals = null;

    /**
     * @param string $customPacingGoalUnit
     * @param \Google\AdsApi\AdManager\v202302\CustomPacingGoal[] $customPacingGoals
     */
    public function __construct($customPacingGoalUnit = null, array $customPacingGoals = null)
    {
      $this->customPacingGoalUnit = $customPacingGoalUnit;
      $this->customPacingGoals = $customPacingGoals;
    }

    /**
     * @return string
     */
    public function getCustomPacingGoalUnit()
    {
      return $this->customPacingGoalUnit;
    }

    /**
     * @param string $customPacingGoalUnit
     * @return \Google\AdsApi\AdManager\v202302\CustomPacingCurve
     */
    public function setCustomPacingGoalUnit($customPacingGoalUnit)
    {
      $this->customPacingGoalUnit = $customPacingGoalUnit;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202302\CustomPacingGoal[]
     */
    public function getCustomPacingGoals()
    {
      return $this->customPacingGoals;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202302\CustomPacingGoal[]|null $customPacingGoals
     * @return \Google\AdsApi\AdManager\v202302\CustomPacingCurve
     */
    public function setCustomPacingGoals(array $customPacingGoals = null)
    {
      $this->customPacingGoals = $customPacingGoals;
      return $this;
    }

}
