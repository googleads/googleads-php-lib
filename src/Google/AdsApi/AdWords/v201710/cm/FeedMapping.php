<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedMapping
{

    /**
     * @var int $feedMappingId
     */
    protected $feedMappingId = null;

    /**
     * @var int $feedId
     */
    protected $feedId = null;

    /**
     * @var int $placeholderType
     */
    protected $placeholderType = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\AttributeFieldMapping[] $attributeFieldMappings
     */
    protected $attributeFieldMappings = null;

    /**
     * @var int $criterionType
     */
    protected $criterionType = null;

    /**
     * @param int $feedMappingId
     * @param int $feedId
     * @param int $placeholderType
     * @param string $status
     * @param \Google\AdsApi\AdWords\v201710\cm\AttributeFieldMapping[] $attributeFieldMappings
     * @param int $criterionType
     */
    public function __construct($feedMappingId = null, $feedId = null, $placeholderType = null, $status = null, array $attributeFieldMappings = null, $criterionType = null)
    {
      $this->feedMappingId = $feedMappingId;
      $this->feedId = $feedId;
      $this->placeholderType = $placeholderType;
      $this->status = $status;
      $this->attributeFieldMappings = $attributeFieldMappings;
      $this->criterionType = $criterionType;
    }

    /**
     * @return int
     */
    public function getFeedMappingId()
    {
      return $this->feedMappingId;
    }

    /**
     * @param int $feedMappingId
     * @return \Google\AdsApi\AdWords\v201710\cm\FeedMapping
     */
    public function setFeedMappingId($feedMappingId)
    {
      $this->feedMappingId = (!is_null($feedMappingId) && PHP_INT_SIZE === 4)
          ? floatval($feedMappingId) : $feedMappingId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedId()
    {
      return $this->feedId;
    }

    /**
     * @param int $feedId
     * @return \Google\AdsApi\AdWords\v201710\cm\FeedMapping
     */
    public function setFeedId($feedId)
    {
      $this->feedId = (!is_null($feedId) && PHP_INT_SIZE === 4)
          ? floatval($feedId) : $feedId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPlaceholderType()
    {
      return $this->placeholderType;
    }

    /**
     * @param int $placeholderType
     * @return \Google\AdsApi\AdWords\v201710\cm\FeedMapping
     */
    public function setPlaceholderType($placeholderType)
    {
      $this->placeholderType = $placeholderType;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\FeedMapping
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\AttributeFieldMapping[]
     */
    public function getAttributeFieldMappings()
    {
      return $this->attributeFieldMappings;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\AttributeFieldMapping[] $attributeFieldMappings
     * @return \Google\AdsApi\AdWords\v201710\cm\FeedMapping
     */
    public function setAttributeFieldMappings(array $attributeFieldMappings)
    {
      $this->attributeFieldMappings = $attributeFieldMappings;
      return $this;
    }

    /**
     * @return int
     */
    public function getCriterionType()
    {
      return $this->criterionType;
    }

    /**
     * @param int $criterionType
     * @return \Google\AdsApi\AdWords\v201710\cm\FeedMapping
     */
    public function setCriterionType($criterionType)
    {
      $this->criterionType = $criterionType;
      return $this;
    }

}
