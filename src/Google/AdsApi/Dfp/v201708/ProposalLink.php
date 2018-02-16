<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLink
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $creatorId
     */
    protected $creatorId = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\DateTime $creationDateTime
     */
    protected $creationDateTime = null;

    /**
     * @param int $id
     * @param string $name
     * @param int $creatorId
     * @param string $url
     * @param string $description
     * @param \Google\AdsApi\Dfp\v201708\DateTime $creationDateTime
     */
    public function __construct($id = null, $name = null, $creatorId = null, $url = null, $description = null, $creationDateTime = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->creatorId = $creatorId;
      $this->url = $url;
      $this->description = $description;
      $this->creationDateTime = $creationDateTime;
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
     * @return \Google\AdsApi\Dfp\v201708\ProposalLink
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
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
     * @return \Google\AdsApi\Dfp\v201708\ProposalLink
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreatorId()
    {
      return $this->creatorId;
    }

    /**
     * @param int $creatorId
     * @return \Google\AdsApi\Dfp\v201708\ProposalLink
     */
    public function setCreatorId($creatorId)
    {
      $this->creatorId = (!is_null($creatorId) && PHP_INT_SIZE === 4)
          ? floatval($creatorId) : $creatorId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Google\AdsApi\Dfp\v201708\ProposalLink
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\Dfp\v201708\ProposalLink
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DateTime
     */
    public function getCreationDateTime()
    {
      return $this->creationDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DateTime $creationDateTime
     * @return \Google\AdsApi\Dfp\v201708\ProposalLink
     */
    public function setCreationDateTime($creationDateTime)
    {
      $this->creationDateTime = $creationDateTime;
      return $this;
    }

}
