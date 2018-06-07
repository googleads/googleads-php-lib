<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedItemAdGroupTarget extends \Google\AdsApi\AdWords\v201806\cm\FeedItemTarget
{

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var string $adGroupName
     */
    protected $adGroupName = null;

    /**
     * @var string $parentCampaignName
     */
    protected $parentCampaignName = null;

    /**
     * @param int $feedId
     * @param int $feedItemId
     * @param string $targetType
     * @param string $status
     * @param string $FeedItemTargetType
     * @param int $adGroupId
     * @param string $adGroupName
     * @param string $parentCampaignName
     */
    public function __construct($feedId = null, $feedItemId = null, $targetType = null, $status = null, $FeedItemTargetType = null, $adGroupId = null, $adGroupName = null, $parentCampaignName = null)
    {
      parent::__construct($feedId, $feedItemId, $targetType, $status, $FeedItemTargetType);
      $this->adGroupId = $adGroupId;
      $this->adGroupName = $adGroupName;
      $this->parentCampaignName = $parentCampaignName;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItemAdGroupTarget
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = (!is_null($adGroupId) && PHP_INT_SIZE === 4)
          ? floatval($adGroupId) : $adGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdGroupName()
    {
      return $this->adGroupName;
    }

    /**
     * @param string $adGroupName
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItemAdGroupTarget
     */
    public function setAdGroupName($adGroupName)
    {
      $this->adGroupName = $adGroupName;
      return $this;
    }

    /**
     * @return string
     */
    public function getParentCampaignName()
    {
      return $this->parentCampaignName;
    }

    /**
     * @param string $parentCampaignName
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItemAdGroupTarget
     */
    public function setParentCampaignName($parentCampaignName)
    {
      $this->parentCampaignName = $parentCampaignName;
      return $this;
    }

}
