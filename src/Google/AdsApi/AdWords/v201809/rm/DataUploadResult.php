<?php

namespace Google\AdsApi\AdWords\v201809\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DataUploadResult
{

    /**
     * @var string $uploadStatus
     */
    protected $uploadStatus = null;

    /**
     * @var string $removeAllStatus
     */
    protected $removeAllStatus = null;

    /**
     * @param string $uploadStatus
     * @param string $removeAllStatus
     */
    public function __construct($uploadStatus = null, $removeAllStatus = null)
    {
      $this->uploadStatus = $uploadStatus;
      $this->removeAllStatus = $removeAllStatus;
    }

    /**
     * @return string
     */
    public function getUploadStatus()
    {
      return $this->uploadStatus;
    }

    /**
     * @param string $uploadStatus
     * @return \Google\AdsApi\AdWords\v201809\rm\DataUploadResult
     */
    public function setUploadStatus($uploadStatus)
    {
      $this->uploadStatus = $uploadStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemoveAllStatus()
    {
      return $this->removeAllStatus;
    }

    /**
     * @param string $removeAllStatus
     * @return \Google\AdsApi\AdWords\v201809\rm\DataUploadResult
     */
    public function setRemoveAllStatus($removeAllStatus)
    {
      $this->removeAllStatus = $removeAllStatus;
      return $this;
    }

}
