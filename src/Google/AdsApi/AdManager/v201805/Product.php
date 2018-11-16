<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Product
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $nameSource
     */
    protected $nameSource = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $productType
     */
    protected $productType = null;

    /**
     * @var int $productTemplateId
     */
    protected $productTemplateId = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @var string $productTemplateDescription
     */
    protected $productTemplateDescription = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var string $rateType
     */
    protected $rateType = null;

    /**
     * @var string $roadblockingType
     */
    protected $roadblockingType = null;

    /**
     * @var string $deliveryRateType
     */
    protected $deliveryRateType = null;

    /**
     * @var string $creativeRotationType
     */
    protected $creativeRotationType = null;

    /**
     * @var string $companionDeliveryOption
     */
    protected $companionDeliveryOption = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\CreativePlaceholder[] $creativePlaceholders
     */
    protected $creativePlaceholders = null;

    /**
     * @var string $lineItemType
     */
    protected $lineItemType = null;

    /**
     * @var int $priority
     */
    protected $priority = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\FrequencyCap[] $frequencyCaps
     */
    protected $frequencyCaps = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\Targeting $builtInTargeting
     */
    protected $builtInTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\CustomizableAttributes $customizableAttributes
     */
    protected $customizableAttributes = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\BaseCustomFieldValue[] $customFieldValues
     */
    protected $customFieldValues = null;

    /**
     * @var string $environmentType
     */
    protected $environmentType = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\ProductMarketplaceInfo $productMarketplaceInfo
     */
    protected $productMarketplaceInfo = null;

    /**
     * @var int $videoMaxDuration
     */
    protected $videoMaxDuration = null;

    /**
     * @param string $name
     * @param string $nameSource
     * @param string $status
     * @param string $productType
     * @param int $productTemplateId
     * @param int $id
     * @param string $notes
     * @param string $productTemplateDescription
     * @param \Google\AdsApi\AdManager\v201805\DateTime $lastModifiedDateTime
     * @param string $rateType
     * @param string $roadblockingType
     * @param string $deliveryRateType
     * @param string $creativeRotationType
     * @param string $companionDeliveryOption
     * @param \Google\AdsApi\AdManager\v201805\CreativePlaceholder[] $creativePlaceholders
     * @param string $lineItemType
     * @param int $priority
     * @param \Google\AdsApi\AdManager\v201805\FrequencyCap[] $frequencyCaps
     * @param \Google\AdsApi\AdManager\v201805\Targeting $builtInTargeting
     * @param \Google\AdsApi\AdManager\v201805\CustomizableAttributes $customizableAttributes
     * @param \Google\AdsApi\AdManager\v201805\BaseCustomFieldValue[] $customFieldValues
     * @param string $environmentType
     * @param \Google\AdsApi\AdManager\v201805\ProductMarketplaceInfo $productMarketplaceInfo
     * @param int $videoMaxDuration
     */
    public function __construct($name = null, $nameSource = null, $status = null, $productType = null, $productTemplateId = null, $id = null, $notes = null, $productTemplateDescription = null, $lastModifiedDateTime = null, $rateType = null, $roadblockingType = null, $deliveryRateType = null, $creativeRotationType = null, $companionDeliveryOption = null, array $creativePlaceholders = null, $lineItemType = null, $priority = null, array $frequencyCaps = null, $builtInTargeting = null, $customizableAttributes = null, array $customFieldValues = null, $environmentType = null, $productMarketplaceInfo = null, $videoMaxDuration = null)
    {
      $this->name = $name;
      $this->nameSource = $nameSource;
      $this->status = $status;
      $this->productType = $productType;
      $this->productTemplateId = $productTemplateId;
      $this->id = $id;
      $this->notes = $notes;
      $this->productTemplateDescription = $productTemplateDescription;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->rateType = $rateType;
      $this->roadblockingType = $roadblockingType;
      $this->deliveryRateType = $deliveryRateType;
      $this->creativeRotationType = $creativeRotationType;
      $this->companionDeliveryOption = $companionDeliveryOption;
      $this->creativePlaceholders = $creativePlaceholders;
      $this->lineItemType = $lineItemType;
      $this->priority = $priority;
      $this->frequencyCaps = $frequencyCaps;
      $this->builtInTargeting = $builtInTargeting;
      $this->customizableAttributes = $customizableAttributes;
      $this->customFieldValues = $customFieldValues;
      $this->environmentType = $environmentType;
      $this->productMarketplaceInfo = $productMarketplaceInfo;
      $this->videoMaxDuration = $videoMaxDuration;
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
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameSource()
    {
      return $this->nameSource;
    }

    /**
     * @param string $nameSource
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setNameSource($nameSource)
    {
      $this->nameSource = $nameSource;
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
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
      return $this->productType;
    }

    /**
     * @param string $productType
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setProductType($productType)
    {
      $this->productType = $productType;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductTemplateId()
    {
      return $this->productTemplateId;
    }

    /**
     * @param int $productTemplateId
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setProductTemplateId($productTemplateId)
    {
      $this->productTemplateId = (!is_null($productTemplateId) && PHP_INT_SIZE === 4)
          ? floatval($productTemplateId) : $productTemplateId;
      return $this;
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
     * @return \Google\AdsApi\AdManager\v201805\Product
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
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param string $notes
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductTemplateDescription()
    {
      return $this->productTemplateDescription;
    }

    /**
     * @param string $productTemplateDescription
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setProductTemplateDescription($productTemplateDescription)
    {
      $this->productTemplateDescription = $productTemplateDescription;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateType()
    {
      return $this->rateType;
    }

    /**
     * @param string $rateType
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setRateType($rateType)
    {
      $this->rateType = $rateType;
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
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setRoadblockingType($roadblockingType)
    {
      $this->roadblockingType = $roadblockingType;
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
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setDeliveryRateType($deliveryRateType)
    {
      $this->deliveryRateType = $deliveryRateType;
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
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setCreativeRotationType($creativeRotationType)
    {
      $this->creativeRotationType = $creativeRotationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanionDeliveryOption()
    {
      return $this->companionDeliveryOption;
    }

    /**
     * @param string $companionDeliveryOption
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setCompanionDeliveryOption($companionDeliveryOption)
    {
      $this->companionDeliveryOption = $companionDeliveryOption;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\CreativePlaceholder[]
     */
    public function getCreativePlaceholders()
    {
      return $this->creativePlaceholders;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\CreativePlaceholder[] $creativePlaceholders
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setCreativePlaceholders(array $creativePlaceholders)
    {
      $this->creativePlaceholders = $creativePlaceholders;
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
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setLineItemType($lineItemType)
    {
      $this->lineItemType = $lineItemType;
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
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\FrequencyCap[]
     */
    public function getFrequencyCaps()
    {
      return $this->frequencyCaps;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\FrequencyCap[] $frequencyCaps
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setFrequencyCaps(array $frequencyCaps)
    {
      $this->frequencyCaps = $frequencyCaps;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\Targeting
     */
    public function getBuiltInTargeting()
    {
      return $this->builtInTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\Targeting $builtInTargeting
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setBuiltInTargeting($builtInTargeting)
    {
      $this->builtInTargeting = $builtInTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function getCustomizableAttributes()
    {
      return $this->customizableAttributes;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\CustomizableAttributes $customizableAttributes
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setCustomizableAttributes($customizableAttributes)
    {
      $this->customizableAttributes = $customizableAttributes;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\BaseCustomFieldValue[]
     */
    public function getCustomFieldValues()
    {
      return $this->customFieldValues;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\BaseCustomFieldValue[] $customFieldValues
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setCustomFieldValues(array $customFieldValues)
    {
      $this->customFieldValues = $customFieldValues;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnvironmentType()
    {
      return $this->environmentType;
    }

    /**
     * @param string $environmentType
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setEnvironmentType($environmentType)
    {
      $this->environmentType = $environmentType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\ProductMarketplaceInfo
     */
    public function getProductMarketplaceInfo()
    {
      return $this->productMarketplaceInfo;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\ProductMarketplaceInfo $productMarketplaceInfo
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setProductMarketplaceInfo($productMarketplaceInfo)
    {
      $this->productMarketplaceInfo = $productMarketplaceInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoMaxDuration()
    {
      return $this->videoMaxDuration;
    }

    /**
     * @param int $videoMaxDuration
     * @return \Google\AdsApi\AdManager\v201805\Product
     */
    public function setVideoMaxDuration($videoMaxDuration)
    {
      $this->videoMaxDuration = (!is_null($videoMaxDuration) && PHP_INT_SIZE === 4)
          ? floatval($videoMaxDuration) : $videoMaxDuration;
      return $this;
    }

}
