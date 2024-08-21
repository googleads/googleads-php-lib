<?php

namespace Google\AdsApi\AdManager\v202408;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileApplication
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $applicationId
     */
    protected $applicationId = null;

    /**
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @var string $appStoreId
     */
    protected $appStoreId = null;

    /**
     * @var string[] $appStores
     */
    protected $appStores = null;

    /**
     * @var boolean $isArchived
     */
    protected $isArchived = null;

    /**
     * @var string $appStoreName
     */
    protected $appStoreName = null;

    /**
     * @var string $applicationCode
     */
    protected $applicationCode = null;

    /**
     * @var string $developerName
     */
    protected $developerName = null;

    /**
     * @var string $platform
     */
    protected $platform = null;

    /**
     * @var boolean $isFree
     */
    protected $isFree = null;

    /**
     * @var string $downloadUrl
     */
    protected $downloadUrl = null;

    /**
     * @var string $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @param int $id
     * @param int $applicationId
     * @param string $displayName
     * @param string $appStoreId
     * @param string[] $appStores
     * @param boolean $isArchived
     * @param string $appStoreName
     * @param string $applicationCode
     * @param string $developerName
     * @param string $platform
     * @param boolean $isFree
     * @param string $downloadUrl
     * @param string $approvalStatus
     */
    public function __construct($id = null, $applicationId = null, $displayName = null, $appStoreId = null, array $appStores = null, $isArchived = null, $appStoreName = null, $applicationCode = null, $developerName = null, $platform = null, $isFree = null, $downloadUrl = null, $approvalStatus = null)
    {
      $this->id = $id;
      $this->applicationId = $applicationId;
      $this->displayName = $displayName;
      $this->appStoreId = $appStoreId;
      $this->appStores = $appStores;
      $this->isArchived = $isArchived;
      $this->appStoreName = $appStoreName;
      $this->applicationCode = $applicationCode;
      $this->developerName = $developerName;
      $this->platform = $platform;
      $this->isFree = $isFree;
      $this->downloadUrl = $downloadUrl;
      $this->approvalStatus = $approvalStatus;
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
     * @return \Google\AdsApi\AdManager\v202408\MobileApplication
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getApplicationId()
    {
      return $this->applicationId;
    }

    /**
     * @param int $applicationId
     * @return \Google\AdsApi\AdManager\v202408\MobileApplication
     */
    public function setApplicationId($applicationId)
    {
      $this->applicationId = (!is_null($applicationId) && PHP_INT_SIZE === 4)
          ? floatval($applicationId) : $applicationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return \Google\AdsApi\AdManager\v202408\MobileApplication
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppStoreId()
    {
      return $this->appStoreId;
    }

    /**
     * @param string $appStoreId
     * @return \Google\AdsApi\AdManager\v202408\MobileApplication
     */
    public function setAppStoreId($appStoreId)
    {
      $this->appStoreId = $appStoreId;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAppStores()
    {
      return $this->appStores;
    }

    /**
     * @param string[]|null $appStores
     * @return \Google\AdsApi\AdManager\v202408\MobileApplication
     */
    public function setAppStores(array $appStores = null)
    {
      $this->appStores = $appStores;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsArchived()
    {
      return $this->isArchived;
    }

    /**
     * @param boolean $isArchived
     * @return \Google\AdsApi\AdManager\v202408\MobileApplication
     */
    public function setIsArchived($isArchived)
    {
      $this->isArchived = $isArchived;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppStoreName()
    {
      return $this->appStoreName;
    }

    /**
     * @param string $appStoreName
     * @return \Google\AdsApi\AdManager\v202408\MobileApplication
     */
    public function setAppStoreName($appStoreName)
    {
      $this->appStoreName = $appStoreName;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplicationCode()
    {
      return $this->applicationCode;
    }

    /**
     * @param string $applicationCode
     * @return \Google\AdsApi\AdManager\v202408\MobileApplication
     */
    public function setApplicationCode($applicationCode)
    {
      $this->applicationCode = $applicationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeveloperName()
    {
      return $this->developerName;
    }

    /**
     * @param string $developerName
     * @return \Google\AdsApi\AdManager\v202408\MobileApplication
     */
    public function setDeveloperName($developerName)
    {
      $this->developerName = $developerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlatform()
    {
      return $this->platform;
    }

    /**
     * @param string $platform
     * @return \Google\AdsApi\AdManager\v202408\MobileApplication
     */
    public function setPlatform($platform)
    {
      $this->platform = $platform;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFree()
    {
      return $this->isFree;
    }

    /**
     * @param boolean $isFree
     * @return \Google\AdsApi\AdManager\v202408\MobileApplication
     */
    public function setIsFree($isFree)
    {
      $this->isFree = $isFree;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadUrl()
    {
      return $this->downloadUrl;
    }

    /**
     * @param string $downloadUrl
     * @return \Google\AdsApi\AdManager\v202408\MobileApplication
     */
    public function setDownloadUrl($downloadUrl)
    {
      $this->downloadUrl = $downloadUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param string $approvalStatus
     * @return \Google\AdsApi\AdManager\v202408\MobileApplication
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

}
