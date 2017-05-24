<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProgressStep
{

    /**
     * @var \Google\AdsApi\Dfp\v201705\ProgressRule[] $rules
     */
    protected $rules = null;

    /**
     * @var string $evaluationStatus
     */
    protected $evaluationStatus = null;

    /**
     * @param \Google\AdsApi\Dfp\v201705\ProgressRule[] $rules
     * @param string $evaluationStatus
     */
    public function __construct(array $rules = null, $evaluationStatus = null)
    {
      $this->rules = $rules;
      $this->evaluationStatus = $evaluationStatus;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\ProgressRule[]
     */
    public function getRules()
    {
      return $this->rules;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\ProgressRule[] $rules
     * @return \Google\AdsApi\Dfp\v201705\ProgressStep
     */
    public function setRules(array $rules)
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
     * @return \Google\AdsApi\Dfp\v201705\ProgressStep
     */
    public function setEvaluationStatus($evaluationStatus)
    {
      $this->evaluationStatus = $evaluationStatus;
      return $this;
    }

}
