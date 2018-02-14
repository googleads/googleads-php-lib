<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SetTopBoxInfo
{

    /**
     * @var string $syncStatus
     */
    protected $syncStatus = null;

    /**
     * @var string $lastSyncResult
     */
    protected $lastSyncResult = null;

    /**
     * @var string $lastSyncCanoeResponseMessage
     */
    protected $lastSyncCanoeResponseMessage = null;

    /**
     * @var string $nielsenProductCategoryCode
     */
    protected $nielsenProductCategoryCode = null;

    /**
     * @param string $syncStatus
     * @param string $lastSyncResult
     * @param string $lastSyncCanoeResponseMessage
     * @param string $nielsenProductCategoryCode
     */
    public function __construct($syncStatus = null, $lastSyncResult = null, $lastSyncCanoeResponseMessage = null, $nielsenProductCategoryCode = null)
    {
      $this->syncStatus = $syncStatus;
      $this->lastSyncResult = $lastSyncResult;
      $this->lastSyncCanoeResponseMessage = $lastSyncCanoeResponseMessage;
      $this->nielsenProductCategoryCode = $nielsenProductCategoryCode;
    }

    /**
     * @return string
     */
    public function getSyncStatus()
    {
      return $this->syncStatus;
    }

    /**
     * @param string $syncStatus
     * @return \Google\AdsApi\Dfp\v201802\SetTopBoxInfo
     */
    public function setSyncStatus($syncStatus)
    {
      $this->syncStatus = $syncStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastSyncResult()
    {
      return $this->lastSyncResult;
    }

    /**
     * @param string $lastSyncResult
     * @return \Google\AdsApi\Dfp\v201802\SetTopBoxInfo
     */
    public function setLastSyncResult($lastSyncResult)
    {
      $this->lastSyncResult = $lastSyncResult;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastSyncCanoeResponseMessage()
    {
      return $this->lastSyncCanoeResponseMessage;
    }

    /**
     * @param string $lastSyncCanoeResponseMessage
     * @return \Google\AdsApi\Dfp\v201802\SetTopBoxInfo
     */
    public function setLastSyncCanoeResponseMessage($lastSyncCanoeResponseMessage)
    {
      $this->lastSyncCanoeResponseMessage = $lastSyncCanoeResponseMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getNielsenProductCategoryCode()
    {
      return $this->nielsenProductCategoryCode;
    }

    /**
     * @param string $nielsenProductCategoryCode
     * @return \Google\AdsApi\Dfp\v201802\SetTopBoxInfo
     */
    public function setNielsenProductCategoryCode($nielsenProductCategoryCode)
    {
      $this->nielsenProductCategoryCode = $nielsenProductCategoryCode;
      return $this;
    }

}
