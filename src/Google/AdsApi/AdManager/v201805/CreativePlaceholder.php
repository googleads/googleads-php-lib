<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativePlaceholder
{

    /**
     * @var \Google\AdsApi\AdManager\v201805\Size $size
     */
    protected $size = null;

    /**
     * @var int $creativeTemplateId
     */
    protected $creativeTemplateId = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\CreativePlaceholder[] $companions
     */
    protected $companions = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\AppliedLabel[] $appliedLabels
     */
    protected $appliedLabels = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\AppliedLabel[] $effectiveAppliedLabels
     */
    protected $effectiveAppliedLabels = null;

    /**
     * @var int $expectedCreativeCount
     */
    protected $expectedCreativeCount = null;

    /**
     * @var string $creativeSizeType
     */
    protected $creativeSizeType = null;

    /**
     * @var string $targetingName
     */
    protected $targetingName = null;

    /**
     * @param \Google\AdsApi\AdManager\v201805\Size $size
     * @param int $creativeTemplateId
     * @param \Google\AdsApi\AdManager\v201805\CreativePlaceholder[] $companions
     * @param \Google\AdsApi\AdManager\v201805\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201805\AppliedLabel[] $effectiveAppliedLabels
     * @param int $expectedCreativeCount
     * @param string $creativeSizeType
     * @param string $targetingName
     */
    public function __construct($size = null, $creativeTemplateId = null, array $companions = null, array $appliedLabels = null, array $effectiveAppliedLabels = null, $expectedCreativeCount = null, $creativeSizeType = null, $targetingName = null)
    {
      $this->size = $size;
      $this->creativeTemplateId = $creativeTemplateId;
      $this->companions = $companions;
      $this->appliedLabels = $appliedLabels;
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      $this->expectedCreativeCount = $expectedCreativeCount;
      $this->creativeSizeType = $creativeSizeType;
      $this->targetingName = $targetingName;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\Size
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\Size $size
     * @return \Google\AdsApi\AdManager\v201805\CreativePlaceholder
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreativeTemplateId()
    {
      return $this->creativeTemplateId;
    }

    /**
     * @param int $creativeTemplateId
     * @return \Google\AdsApi\AdManager\v201805\CreativePlaceholder
     */
    public function setCreativeTemplateId($creativeTemplateId)
    {
      $this->creativeTemplateId = (!is_null($creativeTemplateId) && PHP_INT_SIZE === 4)
          ? floatval($creativeTemplateId) : $creativeTemplateId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\CreativePlaceholder[]
     */
    public function getCompanions()
    {
      return $this->companions;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\CreativePlaceholder[] $companions
     * @return \Google\AdsApi\AdManager\v201805\CreativePlaceholder
     */
    public function setCompanions(array $companions)
    {
      $this->companions = $companions;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\AppliedLabel[]
     */
    public function getAppliedLabels()
    {
      return $this->appliedLabels;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\AppliedLabel[] $appliedLabels
     * @return \Google\AdsApi\AdManager\v201805\CreativePlaceholder
     */
    public function setAppliedLabels(array $appliedLabels)
    {
      $this->appliedLabels = $appliedLabels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\AppliedLabel[]
     */
    public function getEffectiveAppliedLabels()
    {
      return $this->effectiveAppliedLabels;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\AppliedLabel[] $effectiveAppliedLabels
     * @return \Google\AdsApi\AdManager\v201805\CreativePlaceholder
     */
    public function setEffectiveAppliedLabels(array $effectiveAppliedLabels)
    {
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      return $this;
    }

    /**
     * @return int
     */
    public function getExpectedCreativeCount()
    {
      return $this->expectedCreativeCount;
    }

    /**
     * @param int $expectedCreativeCount
     * @return \Google\AdsApi\AdManager\v201805\CreativePlaceholder
     */
    public function setExpectedCreativeCount($expectedCreativeCount)
    {
      $this->expectedCreativeCount = $expectedCreativeCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreativeSizeType()
    {
      return $this->creativeSizeType;
    }

    /**
     * @param string $creativeSizeType
     * @return \Google\AdsApi\AdManager\v201805\CreativePlaceholder
     */
    public function setCreativeSizeType($creativeSizeType)
    {
      $this->creativeSizeType = $creativeSizeType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetingName()
    {
      return $this->targetingName;
    }

    /**
     * @param string $targetingName
     * @return \Google\AdsApi\AdManager\v201805\CreativePlaceholder
     */
    public function setTargetingName($targetingName)
    {
      $this->targetingName = $targetingName;
      return $this;
    }

}
