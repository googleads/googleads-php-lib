<?php

namespace Google\AdsApi\AdWords\v201802\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SimilarUserList extends \Google\AdsApi\AdWords\v201802\rm\UserList
{

    /**
     * @var int $seedUserListId
     */
    protected $seedUserListId = null;

    /**
     * @var string $seedUserListName
     */
    protected $seedUserListName = null;

    /**
     * @var string $seedUserListDescription
     */
    protected $seedUserListDescription = null;

    /**
     * @var string $seedUserListStatus
     */
    protected $seedUserListStatus = null;

    /**
     * @var int $seedListSize
     */
    protected $seedListSize = null;

    /**
     * @param int $id
     * @param boolean $isReadOnly
     * @param string $name
     * @param string $description
     * @param string $status
     * @param string $integrationCode
     * @param string $accessReason
     * @param string $accountUserListStatus
     * @param int $membershipLifeSpan
     * @param int $size
     * @param string $sizeRange
     * @param int $sizeForSearch
     * @param string $sizeRangeForSearch
     * @param string $listType
     * @param boolean $isEligibleForSearch
     * @param boolean $isEligibleForDisplay
     * @param string $closingReason
     * @param string $UserListType
     * @param int $seedUserListId
     * @param string $seedUserListName
     * @param string $seedUserListDescription
     * @param string $seedUserListStatus
     * @param int $seedListSize
     */
    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $isEligibleForDisplay = null, $closingReason = null, $UserListType = null, $seedUserListId = null, $seedUserListName = null, $seedUserListDescription = null, $seedUserListStatus = null, $seedListSize = null)
    {
      parent::__construct($id, $isReadOnly, $name, $description, $status, $integrationCode, $accessReason, $accountUserListStatus, $membershipLifeSpan, $size, $sizeRange, $sizeForSearch, $sizeRangeForSearch, $listType, $isEligibleForSearch, $isEligibleForDisplay, $closingReason, $UserListType);
      $this->seedUserListId = $seedUserListId;
      $this->seedUserListName = $seedUserListName;
      $this->seedUserListDescription = $seedUserListDescription;
      $this->seedUserListStatus = $seedUserListStatus;
      $this->seedListSize = $seedListSize;
    }

    /**
     * @return int
     */
    public function getSeedUserListId()
    {
      return $this->seedUserListId;
    }

    /**
     * @param int $seedUserListId
     * @return \Google\AdsApi\AdWords\v201802\rm\SimilarUserList
     */
    public function setSeedUserListId($seedUserListId)
    {
      $this->seedUserListId = (!is_null($seedUserListId) && PHP_INT_SIZE === 4)
          ? floatval($seedUserListId) : $seedUserListId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeedUserListName()
    {
      return $this->seedUserListName;
    }

    /**
     * @param string $seedUserListName
     * @return \Google\AdsApi\AdWords\v201802\rm\SimilarUserList
     */
    public function setSeedUserListName($seedUserListName)
    {
      $this->seedUserListName = $seedUserListName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeedUserListDescription()
    {
      return $this->seedUserListDescription;
    }

    /**
     * @param string $seedUserListDescription
     * @return \Google\AdsApi\AdWords\v201802\rm\SimilarUserList
     */
    public function setSeedUserListDescription($seedUserListDescription)
    {
      $this->seedUserListDescription = $seedUserListDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeedUserListStatus()
    {
      return $this->seedUserListStatus;
    }

    /**
     * @param string $seedUserListStatus
     * @return \Google\AdsApi\AdWords\v201802\rm\SimilarUserList
     */
    public function setSeedUserListStatus($seedUserListStatus)
    {
      $this->seedUserListStatus = $seedUserListStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getSeedListSize()
    {
      return $this->seedListSize;
    }

    /**
     * @param int $seedListSize
     * @return \Google\AdsApi\AdWords\v201802\rm\SimilarUserList
     */
    public function setSeedListSize($seedListSize)
    {
      $this->seedListSize = (!is_null($seedListSize) && PHP_INT_SIZE === 4)
          ? floatval($seedListSize) : $seedListSize;
      return $this;
    }

}
