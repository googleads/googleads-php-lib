<?php

namespace Google\AdsApi\AdWords\v201710\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CrmBasedUserList extends \Google\AdsApi\AdWords\v201710\rm\UserList
{

    /**
     * @var string $uploadKeyType
     */
    protected $uploadKeyType = null;

    /**
     * @var string $dataSourceType
     */
    protected $dataSourceType = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\rm\DataUploadResult $dataUploadResult
     */
    protected $dataUploadResult = null;

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
     * @param string $uploadKeyType
     * @param string $dataSourceType
     * @param \Google\AdsApi\AdWords\v201710\rm\DataUploadResult $dataUploadResult
     */
    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $isEligibleForDisplay = null, $closingReason = null, $UserListType = null, $uploadKeyType = null, $dataSourceType = null, $dataUploadResult = null)
    {
      parent::__construct($id, $isReadOnly, $name, $description, $status, $integrationCode, $accessReason, $accountUserListStatus, $membershipLifeSpan, $size, $sizeRange, $sizeForSearch, $sizeRangeForSearch, $listType, $isEligibleForSearch, $isEligibleForDisplay, $closingReason, $UserListType);
      $this->uploadKeyType = $uploadKeyType;
      $this->dataSourceType = $dataSourceType;
      $this->dataUploadResult = $dataUploadResult;
    }

    /**
     * @return string
     */
    public function getUploadKeyType()
    {
      return $this->uploadKeyType;
    }

    /**
     * @param string $uploadKeyType
     * @return \Google\AdsApi\AdWords\v201710\rm\CrmBasedUserList
     */
    public function setUploadKeyType($uploadKeyType)
    {
      $this->uploadKeyType = $uploadKeyType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDataSourceType()
    {
      return $this->dataSourceType;
    }

    /**
     * @param string $dataSourceType
     * @return \Google\AdsApi\AdWords\v201710\rm\CrmBasedUserList
     */
    public function setDataSourceType($dataSourceType)
    {
      $this->dataSourceType = $dataSourceType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\rm\DataUploadResult
     */
    public function getDataUploadResult()
    {
      return $this->dataUploadResult;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\rm\DataUploadResult $dataUploadResult
     * @return \Google\AdsApi\AdWords\v201710\rm\CrmBasedUserList
     */
    public function setDataUploadResult($dataUploadResult)
    {
      $this->dataUploadResult = $dataUploadResult;
      return $this;
    }

}
