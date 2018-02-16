<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class WorkflowProgress
{

    /**
     * @var \Google\AdsApi\Dfp\v201711\ProgressStep[] $steps
     */
    protected $steps = null;

    /**
     * @var int $submitterId
     */
    protected $submitterId = null;

    /**
     * @var string $evaluationStatus
     */
    protected $evaluationStatus = null;

    /**
     * @var \Google\AdsApi\Dfp\v201711\DateTime $submissionTime
     */
    protected $submissionTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201711\DateTime $evaluationTime
     */
    protected $evaluationTime = null;

    /**
     * @var boolean $isProcessing
     */
    protected $isProcessing = null;

    /**
     * @param \Google\AdsApi\Dfp\v201711\ProgressStep[] $steps
     * @param int $submitterId
     * @param string $evaluationStatus
     * @param \Google\AdsApi\Dfp\v201711\DateTime $submissionTime
     * @param \Google\AdsApi\Dfp\v201711\DateTime $evaluationTime
     * @param boolean $isProcessing
     */
    public function __construct(array $steps = null, $submitterId = null, $evaluationStatus = null, $submissionTime = null, $evaluationTime = null, $isProcessing = null)
    {
      $this->steps = $steps;
      $this->submitterId = $submitterId;
      $this->evaluationStatus = $evaluationStatus;
      $this->submissionTime = $submissionTime;
      $this->evaluationTime = $evaluationTime;
      $this->isProcessing = $isProcessing;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\ProgressStep[]
     */
    public function getSteps()
    {
      return $this->steps;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\ProgressStep[] $steps
     * @return \Google\AdsApi\Dfp\v201711\WorkflowProgress
     */
    public function setSteps(array $steps)
    {
      $this->steps = $steps;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubmitterId()
    {
      return $this->submitterId;
    }

    /**
     * @param int $submitterId
     * @return \Google\AdsApi\Dfp\v201711\WorkflowProgress
     */
    public function setSubmitterId($submitterId)
    {
      $this->submitterId = (!is_null($submitterId) && PHP_INT_SIZE === 4)
          ? floatval($submitterId) : $submitterId;
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
     * @return \Google\AdsApi\Dfp\v201711\WorkflowProgress
     */
    public function setEvaluationStatus($evaluationStatus)
    {
      $this->evaluationStatus = $evaluationStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\DateTime
     */
    public function getSubmissionTime()
    {
      return $this->submissionTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\DateTime $submissionTime
     * @return \Google\AdsApi\Dfp\v201711\WorkflowProgress
     */
    public function setSubmissionTime($submissionTime)
    {
      $this->submissionTime = $submissionTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\DateTime
     */
    public function getEvaluationTime()
    {
      return $this->evaluationTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\DateTime $evaluationTime
     * @return \Google\AdsApi\Dfp\v201711\WorkflowProgress
     */
    public function setEvaluationTime($evaluationTime)
    {
      $this->evaluationTime = $evaluationTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProcessing()
    {
      return $this->isProcessing;
    }

    /**
     * @param boolean $isProcessing
     * @return \Google\AdsApi\Dfp\v201711\WorkflowProgress
     */
    public function setIsProcessing($isProcessing)
    {
      $this->isProcessing = $isProcessing;
      return $this;
    }

}
