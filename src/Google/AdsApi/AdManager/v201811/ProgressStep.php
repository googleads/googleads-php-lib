<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProgressStep
{

    /**
     * @var \Google\AdsApi\AdManager\v201811\ProgressRule[] $rules
     */
    protected $rules = null;

    /**
     * @var string $evaluationStatus
     */
    protected $evaluationStatus = null;

    /**
     * @param \Google\AdsApi\AdManager\v201811\ProgressRule[] $rules
     * @param string $evaluationStatus
     */
    public function __construct(array $rules = null, $evaluationStatus = null)
    {
      $this->rules = $rules;
      $this->evaluationStatus = $evaluationStatus;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201811\ProgressRule[]
     */
    public function getRules()
    {
      return $this->rules;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201811\ProgressRule[]|null $rules
     * @return \Google\AdsApi\AdManager\v201811\ProgressStep
     */
    public function setRules(array $rules = null)
    {
      $this->rules = $rules;
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
     * @return \Google\AdsApi\AdManager\v201811\ProgressStep
     */
    public function setEvaluationStatus($evaluationStatus)
    {
      $this->evaluationStatus = $evaluationStatus;
      return $this;
    }

}
