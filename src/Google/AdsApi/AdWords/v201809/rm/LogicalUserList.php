<?php

namespace Google\AdsApi\AdWords\v201809\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LogicalUserList extends \Google\AdsApi\AdWords\v201809\rm\UserList
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\rm\UserListLogicalRule[] $rules
     */
    protected $rules = null;

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
     * @param \Google\AdsApi\AdWords\v201809\rm\UserListLogicalRule[] $rules
     */
    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $isEligibleForDisplay = null, $closingReason = null, $UserListType = null, array $rules = null)
    {
      parent::__construct($id, $isReadOnly, $name, $description, $status, $integrationCode, $accessReason, $accountUserListStatus, $membershipLifeSpan, $size, $sizeRange, $sizeForSearch, $sizeRangeForSearch, $listType, $isEligibleForSearch, $isEligibleForDisplay, $closingReason, $UserListType);
      $this->rules = $rules;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\rm\UserListLogicalRule[]
     */
    public function getRules()
    {
      return $this->rules;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\UserListLogicalRule[] $rules
     * @return \Google\AdsApi\AdWords\v201809\rm\LogicalUserList
     */
    public function setRules(array $rules)
    {
      $this->rules = $rules;
      return $this;
    }

}
