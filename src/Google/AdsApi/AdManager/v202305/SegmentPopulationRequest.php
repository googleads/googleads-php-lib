<?php

namespace Google\AdsApi\AdManager\v202305;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SegmentPopulationRequest
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
     * @var boolean $isDeletion
     */
    protected $isDeletion = null;

    /**
     * @var string $identifierType
     */
    protected $identifierType = null;

    /**
     * @var string[] $identifiers
     */
    protected $identifiers = null;

    /**
     * @param int $batchUploadId
     * @param int $segmentId
     * @param boolean $isDeletion
     * @param string $identifierType
     * @param string[] $identifiers
     */
    public function __construct($batchUploadId = null, $segmentId = null, $isDeletion = null, $identifierType = null, array $identifiers = null)
    {
      $this->batchUploadId = $batchUploadId;
      $this->segmentId = $segmentId;
      $this->isDeletion = $isDeletion;
      $this->identifierType = $identifierType;
      $this->identifiers = $identifiers;
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
     * @return \Google\AdsApi\AdManager\v202305\SegmentPopulationRequest
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
     * @return \Google\AdsApi\AdManager\v202305\SegmentPopulationRequest
     */
    public function setSegmentId($segmentId)
    {
      $this->segmentId = (!is_null($segmentId) && PHP_INT_SIZE === 4)
          ? floatval($segmentId) : $segmentId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeletion()
    {
      return $this->isDeletion;
    }

    /**
     * @param boolean $isDeletion
     * @return \Google\AdsApi\AdManager\v202305\SegmentPopulationRequest
     */
    public function setIsDeletion($isDeletion)
    {
      $this->isDeletion = $isDeletion;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentifierType()
    {
      return $this->identifierType;
    }

    /**
     * @param string $identifierType
     * @return \Google\AdsApi\AdManager\v202305\SegmentPopulationRequest
     */
    public function setIdentifierType($identifierType)
    {
      $this->identifierType = $identifierType;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getIdentifiers()
    {
      return $this->identifiers;
    }

    /**
     * @param string[]|null $identifiers
     * @return \Google\AdsApi\AdManager\v202305\SegmentPopulationRequest
     */
    public function setIdentifiers(array $identifiers = null)
    {
      $this->identifiers = $identifiers;
      return $this;
    }

}
