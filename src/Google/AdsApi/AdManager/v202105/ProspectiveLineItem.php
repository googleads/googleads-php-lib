<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProspectiveLineItem
{

    /**
     * @var \Google\AdsApi\AdManager\v202105\LineItem $lineItem
     */
    protected $lineItem = null;

    /**
     * @var \Google\AdsApi\AdManager\v202105\ProposalLineItem $proposalLineItem
     */
    protected $proposalLineItem = null;

    /**
     * @var int $advertiserId
     */
    protected $advertiserId = null;

    /**
     * @param \Google\AdsApi\AdManager\v202105\LineItem $lineItem
     * @param \Google\AdsApi\AdManager\v202105\ProposalLineItem $proposalLineItem
     * @param int $advertiserId
     */
    public function __construct($lineItem = null, $proposalLineItem = null, $advertiserId = null)
    {
      $this->lineItem = $lineItem;
      $this->proposalLineItem = $proposalLineItem;
      $this->advertiserId = $advertiserId;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\LineItem
     */
    public function getLineItem()
    {
      return $this->lineItem;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\LineItem $lineItem
     * @return \Google\AdsApi\AdManager\v202105\ProspectiveLineItem
     */
    public function setLineItem($lineItem)
    {
      $this->lineItem = $lineItem;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\ProposalLineItem
     */
    public function getProposalLineItem()
    {
      return $this->proposalLineItem;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\ProposalLineItem $proposalLineItem
     * @return \Google\AdsApi\AdManager\v202105\ProspectiveLineItem
     */
    public function setProposalLineItem($proposalLineItem)
    {
      $this->proposalLineItem = $proposalLineItem;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
      return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return \Google\AdsApi\AdManager\v202105\ProspectiveLineItem
     */
    public function setAdvertiserId($advertiserId)
    {
      $this->advertiserId = (!is_null($advertiserId) && PHP_INT_SIZE === 4)
          ? floatval($advertiserId) : $advertiserId;
      return $this;
    }

}
