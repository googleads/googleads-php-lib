<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeSet
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
     * @var int $masterCreativeId
     */
    protected $masterCreativeId = null;

    /**
     * @var int[] $companionCreativeIds
     */
    protected $companionCreativeIds = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @param int $id
     * @param string $name
     * @param int $masterCreativeId
     * @param int[] $companionCreativeIds
     * @param \Google\AdsApi\AdManager\v201802\DateTime $lastModifiedDateTime
     */
    public function __construct($id = null, $name = null, $masterCreativeId = null, array $companionCreativeIds = null, $lastModifiedDateTime = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->masterCreativeId = $masterCreativeId;
      $this->companionCreativeIds = $companionCreativeIds;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
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
     * @return \Google\AdsApi\AdManager\v201802\CreativeSet
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
     * @return \Google\AdsApi\AdManager\v201802\CreativeSet
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getMasterCreativeId()
    {
      return $this->masterCreativeId;
    }

    /**
     * @param int $masterCreativeId
     * @return \Google\AdsApi\AdManager\v201802\CreativeSet
     */
    public function setMasterCreativeId($masterCreativeId)
    {
      $this->masterCreativeId = (!is_null($masterCreativeId) && PHP_INT_SIZE === 4)
          ? floatval($masterCreativeId) : $masterCreativeId;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getCompanionCreativeIds()
    {
      return $this->companionCreativeIds;
    }

    /**
     * @param int[] $companionCreativeIds
     * @return \Google\AdsApi\AdManager\v201802\CreativeSet
     */
    public function setCompanionCreativeIds(array $companionCreativeIds)
    {
      $this->companionCreativeIds = $companionCreativeIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v201802\CreativeSet
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

}
