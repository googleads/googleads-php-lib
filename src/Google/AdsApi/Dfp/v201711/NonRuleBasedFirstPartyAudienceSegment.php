<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NonRuleBasedFirstPartyAudienceSegment extends \Google\AdsApi\Dfp\v201711\FirstPartyAudienceSegment
{

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
     * @param \Google\AdsApi\Dfp\v201711\AudienceSegmentDataProvider $dataProvider
     * @param string $type
     * @param int $membershipExpirationDays
     */
    public function __construct($id = null, $name = null, array $categoryIds = null, $description = null, $status = null, $size = null, $mobileWebSize = null, $idfaSize = null, $adIdSize = null, $dataProvider = null, $type = null, $membershipExpirationDays = null)
    {
      parent::__construct($id, $name, $categoryIds, $description, $status, $size, $mobileWebSize, $idfaSize, $adIdSize, $dataProvider, $type);
      $this->membershipExpirationDays = $membershipExpirationDays;
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
     * @return \Google\AdsApi\Dfp\v201711\NonRuleBasedFirstPartyAudienceSegment
     */
    public function setMembershipExpirationDays($membershipExpirationDays)
    {
      $this->membershipExpirationDays = $membershipExpirationDays;
      return $this;
    }

}
