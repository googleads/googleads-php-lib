<?php

namespace Google\AdsApi\Dfp\v201511;

class AudienceSegmentPremiumFeature extends \Google\AdsApi\Dfp\v201511\PremiumFeature
{

    /**
     * @var int $audienceSegmentId
     */
    protected $audienceSegmentId = null;

    /**
     * @param int $audienceSegmentId
     */
    public function __construct($audienceSegmentId = null)
    {
      $this->audienceSegmentId = $audienceSegmentId;
    }

    /**
     * @return int
     */
    public function getAudienceSegmentId()
    {
      return $this->audienceSegmentId;
    }

    /**
     * @param int $audienceSegmentId
     * @return \Google\AdsApi\Dfp\v201511\AudienceSegmentPremiumFeature
     */
    public function setAudienceSegmentId($audienceSegmentId)
    {
      $this->audienceSegmentId = $audienceSegmentId;
      return $this;
    }

}
