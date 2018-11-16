<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CriterionUserInterest extends \Google\AdsApi\AdWords\v201809\cm\Criterion
{

    /**
     * @var int $userInterestId
     */
    protected $userInterestId = null;

    /**
     * @var int $userInterestParentId
     */
    protected $userInterestParentId = null;

    /**
     * @var string $userInterestName
     */
    protected $userInterestName = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param int $userInterestId
     * @param int $userInterestParentId
     * @param string $userInterestName
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $userInterestId = null, $userInterestParentId = null, $userInterestName = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->userInterestId = $userInterestId;
      $this->userInterestParentId = $userInterestParentId;
      $this->userInterestName = $userInterestName;
    }

    /**
     * @return int
     */
    public function getUserInterestId()
    {
      return $this->userInterestId;
    }

    /**
     * @param int $userInterestId
     * @return \Google\AdsApi\AdWords\v201809\cm\CriterionUserInterest
     */
    public function setUserInterestId($userInterestId)
    {
      $this->userInterestId = (!is_null($userInterestId) && PHP_INT_SIZE === 4)
          ? floatval($userInterestId) : $userInterestId;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserInterestParentId()
    {
      return $this->userInterestParentId;
    }

    /**
     * @param int $userInterestParentId
     * @return \Google\AdsApi\AdWords\v201809\cm\CriterionUserInterest
     */
    public function setUserInterestParentId($userInterestParentId)
    {
      $this->userInterestParentId = (!is_null($userInterestParentId) && PHP_INT_SIZE === 4)
          ? floatval($userInterestParentId) : $userInterestParentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserInterestName()
    {
      return $this->userInterestName;
    }

    /**
     * @param string $userInterestName
     * @return \Google\AdsApi\AdWords\v201809\cm\CriterionUserInterest
     */
    public function setUserInterestName($userInterestName)
    {
      $this->userInterestName = $userInterestName;
      return $this;
    }

}
