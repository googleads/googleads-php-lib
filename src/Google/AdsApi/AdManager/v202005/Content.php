<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Content
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $statusDefinedBy
     */
    protected $statusDefinedBy = null;

    /**
     * @var string $hlsIngestStatus
     */
    protected $hlsIngestStatus = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\DaiIngestError[] $hlsIngestErrors
     */
    protected $hlsIngestErrors = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\DateTime $lastHlsIngestDateTime
     */
    protected $lastHlsIngestDateTime = null;

    /**
     * @var string $dashIngestStatus
     */
    protected $dashIngestStatus = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\DaiIngestError[] $dashIngestErrors
     */
    protected $dashIngestErrors = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\DateTime $lastDashIngestDateTime
     */
    protected $lastDashIngestDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\DateTime $importDateTime
     */
    protected $importDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\CmsContent[] $cmsSources
     */
    protected $cmsSources = null;

    /**
     * @var int[] $contentBundleIds
     */
    protected $contentBundleIds = null;

    /**
     * @var int[] $cmsMetadataValueIds
     */
    protected $cmsMetadataValueIds = null;

    /**
     * @var int $duration
     */
    protected $duration = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $status
     * @param string $statusDefinedBy
     * @param string $hlsIngestStatus
     * @param \Google\AdsApi\AdManager\v202005\DaiIngestError[] $hlsIngestErrors
     * @param \Google\AdsApi\AdManager\v202005\DateTime $lastHlsIngestDateTime
     * @param string $dashIngestStatus
     * @param \Google\AdsApi\AdManager\v202005\DaiIngestError[] $dashIngestErrors
     * @param \Google\AdsApi\AdManager\v202005\DateTime $lastDashIngestDateTime
     * @param \Google\AdsApi\AdManager\v202005\DateTime $importDateTime
     * @param \Google\AdsApi\AdManager\v202005\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202005\CmsContent[] $cmsSources
     * @param int[] $contentBundleIds
     * @param int[] $cmsMetadataValueIds
     * @param int $duration
     */
    public function __construct($id = null, $name = null, $status = null, $statusDefinedBy = null, $hlsIngestStatus = null, array $hlsIngestErrors = null, $lastHlsIngestDateTime = null, $dashIngestStatus = null, array $dashIngestErrors = null, $lastDashIngestDateTime = null, $importDateTime = null, $lastModifiedDateTime = null, array $cmsSources = null, array $contentBundleIds = null, array $cmsMetadataValueIds = null, $duration = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->statusDefinedBy = $statusDefinedBy;
      $this->hlsIngestStatus = $hlsIngestStatus;
      $this->hlsIngestErrors = $hlsIngestErrors;
      $this->lastHlsIngestDateTime = $lastHlsIngestDateTime;
      $this->dashIngestStatus = $dashIngestStatus;
      $this->dashIngestErrors = $dashIngestErrors;
      $this->lastDashIngestDateTime = $lastDashIngestDateTime;
      $this->importDateTime = $importDateTime;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->cmsSources = $cmsSources;
      $this->contentBundleIds = $contentBundleIds;
      $this->cmsMetadataValueIds = $cmsMetadataValueIds;
      $this->duration = $duration;
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
     * @return \Google\AdsApi\AdManager\v202005\Content
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
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusDefinedBy()
    {
      return $this->statusDefinedBy;
    }

    /**
     * @param string $statusDefinedBy
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setStatusDefinedBy($statusDefinedBy)
    {
      $this->statusDefinedBy = $statusDefinedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getHlsIngestStatus()
    {
      return $this->hlsIngestStatus;
    }

    /**
     * @param string $hlsIngestStatus
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setHlsIngestStatus($hlsIngestStatus)
    {
      $this->hlsIngestStatus = $hlsIngestStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\DaiIngestError[]
     */
    public function getHlsIngestErrors()
    {
      return $this->hlsIngestErrors;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\DaiIngestError[]|null $hlsIngestErrors
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setHlsIngestErrors(array $hlsIngestErrors = null)
    {
      $this->hlsIngestErrors = $hlsIngestErrors;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\DateTime
     */
    public function getLastHlsIngestDateTime()
    {
      return $this->lastHlsIngestDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\DateTime $lastHlsIngestDateTime
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setLastHlsIngestDateTime($lastHlsIngestDateTime)
    {
      $this->lastHlsIngestDateTime = $lastHlsIngestDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getDashIngestStatus()
    {
      return $this->dashIngestStatus;
    }

    /**
     * @param string $dashIngestStatus
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setDashIngestStatus($dashIngestStatus)
    {
      $this->dashIngestStatus = $dashIngestStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\DaiIngestError[]
     */
    public function getDashIngestErrors()
    {
      return $this->dashIngestErrors;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\DaiIngestError[]|null $dashIngestErrors
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setDashIngestErrors(array $dashIngestErrors = null)
    {
      $this->dashIngestErrors = $dashIngestErrors;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\DateTime
     */
    public function getLastDashIngestDateTime()
    {
      return $this->lastDashIngestDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\DateTime $lastDashIngestDateTime
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setLastDashIngestDateTime($lastDashIngestDateTime)
    {
      $this->lastDashIngestDateTime = $lastDashIngestDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\DateTime
     */
    public function getImportDateTime()
    {
      return $this->importDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\DateTime $importDateTime
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setImportDateTime($importDateTime)
    {
      $this->importDateTime = $importDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\CmsContent[]
     */
    public function getCmsSources()
    {
      return $this->cmsSources;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\CmsContent[]|null $cmsSources
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setCmsSources(array $cmsSources = null)
    {
      $this->cmsSources = $cmsSources;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getContentBundleIds()
    {
      return $this->contentBundleIds;
    }

    /**
     * @param int[]|null $contentBundleIds
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setContentBundleIds(array $contentBundleIds = null)
    {
      $this->contentBundleIds = $contentBundleIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getCmsMetadataValueIds()
    {
      return $this->cmsMetadataValueIds;
    }

    /**
     * @param int[]|null $cmsMetadataValueIds
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setCmsMetadataValueIds(array $cmsMetadataValueIds = null)
    {
      $this->cmsMetadataValueIds = $cmsMetadataValueIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
      return $this->duration;
    }

    /**
     * @param int $duration
     * @return \Google\AdsApi\AdManager\v202005\Content
     */
    public function setDuration($duration)
    {
      $this->duration = (!is_null($duration) && PHP_INT_SIZE === 4)
          ? floatval($duration) : $duration;
      return $this;
    }

}
