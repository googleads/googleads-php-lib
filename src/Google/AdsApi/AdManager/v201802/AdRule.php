<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdRule
{

    /**
     * @var int $adRuleId
     */
    protected $adRuleId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $priority
     */
    protected $priority = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var string $startDateTimeType
     */
    protected $startDateTimeType = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var boolean $unlimitedEndDateTime
     */
    protected $unlimitedEndDateTime = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $frequencyCapBehavior
     */
    protected $frequencyCapBehavior = null;

    /**
     * @var int $maxImpressionsPerLineItemPerStream
     */
    protected $maxImpressionsPerLineItemPerStream = null;

    /**
     * @var int $maxImpressionsPerLineItemPerPod
     */
    protected $maxImpressionsPerLineItemPerPod = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot $preroll
     */
    protected $preroll = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot $midroll
     */
    protected $midroll = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot $postroll
     */
    protected $postroll = null;

    /**
     * @param int $adRuleId
     * @param string $name
     * @param int $priority
     * @param \Google\AdsApi\AdManager\v201802\Targeting $targeting
     * @param \Google\AdsApi\AdManager\v201802\DateTime $startDateTime
     * @param string $startDateTimeType
     * @param \Google\AdsApi\AdManager\v201802\DateTime $endDateTime
     * @param boolean $unlimitedEndDateTime
     * @param string $status
     * @param string $frequencyCapBehavior
     * @param int $maxImpressionsPerLineItemPerStream
     * @param int $maxImpressionsPerLineItemPerPod
     * @param \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot $preroll
     * @param \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot $midroll
     * @param \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot $postroll
     */
    public function __construct($adRuleId = null, $name = null, $priority = null, $targeting = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $unlimitedEndDateTime = null, $status = null, $frequencyCapBehavior = null, $maxImpressionsPerLineItemPerStream = null, $maxImpressionsPerLineItemPerPod = null, $preroll = null, $midroll = null, $postroll = null)
    {
      $this->adRuleId = $adRuleId;
      $this->name = $name;
      $this->priority = $priority;
      $this->targeting = $targeting;
      $this->startDateTime = $startDateTime;
      $this->startDateTimeType = $startDateTimeType;
      $this->endDateTime = $endDateTime;
      $this->unlimitedEndDateTime = $unlimitedEndDateTime;
      $this->status = $status;
      $this->frequencyCapBehavior = $frequencyCapBehavior;
      $this->maxImpressionsPerLineItemPerStream = $maxImpressionsPerLineItemPerStream;
      $this->maxImpressionsPerLineItemPerPod = $maxImpressionsPerLineItemPerPod;
      $this->preroll = $preroll;
      $this->midroll = $midroll;
      $this->postroll = $postroll;
    }

    /**
     * @return int
     */
    public function getAdRuleId()
    {
      return $this->adRuleId;
    }

    /**
     * @param int $adRuleId
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setAdRuleId($adRuleId)
    {
      $this->adRuleId = (!is_null($adRuleId) && PHP_INT_SIZE === 4)
          ? floatval($adRuleId) : $adRuleId;
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
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param int $priority
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\Targeting $targeting
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $startDateTime
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDateTimeType()
    {
      return $this->startDateTimeType;
    }

    /**
     * @param string $startDateTimeType
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setStartDateTimeType($startDateTimeType)
    {
      $this->startDateTimeType = $startDateTimeType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $endDateTime
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnlimitedEndDateTime()
    {
      return $this->unlimitedEndDateTime;
    }

    /**
     * @param boolean $unlimitedEndDateTime
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setUnlimitedEndDateTime($unlimitedEndDateTime)
    {
      $this->unlimitedEndDateTime = $unlimitedEndDateTime;
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
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrequencyCapBehavior()
    {
      return $this->frequencyCapBehavior;
    }

    /**
     * @param string $frequencyCapBehavior
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setFrequencyCapBehavior($frequencyCapBehavior)
    {
      $this->frequencyCapBehavior = $frequencyCapBehavior;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxImpressionsPerLineItemPerStream()
    {
      return $this->maxImpressionsPerLineItemPerStream;
    }

    /**
     * @param int $maxImpressionsPerLineItemPerStream
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setMaxImpressionsPerLineItemPerStream($maxImpressionsPerLineItemPerStream)
    {
      $this->maxImpressionsPerLineItemPerStream = $maxImpressionsPerLineItemPerStream;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxImpressionsPerLineItemPerPod()
    {
      return $this->maxImpressionsPerLineItemPerPod;
    }

    /**
     * @param int $maxImpressionsPerLineItemPerPod
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setMaxImpressionsPerLineItemPerPod($maxImpressionsPerLineItemPerPod)
    {
      $this->maxImpressionsPerLineItemPerPod = $maxImpressionsPerLineItemPerPod;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot
     */
    public function getPreroll()
    {
      return $this->preroll;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot $preroll
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setPreroll($preroll)
    {
      $this->preroll = $preroll;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot
     */
    public function getMidroll()
    {
      return $this->midroll;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot $midroll
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setMidroll($midroll)
    {
      $this->midroll = $midroll;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot
     */
    public function getPostroll()
    {
      return $this->postroll;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\BaseAdRuleSlot $postroll
     * @return \Google\AdsApi\AdManager\v201802\AdRule
     */
    public function setPostroll($postroll)
    {
      $this->postroll = $postroll;
      return $this;
    }

}
