<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BuyerUserListTargeting
{

    /**
     * @var boolean $hasBuyerUserListTargeting
     */
    protected $hasBuyerUserListTargeting = null;

    /**
     * @param boolean $hasBuyerUserListTargeting
     */
    public function __construct($hasBuyerUserListTargeting = null)
    {
      $this->hasBuyerUserListTargeting = $hasBuyerUserListTargeting;
    }

    /**
     * @return boolean
     */
    public function getHasBuyerUserListTargeting()
    {
      return $this->hasBuyerUserListTargeting;
    }

    /**
     * @param boolean $hasBuyerUserListTargeting
     * @return \Google\AdsApi\AdManager\v201908\BuyerUserListTargeting
     */
    public function setHasBuyerUserListTargeting($hasBuyerUserListTargeting)
    {
      $this->hasBuyerUserListTargeting = $hasBuyerUserListTargeting;
      return $this;
    }

}
