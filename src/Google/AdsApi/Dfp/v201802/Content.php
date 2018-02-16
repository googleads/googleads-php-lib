<?php

namespace Google\AdsApi\Dfp\v201802;


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
     * @var \Google\AdsApi\Dfp\v201802\DaiIngestError[] $hlsIngestErrors
     */
    protected $hlsIngestErrors = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\DateTime $lastHlsIngestDateTime
     */
    protected $lastHlsIngestDateTime = null;

    /**
     * @var string $dashIngestStatus
     */
    protected $dashIngestStatus = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\DaiIngestError[] $dashIngestErrors
     */
    protected $dashIngestErrors = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\DateTime $lastDashIngestDateTime
     */
    protected $lastDashIngestDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\DateTime $importDateTime
     */
    protected $importDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var int[] $userDefinedCustomTargetingValueIds
     */
    protected $userDefinedCustomTargetingValueIds = null;

    /**
     * @var int[] $mappingRuleDefinedCustomTargetingValueIds
     */
    protected $mappingRuleDefinedCustomTargetingValueIds = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\CmsContent[] $cmsSources
     */
    protected $cmsSources = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $status
     * @param string $statusDefinedBy
     * @param string $hlsIngestStatus
     * @param \Google\AdsApi\Dfp\v201802\DaiIngestError[] $hlsIngestErrors
     * @param \Google\AdsApi\Dfp\v201802\DateTime $lastHlsIngestDateTime
     * @param string $dashIngestStatus
     * @param \Google\AdsApi\Dfp\v201802\DaiIngestError[] $dashIngestErrors
     * @param \Google\AdsApi\Dfp\v201802\DateTime $lastDashIngestDateTime
     * @param \Google\AdsApi\Dfp\v201802\DateTime $importDateTime
     * @param \Google\AdsApi\Dfp\v201802\DateTime $lastModifiedDateTime
     * @param int[] $userDefinedCustomTargetingValueIds
     * @param int[] $mappingRuleDefinedCustomTargetingValueIds
     * @param \Google\AdsApi\Dfp\v201802\CmsContent[] $cmsSources
     */
    public function __construct($id = null, $name = null, $status = null, $statusDefinedBy = null, $hlsIngestStatus = null, array $hlsIngestErrors = null, $lastHlsIngestDateTime = null, $dashIngestStatus = null, array $dashIngestErrors = null, $lastDashIngestDateTime = null, $importDateTime = null, $lastModifiedDateTime = null, array $userDefinedCustomTargetingValueIds = null, array $mappingRuleDefinedCustomTargetingValueIds = null, array $cmsSources = null)
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
      $this->userDefinedCustomTargetingValueIds = $userDefinedCustomTargetingValueIds;
      $this->mappingRuleDefinedCustomTargetingValueIds = $mappingRuleDefinedCustomTargetingValueIds;
      $this->cmsSources = $cmsSources;
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
     * @return \Google\AdsApi\Dfp\v201802\Content
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
     * @return \Google\AdsApi\Dfp\v201802\Content
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
     * @return \Google\AdsApi\Dfp\v201802\Content
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
     * @return \Google\AdsApi\Dfp\v201802\Content
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
     * @return \Google\AdsApi\Dfp\v201802\Content
     */
    public function setHlsIngestStatus($hlsIngestStatus)
    {
      $this->hlsIngestStatus = $hlsIngestStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\DaiIngestError[]
     */
    public function getHlsIngestErrors()
    {
      return $this->hlsIngestErrors;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\DaiIngestError[] $hlsIngestErrors
     * @return \Google\AdsApi\Dfp\v201802\Content
     */
    public function setHlsIngestErrors(array $hlsIngestErrors)
    {
      $this->hlsIngestErrors = $hlsIngestErrors;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\DateTime
     */
    public function getLastHlsIngestDateTime()
    {
      return $this->lastHlsIngestDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\DateTime $lastHlsIngestDateTime
     * @return \Google\AdsApi\Dfp\v201802\Content
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
     * @return \Google\AdsApi\Dfp\v201802\Content
     */
    public function setDashIngestStatus($dashIngestStatus)
    {
      $this->dashIngestStatus = $dashIngestStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\DaiIngestError[]
     */
    public function getDashIngestErrors()
    {
      return $this->dashIngestErrors;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\DaiIngestError[] $dashIngestErrors
     * @return \Google\AdsApi\Dfp\v201802\Content
     */
    public function setDashIngestErrors(array $dashIngestErrors)
    {
      $this->dashIngestErrors = $dashIngestErrors;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\DateTime
     */
    public function getLastDashIngestDateTime()
    {
      return $this->lastDashIngestDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\DateTime $lastDashIngestDateTime
     * @return \Google\AdsApi\Dfp\v201802\Content
     */
    public function setLastDashIngestDateTime($lastDashIngestDateTime)
    {
      $this->lastDashIngestDateTime = $lastDashIngestDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\DateTime
     */
    public function getImportDateTime()
    {
      return $this->importDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\DateTime $importDateTime
     * @return \Google\AdsApi\Dfp\v201802\Content
     */
    public function setImportDateTime($importDateTime)
    {
      $this->importDateTime = $importDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\Dfp\v201802\Content
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getUserDefinedCustomTargetingValueIds()
    {
      return $this->userDefinedCustomTargetingValueIds;
    }

    /**
     * @param int[] $userDefinedCustomTargetingValueIds
     * @return \Google\AdsApi\Dfp\v201802\Content
     */
    public function setUserDefinedCustomTargetingValueIds(array $userDefinedCustomTargetingValueIds)
    {
      $this->userDefinedCustomTargetingValueIds = $userDefinedCustomTargetingValueIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getMappingRuleDefinedCustomTargetingValueIds()
    {
      return $this->mappingRuleDefinedCustomTargetingValueIds;
    }

    /**
     * @param int[] $mappingRuleDefinedCustomTargetingValueIds
     * @return \Google\AdsApi\Dfp\v201802\Content
     */
    public function setMappingRuleDefinedCustomTargetingValueIds(array $mappingRuleDefinedCustomTargetingValueIds)
    {
      $this->mappingRuleDefinedCustomTargetingValueIds = $mappingRuleDefinedCustomTargetingValueIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\CmsContent[]
     */
    public function getCmsSources()
    {
      return $this->cmsSources;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\CmsContent[] $cmsSources
     * @return \Google\AdsApi\Dfp\v201802\Content
     */
    public function setCmsSources(array $cmsSources)
    {
      $this->cmsSources = $cmsSources;
      return $this;
    }

}
