<?php

namespace Google\AdsApi\AdWords\v201802\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LogicalUserListOperand
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\rm\UserList $UserList
     */
    protected $UserList = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\rm\UserList $UserList
     */
    public function __construct($UserList = null)
    {
      $this->UserList = $UserList;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\rm\UserList
     */
    public function getUserList()
    {
      return $this->UserList;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\rm\UserList $UserList
     * @return \Google\AdsApi\AdWords\v201802\rm\LogicalUserListOperand
     */
    public function setUserList($UserList)
    {
      $this->UserList = $UserList;
      return $this;
    }

}
