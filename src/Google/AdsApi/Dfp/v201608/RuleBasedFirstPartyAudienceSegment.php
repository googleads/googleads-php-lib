<?php

namespace Google\AdsApi\Dfp\v201608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RuleBasedFirstPartyAudienceSegment extends \Google\AdsApi\Dfp\v201608\RuleBasedFirstPartyAudienceSegmentSummary
{

    /**
     * @var \Google\AdsApi\Dfp\v201608\FirstPartyAudienceSegmentRule $rule
     */
    protected $rule = null;

    /**
     * @param int $id
     * @param string $name
     * @param long[] $categoryIds
     * @param string $description
     * @param string $status
     * @param int $size
     * @param \Google\AdsApi\Dfp\v201608\AudienceSegmentDataProvider $dataProvider
     * @param string $type
     * @param int $pageViews
     * @param int $recencyDays
     * @param int $membershipExpirationDays
     * @param \Google\AdsApi\Dfp\v201608\FirstPartyAudienceSegmentRule $rule
     */
    public function __construct($id = null, $name = null, array $categoryIds = null, $description = null, $status = null, $size = null, $dataProvider = null, $type = null, $pageViews = null, $recencyDays = null, $membershipExpirationDays = null, $rule = null)
    {
      parent::__construct($id, $name, $categoryIds, $description, $status, $size, $dataProvider, $type, $pageViews, $recencyDays, $membershipExpirationDays);
      $this->rule = $rule;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201608\FirstPartyAudienceSegmentRule
     */
    public function getRule()
    {
      return $this->rule;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201608\FirstPartyAudienceSegmentRule $rule
     * @return \Google\AdsApi\Dfp\v201608\RuleBasedFirstPartyAudienceSegment
     */
    public function setRule($rule)
    {
      $this->rule = $rule;
      return $this;
    }

}
