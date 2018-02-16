<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class UserRecordTeamAssociation
{

    /**
     * @var int $teamId
     */
    protected $teamId = null;

    /**
     * @var string $overriddenTeamAccessType
     */
    protected $overriddenTeamAccessType = null;

    /**
     * @var string $defaultTeamAccessType
     */
    protected $defaultTeamAccessType = null;

    /**
     * @param int $teamId
     * @param string $overriddenTeamAccessType
     * @param string $defaultTeamAccessType
     */
    public function __construct($teamId = null, $overriddenTeamAccessType = null, $defaultTeamAccessType = null)
    {
      $this->teamId = $teamId;
      $this->overriddenTeamAccessType = $overriddenTeamAccessType;
      $this->defaultTeamAccessType = $defaultTeamAccessType;
    }

    /**
     * @return int
     */
    public function getTeamId()
    {
      return $this->teamId;
    }

    /**
     * @param int $teamId
     * @return \Google\AdsApi\Dfp\v201711\UserRecordTeamAssociation
     */
    public function setTeamId($teamId)
    {
      $this->teamId = (!is_null($teamId) && PHP_INT_SIZE === 4)
          ? floatval($teamId) : $teamId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOverriddenTeamAccessType()
    {
      return $this->overriddenTeamAccessType;
    }

    /**
     * @param string $overriddenTeamAccessType
     * @return \Google\AdsApi\Dfp\v201711\UserRecordTeamAssociation
     */
    public function setOverriddenTeamAccessType($overriddenTeamAccessType)
    {
      $this->overriddenTeamAccessType = $overriddenTeamAccessType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultTeamAccessType()
    {
      return $this->defaultTeamAccessType;
    }

    /**
     * @param string $defaultTeamAccessType
     * @return \Google\AdsApi\Dfp\v201711\UserRecordTeamAssociation
     */
    public function setDefaultTeamAccessType($defaultTeamAccessType)
    {
      $this->defaultTeamAccessType = $defaultTeamAccessType;
      return $this;
    }

}
