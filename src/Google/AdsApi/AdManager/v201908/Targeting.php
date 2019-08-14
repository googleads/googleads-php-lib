<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Targeting
{

    /**
     * @var \Google\AdsApi\AdManager\v201908\GeoTargeting $geoTargeting
     */
    protected $geoTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\InventoryTargeting $inventoryTargeting
     */
    protected $inventoryTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\DayPartTargeting $dayPartTargeting
     */
    protected $dayPartTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\DateTimeRangeTargeting $dateTimeRangeTargeting
     */
    protected $dateTimeRangeTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\TechnologyTargeting $technologyTargeting
     */
    protected $technologyTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\CustomCriteriaSet $customTargeting
     */
    protected $customTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\UserDomainTargeting $userDomainTargeting
     */
    protected $userDomainTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\ContentTargeting $contentTargeting
     */
    protected $contentTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\VideoPositionTargeting $videoPositionTargeting
     */
    protected $videoPositionTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\MobileApplicationTargeting $mobileApplicationTargeting
     */
    protected $mobileApplicationTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\BuyerUserListTargeting $buyerUserListTargeting
     */
    protected $buyerUserListTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201908\RequestPlatformTargeting $requestPlatformTargeting
     */
    protected $requestPlatformTargeting = null;

    /**
     * @param \Google\AdsApi\AdManager\v201908\GeoTargeting $geoTargeting
     * @param \Google\AdsApi\AdManager\v201908\InventoryTargeting $inventoryTargeting
     * @param \Google\AdsApi\AdManager\v201908\DayPartTargeting $dayPartTargeting
     * @param \Google\AdsApi\AdManager\v201908\DateTimeRangeTargeting $dateTimeRangeTargeting
     * @param \Google\AdsApi\AdManager\v201908\TechnologyTargeting $technologyTargeting
     * @param \Google\AdsApi\AdManager\v201908\CustomCriteriaSet $customTargeting
     * @param \Google\AdsApi\AdManager\v201908\UserDomainTargeting $userDomainTargeting
     * @param \Google\AdsApi\AdManager\v201908\ContentTargeting $contentTargeting
     * @param \Google\AdsApi\AdManager\v201908\VideoPositionTargeting $videoPositionTargeting
     * @param \Google\AdsApi\AdManager\v201908\MobileApplicationTargeting $mobileApplicationTargeting
     * @param \Google\AdsApi\AdManager\v201908\BuyerUserListTargeting $buyerUserListTargeting
     * @param \Google\AdsApi\AdManager\v201908\RequestPlatformTargeting $requestPlatformTargeting
     */
    public function __construct($geoTargeting = null, $inventoryTargeting = null, $dayPartTargeting = null, $dateTimeRangeTargeting = null, $technologyTargeting = null, $customTargeting = null, $userDomainTargeting = null, $contentTargeting = null, $videoPositionTargeting = null, $mobileApplicationTargeting = null, $buyerUserListTargeting = null, $requestPlatformTargeting = null)
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
      $this->requestPlatformTargeting = $requestPlatformTargeting;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\GeoTargeting
     */
    public function getGeoTargeting()
    {
      return $this->geoTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\GeoTargeting $geoTargeting
     * @return \Google\AdsApi\AdManager\v201908\Targeting
     */
    public function setGeoTargeting($geoTargeting)
    {
      $this->geoTargeting = $geoTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\InventoryTargeting
     */
    public function getInventoryTargeting()
    {
      return $this->inventoryTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\InventoryTargeting $inventoryTargeting
     * @return \Google\AdsApi\AdManager\v201908\Targeting
     */
    public function setInventoryTargeting($inventoryTargeting)
    {
      $this->inventoryTargeting = $inventoryTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\DayPartTargeting
     */
    public function getDayPartTargeting()
    {
      return $this->dayPartTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\DayPartTargeting $dayPartTargeting
     * @return \Google\AdsApi\AdManager\v201908\Targeting
     */
    public function setDayPartTargeting($dayPartTargeting)
    {
      $this->dayPartTargeting = $dayPartTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\DateTimeRangeTargeting
     */
    public function getDateTimeRangeTargeting()
    {
      return $this->dateTimeRangeTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\DateTimeRangeTargeting $dateTimeRangeTargeting
     * @return \Google\AdsApi\AdManager\v201908\Targeting
     */
    public function setDateTimeRangeTargeting($dateTimeRangeTargeting)
    {
      $this->dateTimeRangeTargeting = $dateTimeRangeTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\TechnologyTargeting
     */
    public function getTechnologyTargeting()
    {
      return $this->technologyTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\TechnologyTargeting $technologyTargeting
     * @return \Google\AdsApi\AdManager\v201908\Targeting
     */
    public function setTechnologyTargeting($technologyTargeting)
    {
      $this->technologyTargeting = $technologyTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\CustomCriteriaSet
     */
    public function getCustomTargeting()
    {
      return $this->customTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\CustomCriteriaSet $customTargeting
     * @return \Google\AdsApi\AdManager\v201908\Targeting
     */
    public function setCustomTargeting($customTargeting)
    {
      $this->customTargeting = $customTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\UserDomainTargeting
     */
    public function getUserDomainTargeting()
    {
      return $this->userDomainTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\UserDomainTargeting $userDomainTargeting
     * @return \Google\AdsApi\AdManager\v201908\Targeting
     */
    public function setUserDomainTargeting($userDomainTargeting)
    {
      $this->userDomainTargeting = $userDomainTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\ContentTargeting
     */
    public function getContentTargeting()
    {
      return $this->contentTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\ContentTargeting $contentTargeting
     * @return \Google\AdsApi\AdManager\v201908\Targeting
     */
    public function setContentTargeting($contentTargeting)
    {
      $this->contentTargeting = $contentTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\VideoPositionTargeting
     */
    public function getVideoPositionTargeting()
    {
      return $this->videoPositionTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\VideoPositionTargeting $videoPositionTargeting
     * @return \Google\AdsApi\AdManager\v201908\Targeting
     */
    public function setVideoPositionTargeting($videoPositionTargeting)
    {
      $this->videoPositionTargeting = $videoPositionTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\MobileApplicationTargeting
     */
    public function getMobileApplicationTargeting()
    {
      return $this->mobileApplicationTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\MobileApplicationTargeting $mobileApplicationTargeting
     * @return \Google\AdsApi\AdManager\v201908\Targeting
     */
    public function setMobileApplicationTargeting($mobileApplicationTargeting)
    {
      $this->mobileApplicationTargeting = $mobileApplicationTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\BuyerUserListTargeting
     */
    public function getBuyerUserListTargeting()
    {
      return $this->buyerUserListTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\BuyerUserListTargeting $buyerUserListTargeting
     * @return \Google\AdsApi\AdManager\v201908\Targeting
     */
    public function setBuyerUserListTargeting($buyerUserListTargeting)
    {
      $this->buyerUserListTargeting = $buyerUserListTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\RequestPlatformTargeting
     */
    public function getRequestPlatformTargeting()
    {
      return $this->requestPlatformTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\RequestPlatformTargeting $requestPlatformTargeting
     * @return \Google\AdsApi\AdManager\v201908\Targeting
     */
    public function setRequestPlatformTargeting($requestPlatformTargeting)
    {
      $this->requestPlatformTargeting = $requestPlatformTargeting;
      return $this;
    }

}
