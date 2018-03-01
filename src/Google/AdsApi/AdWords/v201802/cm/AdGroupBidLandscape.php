<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupBidLandscape extends \Google\AdsApi\AdWords\v201802\cm\BidLandscape
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var boolean $landscapeCurrent
     */
    protected $landscapeCurrent = null;

    /**
     * @param string $DataEntryType
     * @param int $campaignId
     * @param int $adGroupId
     * @param string $startDate
     * @param string $endDate
     * @param \Google\AdsApi\AdWords\v201802\cm\BidLandscapeLandscapePoint[] $landscapePoints
     * @param string $type
     * @param boolean $landscapeCurrent
     */
    public function __construct($DataEntryType = null, $campaignId = null, $adGroupId = null, $startDate = null, $endDate = null, array $landscapePoints = null, $type = null, $landscapeCurrent = null)
    {
      parent::__construct($DataEntryType, $campaignId, $adGroupId, $startDate, $endDate, $landscapePoints);
      $this->type = $type;
      $this->landscapeCurrent = $landscapeCurrent;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\AdWords\v201802\cm\AdGroupBidLandscape
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLandscapeCurrent()
    {
      return $this->landscapeCurrent;
    }

    /**
     * @param boolean $landscapeCurrent
     * @return \Google\AdsApi\AdWords\v201802\cm\AdGroupBidLandscape
     */
    public function setLandscapeCurrent($landscapeCurrent)
    {
      $this->landscapeCurrent = $landscapeCurrent;
      return $this;
    }

}
