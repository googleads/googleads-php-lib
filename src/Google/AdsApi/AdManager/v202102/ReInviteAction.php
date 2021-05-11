<?php

namespace Google\AdsApi\AdManager\v202102;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReInviteAction extends \Google\AdsApi\AdManager\v202102\CompanyAction
{

    /**
     * @var string $proposedDelegationType
     */
    protected $proposedDelegationType = null;

    /**
     * @var int $proposedRevenueShareMillipercent
     */
    protected $proposedRevenueShareMillipercent = null;

    /**
     * @param string $proposedDelegationType
     * @param int $proposedRevenueShareMillipercent
     */
    public function __construct($proposedDelegationType = null, $proposedRevenueShareMillipercent = null)
    {
      $this->proposedDelegationType = $proposedDelegationType;
      $this->proposedRevenueShareMillipercent = $proposedRevenueShareMillipercent;
    }

    /**
     * @return string
     */
    public function getProposedDelegationType()
    {
      return $this->proposedDelegationType;
    }

    /**
     * @param string $proposedDelegationType
     * @return \Google\AdsApi\AdManager\v202102\ReInviteAction
     */
    public function setProposedDelegationType($proposedDelegationType)
    {
      $this->proposedDelegationType = $proposedDelegationType;
      return $this;
    }

    /**
     * @return int
     */
    public function getProposedRevenueShareMillipercent()
    {
      return $this->proposedRevenueShareMillipercent;
    }

    /**
     * @param int $proposedRevenueShareMillipercent
     * @return \Google\AdsApi\AdManager\v202102\ReInviteAction
     */
    public function setProposedRevenueShareMillipercent($proposedRevenueShareMillipercent)
    {
      $this->proposedRevenueShareMillipercent = (!is_null($proposedRevenueShareMillipercent) && PHP_INT_SIZE === 4)
          ? floatval($proposedRevenueShareMillipercent) : $proposedRevenueShareMillipercent;
      return $this;
    }

}
