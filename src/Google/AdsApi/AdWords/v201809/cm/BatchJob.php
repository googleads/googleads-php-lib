<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BatchJob
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\ProgressStats $progressStats
     */
    protected $progressStats = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\TemporaryUrl $uploadUrl
     */
    protected $uploadUrl = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\TemporaryUrl $downloadUrl
     */
    protected $downloadUrl = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\BatchJobProcessingError[] $processingErrors
     */
    protected $processingErrors = null;

    /**
     * @var int $diskUsageQuotaBalance
     */
    protected $diskUsageQuotaBalance = null;

    /**
     * @param int $id
     * @param string $status
     * @param \Google\AdsApi\AdWords\v201809\cm\ProgressStats $progressStats
     * @param \Google\AdsApi\AdWords\v201809\cm\TemporaryUrl $uploadUrl
     * @param \Google\AdsApi\AdWords\v201809\cm\TemporaryUrl $downloadUrl
     * @param \Google\AdsApi\AdWords\v201809\cm\BatchJobProcessingError[] $processingErrors
     * @param int $diskUsageQuotaBalance
     */
    public function __construct($id = null, $status = null, $progressStats = null, $uploadUrl = null, $downloadUrl = null, array $processingErrors = null, $diskUsageQuotaBalance = null)
    {
      $this->id = $id;
      $this->status = $status;
      $this->progressStats = $progressStats;
      $this->uploadUrl = $uploadUrl;
      $this->downloadUrl = $downloadUrl;
      $this->processingErrors = $processingErrors;
      $this->diskUsageQuotaBalance = $diskUsageQuotaBalance;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\BatchJob
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
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdWords\v201809\cm\BatchJob
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\ProgressStats
     */
    public function getProgressStats()
    {
      return $this->progressStats;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\ProgressStats $progressStats
     * @return \Google\AdsApi\AdWords\v201809\cm\BatchJob
     */
    public function setProgressStats($progressStats)
    {
      $this->progressStats = $progressStats;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\TemporaryUrl
     */
    public function getUploadUrl()
    {
      return $this->uploadUrl;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\TemporaryUrl $uploadUrl
     * @return \Google\AdsApi\AdWords\v201809\cm\BatchJob
     */
    public function setUploadUrl($uploadUrl)
    {
      $this->uploadUrl = $uploadUrl;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\TemporaryUrl
     */
    public function getDownloadUrl()
    {
      return $this->downloadUrl;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\TemporaryUrl $downloadUrl
     * @return \Google\AdsApi\AdWords\v201809\cm\BatchJob
     */
    public function setDownloadUrl($downloadUrl)
    {
      $this->downloadUrl = $downloadUrl;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\BatchJobProcessingError[]
     */
    public function getProcessingErrors()
    {
      return $this->processingErrors;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\BatchJobProcessingError[] $processingErrors
     * @return \Google\AdsApi\AdWords\v201809\cm\BatchJob
     */
    public function setProcessingErrors(array $processingErrors)
    {
      $this->processingErrors = $processingErrors;
      return $this;
    }

    /**
     * @return int
     */
    public function getDiskUsageQuotaBalance()
    {
      return $this->diskUsageQuotaBalance;
    }

    /**
     * @param int $diskUsageQuotaBalance
     * @return \Google\AdsApi\AdWords\v201809\cm\BatchJob
     */
    public function setDiskUsageQuotaBalance($diskUsageQuotaBalance)
    {
      $this->diskUsageQuotaBalance = (!is_null($diskUsageQuotaBalance) && PHP_INT_SIZE === 4)
          ? floatval($diskUsageQuotaBalance) : $diskUsageQuotaBalance;
      return $this;
    }

}
