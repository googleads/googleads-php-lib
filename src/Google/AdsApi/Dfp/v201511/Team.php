<?php

namespace Google\AdsApi\Dfp\v201511;

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
     * @var long[] $companyIds
     */
    protected $companyIds = null;

    /**
     * @var string[] $adUnitIds
     */
    protected $adUnitIds = null;

    /**
     * @var long[] $orderIds
     */
    protected $orderIds = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $description
     * @param boolean $hasAllCompanies
     * @param boolean $hasAllInventory
     * @param string $teamAccessType
     * @param long[] $companyIds
     * @param string[] $adUnitIds
     * @param long[] $orderIds
     */
    public function __construct($id = null, $name = null, $description = null, $hasAllCompanies = null, $hasAllInventory = null, $teamAccessType = null, array $companyIds = null, array $adUnitIds = null, array $orderIds = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->description = $description;
      $this->hasAllCompanies = $hasAllCompanies;
      $this->hasAllInventory = $hasAllInventory;
      $this->teamAccessType = $teamAccessType;
      $this->companyIds = $companyIds;
      $this->adUnitIds = $adUnitIds;
      $this->orderIds = $orderIds;
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
     * @return \Google\AdsApi\Dfp\v201511\Team
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Google\AdsApi\Dfp\v201511\Team
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
     * @return \Google\AdsApi\Dfp\v201511\Team
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Google\AdsApi\Dfp\v201511\Team
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
     * @return \Google\AdsApi\Dfp\v201511\Team
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
     * @return \Google\AdsApi\Dfp\v201511\Team
     */
    public function setTeamAccessType($teamAccessType)
    {
      $this->teamAccessType = $teamAccessType;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getCompanyIds()
    {
      return $this->companyIds;
    }

    /**
     * @param long[] $companyIds
     * @return \Google\AdsApi\Dfp\v201511\Team
     */
    public function setCompanyIds(array $companyIds)
    {
      $this->companyIds = $companyIds;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAdUnitIds()
    {
      return $this->adUnitIds;
    }

    /**
     * @param string[] $adUnitIds
     * @return \Google\AdsApi\Dfp\v201511\Team
     */
    public function setAdUnitIds(array $adUnitIds)
    {
      $this->adUnitIds = $adUnitIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getOrderIds()
    {
      return $this->orderIds;
    }

    /**
     * @param long[] $orderIds
     * @return \Google\AdsApi\Dfp\v201511\Team
     */
    public function setOrderIds(array $orderIds)
    {
      $this->orderIds = $orderIds;
      return $this;
    }

}
