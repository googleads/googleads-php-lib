<?php

namespace Google\AdsApi\AdWords\v201609\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Promotion
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
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\AdWords\v201609\express\Creative[] $creatives
     */
    protected $creatives = null;

    /**
     * @var \Google\AdsApi\AdWords\v201609\express\ExpandedCreative $expandedCreative
     */
    protected $expandedCreative = null;

    /**
     * @var string $destinationUrl
     */
    protected $destinationUrl = null;

    /**
     * @var \Google\AdsApi\AdWords\v201609\express\PhoneNumber $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var boolean $streetAddressVisible
     */
    protected $streetAddressVisible = null;

    /**
     * @var boolean $callTrackingEnabled
     */
    protected $callTrackingEnabled = null;

    /**
     * @var \Google\AdsApi\AdWords\v201609\cm\Money $budget
     */
    protected $budget = null;

    /**
     * @var \Google\AdsApi\AdWords\v201609\cm\Criterion[] $criteria
     */
    protected $criteria = null;

    /**
     * @var long[] $campaignIds
     */
    protected $campaignIds = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $status
     * @param \Google\AdsApi\AdWords\v201609\express\Creative[] $creatives
     * @param \Google\AdsApi\AdWords\v201609\express\ExpandedCreative $expandedCreative
     * @param string $destinationUrl
     * @param \Google\AdsApi\AdWords\v201609\express\PhoneNumber $phoneNumber
     * @param boolean $streetAddressVisible
     * @param boolean $callTrackingEnabled
     * @param \Google\AdsApi\AdWords\v201609\cm\Money $budget
     * @param \Google\AdsApi\AdWords\v201609\cm\Criterion[] $criteria
     * @param long[] $campaignIds
     */
    public function __construct($id = null, $name = null, $status = null, array $creatives = null, $expandedCreative = null, $destinationUrl = null, $phoneNumber = null, $streetAddressVisible = null, $callTrackingEnabled = null, $budget = null, array $criteria = null, array $campaignIds = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->creatives = $creatives;
      $this->expandedCreative = $expandedCreative;
      $this->destinationUrl = $destinationUrl;
      $this->phoneNumber = $phoneNumber;
      $this->streetAddressVisible = $streetAddressVisible;
      $this->callTrackingEnabled = $callTrackingEnabled;
      $this->budget = $budget;
      $this->criteria = $criteria;
      $this->campaignIds = $campaignIds;
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
     * @return \Google\AdsApi\AdWords\v201609\express\Promotion
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Google\AdsApi\AdWords\v201609\express\Promotion
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Google\AdsApi\AdWords\v201609\express\Promotion
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\express\Creative[]
     */
    public function getCreatives()
    {
      return $this->creatives;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\express\Creative[] $creatives
     * @return \Google\AdsApi\AdWords\v201609\express\Promotion
     */
    public function setCreatives(array $creatives)
    {
      $this->creatives = $creatives;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\express\ExpandedCreative
     */
    public function getExpandedCreative()
    {
      return $this->expandedCreative;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\express\ExpandedCreative $expandedCreative
     * @return \Google\AdsApi\AdWords\v201609\express\Promotion
     */
    public function setExpandedCreative($expandedCreative)
    {
      $this->expandedCreative = $expandedCreative;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationUrl()
    {
      return $this->destinationUrl;
    }

    /**
     * @param string $destinationUrl
     * @return \Google\AdsApi\AdWords\v201609\express\Promotion
     */
    public function setDestinationUrl($destinationUrl)
    {
      $this->destinationUrl = $destinationUrl;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\express\PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->phoneNumber;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\express\PhoneNumber $phoneNumber
     * @return \Google\AdsApi\AdWords\v201609\express\Promotion
     */
    public function setPhoneNumber($phoneNumber)
    {
      $this->phoneNumber = $phoneNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStreetAddressVisible()
    {
      return $this->streetAddressVisible;
    }

    /**
     * @param boolean $streetAddressVisible
     * @return \Google\AdsApi\AdWords\v201609\express\Promotion
     */
    public function setStreetAddressVisible($streetAddressVisible)
    {
      $this->streetAddressVisible = $streetAddressVisible;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCallTrackingEnabled()
    {
      return $this->callTrackingEnabled;
    }

    /**
     * @param boolean $callTrackingEnabled
     * @return \Google\AdsApi\AdWords\v201609\express\Promotion
     */
    public function setCallTrackingEnabled($callTrackingEnabled)
    {
      $this->callTrackingEnabled = $callTrackingEnabled;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\cm\Money
     */
    public function getBudget()
    {
      return $this->budget;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\cm\Money $budget
     * @return \Google\AdsApi\AdWords\v201609\express\Promotion
     */
    public function setBudget($budget)
    {
      $this->budget = $budget;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\cm\Criterion[]
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\cm\Criterion[] $criteria
     * @return \Google\AdsApi\AdWords\v201609\express\Promotion
     */
    public function setCriteria(array $criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getCampaignIds()
    {
      return $this->campaignIds;
    }

    /**
     * @param long[] $campaignIds
     * @return \Google\AdsApi\AdWords\v201609\express\Promotion
     */
    public function setCampaignIds(array $campaignIds)
    {
      $this->campaignIds = $campaignIds;
      return $this;
    }

}
