<?php

namespace Google\AdsApi\AdWords\v201607\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupExperimentData
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
     * @var \Google\AdsApi\AdWords\v201607\cm\AdGroupExperimentBidMultipliers $experimentBidMultipliers
     */
    protected $experimentBidMultipliers = null;

    /**
     * @param int $experimentId
     * @param string $experimentDeltaStatus
     * @param string $experimentDataStatus
     * @param \Google\AdsApi\AdWords\v201607\cm\AdGroupExperimentBidMultipliers $experimentBidMultipliers
     */
    public function __construct($experimentId = null, $experimentDeltaStatus = null, $experimentDataStatus = null, $experimentBidMultipliers = null)
    {
      $this->experimentId = $experimentId;
      $this->experimentDeltaStatus = $experimentDeltaStatus;
      $this->experimentDataStatus = $experimentDataStatus;
      $this->experimentBidMultipliers = $experimentBidMultipliers;
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
     * @return \Google\AdsApi\AdWords\v201607\cm\AdGroupExperimentData
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
     * @return \Google\AdsApi\AdWords\v201607\cm\AdGroupExperimentData
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
     * @return \Google\AdsApi\AdWords\v201607\cm\AdGroupExperimentData
     */
    public function setExperimentDataStatus($experimentDataStatus)
    {
      $this->experimentDataStatus = $experimentDataStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\cm\AdGroupExperimentBidMultipliers
     */
    public function getExperimentBidMultipliers()
    {
      return $this->experimentBidMultipliers;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\cm\AdGroupExperimentBidMultipliers $experimentBidMultipliers
     * @return \Google\AdsApi\AdWords\v201607\cm\AdGroupExperimentData
     */
    public function setExperimentBidMultipliers($experimentBidMultipliers)
    {
      $this->experimentBidMultipliers = $experimentBidMultipliers;
      return $this;
    }

}
