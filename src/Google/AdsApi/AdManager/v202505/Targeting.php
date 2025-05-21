<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Targeting
{

    /**
     * @var \Google\AdsApi\AdManager\v202505\GeoTargeting $geoTargeting
     */
    protected $geoTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\InventoryTargeting $inventoryTargeting
     */
    protected $inventoryTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\DayPartTargeting $dayPartTargeting
     */
    protected $dayPartTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\DateTimeRangeTargeting $dateTimeRangeTargeting
     */
    protected $dateTimeRangeTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\TechnologyTargeting $technologyTargeting
     */
    protected $technologyTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\CustomCriteriaSet $customTargeting
     */
    protected $customTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\UserDomainTargeting $userDomainTargeting
     */
    protected $userDomainTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\ContentTargeting $contentTargeting
     */
    protected $contentTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\VideoPositionTargeting $videoPositionTargeting
     */
    protected $videoPositionTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\MobileApplicationTargeting $mobileApplicationTargeting
     */
    protected $mobileApplicationTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\BuyerUserListTargeting $buyerUserListTargeting
     */
    protected $buyerUserListTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\InventoryUrlTargeting $inventoryUrlTargeting
     */
    protected $inventoryUrlTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\VerticalTargeting $verticalTargeting
     */
    protected $verticalTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\ContentLabelTargeting $contentLabelTargeting
     */
    protected $contentLabelTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\RequestPlatformTargeting $requestPlatformTargeting
     */
    protected $requestPlatformTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202505\InventorySizeTargeting $inventorySizeTargeting
     */
    protected $inventorySizeTargeting = null;

    /**
     * @param \Google\AdsApi\AdManager\v202505\GeoTargeting $geoTargeting
     * @param \Google\AdsApi\AdManager\v202505\InventoryTargeting $inventoryTargeting
     * @param \Google\AdsApi\AdManager\v202505\DayPartTargeting $dayPartTargeting
     * @param \Google\AdsApi\AdManager\v202505\DateTimeRangeTargeting $dateTimeRangeTargeting
     * @param \Google\AdsApi\AdManager\v202505\TechnologyTargeting $technologyTargeting
     * @param \Google\AdsApi\AdManager\v202505\CustomCriteriaSet $customTargeting
     * @param \Google\AdsApi\AdManager\v202505\UserDomainTargeting $userDomainTargeting
     * @param \Google\AdsApi\AdManager\v202505\ContentTargeting $contentTargeting
     * @param \Google\AdsApi\AdManager\v202505\VideoPositionTargeting $videoPositionTargeting
     * @param \Google\AdsApi\AdManager\v202505\MobileApplicationTargeting $mobileApplicationTargeting
     * @param \Google\AdsApi\AdManager\v202505\BuyerUserListTargeting $buyerUserListTargeting
     * @param \Google\AdsApi\AdManager\v202505\InventoryUrlTargeting $inventoryUrlTargeting
     * @param \Google\AdsApi\AdManager\v202505\VerticalTargeting $verticalTargeting
     * @param \Google\AdsApi\AdManager\v202505\ContentLabelTargeting $contentLabelTargeting
     * @param \Google\AdsApi\AdManager\v202505\RequestPlatformTargeting $requestPlatformTargeting
     * @param \Google\AdsApi\AdManager\v202505\InventorySizeTargeting $inventorySizeTargeting
     */
    public function __construct($geoTargeting = null, $inventoryTargeting = null, $dayPartTargeting = null, $dateTimeRangeTargeting = null, $technologyTargeting = null, $customTargeting = null, $userDomainTargeting = null, $contentTargeting = null, $videoPositionTargeting = null, $mobileApplicationTargeting = null, $buyerUserListTargeting = null, $inventoryUrlTargeting = null, $verticalTargeting = null, $contentLabelTargeting = null, $requestPlatformTargeting = null, $inventorySizeTargeting = null)
    {
      $this->geoTargeting = $geoTargeting;
      $this->inventoryTargeting = $inventoryTargeting;
      $this->dayPartTargeting = $dayPartTargeting;
      $this->dateTimeRangeTargeting = $dateTimeRangeTargeting;
      $this->technologyTargeting = $technologyTargeting;
      $this->customTargeting = $customTargeting;
      $this->userDomainTargeting = $userDomainTargeting;
      $this->contentTargeting = $contentTargeting;
      $this->videoPositionTargeting = $videoPositionTargeting;
      $this->mobileApplicationTargeting = $mobileApplicationTargeting;
      $this->buyerUserListTargeting = $buyerUserListTargeting;
      $this->inventoryUrlTargeting = $inventoryUrlTargeting;
      $this->verticalTargeting = $verticalTargeting;
      $this->contentLabelTargeting = $contentLabelTargeting;
      $this->requestPlatformTargeting = $requestPlatformTargeting;
      $this->inventorySizeTargeting = $inventorySizeTargeting;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\GeoTargeting
     */
    public function getGeoTargeting()
    {
      return $this->geoTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\GeoTargeting $geoTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setGeoTargeting($geoTargeting)
    {
      $this->geoTargeting = $geoTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\InventoryTargeting
     */
    public function getInventoryTargeting()
    {
      return $this->inventoryTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\InventoryTargeting $inventoryTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setInventoryTargeting($inventoryTargeting)
    {
      $this->inventoryTargeting = $inventoryTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\DayPartTargeting
     */
    public function getDayPartTargeting()
    {
      return $this->dayPartTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\DayPartTargeting $dayPartTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setDayPartTargeting($dayPartTargeting)
    {
      $this->dayPartTargeting = $dayPartTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\DateTimeRangeTargeting
     */
    public function getDateTimeRangeTargeting()
    {
      return $this->dateTimeRangeTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\DateTimeRangeTargeting $dateTimeRangeTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setDateTimeRangeTargeting($dateTimeRangeTargeting)
    {
      $this->dateTimeRangeTargeting = $dateTimeRangeTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\TechnologyTargeting
     */
    public function getTechnologyTargeting()
    {
      return $this->technologyTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\TechnologyTargeting $technologyTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setTechnologyTargeting($technologyTargeting)
    {
      $this->technologyTargeting = $technologyTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\CustomCriteriaSet
     */
    public function getCustomTargeting()
    {
      return $this->customTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\CustomCriteriaSet $customTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setCustomTargeting($customTargeting)
    {
      $this->customTargeting = $customTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\UserDomainTargeting
     */
    public function getUserDomainTargeting()
    {
      return $this->userDomainTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\UserDomainTargeting $userDomainTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setUserDomainTargeting($userDomainTargeting)
    {
      $this->userDomainTargeting = $userDomainTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\ContentTargeting
     */
    public function getContentTargeting()
    {
      return $this->contentTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\ContentTargeting $contentTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setContentTargeting($contentTargeting)
    {
      $this->contentTargeting = $contentTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\VideoPositionTargeting
     */
    public function getVideoPositionTargeting()
    {
      return $this->videoPositionTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\VideoPositionTargeting $videoPositionTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setVideoPositionTargeting($videoPositionTargeting)
    {
      $this->videoPositionTargeting = $videoPositionTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\MobileApplicationTargeting
     */
    public function getMobileApplicationTargeting()
    {
      return $this->mobileApplicationTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\MobileApplicationTargeting $mobileApplicationTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setMobileApplicationTargeting($mobileApplicationTargeting)
    {
      $this->mobileApplicationTargeting = $mobileApplicationTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\BuyerUserListTargeting
     */
    public function getBuyerUserListTargeting()
    {
      return $this->buyerUserListTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\BuyerUserListTargeting $buyerUserListTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setBuyerUserListTargeting($buyerUserListTargeting)
    {
      $this->buyerUserListTargeting = $buyerUserListTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\InventoryUrlTargeting
     */
    public function getInventoryUrlTargeting()
    {
      return $this->inventoryUrlTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\InventoryUrlTargeting $inventoryUrlTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setInventoryUrlTargeting($inventoryUrlTargeting)
    {
      $this->inventoryUrlTargeting = $inventoryUrlTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\VerticalTargeting
     */
    public function getVerticalTargeting()
    {
      return $this->verticalTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\VerticalTargeting $verticalTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setVerticalTargeting($verticalTargeting)
    {
      $this->verticalTargeting = $verticalTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\ContentLabelTargeting
     */
    public function getContentLabelTargeting()
    {
      return $this->contentLabelTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\ContentLabelTargeting $contentLabelTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setContentLabelTargeting($contentLabelTargeting)
    {
      $this->contentLabelTargeting = $contentLabelTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\RequestPlatformTargeting
     */
    public function getRequestPlatformTargeting()
    {
      return $this->requestPlatformTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\RequestPlatformTargeting $requestPlatformTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setRequestPlatformTargeting($requestPlatformTargeting)
    {
      $this->requestPlatformTargeting = $requestPlatformTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202505\InventorySizeTargeting
     */
    public function getInventorySizeTargeting()
    {
      return $this->inventorySizeTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202505\InventorySizeTargeting $inventorySizeTargeting
     * @return \Google\AdsApi\AdManager\v202505\Targeting
     */
    public function setInventorySizeTargeting($inventorySizeTargeting)
    {
      $this->inventorySizeTargeting = $inventorySizeTargeting;
      return $this;
    }

}
