<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AudienceSegmentPremiumFeature extends \Google\AdsApi\Dfp\v201708\PremiumFeature
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
     * @return \Google\AdsApi\Dfp\v201708\AudienceSegmentPremiumFeature
     */
    public function setAudienceSegmentId($audienceSegmentId)
    {
      $this->audienceSegmentId = (!is_null($audienceSegmentId) && PHP_INT_SIZE === 4)
          ? floatval($audienceSegmentId) : $audienceSegmentId;
      return $this;
    }

}
