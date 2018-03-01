<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BidLandscape extends \Google\AdsApi\AdWords\v201802\cm\DataEntry
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var string $startDate
     */
    protected $startDate = null;

    /**
     * @var string $endDate
     */
    protected $endDate = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\BidLandscapeLandscapePoint[] $landscapePoints
     */
    protected $landscapePoints = null;

    /**
     * @param string $DataEntryType
     * @param int $campaignId
     * @param int $adGroupId
     * @param string $startDate
     * @param string $endDate
     * @param \Google\AdsApi\AdWords\v201802\cm\BidLandscapeLandscapePoint[] $landscapePoints
     */
    public function __construct($DataEntryType = null, $campaignId = null, $adGroupId = null, $startDate = null, $endDate = null, array $landscapePoints = null)
    {
      parent::__construct($DataEntryType);
      $this->campaignId = $campaignId;
      $this->adGroupId = $adGroupId;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
      $this->landscapePoints = $landscapePoints;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\BidLandscape
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = (!is_null($campaignId) && PHP_INT_SIZE === 4)
          ? floatval($campaignId) : $campaignId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Google\AdsApi\AdWords\v201802\cm\BidLandscape
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = (!is_null($adGroupId) && PHP_INT_SIZE === 4)
          ? floatval($adGroupId) : $adGroupId;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\BidLandscape
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
     * @return \Google\AdsApi\AdWords\v201802\cm\BidLandscape
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\BidLandscapeLandscapePoint[]
     */
    public function getLandscapePoints()
    {
      return $this->landscapePoints;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\BidLandscapeLandscapePoint[] $landscapePoints
     * @return \Google\AdsApi\AdWords\v201802\cm\BidLandscape
     */
    public function setLandscapePoints(array $landscapePoints)
    {
      $this->landscapePoints = $landscapePoints;
      return $this;
    }

}
