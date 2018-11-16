<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductTemplate
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
     * @var \Google\AdsApi\AdManager\v201802\DateTime $creationDateTime
     */
    protected $creationDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $nameMacro
     */
    protected $nameMacro = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $productType
     */
    protected $productType = null;

    /**
     * @var int $creatorId
     */
    protected $creatorId = null;

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
     * @var \Google\AdsApi\AdManager\v201802\CreativePlaceholder[] $creativePlaceholders
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
     * @var \Google\AdsApi\AdManager\v201802\FrequencyCap[] $frequencyCaps
     */
    protected $frequencyCaps = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\ProductSegmentation $productSegmentation
     */
    protected $productSegmentation = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\Targeting $builtInTargeting
     */
    protected $builtInTargeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\CustomizableAttributes $customizableAttributes
     */
    protected $customizableAttributes = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\BaseCustomFieldValue[] $customFieldValues
     */
    protected $customFieldValues = null;

    /**
     * @var string $environmentType
     */
    protected $environmentType = null;

    /**
     * @var int $videoMaxDuration
     */
    protected $videoMaxDuration = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\ProductTemplateMarketplaceInfo $productTemplateMarketplaceInfo
     */
    protected $productTemplateMarketplaceInfo = null;

    /**
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201802\DateTime $creationDateTime
     * @param \Google\AdsApi\AdManager\v201802\DateTime $lastModifiedDateTime
     * @param string $description
     * @param string $nameMacro
     * @param string $status
     * @param string $productType
     * @param int $creatorId
     * @param string $rateType
     * @param string $roadblockingType
     * @param string $deliveryRateType
     * @param string $creativeRotationType
     * @param string $companionDeliveryOption
     * @param \Google\AdsApi\AdManager\v201802\CreativePlaceholder[] $creativePlaceholders
     * @param string $lineItemType
     * @param int $priority
     * @param \Google\AdsApi\AdManager\v201802\FrequencyCap[] $frequencyCaps
     * @param \Google\AdsApi\AdManager\v201802\ProductSegmentation $productSegmentation
     * @param \Google\AdsApi\AdManager\v201802\Targeting $builtInTargeting
     * @param \Google\AdsApi\AdManager\v201802\CustomizableAttributes $customizableAttributes
     * @param \Google\AdsApi\AdManager\v201802\BaseCustomFieldValue[] $customFieldValues
     * @param string $environmentType
     * @param int $videoMaxDuration
     * @param \Google\AdsApi\AdManager\v201802\ProductTemplateMarketplaceInfo $productTemplateMarketplaceInfo
     */
    public function __construct($id = null, $name = null, $creationDateTime = null, $lastModifiedDateTime = null, $description = null, $nameMacro = null, $status = null, $productType = null, $creatorId = null, $rateType = null, $roadblockingType = null, $deliveryRateType = null, $creativeRotationType = null, $companionDeliveryOption = null, array $creativePlaceholders = null, $lineItemType = null, $priority = null, array $frequencyCaps = null, $productSegmentation = null, $builtInTargeting = null, $customizableAttributes = null, array $customFieldValues = null, $environmentType = null, $videoMaxDuration = null, $productTemplateMarketplaceInfo = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->creationDateTime = $creationDateTime;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->description = $description;
      $this->nameMacro = $nameMacro;
      $this->status = $status;
      $this->productType = $productType;
      $this->creatorId = $creatorId;
      $this->rateType = $rateType;
      $this->roadblockingType = $roadblockingType;
      $this->deliveryRateType = $deliveryRateType;
      $this->creativeRotationType = $creativeRotationType;
      $this->companionDeliveryOption = $companionDeliveryOption;
      $this->creativePlaceholders = $creativePlaceholders;
      $this->lineItemType = $lineItemType;
      $this->priority = $priority;
      $this->frequencyCaps = $frequencyCaps;
      $this->productSegmentation = $productSegmentation;
      $this->builtInTargeting = $builtInTargeting;
      $this->customizableAttributes = $customizableAttributes;
      $this->customFieldValues = $customFieldValues;
      $this->environmentType = $environmentType;
      $this->videoMaxDuration = $videoMaxDuration;
      $this->productTemplateMarketplaceInfo = $productTemplateMarketplaceInfo;
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
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
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
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\DateTime
     */
    public function getCreationDateTime()
    {
      return $this->creationDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $creationDateTime
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setCreationDateTime($creationDateTime)
    {
      $this->creationDateTime = $creationDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
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
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameMacro()
    {
      return $this->nameMacro;
    }

    /**
     * @param string $nameMacro
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setNameMacro($nameMacro)
    {
      $this->nameMacro = $nameMacro;
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
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
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
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setProductType($productType)
    {
      $this->productType = $productType;
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
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
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
    public function getRateType()
    {
      return $this->rateType;
    }

    /**
     * @param string $rateType
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
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
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
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
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
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
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
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
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setCompanionDeliveryOption($companionDeliveryOption)
    {
      $this->companionDeliveryOption = $companionDeliveryOption;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\CreativePlaceholder[]
     */
    public function getCreativePlaceholders()
    {
      return $this->creativePlaceholders;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\CreativePlaceholder[] $creativePlaceholders
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
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
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
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
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\FrequencyCap[]
     */
    public function getFrequencyCaps()
    {
      return $this->frequencyCaps;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\FrequencyCap[] $frequencyCaps
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setFrequencyCaps(array $frequencyCaps)
    {
      $this->frequencyCaps = $frequencyCaps;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\ProductSegmentation
     */
    public function getProductSegmentation()
    {
      return $this->productSegmentation;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\ProductSegmentation $productSegmentation
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setProductSegmentation($productSegmentation)
    {
      $this->productSegmentation = $productSegmentation;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\Targeting
     */
    public function getBuiltInTargeting()
    {
      return $this->builtInTargeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\Targeting $builtInTargeting
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setBuiltInTargeting($builtInTargeting)
    {
      $this->builtInTargeting = $builtInTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\CustomizableAttributes
     */
    public function getCustomizableAttributes()
    {
      return $this->customizableAttributes;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\CustomizableAttributes $customizableAttributes
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setCustomizableAttributes($customizableAttributes)
    {
      $this->customizableAttributes = $customizableAttributes;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\BaseCustomFieldValue[]
     */
    public function getCustomFieldValues()
    {
      return $this->customFieldValues;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\BaseCustomFieldValue[] $customFieldValues
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
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
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setEnvironmentType($environmentType)
    {
      $this->environmentType = $environmentType;
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
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setVideoMaxDuration($videoMaxDuration)
    {
      $this->videoMaxDuration = (!is_null($videoMaxDuration) && PHP_INT_SIZE === 4)
          ? floatval($videoMaxDuration) : $videoMaxDuration;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplateMarketplaceInfo
     */
    public function getProductTemplateMarketplaceInfo()
    {
      return $this->productTemplateMarketplaceInfo;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\ProductTemplateMarketplaceInfo $productTemplateMarketplaceInfo
     * @return \Google\AdsApi\AdManager\v201802\ProductTemplate
     */
    public function setProductTemplateMarketplaceInfo($productTemplateMarketplaceInfo)
    {
      $this->productTemplateMarketplaceInfo = $productTemplateMarketplaceInfo;
      return $this;
    }

}
