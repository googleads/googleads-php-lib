<?php

namespace Google\AdsApi\AdManager\v202511;


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
     * @var \Google\AdsApi\AdManager\v202511\IdError[] $idErrors
     */
    protected $idErrors = null;

    /**
     * @param int $batchUploadId
     * @param \Google\AdsApi\AdManager\v202511\IdError[] $idErrors
     */
    public function __construct($batchUploadId = null, array $idErrors = null)
    {
      $this->batchUploadId = $batchUploadId;
      $this->idErrors = $idErrors;
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
     * @return \Google\AdsApi\AdManager\v202511\SegmentPopulationResponse
     */
    public function setBatchUploadId($batchUploadId)
    {
      $this->batchUploadId = (!is_null($batchUploadId) && PHP_INT_SIZE === 4)
          ? floatval($batchUploadId) : $batchUploadId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202511\IdError[]
     */
    public function getIdErrors()
    {
      return $this->idErrors;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202511\IdError[]|null $idErrors
     * @return \Google\AdsApi\AdManager\v202511\SegmentPopulationResponse
     */
    public function setIdErrors(array $idErrors = null)
    {
      $this->idErrors = $idErrors;
      return $this;
    }

}
