<?php

namespace Google\AdsApi\AdManager\v202508;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SegmentPopulationResults
{

    /**
     * @var int $batchUploadId
     */
    protected $batchUploadId = null;

    /**
     * @var int $segmentId
     */
    protected $segmentId = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var int $numSuccessfulIdsProcessed
     */
    protected $numSuccessfulIdsProcessed = null;

    /**
     * @var \Google\AdsApi\AdManager\v202508\IdError[] $errors
     */
    protected $errors = null;

    /**
     * @param int $batchUploadId
     * @param int $segmentId
     * @param string $status
     * @param int $numSuccessfulIdsProcessed
     * @param \Google\AdsApi\AdManager\v202508\IdError[] $errors
     */
    public function __construct($batchUploadId = null, $segmentId = null, $status = null, $numSuccessfulIdsProcessed = null, ?array $errors = null)
    {
      $this->batchUploadId = $batchUploadId;
      $this->segmentId = $segmentId;
      $this->status = $status;
      $this->numSuccessfulIdsProcessed = $numSuccessfulIdsProcessed;
      $this->errors = $errors;
    }

    /**
     * @return int
     */
    public function getBatchUploadId()
    {
      return $this->batchUploadId;
    }

    /**
     * @param int $batchUploadId
     * @return \Google\AdsApi\AdManager\v202508\SegmentPopulationResults
     */
    public function setBatchUploadId($batchUploadId)
    {
      $this->batchUploadId = (!is_null($batchUploadId) && PHP_INT_SIZE === 4)
          ? floatval($batchUploadId) : $batchUploadId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentId()
    {
      return $this->segmentId;
    }

    /**
     * @param int $segmentId
     * @return \Google\AdsApi\AdManager\v202508\SegmentPopulationResults
     */
    public function setSegmentId($segmentId)
    {
      $this->segmentId = (!is_null($segmentId) && PHP_INT_SIZE === 4)
          ? floatval($segmentId) : $segmentId;
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
     * @return \Google\AdsApi\AdManager\v202508\SegmentPopulationResults
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumSuccessfulIdsProcessed()
    {
      return $this->numSuccessfulIdsProcessed;
    }

    /**
     * @param int $numSuccessfulIdsProcessed
     * @return \Google\AdsApi\AdManager\v202508\SegmentPopulationResults
     */
    public function setNumSuccessfulIdsProcessed($numSuccessfulIdsProcessed)
    {
      $this->numSuccessfulIdsProcessed = (!is_null($numSuccessfulIdsProcessed) && PHP_INT_SIZE === 4)
          ? floatval($numSuccessfulIdsProcessed) : $numSuccessfulIdsProcessed;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202508\IdError[]
     */
    public function getErrors()
    {
      return $this->errors;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202508\IdError[]|null $errors
     * @return \Google\AdsApi\AdManager\v202508\SegmentPopulationResults
     */
    public function setErrors(?array $errors = null)
    {
      $this->errors = $errors;
      return $this;
    }

}
