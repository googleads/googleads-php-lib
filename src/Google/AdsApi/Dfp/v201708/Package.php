<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Package
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $proposalId
     */
    protected $proposalId = null;

    /**
     * @var int $productPackageId
     */
    protected $productPackageId = null;

    /**
     * @var int $rateCardId
     */
    protected $rateCardId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $comments
     */
    protected $comments = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @param int $id
     * @param int $proposalId
     * @param int $productPackageId
     * @param int $rateCardId
     * @param string $name
     * @param string $comments
     * @param string $status
     * @param \Google\AdsApi\Dfp\v201708\DateTime $startDateTime
     * @param \Google\AdsApi\Dfp\v201708\DateTime $endDateTime
     * @param \Google\AdsApi\Dfp\v201708\DateTime $lastModifiedDateTime
     */
    public function __construct($id = null, $proposalId = null, $productPackageId = null, $rateCardId = null, $name = null, $comments = null, $status = null, $startDateTime = null, $endDateTime = null, $lastModifiedDateTime = null)
    {
      $this->id = $id;
      $this->proposalId = $proposalId;
      $this->productPackageId = $productPackageId;
      $this->rateCardId = $rateCardId;
      $this->name = $name;
      $this->comments = $comments;
      $this->status = $status;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
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
     * @return \Google\AdsApi\Dfp\v201708\Package
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
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
     * @return \Google\AdsApi\Dfp\v201708\Package
     */
    public function setProposalId($proposalId)
    {
      $this->proposalId = (!is_null($proposalId) && PHP_INT_SIZE === 4)
          ? floatval($proposalId) : $proposalId;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductPackageId()
    {
      return $this->productPackageId;
    }

    /**
     * @param int $productPackageId
     * @return \Google\AdsApi\Dfp\v201708\Package
     */
    public function setProductPackageId($productPackageId)
    {
      $this->productPackageId = (!is_null($productPackageId) && PHP_INT_SIZE === 4)
          ? floatval($productPackageId) : $productPackageId;
      return $this;
    }

    /**
     * @return int
     */
    public function getRateCardId()
    {
      return $this->rateCardId;
    }

    /**
     * @param int $rateCardId
     * @return \Google\AdsApi\Dfp\v201708\Package
     */
    public function setRateCardId($rateCardId)
    {
      $this->rateCardId = (!is_null($rateCardId) && PHP_INT_SIZE === 4)
          ? floatval($rateCardId) : $rateCardId;
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
     * @return \Google\AdsApi\Dfp\v201708\Package
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param string $comments
     * @return \Google\AdsApi\Dfp\v201708\Package
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\Dfp\v201708\Package
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DateTime $startDateTime
     * @return \Google\AdsApi\Dfp\v201708\Package
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DateTime $endDateTime
     * @return \Google\AdsApi\Dfp\v201708\Package
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\Dfp\v201708\Package
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

}
