<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProgressRule
{

    /**
     * @var \Google\AdsApi\AdManager\v201808\ProgressAction[] $actions
     */
    protected $actions = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $evaluationStatus
     */
    protected $evaluationStatus = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\DateTime $evaluationTime
     */
    protected $evaluationTime = null;

    /**
     * @var boolean $isExternal
     */
    protected $isExternal = null;

    /**
     * @param \Google\AdsApi\AdManager\v201808\ProgressAction[] $actions
     * @param string $name
     * @param string $evaluationStatus
     * @param \Google\AdsApi\AdManager\v201808\DateTime $evaluationTime
     * @param boolean $isExternal
     */
    public function __construct(array $actions = null, $name = null, $evaluationStatus = null, $evaluationTime = null, $isExternal = null)
    {
      $this->actions = $actions;
      $this->name = $name;
      $this->evaluationStatus = $evaluationStatus;
      $this->evaluationTime = $evaluationTime;
      $this->isExternal = $isExternal;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\ProgressAction[]
     */
    public function getActions()
    {
      return $this->actions;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\ProgressAction[] $actions
     * @return \Google\AdsApi\AdManager\v201808\ProgressRule
     */
    public function setActions(array $actions)
    {
      $this->actions = $actions;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdManager\v201808\ProgressRule
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getEvaluationStatus()
    {
      return $this->evaluationStatus;
    }

    /**
     * @param string $evaluationStatus
     * @return \Google\AdsApi\AdManager\v201808\ProgressRule
     */
    public function setEvaluationStatus($evaluationStatus)
    {
      $this->evaluationStatus = $evaluationStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\DateTime
     */
    public function getEvaluationTime()
    {
      return $this->evaluationTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\DateTime $evaluationTime
     * @return \Google\AdsApi\AdManager\v201808\ProgressRule
     */
    public function setEvaluationTime($evaluationTime)
    {
      $this->evaluationTime = $evaluationTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsExternal()
    {
      return $this->isExternal;
    }

    /**
     * @param boolean $isExternal
     * @return \Google\AdsApi\AdManager\v201808\ProgressRule
     */
    public function setIsExternal($isExternal)
    {
      $this->isExternal = $isExternal;
      return $this;
    }

}
