<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SalespersonSplit
{

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $split
     */
    protected $split = null;

    /**
     * @param int $userId
     * @param int $split
     */
    public function __construct($userId = null, $split = null)
    {
      $this->userId = $userId;
      $this->split = $split;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param int $userId
     * @return \Google\AdsApi\Dfp\v201711\SalespersonSplit
     */
    public function setUserId($userId)
    {
      $this->userId = (!is_null($userId) && PHP_INT_SIZE === 4)
          ? floatval($userId) : $userId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSplit()
    {
      return $this->split;
    }

    /**
     * @param int $split
     * @return \Google\AdsApi\Dfp\v201711\SalespersonSplit
     */
    public function setSplit($split)
    {
      $this->split = $split;
      return $this;
    }

}
