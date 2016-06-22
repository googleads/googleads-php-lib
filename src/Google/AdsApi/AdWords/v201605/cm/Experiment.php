<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Experiment
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $controlId
     */
    protected $controlId = null;

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $servingStatus
     */
    protected $servingStatus = null;

    /**
     * @var int $queryPercentage
     */
    protected $queryPercentage = null;

    /**
     * @var string $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var string $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var string $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\AdWords\v201605\cm\ExperimentSummaryStats $experimentSummaryStats
     */
    protected $experimentSummaryStats = null;

    /**
     * @param int $id
     * @param int $controlId
     * @param int $campaignId
     * @param string $name
     * @param string $status
     * @param string $servingStatus
     * @param int $queryPercentage
     * @param string $startDateTime
     * @param string $endDateTime
     * @param string $lastModifiedDateTime
     * @param \Google\AdsApi\AdWords\v201605\cm\ExperimentSummaryStats $experimentSummaryStats
     */
    public function __construct($id = null, $controlId = null, $campaignId = null, $name = null, $status = null, $servingStatus = null, $queryPercentage = null, $startDateTime = null, $endDateTime = null, $lastModifiedDateTime = null, $experimentSummaryStats = null)
    {
      $this->id = $id;
      $this->controlId = $controlId;
      $this->campaignId = $campaignId;
      $this->name = $name;
      $this->status = $status;
      $this->servingStatus = $servingStatus;
      $this->queryPercentage = $queryPercentage;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->experimentSummaryStats = $experimentSummaryStats;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdWords\v201605\cm\Experiment
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getControlId()
    {
      return $this->controlId;
    }

    /**
     * @param int $controlId
     * @return \Google\AdsApi\AdWords\v201605\cm\Experiment
     */
    public function setControlId($controlId)
    {
      $this->controlId = $controlId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \Google\AdsApi\AdWords\v201605\cm\Experiment
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
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
     * @return \Google\AdsApi\AdWords\v201605\cm\Experiment
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdWords\v201605\cm\Experiment
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getServingStatus()
    {
      return $this->servingStatus;
    }

    /**
     * @param string $servingStatus
     * @return \Google\AdsApi\AdWords\v201605\cm\Experiment
     */
    public function setServingStatus($servingStatus)
    {
      $this->servingStatus = $servingStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getQueryPercentage()
    {
      return $this->queryPercentage;
    }

    /**
     * @param int $queryPercentage
     * @return \Google\AdsApi\AdWords\v201605\cm\Experiment
     */
    public function setQueryPercentage($queryPercentage)
    {
      $this->queryPercentage = $queryPercentage;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param string $startDateTime
     * @return \Google\AdsApi\AdWords\v201605\cm\Experiment
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param string $endDateTime
     * @return \Google\AdsApi\AdWords\v201605\cm\Experiment
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param string $lastModifiedDateTime
     * @return \Google\AdsApi\AdWords\v201605\cm\Experiment
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201605\cm\ExperimentSummaryStats
     */
    public function getExperimentSummaryStats()
    {
      return $this->experimentSummaryStats;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201605\cm\ExperimentSummaryStats $experimentSummaryStats
     * @return \Google\AdsApi\AdWords\v201605\cm\Experiment
     */
    public function setExperimentSummaryStats($experimentSummaryStats)
    {
      $this->experimentSummaryStats = $experimentSummaryStats;
      return $this;
    }

}
