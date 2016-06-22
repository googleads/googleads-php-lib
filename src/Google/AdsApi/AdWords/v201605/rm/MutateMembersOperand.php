<?php

namespace Google\AdsApi\AdWords\v201605\rm;


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
     * @var string $dataType
     */
    protected $dataType = null;

    /**
     * @var string[] $members
     */
    protected $members = null;

    /**
     * @param int $userListId
     * @param string $dataType
     * @param string[] $members
     */
    public function __construct($userListId = null, $dataType = null, array $members = null)
    {
      $this->userListId = $userListId;
      $this->dataType = $dataType;
      $this->members = $members;
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
     * @return \Google\AdsApi\AdWords\v201605\rm\MutateMembersOperand
     */
    public function setUserListId($userListId)
    {
      $this->userListId = $userListId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDataType()
    {
      return $this->dataType;
    }

    /**
     * @param string $dataType
     * @return \Google\AdsApi\AdWords\v201605\rm\MutateMembersOperand
     */
    public function setDataType($dataType)
    {
      $this->dataType = $dataType;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getMembers()
    {
      return $this->members;
    }

    /**
     * @param string[] $members
     * @return \Google\AdsApi\AdWords\v201605\rm\MutateMembersOperand
     */
    public function setMembers(array $members)
    {
      $this->members = $members;
      return $this;
    }

}
