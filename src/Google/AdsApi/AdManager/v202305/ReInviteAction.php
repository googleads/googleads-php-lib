<?php

namespace Google\AdsApi\AdManager\v202305;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReInviteAction extends \Google\AdsApi\AdManager\v202305\CompanyAction
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
     * @var string $proposedEmail
     */
    protected $proposedEmail = null;

    /**
     * @param string $proposedDelegationType
     * @param int $proposedRevenueShareMillipercent
     * @param string $proposedEmail
     */
    public function __construct($proposedDelegationType = null, $proposedRevenueShareMillipercent = null, $proposedEmail = null)
    {
      $this->proposedDelegationType = $proposedDelegationType;
      $this->proposedRevenueShareMillipercent = $proposedRevenueShareMillipercent;
      $this->proposedEmail = $proposedEmail;
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
     * @return \Google\AdsApi\AdManager\v202305\ReInviteAction
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
     * @return \Google\AdsApi\AdManager\v202305\ReInviteAction
     */
    public function setProposedRevenueShareMillipercent($proposedRevenueShareMillipercent)
    {
      $this->proposedRevenueShareMillipercent = (!is_null($proposedRevenueShareMillipercent) && PHP_INT_SIZE === 4)
          ? floatval($proposedRevenueShareMillipercent) : $proposedRevenueShareMillipercent;
      return $this;
    }

    /**
     * @return string
     */
    public function getProposedEmail()
    {
      return $this->proposedEmail;
    }

    /**
     * @param string $proposedEmail
     * @return \Google\AdsApi\AdManager\v202305\ReInviteAction
     */
    public function setProposedEmail($proposedEmail)
    {
      $this->proposedEmail = $proposedEmail;
      return $this;
    }

}
