<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignGroupPerformanceTarget
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $campaignGroupId
     */
    protected $campaignGroupId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\PerformanceTarget $performanceTarget
     */
    protected $performanceTarget = null;

    /**
     * @param int $id
     * @param int $campaignGroupId
     * @param \Google\AdsApi\AdWords\v201806\cm\PerformanceTarget $performanceTarget
     */
    public function __construct($id = null, $campaignGroupId = null, $performanceTarget = null)
    {
      $this->id = $id;
      $this->campaignGroupId = $campaignGroupId;
      $this->performanceTarget = $performanceTarget;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignGroupPerformanceTarget
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
    public function getCampaignGroupId()
    {
      return $this->campaignGroupId;
    }

    /**
     * @param int $campaignGroupId
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignGroupPerformanceTarget
     */
    public function setCampaignGroupId($campaignGroupId)
    {
      $this->campaignGroupId = (!is_null($campaignGroupId) && PHP_INT_SIZE === 4)
          ? floatval($campaignGroupId) : $campaignGroupId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\PerformanceTarget
     */
    public function getPerformanceTarget()
    {
      return $this->performanceTarget;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\PerformanceTarget $performanceTarget
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignGroupPerformanceTarget
     */
    public function setPerformanceTarget($performanceTarget)
    {
      $this->performanceTarget = $performanceTarget;
      return $this;
    }

}
