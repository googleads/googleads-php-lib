<?php

namespace Google\AdsApi\AdWords\v201607\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BiddableAdGroupCriterionExperimentData
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
     * @var \Google\AdsApi\AdWords\v201607\cm\AdGroupCriterionExperimentBidMultiplier $experimentBidMultiplier
     */
    protected $experimentBidMultiplier = null;

    /**
     * @param int $experimentId
     * @param string $experimentDeltaStatus
     * @param string $experimentDataStatus
     * @param \Google\AdsApi\AdWords\v201607\cm\AdGroupCriterionExperimentBidMultiplier $experimentBidMultiplier
     */
    public function __construct($experimentId = null, $experimentDeltaStatus = null, $experimentDataStatus = null, $experimentBidMultiplier = null)
    {
      $this->experimentId = $experimentId;
      $this->experimentDeltaStatus = $experimentDeltaStatus;
      $this->experimentDataStatus = $experimentDataStatus;
      $this->experimentBidMultiplier = $experimentBidMultiplier;
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
     * @return \Google\AdsApi\AdWords\v201607\cm\BiddableAdGroupCriterionExperimentData
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
     * @return \Google\AdsApi\AdWords\v201607\cm\BiddableAdGroupCriterionExperimentData
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
     * @return \Google\AdsApi\AdWords\v201607\cm\BiddableAdGroupCriterionExperimentData
     */
    public function setExperimentDataStatus($experimentDataStatus)
    {
      $this->experimentDataStatus = $experimentDataStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\cm\AdGroupCriterionExperimentBidMultiplier
     */
    public function getExperimentBidMultiplier()
    {
      return $this->experimentBidMultiplier;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\cm\AdGroupCriterionExperimentBidMultiplier $experimentBidMultiplier
     * @return \Google\AdsApi\AdWords\v201607\cm\BiddableAdGroupCriterionExperimentData
     */
    public function setExperimentBidMultiplier($experimentBidMultiplier)
    {
      $this->experimentBidMultiplier = $experimentBidMultiplier;
      return $this;
    }

}
