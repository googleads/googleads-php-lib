<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MarketplaceComment
{

    /**
     * @var int $proposalId
     */
    protected $proposalId = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\DateTime $creationTime
     */
    protected $creationTime = null;

    /**
     * @var boolean $createdBySeller
     */
    protected $createdBySeller = null;

    /**
     * @param int $proposalId
     * @param string $comment
     * @param \Google\AdsApi\AdManager\v201808\DateTime $creationTime
     * @param boolean $createdBySeller
     */
    public function __construct($proposalId = null, $comment = null, $creationTime = null, $createdBySeller = null)
    {
      $this->proposalId = $proposalId;
      $this->comment = $comment;
      $this->creationTime = $creationTime;
      $this->createdBySeller = $createdBySeller;
    }

    /**
     * @return int
     */
    public function getProposalId()
    {
      return $this->proposalId;
    }

    /**
     * @param int $proposalId
     * @return \Google\AdsApi\AdManager\v201808\MarketplaceComment
     */
    public function setProposalId($proposalId)
    {
      $this->proposalId = (!is_null($proposalId) && PHP_INT_SIZE === 4)
          ? floatval($proposalId) : $proposalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return \Google\AdsApi\AdManager\v201808\MarketplaceComment
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\DateTime
     */
    public function getCreationTime()
    {
      return $this->creationTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\DateTime $creationTime
     * @return \Google\AdsApi\AdManager\v201808\MarketplaceComment
     */
    public function setCreationTime($creationTime)
    {
      $this->creationTime = $creationTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCreatedBySeller()
    {
      return $this->createdBySeller;
    }

    /**
     * @param boolean $createdBySeller
     * @return \Google\AdsApi\AdManager\v201808\MarketplaceComment
     */
    public function setCreatedBySeller($createdBySeller)
    {
      $this->createdBySeller = $createdBySeller;
      return $this;
    }

}
