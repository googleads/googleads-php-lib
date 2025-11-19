<?php

namespace Google\AdsApi\AdManager\v202511;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PublisherProvidedSignalsTargeting
{

    /**
     * @var int[] $targetedTaxonomyCategoryIds
     */
    protected $targetedTaxonomyCategoryIds = null;

    /**
     * @var int[] $excludedTaxonomyCategoryIds
     */
    protected $excludedTaxonomyCategoryIds = null;

    /**
     * @param int[] $targetedTaxonomyCategoryIds
     * @param int[] $excludedTaxonomyCategoryIds
     */
    public function __construct(array $targetedTaxonomyCategoryIds = null, array $excludedTaxonomyCategoryIds = null)
    {
      $this->targetedTaxonomyCategoryIds = $targetedTaxonomyCategoryIds;
      $this->excludedTaxonomyCategoryIds = $excludedTaxonomyCategoryIds;
    }

    /**
     * @return int[]
     */
    public function getTargetedTaxonomyCategoryIds()
    {
      return $this->targetedTaxonomyCategoryIds;
    }

    /**
     * @param int[]|null $targetedTaxonomyCategoryIds
     * @return \Google\AdsApi\AdManager\v202511\PublisherProvidedSignalsTargeting
     */
    public function setTargetedTaxonomyCategoryIds(array $targetedTaxonomyCategoryIds = null)
    {
      $this->targetedTaxonomyCategoryIds = $targetedTaxonomyCategoryIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getExcludedTaxonomyCategoryIds()
    {
      return $this->excludedTaxonomyCategoryIds;
    }

    /**
     * @param int[]|null $excludedTaxonomyCategoryIds
     * @return \Google\AdsApi\AdManager\v202511\PublisherProvidedSignalsTargeting
     */
    public function setExcludedTaxonomyCategoryIds(array $excludedTaxonomyCategoryIds = null)
    {
      $this->excludedTaxonomyCategoryIds = $excludedTaxonomyCategoryIds;
      return $this;
    }

}
