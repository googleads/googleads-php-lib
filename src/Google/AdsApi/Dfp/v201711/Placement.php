<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Placement extends \Google\AdsApi\Dfp\v201711\SiteTargetingInfo
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
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $placementCode
     */
    protected $placementCode = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string[] $targetedAdUnitIds
     */
    protected $targetedAdUnitIds = null;

    /**
     * @var \Google\AdsApi\Dfp\v201711\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $description
     * @param string $placementCode
     * @param string $status
     * @param string[] $targetedAdUnitIds
     * @param \Google\AdsApi\Dfp\v201711\DateTime $lastModifiedDateTime
     */
    public function __construct($id = null, $name = null, $description = null, $placementCode = null, $status = null, array $targetedAdUnitIds = null, $lastModifiedDateTime = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->description = $description;
      $this->placementCode = $placementCode;
      $this->status = $status;
      $this->targetedAdUnitIds = $targetedAdUnitIds;
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
     * @return \Google\AdsApi\Dfp\v201711\Placement
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
     * @return \Google\AdsApi\Dfp\v201711\Placement
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\Dfp\v201711\Placement
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlacementCode()
    {
      return $this->placementCode;
    }

    /**
     * @param string $placementCode
     * @return \Google\AdsApi\Dfp\v201711\Placement
     */
    public function setPlacementCode($placementCode)
    {
      $this->placementCode = $placementCode;
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
     * @return \Google\AdsApi\Dfp\v201711\Placement
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getTargetedAdUnitIds()
    {
      return $this->targetedAdUnitIds;
    }

    /**
     * @param string[] $targetedAdUnitIds
     * @return \Google\AdsApi\Dfp\v201711\Placement
     */
    public function setTargetedAdUnitIds(array $targetedAdUnitIds)
    {
      $this->targetedAdUnitIds = $targetedAdUnitIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\Dfp\v201711\Placement
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

}
