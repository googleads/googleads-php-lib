<?php

namespace Google\AdsApi\AdWords\v201809\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MutateMembersOperand
{

    /**
     * @var int $userListId
     */
    protected $userListId = null;

    /**
     * @var boolean $removeAll
     */
    protected $removeAll = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\rm\Member[] $membersList
     */
    protected $membersList = null;

    /**
     * @param int $userListId
     * @param boolean $removeAll
     * @param \Google\AdsApi\AdWords\v201809\rm\Member[] $membersList
     */
    public function __construct($userListId = null, $removeAll = null, array $membersList = null)
    {
      $this->userListId = $userListId;
      $this->removeAll = $removeAll;
      $this->membersList = $membersList;
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
     * @return \Google\AdsApi\AdWords\v201809\rm\MutateMembersOperand
     */
    public function setUserListId($userListId)
    {
      $this->userListId = (!is_null($userListId) && PHP_INT_SIZE === 4)
          ? floatval($userListId) : $userListId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoveAll()
    {
      return $this->removeAll;
    }

    /**
     * @param boolean $removeAll
     * @return \Google\AdsApi\AdWords\v201809\rm\MutateMembersOperand
     */
    public function setRemoveAll($removeAll)
    {
      $this->removeAll = $removeAll;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\rm\Member[]
     */
    public function getMembersList()
    {
      return $this->membersList;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\Member[] $membersList
     * @return \Google\AdsApi\AdWords\v201809\rm\MutateMembersOperand
     */
    public function setMembersList(array $membersList)
    {
      $this->membersList = $membersList;
      return $this;
    }

}
