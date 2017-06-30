<?php

namespace Google\AdsApi\AdWords\v201609\rm;


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
     * @var boolean $removeAll
     */
    protected $removeAll = null;

    /**
     * @var string[] $members
     */
    protected $members = null;

    /**
     * @param int $userListId
     * @param string $dataType
     * @param boolean $removeAll
     * @param string[] $members
     */
    public function __construct($userListId = null, $dataType = null, $removeAll = null, array $members = null)
    {
      $this->userListId = $userListId;
      $this->dataType = $dataType;
      $this->removeAll = $removeAll;
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
     * @return \Google\AdsApi\AdWords\v201609\rm\MutateMembersOperand
     */
    public function setUserListId($userListId)
    {
      $this->userListId = (PHP_INT_SIZE === 4)
          ? floatval($userListId) : $userListId;
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
     * @return \Google\AdsApi\AdWords\v201609\rm\MutateMembersOperand
     */
    public function setDataType($dataType)
    {
      $this->dataType = $dataType;
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
     * @return \Google\AdsApi\AdWords\v201609\rm\MutateMembersOperand
     */
    public function setRemoveAll($removeAll)
    {
      $this->removeAll = $removeAll;
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
     * @return \Google\AdsApi\AdWords\v201609\rm\MutateMembersOperand
     */
    public function setMembers(array $members)
    {
      $this->members = $members;
      return $this;
    }

}
