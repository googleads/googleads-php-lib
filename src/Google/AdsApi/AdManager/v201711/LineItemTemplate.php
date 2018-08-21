<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplate
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
     * @var boolean $isDefault
     */
    protected $isDefault = null;

    /**
     * @var string $lineItemName
     */
    protected $lineItemName = null;

    /**
     * @var boolean $enabledForSameAdvertiserException
     */
    protected $enabledForSameAdvertiserException = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @var string $lineItemType
     */
    protected $lineItemType = null;

    /**
     * @var \Google\AdsApi\AdManager\v201711\DateTime $startTime
     */
    protected $startTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v201711\DateTime $endTime
     */
    protected $endTime = null;

    /**
     * @var string $deliveryRateType
     */
    protected $deliveryRateType = null;

    /**
     * @var string $roadblockingType
     */
    protected $roadblockingType = null;

    /**
     * @var string $creativeRotationType
     */
    protected $creativeRotationType = null;

    /**
     * @param int $id
     * @param string $name
     * @param boolean $isDefault
     * @param string $lineItemName
     * @param boolean $enabledForSameAdvertiserException
     * @param string $notes
     * @param string $lineItemType
     * @param \Google\AdsApi\AdManager\v201711\DateTime $startTime
     * @param \Google\AdsApi\AdManager\v201711\DateTime $endTime
     * @param string $deliveryRateType
     * @param string $roadblockingType
     * @param string $creativeRotationType
     */
    public function __construct($id = null, $name = null, $isDefault = null, $lineItemName = null, $enabledForSameAdvertiserException = null, $notes = null, $lineItemType = null, $startTime = null, $endTime = null, $deliveryRateType = null, $roadblockingType = null, $creativeRotationType = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->isDefault = $isDefault;
      $this->lineItemName = $lineItemName;
      $this->enabledForSameAdvertiserException = $enabledForSameAdvertiserException;
      $this->notes = $notes;
      $this->lineItemType = $lineItemType;
      $this->startTime = $startTime;
      $this->endTime = $endTime;
      $this->deliveryRateType = $deliveryRateType;
      $this->roadblockingType = $roadblockingType;
      $this->creativeRotationType = $creativeRotationType;
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
     * @return \Google\AdsApi\AdManager\v201711\LineItemTemplate
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
     * @return \Google\AdsApi\AdManager\v201711\LineItemTemplate
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDefault()
    {
      return $this->isDefault;
    }

    /**
     * @param boolean $isDefault
     * @return \Google\AdsApi\AdManager\v201711\LineItemTemplate
     */
    public function setIsDefault($isDefault)
    {
      $this->isDefault = $isDefault;
      return $this;
    }

    /**
     * @return string
     */
    public function getLineItemName()
    {
      return $this->lineItemName;
    }

    /**
     * @param string $lineItemName
     * @return \Google\AdsApi\AdManager\v201711\LineItemTemplate
     */
    public function setLineItemName($lineItemName)
    {
      $this->lineItemName = $lineItemName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnabledForSameAdvertiserException()
    {
      return $this->enabledForSameAdvertiserException;
    }

    /**
     * @param boolean $enabledForSameAdvertiserException
     * @return \Google\AdsApi\AdManager\v201711\LineItemTemplate
     */
    public function setEnabledForSameAdvertiserException($enabledForSameAdvertiserException)
    {
      $this->enabledForSameAdvertiserException = $enabledForSameAdvertiserException;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param string $notes
     * @return \Google\AdsApi\AdManager\v201711\LineItemTemplate
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

    /**
     * @return string
     */
    public function getLineItemType()
    {
      return $this->lineItemType;
    }

    /**
     * @param string $lineItemType
     * @return \Google\AdsApi\AdManager\v201711\LineItemTemplate
     */
    public function setLineItemType($lineItemType)
    {
      $this->lineItemType = $lineItemType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201711\DateTime
     */
    public function getStartTime()
    {
      return $this->startTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201711\DateTime $startTime
     * @return \Google\AdsApi\AdManager\v201711\LineItemTemplate
     */
    public function setStartTime($startTime)
    {
      $this->startTime = $startTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201711\DateTime
     */
    public function getEndTime()
    {
      return $this->endTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201711\DateTime $endTime
     * @return \Google\AdsApi\AdManager\v201711\LineItemTemplate
     */
    public function setEndTime($endTime)
    {
      $this->endTime = $endTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryRateType()
    {
      return $this->deliveryRateType;
    }

    /**
     * @param string $deliveryRateType
     * @return \Google\AdsApi\AdManager\v201711\LineItemTemplate
     */
    public function setDeliveryRateType($deliveryRateType)
    {
      $this->deliveryRateType = $deliveryRateType;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoadblockingType()
    {
      return $this->roadblockingType;
    }

    /**
     * @param string $roadblockingType
     * @return \Google\AdsApi\AdManager\v201711\LineItemTemplate
     */
    public function setRoadblockingType($roadblockingType)
    {
      $this->roadblockingType = $roadblockingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreativeRotationType()
    {
      return $this->creativeRotationType;
    }

    /**
     * @param string $creativeRotationType
     * @return \Google\AdsApi\AdManager\v201711\LineItemTemplate
     */
    public function setCreativeRotationType($creativeRotationType)
    {
      $this->creativeRotationType = $creativeRotationType;
      return $this;
    }

}
