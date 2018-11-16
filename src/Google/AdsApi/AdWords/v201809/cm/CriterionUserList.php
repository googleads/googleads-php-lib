<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CriterionUserList extends \Google\AdsApi\AdWords\v201809\cm\Criterion
{

    /**
     * @var int $userListId
     */
    protected $userListId = null;

    /**
     * @var string $userListName
     */
    protected $userListName = null;

    /**
     * @var string $userListMembershipStatus
     */
    protected $userListMembershipStatus = null;

    /**
     * @var boolean $userListEligibleForSearch
     */
    protected $userListEligibleForSearch = null;

    /**
     * @var boolean $userListEligibleForDisplay
     */
    protected $userListEligibleForDisplay = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param int $userListId
     * @param string $userListName
     * @param string $userListMembershipStatus
     * @param boolean $userListEligibleForSearch
     * @param boolean $userListEligibleForDisplay
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $userListId = null, $userListName = null, $userListMembershipStatus = null, $userListEligibleForSearch = null, $userListEligibleForDisplay = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->userListId = $userListId;
      $this->userListName = $userListName;
      $this->userListMembershipStatus = $userListMembershipStatus;
      $this->userListEligibleForSearch = $userListEligibleForSearch;
      $this->userListEligibleForDisplay = $userListEligibleForDisplay;
    }

    /**
     * @return int
     */
    public function getUserListId()
    {
      return $this->userListId;
    }

    /**
     * @param int $userListId
     * @return \Google\AdsApi\AdWords\v201809\cm\CriterionUserList
     */
    public function setUserListId($userListId)
    {
      $this->userListId = (!is_null($userListId) && PHP_INT_SIZE === 4)
          ? floatval($userListId) : $userListId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserListName()
    {
      return $this->userListName;
    }

    /**
     * @param string $userListName
     * @return \Google\AdsApi\AdWords\v201809\cm\CriterionUserList
     */
    public function setUserListName($userListName)
    {
      $this->userListName = $userListName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserListMembershipStatus()
    {
      return $this->userListMembershipStatus;
    }

    /**
     * @param string $userListMembershipStatus
     * @return \Google\AdsApi\AdWords\v201809\cm\CriterionUserList
     */
    public function setUserListMembershipStatus($userListMembershipStatus)
    {
      $this->userListMembershipStatus = $userListMembershipStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUserListEligibleForSearch()
    {
      return $this->userListEligibleForSearch;
    }

    /**
     * @param boolean $userListEligibleForSearch
     * @return \Google\AdsApi\AdWords\v201809\cm\CriterionUserList
     */
    public function setUserListEligibleForSearch($userListEligibleForSearch)
    {
      $this->userListEligibleForSearch = $userListEligibleForSearch;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUserListEligibleForDisplay()
    {
      return $this->userListEligibleForDisplay;
    }

    /**
     * @param boolean $userListEligibleForDisplay
     * @return \Google\AdsApi\AdWords\v201809\cm\CriterionUserList
     */
    public function setUserListEligibleForDisplay($userListEligibleForDisplay)
    {
      $this->userListEligibleForDisplay = $userListEligibleForDisplay;
      return $this;
    }

}
