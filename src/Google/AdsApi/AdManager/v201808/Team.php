<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Team
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
     * @var string $status
     */
    protected $status = null;

    /**
     * @var boolean $hasAllCompanies
     */
    protected $hasAllCompanies = null;

    /**
     * @var boolean $hasAllInventory
     */
    protected $hasAllInventory = null;

    /**
     * @var string $teamAccessType
     */
    protected $teamAccessType = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $description
     * @param string $status
     * @param boolean $hasAllCompanies
     * @param boolean $hasAllInventory
     * @param string $teamAccessType
     */
    public function __construct($id = null, $name = null, $description = null, $status = null, $hasAllCompanies = null, $hasAllInventory = null, $teamAccessType = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->description = $description;
      $this->status = $status;
      $this->hasAllCompanies = $hasAllCompanies;
      $this->hasAllInventory = $hasAllInventory;
      $this->teamAccessType = $teamAccessType;
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
     * @return \Google\AdsApi\AdManager\v201808\Team
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
     * @return \Google\AdsApi\AdManager\v201808\Team
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
     * @return \Google\AdsApi\AdManager\v201808\Team
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Google\AdsApi\AdManager\v201808\Team
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasAllCompanies()
    {
      return $this->hasAllCompanies;
    }

    /**
     * @param boolean $hasAllCompanies
     * @return \Google\AdsApi\AdManager\v201808\Team
     */
    public function setHasAllCompanies($hasAllCompanies)
    {
      $this->hasAllCompanies = $hasAllCompanies;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasAllInventory()
    {
      return $this->hasAllInventory;
    }

    /**
     * @param boolean $hasAllInventory
     * @return \Google\AdsApi\AdManager\v201808\Team
     */
    public function setHasAllInventory($hasAllInventory)
    {
      $this->hasAllInventory = $hasAllInventory;
      return $this;
    }

    /**
     * @return string
     */
    public function getTeamAccessType()
    {
      return $this->teamAccessType;
    }

    /**
     * @param string $teamAccessType
     * @return \Google\AdsApi\AdManager\v201808\Team
     */
    public function setTeamAccessType($teamAccessType)
    {
      $this->teamAccessType = $teamAccessType;
      return $this;
    }

}
