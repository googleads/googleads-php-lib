<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class FeedItemAdGroupTargeting
{

    /**
     * @var int $TargetingAdGroupId
     */
    protected $TargetingAdGroupId = null;

    /**
     * @param int $TargetingAdGroupId
     */
    public function __construct($TargetingAdGroupId = null)
    {
      $this->TargetingAdGroupId = $TargetingAdGroupId;
    }

    /**
     * @return int
     */
    public function getTargetingAdGroupId()
    {
      return $this->TargetingAdGroupId;
    }

    /**
     * @param int $TargetingAdGroupId
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedItemAdGroupTargeting
     */
    public function setTargetingAdGroupId($TargetingAdGroupId)
    {
      $this->TargetingAdGroupId = $TargetingAdGroupId;
      return $this;
    }

}
