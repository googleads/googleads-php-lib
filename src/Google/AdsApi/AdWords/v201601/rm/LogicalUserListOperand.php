<?php

namespace Google\AdsApi\AdWords\v201601\rm;

class LogicalUserListOperand
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\rm\UserList $UserList
     */
    protected $UserList = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\rm\UserList $UserList
     */
    public function __construct($UserList = null)
    {
      $this->UserList = $UserList;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\rm\UserList
     */
    public function getUserList()
    {
      return $this->UserList;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\rm\UserList $UserList
     * @return \Google\AdsApi\AdWords\v201601\rm\LogicalUserListOperand
     */
    public function setUserList($UserList)
    {
      $this->UserList = $UserList;
      return $this;
    }

}
