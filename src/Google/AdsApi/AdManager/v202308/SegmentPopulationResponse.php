<?php

namespace Google\AdsApi\AdManager\v202308;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SegmentPopulationResponse
{

    /**
     * @var int $batchUploadId
     */
    protected $batchUploadId = null;

    /**
     * @param int $batchUploadId
     */
    public function __construct($batchUploadId = null)
    {
      $this->batchUploadId = $batchUploadId;
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
     * @return \Google\AdsApi\AdManager\v202308\SegmentPopulationResponse
     */
    public function setBatchUploadId($batchUploadId)
    {
      $this->batchUploadId = (!is_null($batchUploadId) && PHP_INT_SIZE === 4)
          ? floatval($batchUploadId) : $batchUploadId;
      return $this;
    }

}
