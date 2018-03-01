<?php

namespace Google\AdsApi\AdWords\v201802\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MutateMembersReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\rm\UserList[] $userLists
     */
    protected $userLists = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\rm\UserList[] $userLists
     */
    public function __construct(array $userLists = null)
    {
      $this->userLists = $userLists;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\rm\UserList[]
     */
    public function getUserLists()
    {
      return $this->userLists;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\rm\UserList[] $userLists
     * @return \Google\AdsApi\AdWords\v201802\rm\MutateMembersReturnValue
     */
    public function setUserLists(array $userLists)
    {
      $this->userLists = $userLists;
      return $this;
    }

}
