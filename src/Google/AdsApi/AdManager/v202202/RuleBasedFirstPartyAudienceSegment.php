<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RuleBasedFirstPartyAudienceSegment extends \Google\AdsApi\AdManager\v202202\RuleBasedFirstPartyAudienceSegmentSummary
{

    /**
     * @var \Google\AdsApi\AdManager\v202202\FirstPartyAudienceSegmentRule $rule
     */
    protected $rule = null;

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
     * @param \Google\AdsApi\AdManager\v202202\AudienceSegmentDataProvider $dataProvider
     * @param string $type
     * @param int $pageViews
     * @param int $recencyDays
     * @param int $membershipExpirationDays
     * @param \Google\AdsApi\AdManager\v202202\FirstPartyAudienceSegmentRule $rule
     */
    public function __construct($id = null, $name = null, array $categoryIds = null, $description = null, $status = null, $size = null, $mobileWebSize = null, $idfaSize = null, $adIdSize = null, $ppidSize = null, $dataProvider = null, $type = null, $pageViews = null, $recencyDays = null, $membershipExpirationDays = null, $rule = null)
    {
      parent::__construct($id, $name, $categoryIds, $description, $status, $size, $mobileWebSize, $idfaSize, $adIdSize, $ppidSize, $dataProvider, $type, $pageViews, $recencyDays, $membershipExpirationDays);
      $this->rule = $rule;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\FirstPartyAudienceSegmentRule
     */
    public function getRule()
    {
      return $this->rule;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\FirstPartyAudienceSegmentRule $rule
     * @return \Google\AdsApi\AdManager\v202202\RuleBasedFirstPartyAudienceSegment
     */
    public function setRule($rule)
    {
      $this->rule = $rule;
      return $this;
    }

}
