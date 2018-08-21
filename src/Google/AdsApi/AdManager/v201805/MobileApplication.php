<?php

namespace Google\AdsApi\AdManager\v201805;


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
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @var string $appStoreId
     */
    protected $appStoreId = null;

    /**
     * @var string $appStore
     */
    protected $appStore = null;

    /**
     * @var boolean $isArchived
     */
    protected $isArchived = null;

    /**
     * @var string $appStoreName
     */
    protected $appStoreName = null;

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
     * @param int $id
     * @param string $displayName
     * @param string $appStoreId
     * @param string $appStore
     * @param boolean $isArchived
     * @param string $appStoreName
     * @param string $developerName
     * @param string $platform
     * @param boolean $isFree
     * @param string $downloadUrl
     */
    public function __construct($id = null, $displayName = null, $appStoreId = null, $appStore = null, $isArchived = null, $appStoreName = null, $developerName = null, $platform = null, $isFree = null, $downloadUrl = null)
    {
      $this->id = $id;
      $this->displayName = $displayName;
      $this->appStoreId = $appStoreId;
      $this->appStore = $appStore;
      $this->isArchived = $isArchived;
      $this->appStoreName = $appStoreName;
      $this->developerName = $developerName;
      $this->platform = $platform;
      $this->isFree = $isFree;
      $this->downloadUrl = $downloadUrl;
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
     * @return \Google\AdsApi\AdManager\v201805\MobileApplication
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
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
     * @return \Google\AdsApi\AdManager\v201805\MobileApplication
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
     * @return \Google\AdsApi\AdManager\v201805\MobileApplication
     */
    public function setAppStoreId($appStoreId)
    {
      $this->appStoreId = $appStoreId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppStore()
    {
      return $this->appStore;
    }

    /**
     * @param string $appStore
     * @return \Google\AdsApi\AdManager\v201805\MobileApplication
     */
    public function setAppStore($appStore)
    {
      $this->appStore = $appStore;
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
     * @return \Google\AdsApi\AdManager\v201805\MobileApplication
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
     * @return \Google\AdsApi\AdManager\v201805\MobileApplication
     */
    public function setAppStoreName($appStoreName)
    {
      $this->appStoreName = $appStoreName;
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
     * @return \Google\AdsApi\AdManager\v201805\MobileApplication
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
     * @return \Google\AdsApi\AdManager\v201805\MobileApplication
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
     * @return \Google\AdsApi\AdManager\v201805\MobileApplication
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
     * @return \Google\AdsApi\AdManager\v201805\MobileApplication
     */
    public function setDownloadUrl($downloadUrl)
    {
      $this->downloadUrl = $downloadUrl;
      return $this;
    }

}
