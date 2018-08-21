<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class ProgressAction
{

    /**
     * @var \Google\AdsApi\AdManager\v201802\DateTime $evaluationTime
     */
    protected $evaluationTime = null;

    /**
     * @var string $evaluationStatus
     */
    protected $evaluationStatus = null;

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $evaluationTime
     * @param string $evaluationStatus
     */
    public function __construct($evaluationTime = null, $evaluationStatus = null)
    {
      $this->evaluationTime = $evaluationTime;
      $this->evaluationStatus = $evaluationStatus;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\DateTime
     */
    public function getEvaluationTime()
    {
      return $this->evaluationTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $evaluationTime
     * @return \Google\AdsApi\AdManager\v201802\ProgressAction
     */
    public function setEvaluationTime($evaluationTime)
    {
      $this->evaluationTime = $evaluationTime;
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
     * @return \Google\AdsApi\AdManager\v201802\ProgressAction
     */
    public function setEvaluationStatus($evaluationStatus)
    {
      $this->evaluationStatus = $evaluationStatus;
      return $this;
    }

}
