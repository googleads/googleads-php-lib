<?php

namespace Google\AdsApi\AdManager\v202405;


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
     * @param int $userId
     */
    public function __construct($userId = null)
    {
      $this->userId = $userId;
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
     * @return \Google\AdsApi\AdManager\v202405\SalespersonSplit
     */
    public function setUserId($userId)
    {
      $this->userId = (!is_null($userId) && PHP_INT_SIZE === 4)
          ? floatval($userId) : $userId;
      return $this;
    }

}
