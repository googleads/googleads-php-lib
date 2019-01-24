<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Activity
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $activityGroupId
     */
    protected $activityGroupId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $expectedURL
     */
    protected $expectedURL = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @param int $id
     * @param int $activityGroupId
     * @param string $name
     * @param string $expectedURL
     * @param string $status
     * @param string $type
     */
    public function __construct($id = null, $activityGroupId = null, $name = null, $expectedURL = null, $status = null, $type = null)
    {
      $this->id = $id;
      $this->activityGroupId = $activityGroupId;
      $this->name = $name;
      $this->expectedURL = $expectedURL;
      $this->status = $status;
      $this->type = $type;
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
     * @return \Google\AdsApi\AdManager\v201802\Activity
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getActivityGroupId()
    {
      return $this->activityGroupId;
    }

    /**
     * @param int $activityGroupId
     * @return \Google\AdsApi\AdManager\v201802\Activity
     */
    public function setActivityGroupId($activityGroupId)
    {
      $this->activityGroupId = $activityGroupId;
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
     * @return \Google\AdsApi\AdManager\v201802\Activity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpectedURL()
    {
      return $this->expectedURL;
    }

    /**
     * @param string $expectedURL
     * @return \Google\AdsApi\AdManager\v201802\Activity
     */
    public function setExpectedURL($expectedURL)
    {
      $this->expectedURL = $expectedURL;
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
     * @return \Google\AdsApi\AdManager\v201802\Activity
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\AdManager\v201802\Activity
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
