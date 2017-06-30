<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RuleBasedFirstPartyAudienceSegmentSummary extends \Google\AdsApi\Dfp\v201705\FirstPartyAudienceSegment
{

    /**
     * @var int $pageViews
     */
    protected $pageViews = null;

    /**
     * @var int $recencyDays
     */
    protected $recencyDays = null;

    /**
     * @var int $membershipExpirationDays
     */
    protected $membershipExpirationDays = null;

    /**
     * @param int $id
     * @param string $name
     * @param int[] $categoryIds
     * @param string $description
     * @param string $status
     * @param int $size
     * @param int $mobileWebSize
     * @param int $idfaSize
     * @param int $adIdSize
     * @param \Google\AdsApi\Dfp\v201705\AudienceSegmentDataProvider $dataProvider
     * @param string $type
     * @param int $pageViews
     * @param int $recencyDays
     * @param int $membershipExpirationDays
     */
    public function __construct($id = null, $name = null, array $categoryIds = null, $description = null, $status = null, $size = null, $mobileWebSize = null, $idfaSize = null, $adIdSize = null, $dataProvider = null, $type = null, $pageViews = null, $recencyDays = null, $membershipExpirationDays = null)
    {
      parent::__construct($id, $name, $categoryIds, $description, $status, $size, $mobileWebSize, $idfaSize, $adIdSize, $dataProvider, $type);
      $this->pageViews = $pageViews;
      $this->recencyDays = $recencyDays;
      $this->membershipExpirationDays = $membershipExpirationDays;
    }

    /**
     * @return int
     */
    public function getPageViews()
    {
      return $this->pageViews;
    }

    /**
     * @param int $pageViews
     * @return \Google\AdsApi\Dfp\v201705\RuleBasedFirstPartyAudienceSegmentSummary
     */
    public function setPageViews($pageViews)
    {
      $this->pageViews = $pageViews;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecencyDays()
    {
      return $this->recencyDays;
    }

    /**
     * @param int $recencyDays
     * @return \Google\AdsApi\Dfp\v201705\RuleBasedFirstPartyAudienceSegmentSummary
     */
    public function setRecencyDays($recencyDays)
    {
      $this->recencyDays = $recencyDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getMembershipExpirationDays()
    {
      return $this->membershipExpirationDays;
    }

    /**
     * @param int $membershipExpirationDays
     * @return \Google\AdsApi\Dfp\v201705\RuleBasedFirstPartyAudienceSegmentSummary
     */
    public function setMembershipExpirationDays($membershipExpirationDays)
    {
      $this->membershipExpirationDays = $membershipExpirationDays;
      return $this;
    }

}
