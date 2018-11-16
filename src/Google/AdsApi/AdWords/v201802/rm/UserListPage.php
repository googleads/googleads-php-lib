<?php

namespace Google\AdsApi\AdWords\v201802\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UserListPage extends \Google\AdsApi\AdWords\v201802\cm\Page
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\rm\UserList[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201802\rm\UserList[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\rm\UserList[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\rm\UserList[] $entries
     * @return \Google\AdsApi\AdWords\v201802\rm\UserListPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
