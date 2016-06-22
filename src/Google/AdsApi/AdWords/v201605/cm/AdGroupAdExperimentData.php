<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupAdExperimentData
{

    /**
     * @var int $experimentId
     */
    protected $experimentId = null;

    /**
     * @var string $experimentDeltaStatus
     */
    protected $experimentDeltaStatus = null;

    /**
     * @var string $experimentDataStatus
     */
    protected $experimentDataStatus = null;

    /**
     * @param int $experimentId
     * @param string $experimentDeltaStatus
     * @param string $experimentDataStatus
     */
    public function __construct($experimentId = null, $experimentDeltaStatus = null, $experimentDataStatus = null)
    {
      $this->experimentId = $experimentId;
      $this->experimentDeltaStatus = $experimentDeltaStatus;
      $this->experimentDataStatus = $experimentDataStatus;
    }

    /**
     * @return int
     */
    public function getExperimentId()
    {
      return $this->experimentId;
    }

    /**
     * @param int $experimentId
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupAdExperimentData
     */
    public function setExperimentId($experimentId)
    {
      $this->experimentId = $experimentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExperimentDeltaStatus()
    {
      return $this->experimentDeltaStatus;
    }

    /**
     * @param string $experimentDeltaStatus
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupAdExperimentData
     */
    public function setExperimentDeltaStatus($experimentDeltaStatus)
    {
      $this->experimentDeltaStatus = $experimentDeltaStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getExperimentDataStatus()
    {
      return $this->experimentDataStatus;
    }

    /**
     * @param string $experimentDataStatus
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupAdExperimentData
     */
    public function setExperimentDataStatus($experimentDataStatus)
    {
      $this->experimentDataStatus = $experimentDataStatus;
      return $this;
    }

}
