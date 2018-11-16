<?php

namespace Google\AdsApi\AdWords\v201802\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RuleBasedUserList extends \Google\AdsApi\AdWords\v201802\rm\UserList
{

    /**
     * @var string $prepopulationStatus
     */
    protected $prepopulationStatus = null;

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
     * @param string $prepopulationStatus
     */
    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $isEligibleForDisplay = null, $closingReason = null, $UserListType = null, $prepopulationStatus = null)
    {
      parent::__construct($id, $isReadOnly, $name, $description, $status, $integrationCode, $accessReason, $accountUserListStatus, $membershipLifeSpan, $size, $sizeRange, $sizeForSearch, $sizeRangeForSearch, $listType, $isEligibleForSearch, $isEligibleForDisplay, $closingReason, $UserListType);
      $this->prepopulationStatus = $prepopulationStatus;
    }

    /**
     * @return string
     */
    public function getPrepopulationStatus()
    {
      return $this->prepopulationStatus;
    }

    /**
     * @param string $prepopulationStatus
     * @return \Google\AdsApi\AdWords\v201802\rm\RuleBasedUserList
     */
    public function setPrepopulationStatus($prepopulationStatus)
    {
      $this->prepopulationStatus = $prepopulationStatus;
      return $this;
    }

}
