<?php

namespace Google\AdsApi\AdWords\v201601\rm;

class LogicalUserList extends \Google\AdsApi\AdWords\v201601\rm\UserList
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\rm\UserListLogicalRule[] $rules
     */
    protected $rules = null;

    /**
     * @var string $logicalOptOutLink
     */
    protected $logicalOptOutLink = null;

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
     * @param string $UserListType
     * @param \Google\AdsApi\AdWords\v201601\rm\UserListLogicalRule[] $rules
     * @param string $logicalOptOutLink
     */
    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $UserListType = null, array $rules = null, $logicalOptOutLink = null)
    {
      parent::__construct($id, $isReadOnly, $name, $description, $status, $integrationCode, $accessReason, $accountUserListStatus, $membershipLifeSpan, $size, $sizeRange, $sizeForSearch, $sizeRangeForSearch, $listType, $isEligibleForSearch, $UserListType);
      $this->rules = $rules;
      $this->logicalOptOutLink = $logicalOptOutLink;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\rm\UserListLogicalRule[]
     */
    public function getRules()
    {
      return $this->rules;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\rm\UserListLogicalRule[] $rules
     * @return \Google\AdsApi\AdWords\v201601\rm\LogicalUserList
     */
    public function setRules(array $rules)
    {
      $this->rules = $rules;
      return $this;
    }

    /**
     * @return string
     */
    public function getLogicalOptOutLink()
    {
      return $this->logicalOptOutLink;
    }

    /**
     * @param string $logicalOptOutLink
     * @return \Google\AdsApi\AdWords\v201601\rm\LogicalUserList
     */
    public function setLogicalOptOutLink($logicalOptOutLink)
    {
      $this->logicalOptOutLink = $logicalOptOutLink;
      return $this;
    }

}
