<?php

namespace Google\AdsApi\AdWords\v201601\rm;

class CrmBasedUserList extends \Google\AdsApi\AdWords\v201601\rm\UserList
{

    /**
     * @var string $optOutLink
     */
    protected $optOutLink = null;

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
     * @param string $optOutLink
     */
    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $UserListType = null, $optOutLink = null)
    {
      parent::__construct($id, $isReadOnly, $name, $description, $status, $integrationCode, $accessReason, $accountUserListStatus, $membershipLifeSpan, $size, $sizeRange, $sizeForSearch, $sizeRangeForSearch, $listType, $isEligibleForSearch, $UserListType);
      $this->optOutLink = $optOutLink;
    }

    /**
     * @return string
     */
    public function getOptOutLink()
    {
      return $this->optOutLink;
    }

    /**
     * @param string $optOutLink
     * @return \Google\AdsApi\AdWords\v201601\rm\CrmBasedUserList
     */
    public function setOptOutLink($optOutLink)
    {
      $this->optOutLink = $optOutLink;
      return $this;
    }

}
