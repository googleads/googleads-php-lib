<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class PolicyTopicConstraint
{

    /**
     * @var string $constraintType
     */
    protected $constraintType = null;

    /**
     * @var string $PolicyTopicConstraintType
     */
    protected $PolicyTopicConstraintType = null;

    /**
     * @param string $constraintType
     * @param string $PolicyTopicConstraintType
     */
    public function __construct($constraintType = null, $PolicyTopicConstraintType = null)
    {
      $this->constraintType = $constraintType;
      $this->PolicyTopicConstraintType = $PolicyTopicConstraintType;
    }

    /**
     * @return string
     */
    public function getConstraintType()
    {
      return $this->constraintType;
    }

    /**
     * @param string $constraintType
     * @return \Google\AdsApi\AdWords\v201705\cm\PolicyTopicConstraint
     */
    public function setConstraintType($constraintType)
    {
      $this->constraintType = $constraintType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPolicyTopicConstraintType()
    {
      return $this->PolicyTopicConstraintType;
    }

    /**
     * @param string $PolicyTopicConstraintType
     * @return \Google\AdsApi\AdWords\v201705\cm\PolicyTopicConstraint
     */
    public function setPolicyTopicConstraintType($PolicyTopicConstraintType)
    {
      $this->PolicyTopicConstraintType = $PolicyTopicConstraintType;
      return $this;
    }

}
