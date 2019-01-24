<?php

namespace Google\AdsApi\AdWords\v201809\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UserList
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var boolean $isReadOnly
     */
    protected $isReadOnly = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $integrationCode
     */
    protected $integrationCode = null;

    /**
     * @var string $accessReason
     */
    protected $accessReason = null;

    /**
     * @var string $accountUserListStatus
     */
    protected $accountUserListStatus = null;

    /**
     * @var int $membershipLifeSpan
     */
    protected $membershipLifeSpan = null;

    /**
     * @var int $size
     */
    protected $size = null;

    /**
     * @var string $sizeRange
     */
    protected $sizeRange = null;

    /**
     * @var int $sizeForSearch
     */
    protected $sizeForSearch = null;

    /**
     * @var string $sizeRangeForSearch
     */
    protected $sizeRangeForSearch = null;

    /**
     * @var string $listType
     */
    protected $listType = null;

    /**
     * @var boolean $isEligibleForSearch
     */
    protected $isEligibleForSearch = null;

    /**
     * @var boolean $isEligibleForDisplay
     */
    protected $isEligibleForDisplay = null;

    /**
     * @var string $closingReason
     */
    protected $closingReason = null;

    /**
     * @var string $UserListType
     */
    protected $UserListType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['UserList.Type' => 'UserListType'];

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
     * @param boolean $isEligibleForDisplay
     * @param string $closingReason
     * @param string $UserListType
     */
    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $isEligibleForDisplay = null, $closingReason = null, $UserListType = null)
    {
      $this->id = $id;
      $this->isReadOnly = $isReadOnly;
      $this->name = $name;
      $this->description = $description;
      $this->status = $status;
      $this->integrationCode = $integrationCode;
      $this->accessReason = $accessReason;
      $this->accountUserListStatus = $accountUserListStatus;
      $this->membershipLifeSpan = $membershipLifeSpan;
      $this->size = $size;
      $this->sizeRange = $sizeRange;
      $this->sizeForSearch = $sizeForSearch;
      $this->sizeRangeForSearch = $sizeRangeForSearch;
      $this->listType = $listType;
      $this->isEligibleForSearch = $isEligibleForSearch;
      $this->isEligibleForDisplay = $isEligibleForDisplay;
      $this->closingReason = $closingReason;
      $this->UserListType = $UserListType;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReadOnly()
    {
      return $this->isReadOnly;
    }

    /**
     * @param boolean $isReadOnly
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setIsReadOnly($isReadOnly)
    {
      $this->isReadOnly = $isReadOnly;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getIntegrationCode()
    {
      return $this->integrationCode;
    }

    /**
     * @param string $integrationCode
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setIntegrationCode($integrationCode)
    {
      $this->integrationCode = $integrationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccessReason()
    {
      return $this->accessReason;
    }

    /**
     * @param string $accessReason
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setAccessReason($accessReason)
    {
      $this->accessReason = $accessReason;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountUserListStatus()
    {
      return $this->accountUserListStatus;
    }

    /**
     * @param string $accountUserListStatus
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setAccountUserListStatus($accountUserListStatus)
    {
      $this->accountUserListStatus = $accountUserListStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getMembershipLifeSpan()
    {
      return $this->membershipLifeSpan;
    }

    /**
     * @param int $membershipLifeSpan
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setMembershipLifeSpan($membershipLifeSpan)
    {
      $this->membershipLifeSpan = (!is_null($membershipLifeSpan) && PHP_INT_SIZE === 4)
          ? floatval($membershipLifeSpan) : $membershipLifeSpan;
      return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param int $size
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setSize($size)
    {
      $this->size = (!is_null($size) && PHP_INT_SIZE === 4)
          ? floatval($size) : $size;
      return $this;
    }

    /**
     * @return string
     */
    public function getSizeRange()
    {
      return $this->sizeRange;
    }

    /**
     * @param string $sizeRange
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setSizeRange($sizeRange)
    {
      $this->sizeRange = $sizeRange;
      return $this;
    }

    /**
     * @return int
     */
    public function getSizeForSearch()
    {
      return $this->sizeForSearch;
    }

    /**
     * @param int $sizeForSearch
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setSizeForSearch($sizeForSearch)
    {
      $this->sizeForSearch = (!is_null($sizeForSearch) && PHP_INT_SIZE === 4)
          ? floatval($sizeForSearch) : $sizeForSearch;
      return $this;
    }

    /**
     * @return string
     */
    public function getSizeRangeForSearch()
    {
      return $this->sizeRangeForSearch;
    }

    /**
     * @param string $sizeRangeForSearch
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setSizeRangeForSearch($sizeRangeForSearch)
    {
      $this->sizeRangeForSearch = $sizeRangeForSearch;
      return $this;
    }

    /**
     * @return string
     */
    public function getListType()
    {
      return $this->listType;
    }

    /**
     * @param string $listType
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setListType($listType)
    {
      $this->listType = $listType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEligibleForSearch()
    {
      return $this->isEligibleForSearch;
    }

    /**
     * @param boolean $isEligibleForSearch
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setIsEligibleForSearch($isEligibleForSearch)
    {
      $this->isEligibleForSearch = $isEligibleForSearch;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEligibleForDisplay()
    {
      return $this->isEligibleForDisplay;
    }

    /**
     * @param boolean $isEligibleForDisplay
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setIsEligibleForDisplay($isEligibleForDisplay)
    {
      $this->isEligibleForDisplay = $isEligibleForDisplay;
      return $this;
    }

    /**
     * @return string
     */
    public function getClosingReason()
    {
      return $this->closingReason;
    }

    /**
     * @param string $closingReason
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setClosingReason($closingReason)
    {
      $this->closingReason = $closingReason;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserListType()
    {
      return $this->UserListType;
    }

    /**
     * @param string $UserListType
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function setUserListType($UserListType)
    {
      $this->UserListType = $UserListType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
