<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Trial
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $baseCampaignId
     */
    protected $baseCampaignId = null;

    /**
     * @var int $draftId
     */
    protected $draftId = null;

    /**
     * @var int $budgetId
     */
    protected $budgetId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $startDate
     */
    protected $startDate = null;

    /**
     * @var string $endDate
     */
    protected $endDate = null;

    /**
     * @var int $trafficSplitPercent
     */
    protected $trafficSplitPercent = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var int $trialCampaignId
     */
    protected $trialCampaignId = null;

    /**
     * @param int $id
     * @param int $baseCampaignId
     * @param int $draftId
     * @param int $budgetId
     * @param string $name
     * @param string $startDate
     * @param string $endDate
     * @param int $trafficSplitPercent
     * @param string $status
     * @param int $trialCampaignId
     */
    public function __construct($id = null, $baseCampaignId = null, $draftId = null, $budgetId = null, $name = null, $startDate = null, $endDate = null, $trafficSplitPercent = null, $status = null, $trialCampaignId = null)
    {
      $this->id = $id;
      $this->baseCampaignId = $baseCampaignId;
      $this->draftId = $draftId;
      $this->budgetId = $budgetId;
      $this->name = $name;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
      $this->trafficSplitPercent = $trafficSplitPercent;
      $this->status = $status;
      $this->trialCampaignId = $trialCampaignId;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\Trial
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getBaseCampaignId()
    {
      return $this->baseCampaignId;
    }

    /**
     * @param int $baseCampaignId
     * @return \Google\AdsApi\AdWords\v201710\cm\Trial
     */
    public function setBaseCampaignId($baseCampaignId)
    {
      $this->baseCampaignId = (!is_null($baseCampaignId) && PHP_INT_SIZE === 4)
          ? floatval($baseCampaignId) : $baseCampaignId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDraftId()
    {
      return $this->draftId;
    }

    /**
     * @param int $draftId
     * @return \Google\AdsApi\AdWords\v201710\cm\Trial
     */
    public function setDraftId($draftId)
    {
      $this->draftId = (!is_null($draftId) && PHP_INT_SIZE === 4)
          ? floatval($draftId) : $draftId;
      return $this;
    }

    /**
     * @return int
     */
    public function getBudgetId()
    {
      return $this->budgetId;
    }

    /**
     * @param int $budgetId
     * @return \Google\AdsApi\AdWords\v201710\cm\Trial
     */
    public function setBudgetId($budgetId)
    {
      $this->budgetId = (!is_null($budgetId) && PHP_INT_SIZE === 4)
          ? floatval($budgetId) : $budgetId;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\Trial
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return \Google\AdsApi\AdWords\v201710\cm\Trial
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param string $endDate
     * @return \Google\AdsApi\AdWords\v201710\cm\Trial
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getTrafficSplitPercent()
    {
      return $this->trafficSplitPercent;
    }

    /**
     * @param int $trafficSplitPercent
     * @return \Google\AdsApi\AdWords\v201710\cm\Trial
     */
    public function setTrafficSplitPercent($trafficSplitPercent)
    {
      $this->trafficSplitPercent = $trafficSplitPercent;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\Trial
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return int
     */
    public function getTrialCampaignId()
    {
      return $this->trialCampaignId;
    }

    /**
     * @param int $trialCampaignId
     * @return \Google\AdsApi\AdWords\v201710\cm\Trial
     */
    public function setTrialCampaignId($trialCampaignId)
    {
      $this->trialCampaignId = (!is_null($trialCampaignId) && PHP_INT_SIZE === 4)
          ? floatval($trialCampaignId) : $trialCampaignId;
      return $this;
    }

}
