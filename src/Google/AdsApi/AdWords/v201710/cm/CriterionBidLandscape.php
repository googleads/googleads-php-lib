<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CriterionBidLandscape extends \Google\AdsApi\AdWords\v201710\cm\BidLandscape
{

    /**
     * @var int $criterionId
     */
    protected $criterionId = null;

    /**
     * @param string $DataEntryType
     * @param int $campaignId
     * @param int $adGroupId
     * @param string $startDate
     * @param string $endDate
     * @param \Google\AdsApi\AdWords\v201710\cm\BidLandscapeLandscapePoint[] $landscapePoints
     * @param int $criterionId
     */
    public function __construct($DataEntryType = null, $campaignId = null, $adGroupId = null, $startDate = null, $endDate = null, array $landscapePoints = null, $criterionId = null)
    {
      parent::__construct($DataEntryType, $campaignId, $adGroupId, $startDate, $endDate, $landscapePoints);
      $this->criterionId = $criterionId;
    }

    /**
     * @return int
     */
    public function getCriterionId()
    {
      return $this->criterionId;
    }

    /**
     * @param int $criterionId
     * @return \Google\AdsApi\AdWords\v201710\cm\CriterionBidLandscape
     */
    public function setCriterionId($criterionId)
    {
      $this->criterionId = (!is_null($criterionId) && PHP_INT_SIZE === 4)
          ? floatval($criterionId) : $criterionId;
      return $this;
    }

}
