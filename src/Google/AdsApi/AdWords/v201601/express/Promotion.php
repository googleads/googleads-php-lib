<?php

namespace Google\AdsApi\AdWords\v201601\express;

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
     * @var \Google\AdsApi\AdWords\v201601\express\Creative[] $creatives
     */
    protected $creatives = null;

    /**
     * @var string $destinationUrl
     */
    protected $destinationUrl = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\express\PhoneNumber $phoneNumber
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
     * @var \Google\AdsApi\AdWords\v201601\cm\Money $budget
     */
    protected $budget = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Criterion[] $criteria
     */
    protected $criteria = null;

    /**
     * @var long[] $campaignIds
     */
    protected $campaignIds = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Money $remainingBudget
     */
    protected $remainingBudget = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $status
     * @param \Google\AdsApi\AdWords\v201601\express\Creative[] $creatives
     * @param string $destinationUrl
     * @param \Google\AdsApi\AdWords\v201601\express\PhoneNumber $phoneNumber
     * @param boolean $streetAddressVisible
     * @param boolean $callTrackingEnabled
     * @param \Google\AdsApi\AdWords\v201601\cm\Money $budget
     * @param \Google\AdsApi\AdWords\v201601\cm\Criterion[] $criteria
     * @param long[] $campaignIds
     * @param \Google\AdsApi\AdWords\v201601\cm\Money $remainingBudget
     */
    public function __construct($id = null, $name = null, $status = null, array $creatives = null, $destinationUrl = null, $phoneNumber = null, $streetAddressVisible = null, $callTrackingEnabled = null, $budget = null, array $criteria = null, array $campaignIds = null, $remainingBudget = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->creatives = $creatives;
      $this->destinationUrl = $destinationUrl;
      $this->phoneNumber = $phoneNumber;
      $this->streetAddressVisible = $streetAddressVisible;
      $this->callTrackingEnabled = $callTrackingEnabled;
      $this->budget = $budget;
      $this->criteria = $criteria;
      $this->campaignIds = $campaignIds;
      $this->remainingBudget = $remainingBudget;
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
     * @return \Google\AdsApi\AdWords\v201601\express\Promotion
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
     * @return \Google\AdsApi\AdWords\v201601\express\Promotion
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
     * @return \Google\AdsApi\AdWords\v201601\express\Promotion
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\express\Creative[]
     */
    public function getCreatives()
    {
      return $this->creatives;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\express\Creative[] $creatives
     * @return \Google\AdsApi\AdWords\v201601\express\Promotion
     */
    public function setCreatives(array $creatives)
    {
      $this->creatives = $creatives;
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
     * @return \Google\AdsApi\AdWords\v201601\express\Promotion
     */
    public function setDestinationUrl($destinationUrl)
    {
      $this->destinationUrl = $destinationUrl;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\express\PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->phoneNumber;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\express\PhoneNumber $phoneNumber
     * @return \Google\AdsApi\AdWords\v201601\express\Promotion
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
     * @return \Google\AdsApi\AdWords\v201601\express\Promotion
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
     * @return \Google\AdsApi\AdWords\v201601\express\Promotion
     */
    public function setCallTrackingEnabled($callTrackingEnabled)
    {
      $this->callTrackingEnabled = $callTrackingEnabled;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Money
     */
    public function getBudget()
    {
      return $this->budget;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Money $budget
     * @return \Google\AdsApi\AdWords\v201601\express\Promotion
     */
    public function setBudget($budget)
    {
      $this->budget = $budget;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Criterion[]
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Criterion[] $criteria
     * @return \Google\AdsApi\AdWords\v201601\express\Promotion
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
     * @return \Google\AdsApi\AdWords\v201601\express\Promotion
     */
    public function setCampaignIds(array $campaignIds)
    {
      $this->campaignIds = $campaignIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Money
     */
    public function getRemainingBudget()
    {
      return $this->remainingBudget;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Money $remainingBudget
     * @return \Google\AdsApi\AdWords\v201601\express\Promotion
     */
    public function setRemainingBudget($remainingBudget)
    {
      $this->remainingBudget = $remainingBudget;
      return $this;
    }

}
