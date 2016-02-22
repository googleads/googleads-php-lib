<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CampaignAdExtension
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\AdExtension $adExtension
     */
    protected $adExtension = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @param int $campaignId
     * @param \Google\AdsApi\AdWords\v201601\cm\AdExtension $adExtension
     * @param string $status
     * @param string $approvalStatus
     */
    public function __construct($campaignId = null, $adExtension = null, $status = null, $approvalStatus = null)
    {
      $this->campaignId = $campaignId;
      $this->adExtension = $adExtension;
      $this->status = $status;
      $this->approvalStatus = $approvalStatus;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignAdExtension
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\AdExtension
     */
    public function getAdExtension()
    {
      return $this->adExtension;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AdExtension $adExtension
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignAdExtension
     */
    public function setAdExtension($adExtension)
    {
      $this->adExtension = $adExtension;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignAdExtension
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param string $approvalStatus
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignAdExtension
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

}
