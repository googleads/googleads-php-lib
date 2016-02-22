<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CriterionUserList extends \Google\AdsApi\AdWords\v201601\cm\Criterion
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
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param int $userListId
     * @param string $userListName
     * @param string $userListMembershipStatus
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $userListId = null, $userListName = null, $userListMembershipStatus = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->userListId = $userListId;
      $this->userListName = $userListName;
      $this->userListMembershipStatus = $userListMembershipStatus;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\CriterionUserList
     */
    public function setUserListId($userListId)
    {
      $this->userListId = $userListId;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\CriterionUserList
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
     * @return \Google\AdsApi\AdWords\v201601\cm\CriterionUserList
     */
    public function setUserListMembershipStatus($userListMembershipStatus)
    {
      $this->userListMembershipStatus = $userListMembershipStatus;
      return $this;
    }

}
