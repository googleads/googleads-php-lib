<?php

namespace Google\AdsApi\AdWords\v201802\cm;


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
     * @var array $parameterMap
     */
    private $parameterMap = ['PolicyTopicConstraint.Type' => 'PolicyTopicConstraintType'];

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
     * @return \Google\AdsApi\AdWords\v201802\cm\PolicyTopicConstraint
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
     * @return \Google\AdsApi\AdWords\v201802\cm\PolicyTopicConstraint
     */
    public function setPolicyTopicConstraintType($PolicyTopicConstraintType)
    {
      $this->PolicyTopicConstraintType = $PolicyTopicConstraintType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201802\cm\PolicyTopicConstraint
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
