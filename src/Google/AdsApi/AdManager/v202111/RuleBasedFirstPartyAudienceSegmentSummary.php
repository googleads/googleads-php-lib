<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RuleBasedFirstPartyAudienceSegmentSummary extends \Google\AdsApi\AdManager\v202111\FirstPartyAudienceSegment
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
     * @param int $ppidSize
     * @param \Google\AdsApi\AdManager\v202111\AudienceSegmentDataProvider $dataProvider
     * @param string $type
     * @param int $pageViews
     * @param int $recencyDays
     * @param int $membershipExpirationDays
     */
    public function __construct($id = null, $name = null, array $categoryIds = null, $description = null, $status = null, $size = null, $mobileWebSize = null, $idfaSize = null, $adIdSize = null, $ppidSize = null, $dataProvider = null, $type = null, $pageViews = null, $recencyDays = null, $membershipExpirationDays = null)
    {
      parent::__construct($id, $name, $categoryIds, $description, $status, $size, $mobileWebSize, $idfaSize, $adIdSize, $ppidSize, $dataProvider, $type);
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
     * @return \Google\AdsApi\AdManager\v202111\RuleBasedFirstPartyAudienceSegmentSummary
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
     * @return \Google\AdsApi\AdManager\v202111\RuleBasedFirstPartyAudienceSegmentSummary
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
     * @return \Google\AdsApi\AdManager\v202111\RuleBasedFirstPartyAudienceSegmentSummary
     */
    public function setMembershipExpirationDays($membershipExpirationDays)
    {
      $this->membershipExpirationDays = $membershipExpirationDays;
      return $this;
    }

}
