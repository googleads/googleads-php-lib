<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ThirdPartyAudienceSegment extends \Google\AdsApi\Dfp\v201708\AudienceSegment
{

    /**
     * @var string $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\Money $cost
     */
    protected $cost = null;

    /**
     * @var string $licenseType
     */
    protected $licenseType = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\DateTime $endDateTime
     */
    protected $endDateTime = null;

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
     * @param \Google\AdsApi\Dfp\v201708\AudienceSegmentDataProvider $dataProvider
     * @param string $type
     * @param string $approvalStatus
     * @param \Google\AdsApi\Dfp\v201708\Money $cost
     * @param string $licenseType
     * @param \Google\AdsApi\Dfp\v201708\DateTime $startDateTime
     * @param \Google\AdsApi\Dfp\v201708\DateTime $endDateTime
     */
    public function __construct($id = null, $name = null, array $categoryIds = null, $description = null, $status = null, $size = null, $mobileWebSize = null, $idfaSize = null, $adIdSize = null, $dataProvider = null, $type = null, $approvalStatus = null, $cost = null, $licenseType = null, $startDateTime = null, $endDateTime = null)
    {
      parent::__construct($id, $name, $categoryIds, $description, $status, $size, $mobileWebSize, $idfaSize, $adIdSize, $dataProvider, $type);
      $this->approvalStatus = $approvalStatus;
      $this->cost = $cost;
      $this->licenseType = $licenseType;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
    }

    /**
     * @return string
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param string $approvalStatus
     * @return \Google\AdsApi\Dfp\v201708\ThirdPartyAudienceSegment
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\Money
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\Money $cost
     * @return \Google\AdsApi\Dfp\v201708\ThirdPartyAudienceSegment
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return string
     */
    public function getLicenseType()
    {
      return $this->licenseType;
    }

    /**
     * @param string $licenseType
     * @return \Google\AdsApi\Dfp\v201708\ThirdPartyAudienceSegment
     */
    public function setLicenseType($licenseType)
    {
      $this->licenseType = $licenseType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DateTime $startDateTime
     * @return \Google\AdsApi\Dfp\v201708\ThirdPartyAudienceSegment
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DateTime $endDateTime
     * @return \Google\AdsApi\Dfp\v201708\ThirdPartyAudienceSegment
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

}
